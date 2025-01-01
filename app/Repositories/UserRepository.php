<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    protected string $model = User::class;

    public function getSpecificTypeUser(string $type)
    {
        return $this->model::whereType($type)->get();
    }

    public function getAllUser()
    {
        $users = $this->model::where('status', 1)->get();

        $userData = $users->map(function ($user) {
            return [
                "id"            => $user->id,
                "name"          => $user->user_id.'-'.$user->name.' ('.($user->designation->name ?? 'Not Found').')',
                "department_id" => $user->department_id,
                "designation_id" => $user->designation_id,
            ];
        });

        return $userData;
    }

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }
}
