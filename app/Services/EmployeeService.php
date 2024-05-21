<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\EmployeeRepository;

class EmployeeService
{
    private EmployeeRepository $repo;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$employeeData, $data] = $this->collectEmployee($validated);
            $this->repo->store($employeeData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectEmployee(array $validated)
    {
        [$employee, $data] = extractNecessaryFieldsFromData($validated, [
            'name'
        ]);

        return [$employee, $data];
    }

    public function getFormattedDataAsOptGroup(): array
    {
        $courses = $this->repo->getEmployeesWithSpecifyingRelation();
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
            [$courseData, $data] = $this->collectEmployee($validated);
            $course = $this->repo->update($course, $courseData);
            $course->details()->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
