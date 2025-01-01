<?php

namespace App\Repositories\Setup;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;

use App\Models\Setup\TableOfContent;

class SetupTableOfContentRepository extends BaseRepository
{
    protected string $model = TableOfContent::class;
   
    public function getHierarchicalData()
    {
        $allData = $this->model::with('children.children.children.children.children')
                                ->whereNull('parent_id')
                                ->get();
        // dd($allData);
         return $allData;
    }
    
    private function generateLinkCodeWithId($items, $parentCode = '')
    {
        $result = [];

        foreach ($items as $item) {
            $currentCode = $parentCode ? $parentCode . '.' . $item->link_code : $item->link_code;
            $result[] = $currentCode . '[' . $item->id . ']';
        }

        return $result;
    }

    public function getTableOfContentData()
    {
        $rootItems = $this->model::all();
        $formattedData = $this->generateLinkCodeWithId($rootItems);
        // dd($allData);
         return $formattedData;
    }

    public function disabledSelectedItem($id)
    {
        // dd($id);
        try {
            $item =  $this->model::findOrFail($id);
            $item->status = !$item->status; 
            $item->save();
            return 'success';
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function create(array $data): string
    {
        try {
            $this->model::create($data);
            return 'Data inserted successfully.';
        } catch (\Throwable $th) {
            return 'Failed to insert data: ' . $th->getMessage();
        }
    }
   
}
