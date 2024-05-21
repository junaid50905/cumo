<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ProductService;
use App\Services\YearEndCloseService;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\WarehouseRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\YearEndCloseRepository;
use App\Http\Livewire\Traits\CommonListElements;

class YearEndCloseCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private string $destroyRoute = 'yearend.destroy';

    private YearEndCloseService $service;
    private YearEndCloseRepository $repo;
    private WarehouseRepository $wareRepo;
    private CategoryRepository $categoryRepo;
    private ProductService $productService;
    protected array $addMoreItems = ['product_id', 'unit', 'counted_stock'];

    public $yearend;
    public $year;
    public $materialCollect;
    public $date;
    public $product_id;
    public $unit;
    public $counted_stock;
    public $note;

    public function boot(

        YearEndCloseService $service,
        YearEndCloseRepository $repository,
        WarehouseRepository $wareRepo,
        CategoryRepository $categoryRepo,
        ProductService $productService,

    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->wareRepo = $wareRepo;
        $this->categoryRepo = $categoryRepo;
        $this->productService = $productService;


        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }


    public function mount()
    {
        if ($this->year) {
            $this->year = $this->repo->getRelatedData($this->year, ['details']);
            $this->warehouse_id = $this->year->warehouse_id;
            $this->date = $this->year->date;
            $this->note = $this->year->note;
            $this->inputs = $this->year->details->toArray();

            foreach ($this->year->details as $key => $detail) {
                $this->product_id[$key] = $detail->product_id;
                $this->unit[$key] = $detail->unit;
                $this->counted_stock[$key] = $detail->counted_stock;
            }
        }
    }


    protected array $rules =  [
        'warehouse_id'       => 'nullable',
        'date'               => 'nullable',
        'note'               => 'nullable',

        'product_id.*'       => 'nullable',
        'unit.*'             => 'nullable',
        'counted_stock.*'    => 'nullable',

        
    ];


    public function update()
    {
        $this->service->update($this->year, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('yearend.create');
    }


    public function render()
    {

        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
            'warehouse' => $this->wareRepo->getData(),
            'products' => $this->productService->getFormattedDataAsOptGroup(),
        ];
        return view('livewire.year-end-close-create', $data);
    }
}
