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
        $users = $this->model::all();

        $userData = $users->map(function ($user) {
            return [
                "id"            => $user->id,
                "name"          => $user->user_id.'-'.$user->name.' ('.($user->designation->name ?? 'Not Found').')'
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
