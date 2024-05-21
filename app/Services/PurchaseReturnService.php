<?php

namespace App\Services;

use App\Repositories\PurchaseReturnRepository;
use App\Traits\CommonServiceElements;

class AppointmentService
{
    use CommonServiceElements;

    private PurchaseReturnRepository $repo;

    public function __construct(PurchaseReturnRepository $repo)
    {
        $this->repo = $repo;
    }
}
