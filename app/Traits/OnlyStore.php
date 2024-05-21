<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait OnlyStore
{
    public function store(array $data): Model
    {
        $obj = new $this->model;

        foreach ($data as $key => $val) {
            $obj->{$key} = $val;
        }

        $obj->save();

        return $obj;
    }
}
