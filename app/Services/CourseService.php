<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\CourseRepository;

class CourseService
{
    private CourseRepository $repo;

    public function __construct(CourseRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$courseData, $data] = $this->collectCourse($validated);
            $course = $this->repo->store($courseData);
            $courseDetailsInfos = $this->collectCourseDetailsInfos($data);
            $course->details()->createMany($courseDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
    private function collectCourse(array $validated)
    {
        [$course, $data] = extractNecessaryFieldsFromData($validated, [
            'name', 'duration', 'cash_account_id', 'description'
        ]);

        $course['created_by'] = auth()->id();

        return [$course, $data];
    }

    private function collectCourseDetailsInfos(mixed $data): array
    {
        [$prescriptionDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['fee_heading', 'account_id', 'amount']);
        for ($i = 0; $i < count($prescriptionDetailsInfos['fee_heading']); $i++) {
            $custom[$i] = [
                'fee_heading' => $prescriptionDetailsInfos['fee_heading'][$i],
                'account_id' => $prescriptionDetailsInfos['account_id'][$i],
                'amount' => $prescriptionDetailsInfos['amount'][$i]
            ];
        }
        return $custom ?? [];
    }

    public function getFormattedDataAsOptGroup(): array
    {
        $courses = $this->repo->getCoursesWithSpecifyingRelation();
        return $this->formattedCoursesAsOptGroup($courses);
    }


    private function formattedCoursesAsOptGroup($courses): array
    {
        foreach ($courses as $key => $course) {
            if (!isset($custom[$course->parent_course_id])) {
                $custom[$course->parent_course_id] = [
                    'id'       => $course->parent_course_id,
                    'name'    => $course->parentCourse->name,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $course->id,
                'name' => $course->name,
            ];

            $custom[$course->parent_course_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }

    public function update($course, array $validated)
    {
        try {
            DB::beginTransaction();
            [$courseData, $data] = $this->collectCourse($validated);
            $course = $this->repo->update($course, $courseData);
            $course->details()->delete();
            $courseDataDetailsInfos = $this->collectCourseDetailsInfos($data);
            $course->details()->createMany($courseDataDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
