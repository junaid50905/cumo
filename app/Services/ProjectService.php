<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    private ProjectRepository $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }
}
