<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\JobContactRepository;

class JobContactService
{
    private JobContactRepository $jobContactRepo;

    public function __construct(JobContactRepository $jobContactRepo)
    {
        $this->repo = $jobContactRepo;
    }

    public function store(array $validated){
        try{
            DB::beginTransaction();
            [$jobContact, $data] = $this->collectJobContact($validated);
            $jobContact = $this->repo->store($jobContact);
            
            $jobContactDetailsInfo = $this->collectJobConfirmationDetails($data);
            $jobContact->details()->createMany($jobContactDetailsInfo);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectJobContact(array $validated){
       
        [$jobContact, $data] = extractNecessaryFieldsFromData($validated, [
            'job_title','department','applicant_name','workStation','start_date','log'
        ]);

        $jobContact['created_by'] = auth()->id();
        return [$jobContact, $data];
    }

    private function collectJobConfirmationDetails(mixed $data){
        [$jobContactDetailsInfo,$data] = extractNecessaryFieldsFromData($data,['basic_salary', 'house_allowence', 'medical_allowance','total']);
        for($i=0; $i<count($jobContactDetailsInfo['basic_salary']);$i++){
            $custom[$i] =[
                'basic_salary' => $jobContactDetailsInfo['basic_salary'][$i],
                'house_allowence' => $jobContactDetailsInfo['house_allowence'][$i],
                'medical_allowance' => $jobContactDetailsInfo['medical_allowance'][$i],
                'total' => $jobContactDetailsInfo['total'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($jobContact, array $validated)
    {

        try {
            DB::beginTransaction();
            [$jobContactData, $data] = $this->collectJobContact($validated);
            $jobContactData = $this->repo->update($jobContact, $jobContactData);
            $jobContactData->details()->delete();
            $jobContactDetailsInfo = $this->collectJobConfirmationDetails($data);

            $jobContactData->details()->createMany($jobContactDetailsInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
