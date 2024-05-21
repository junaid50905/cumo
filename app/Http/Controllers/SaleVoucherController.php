<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleVoucherRequest;
use App\Models\Income;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\IncomeRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\WarehouseRepository;
use App\Services\SaleVoucherService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class SaleVoucherController extends Controller
{
    private ProjectRepository $projectRepo;
    private CustomerRepository $customerRepo;
    private WarehouseRepository $warehouseRepo;
    private CategoryRepository $categoryRepo;
    private ProductRepository $productRepo;
    private SaleVoucherService $service;
    private IncomeRepository $repo;

    public function __construct(
        ProjectRepository $projectRepository,
        CustomerRepository $customerRepository,
        WarehouseRepository $warehouseRepository,
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        SaleVoucherService $service,
        IncomeRepository $repo,
    ) {
        $this->projectRepo  = $projectRepository;
        $this->customerRepo = $customerRepository;
        $this->warehouseRepo = $warehouseRepository;
        $this->categoryRepo = $categoryRepository;
        $this->productRepo = $productRepository;
        $this->service = $service;
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('accounting.income.sale_voucher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SaleVoucherRequest $request
     *
     * @return RedirectResponse
     */
    public function store(SaleVoucherRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Income $sale_voucher)
    {
        $data = [
            'record' => $sale_voucher,
        ];

        return view('accounting.income.sale_voucher_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Application|Factory|View
     */
    public function edit(Income $sale_voucher): View|Factory|Application
    {
        $data = [
            'record' => $sale_voucher,
        ];

        return view('accounting.income.sale_voucher_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return RedirectResponse
     */
    public function update(SaleVoucherRequest $request, $id): RedirectResponse
    {
        $this->service->update($id, $request->validated());

        Session::flash('success');
        return redirect()->route('sale-voucher.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return Income::find($id)->delete();
    }
}
