<?php

namespace App\Http\Controllers;

use App\Models\YearEndClose;
use App\Repositories\ProductRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CategoryRepository;
use App\Repositories\WarehouseRepository;
use App\Repositories\YearEndCloseRepository;
use App\Http\Requests\StoreYearEndCloseRequest;
use App\Http\Requests\UpdateYearEndCloseRequest;

class YearEndCloseController extends Controller
{

    private YearEndCloseRepository $yearEndCloseRepo;
    private WarehouseRepository $warehouseRepo;
    private CategoryRepository $categoryRepo;
    private ProductRepository $productRepo;

    
    public function __construct(
    YearEndCloseRepository $yearEndCloseRepo,
    WarehouseRepository $warehouseRepo,
    CategoryRepository $categoryRepo,
    ProductRepository $productRepo
    )
    {
        $this->yearEndCloseRepo = $yearEndCloseRepo;
        $this->warehouseRepo = $warehouseRepo;
        $this->categoryRepo = $categoryRepo;
        $this->productRepo = $productRepo;
        
    }
    
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
        return view('setup.year-end-close.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreYearEndCloseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreYearEndCloseRequest $request)
    {
        //  $this->yearEndCloseRepo->store($request->validated());
        // Session::flash('success');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function show(YearEndClose $yearEndClose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function edit(YearEndClose $yearend)
    {
        $data = [
            'record' => $yearend,
        ];
        return view('setup.year-end-close.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateYearEndCloseRequest  $request
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateYearEndCloseRequest $request, YearEndClose $yearEndClose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YearEndClose  $yearEndClose
     * @return \Illuminate\Http\Response
     */
    public function destroy(YearEndClose $yearend)
    {
        return $yearend->delete();
    }
}
