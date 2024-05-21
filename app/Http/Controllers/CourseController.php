<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Repositories\ChartofAccountsRepository;
use App\Repositories\CourseFeeHeaderRepository;
use App\Repositories\CourseRepository;

class CourseController extends Controller
{
    private ChartofAccountsRepository $chartAccRepo;

    public function __construct(ChartofAccountsRepository $chartAccRepo)
    {
        $this->ChartofAccountsRepository = $chartAccRepo;
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

        return view('setup.program-setup.course-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        // $this->courseRepo->store($request->validated());
        // Session::flash('success');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $data = [
            'record' => $course,
        ];
        return view('setup.program-setup.course-setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $data = [
            'record' => $course,
        ];
        return view('setup.program-setup.course-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        return $course->delete();
    }
}
