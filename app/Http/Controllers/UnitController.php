<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Utility\MeasureUnitConstant;
use App\Http\Requests\StoreUnitRequest;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUnitRequest;
use App\Repositories\MeasureUnitRepository;

class UnitController extends Controller
{
    private StudentRepository $studentRepo;
    private MeasureUnitRepository $measureUnitRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, MeasureUnitRepository $measureUnitRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->measureUnitRepo = $measureUnitRepo;
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
            'small_unit' => MeasureUnitConstant::$SmallUnit,
        ];
        return view('setup.store-management.measure-unit.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnitRequest $request)
    {
        $this->measureUnitRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        $data = [
            'small_unit' => MeasureUnitConstant::$SmallUnit,
            'record' => $unit,
        ];
        return view('setup.store-management.measure-unit.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitRequest  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUnitRequest $request, Unit $unit)
    {
        $this->measureUnitRepo->update($unit, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        return $unit->delete();
    }
}
