<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait OnlyDelete
{
    public function delete($id): void
    {
        $data = $this->model::findOrFail($id);
        $data->delete();
    }
}
