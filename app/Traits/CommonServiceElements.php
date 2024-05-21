<?php

namespace App\Traits;

trait CommonServiceElements
{
    public function getListData($perPage = false, $search = false)
    {
        $perPage = $perPage ?: dataPerPage();
        return $this->repo->getListData($perPage, $search);
    }
}
