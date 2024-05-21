<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Repositories\ProjectSetupRepository;

class ProjectController extends Controller
{
    private StudentRepository $studentRepo;
    private ProjectSetupRepository $projectSetupRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, ProjectSetupRepository $projectSetupRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->projectSetupRepo = $projectSetupRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [

            'parent_id' => $this->projectSetupRepo->getData(),
        ];
        return view('setup.project-setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $this->projectSetupRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $data = [
            'parent_id' => $this->projectSetupRepo->getData(),
            'record' => $project,
        ];
        return view('setup.project-setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $data = [
            'parent_id' => $this->projectSetupRepo->getData(),
            'record' => $project,
        ];
        return view('setup.project-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $this->projectSetupRepo->update($project, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        return $project->delete();
    }
}
