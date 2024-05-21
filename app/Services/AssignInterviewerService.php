<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\AssignInterviewerRepository;

class AssignInterviewerService
{
    private AssignInterviewerRepository $repo;

    public function __construct(AssignInterviewerRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$assignInterviewer, $data] = $this->collectAssignInterviewer($validated);
            $assignInterviewerData = $this->repo->store($assignInterviewer);
            $assignInterviewerDetailsInfos = $this->collectAssignInterviewerDetailsInfos($data);
            $assignInterviewerData->details()->createMany($assignInterviewerDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectAssignInterviewer(array $validated)

    {
        [$assignInterviewer, $data] = extractNecessaryFieldsFromData($validated, [
            'job_title', 'dept_id'
        ]);
        $assignInterviewer['created_by'] = auth()->id();

        return [$assignInterviewer, $data];
    }

    private function collectAssignInterviewerDetailsInfos(mixed $data): array
    {
        [$stockReceiveDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['name', 'date', 'time','interviewer']);
        for ($i = 0; $i < count($stockReceiveDetailInfos['name']); $i++) {
            $custom[$i] = [
                'name' => $stockReceiveDetailInfos['name'][$i],
                'date' => $stockReceiveDetailInfos['date'][$i],
                'time' => $stockReceiveDetailInfos['time'][$i],
                'interviewer' => $stockReceiveDetailInfos['interviewer'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($assignInterviewer, array $validated)
    {
        try {
            DB::beginTransaction();
            [$assignInterviewerData, $data] = $this->collectAssignInterviewer($validated);
            $assignInterviewerData = $this->repo->update($assignInterviewer, $assignInterviewerData);
            $assignInterviewerData->details()->delete();
            $assignInterviewerDetailsInfos = $this->collectAssignInterviewerDetailsInfos($data);

            $assignInterviewerData->details()->createMany($assignInterviewerDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
