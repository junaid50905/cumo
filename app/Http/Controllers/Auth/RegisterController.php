<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Repositories\DepartmentRepository;
use App\Repositories\DesignationRepository;
use App\Utility\ProjectConstants;

class RegisterController extends Controller
{
    private DepartmentRepository $departmentRepo;
    private DesignationRepository $designationRepo;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default, this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DepartmentRepository $departmentRepo, DesignationRepository $designationRepo)
    {
        $this->middleware('guest');
        $this->departmentRepo = $departmentRepo;
        $this->designationRepo = $designationRepo;
    }


    public function showRegistrationForm()
    {
        $data = [
            'departments' => $this->departmentRepo->getAllDepartment(),
            'designations' => $this->designationRepo->getAllDesignation(),
            'userTypes' => ProjectConstants::$userTypes,
        ];

        return view('auth.register', $data);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:20', 'confirmed'],
            'department' => ['required', 'string'],
            'designation' => ['required', 'string'],
            'user_type' => ['required', 'string'],
            'avatar' => ['required', 'image' ,'mimes:jpg,jpeg,png','max:1024'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data): User
    {
        $lastUserId = User::latest()->value('user_id');

        if($lastUserId){
            $lastUserId++;
            $lastUserId = str_pad($lastUserId, 6, '0', STR_PAD_LEFT);
        }else {
            $lastUserId = 1;
            $lastUserId = str_pad($lastUserId, 6, '0', STR_PAD_LEFT);
        }

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $originalName = $avatar->getClientOriginalName();
            $cleanedName = str_replace(' ', '-', strtolower($originalName));
            $avatarName = time() . '-' . $cleanedName;
            $avatarPath = public_path('/images/users/');
            $avatar->move($avatarPath, $avatarName);
        }

        $userData = [
            'user_id' => $lastUserId,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'department_id' => $data['department'],
            'designation_id' => $data['designation'],
            'type' => $data['user_type'],
            'avatar' => isset($avatarName) ? "/images/users/" . $avatarName : '',
        ];
        
        // dd($userData);
        
        return User::create($userData);
    }
}
