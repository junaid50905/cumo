<?php

namespace App\Repositories;

use App\Traits\OnlyStore;
use App\Traits\OnlyDelete;
use App\Traits\OnlyUpdate;
use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    use OnlyStore, OnlyUpdate, OnlyDelete;

    public function getData($ids = false, array $columns = [])
    {
        if ($ids) {
            return $this->model::find($ids);
        }

        return $this->model::all();
    }

    public function getRelatedData(Model $obj, $relations)
    {
        return $this->model::with($relations)->whereId($obj->id)->first();
    }

    public function toggleColumn($objOrId, string $column): void
    {
        $obj = $objOrId instanceof Model ? $objOrId : $this->model::find($objOrId);

        $obj->{$column} = !$obj->{$column};
        $obj->save();
    }
}
