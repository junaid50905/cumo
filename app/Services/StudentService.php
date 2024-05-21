<?php

namespace App\Services;

use App\Models\Student;
use App\Repositories\StudentRepository;
use App\Repositories\StudentParentDetailRepository;

class StudentService
{
    private StudentRepository $repo;
    private StudentParentDetailRepository $parentDetailRepo;

    public function __construct(StudentRepository $repo, StudentParentDetailRepository $parentDetailRepository)
    {
        $this->repo = $repo;
        $this->parentDetailRepo = $parentDetailRepository;
    }

    public function store(array $validate): void
    {
        [$studentInfo, $parentInfo] = $this->segregateStudentAndParentInfo($validate);

        /** @var Student $student */
        $student = $this->repo->store($studentInfo);

        $student->parentDetail()->create($parentInfo);
    }

    public function update(Student $student, array $validate)
    {
        [$studentInfo, $parentInfo] = $this->segregateStudentAndParentInfo($validate);

        /** @var Student $student */
        $student = $this->repo->update($student, $studentInfo);
        $student->parentDetail()->update($parentInfo);
    }

    private function segregateStudentAndParentInfo(array $validate): array
    {
        $parentDetail = [];
        foreach ($validate as $key => $item) {
            if (preg_match("/(father|mother)_*/", $key)) {
                $parentDetail[$key] = $item;
                unset($validate[$key]);
            }
        }
        return [$validate, $parentDetail];
    }
}
