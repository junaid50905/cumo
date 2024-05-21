<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.other-settings.user.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $this->userRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }


/**
    * @param  \App\Models\Doctor  $doctor
    * @return \Illuminate\Http\Response
    */
   public function destroy(User $user)
   {
       return $user->delete();
   }
    public function specificUserType(Request $request): Collection
    {
        if (!$request->type) return Collection::empty();

        return $this->repo->getSpecificTypeUser($request->type);
    }
}
