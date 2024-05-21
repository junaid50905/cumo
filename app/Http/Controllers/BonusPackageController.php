<?php

namespace App\Http\Controllers;


use App\Models\BonusPackage;
use App\Services\BonusPackageService;
use App\Utility\BonusPackageConstant;
use Illuminate\Support\Facades\Session;
use App\Repositories\BonusPackageRepository;
use App\Http\Requests\StoreBonusPackageRequest;
use App\Http\Requests\UpdateBonusPackageRequest;

class BonusPackageController extends Controller
{
    public function __construct(
        private BonusPackageService $service
    ) {
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
            'salHeadId' => BonusPackageConstant::$salHeadId,
            'curncId' => BonusPackageConstant::$cruncId,
        ];
        return view('setup.bonus-package.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBonusPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonusPackageRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success', 'Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function show(BonusPackage $bonusPackage)
    {
        $data = [
            'salHeadId' => BonusPackageConstant::$salHeadId,
            'curncId' => BonusPackageConstant::$cruncId,
            'record' => $bonusPackage,
        ];
        return view('setup.bonus-package.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(BonusPackage $bonusPackage)
    {
        $data = [
            'salHeadId' => BonusPackageConstant::$salHeadId,
            'curncId' => BonusPackageConstant::$cruncId,
            'record' => $bonusPackage,
        ];
        return view('setup.bonus-package.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreBonusPackageRequest  $request
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBonusPackageRequest $request, BonusPackage $bonusPackage)
    {
        $this->service->update($bonusPackage, $request->validated());
        Session::flash('success', 'Update');
        return redirect()->route('bonus-package.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BonusPackage  $bonusPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonusPackage $bonusPackage)
    {
        return $bonusPackage->delete();
    }
}
