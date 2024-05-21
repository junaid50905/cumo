<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;

class ProductService
{
    private ProductRepository $repo;

    public function __construct(ProductRepository $repository)
    {
        $this->repo = $repository;
    }
    public function store(array $validated)
    {
        $date = Carbon::now()->format('d-m-Y');
        try {
            DB::beginTransaction();
            [$productData, $data] = $this->collectProduct($validated);
            $product = $this->repo->store($productData);
            $product->date = $date;
            $product->save();
            $productDetailsInfos = $this->collectProductDetailsInfos($data);
            $product->details()->createMany($productDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectProduct(array $validated)
    {
        [$product, $data] = extractNecessaryFieldsFromData($validated, [
            'name', 'code', 'type', 'description', 'category_id', 'unit_id',
            'unit_id', 'image', 'selling_price', 'cost_price', 'making_cost', 'expiry_alert', 'current_price', 'is_sale_item', 'is_purchase_item', 'is_expirable_item', 'is_active', 'sale_price_in_percent', 'reorder_quantity'
        ]);

        $product['created_by'] = auth()->id();

        return [$product, $data];
    }

    private function collectProductDetailsInfos(mixed $data): array
    {
        [$productDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'measure', 'quantity', 'price', 'cost']);
        for ($i = 0; $i < count($productDetailsInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $productDetailsInfos['product_id'][$i],
                'measure' => $productDetailsInfos['measure'][$i],
                'quantity' => $productDetailsInfos['quantity'][$i],
                'price' => $productDetailsInfos['price'][$i],
                'cost' => $productDetailsInfos['cost'][$i],
            ];
        }
        return $custom ?? [];
    }


    public function getFormattedDataAsOptGroup(): array
    {
        $records = $this->repo->getWithSpecifyingRelation();
        return $this->formattedCoursesAsOptGroup($records);
    }

    private function formattedCoursesAsOptGroup($records): array
    {
        foreach ($records as $key => $record) {
            if (!isset($custom[$record->category_id])) {
                $custom[$record->category_id] = [
                    'id'       => $record->category_id,
                    'name'    => $record->category->name,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $record->id,
                'name' => $record->name,
            ];

            $custom[$record->category_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }


    public function update($product, array $validated)
    {

        try {
            DB::beginTransaction();
            [$productData, $data] = $this->collectProduct($validated);
            $product = $this->repo->update($product, $productData);
            $product->details()?->delete();
            $productDetailsInfos = $this->collectProductDetailsInfos($data);

            $product->details()->createMany($productDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
