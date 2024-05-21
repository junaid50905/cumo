<?php

namespace App\Repositories;

use App\Models\Referral;

class ReferralRepository extends BaseRepository
{
    protected string $model = Referral::class;

    public function getListData(mixed $perPage, mixed $search)
    {
        return $this->model::with('student', 'teacher', 'doctor')->when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('nid', 'like', "%$search%");
        })->latest()->paginate($perPage);

        /*return DB::table((new Student())->getTable())
                 ->when($search, function($query) use ($search)
                 {
                     $query->where('name', 'like', "%$search%")
                           ->orWhere('nid', 'like', "%$search%");
                 })
                 ->latest()
                 ->paginate($perPage);*/
    }
}
