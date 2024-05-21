<?php

namespace App\Repositories;

use App\Models\SendMail;
use App\Models\SendMailDetails;

class SendMailRepository extends BaseRepository
{
    protected string $model = SendMail::class;
    
    public function getListData($perPage, $search)
    {
        return $this->model::with('details')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}