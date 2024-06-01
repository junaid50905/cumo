<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use App\Repositories\AppointmentRepository;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Repositories\CareNeedPartOneRepository;
use App\Services\CareNeedPartOneServices;
use App\Utility\ProjectConstants;

class CareNeedPartOne extends Component
{
    // Use protected properties instead of public
    protected AppointmentRepository $appointmentRepository;
    protected UserRepository $userRepo;
    protected CareNeedPartOneRepository $careNeedpartOneRepo;
    protected CareNeedPartOneServices $service;
    protected StudentRepository $studentRepo;

    public $currentTab = 0;
    public $formData = [
        'firstName' => '',
        'lastName' => '',
        'email' => '',
        'password' => '',
        'address' => '',
        'city' => '',
        'country' => '',
        'postalCode' => '',
    ];

    protected $rules = [
        'formData.firstName' => 'required|string',
        'formData.lastName' => 'required|string',
        'formData.email' => 'required|email',
        'formData.password' => 'required|string|min=6',
        'formData.address' => 'required|string',
        'formData.city' => 'required|string',
        'formData.country' => 'required|string',
        'formData.postalCode' => 'required|string',
    ];


    // Use mount method to initialize the properties
    public function mount(
        AppointmentRepository $appointmentRepository,
        CareNeedPartOneServices $service,
        StudentRepository $studentRepo,
        UserRepository $userRepository,
        CareNeedPartOneRepository $careNeedpartOneRepo
    ) {
        $this->appointmentRepository = $appointmentRepository;
        $this->userRepo = $userRepository;
        $this->careNeedpartOneRepo = $careNeedpartOneRepo;
        $this->service = $service;
        $this->studentRepo = $studentRepo;
    }
   
    public function nextTab()
    {
        // dd('prevTab');
        $this->validate();

        if ($this->currentTab < 3) {
            $this->currentTab++;
            // Redirect to the next tab URL when moving to the next tab
            $this->redirect(route('tab-form') . '#tab' . ($this->currentTab + 1));
        }
    }

    public function prevTab()
    {
        dd('prevTab');
        if ($this->currentTab > 0) {
            $this->currentTab--;
        }
    }

    public function submit()
    {
        dd('submit');
        $this->validate();
        // Handle final submission, e.g., save to database
    }

    public function updatedCurrentTab($value)
    {
        // Redirect to the next tab URL when the tab is changed
        $this->redirect(route('tab-form') . '#tab' . ($this->currentTab + 1));
    }

    public function render()
    {
        // $incomeType = 1;
        // $paymentStatus = 5;
        // $intervieweeData = $this->appointmentRepository->getLastAppointmentForPaymentStatusIncomeType($paymentStatus, $incomeType);

        // $data = [
        //     'gender' => ProjectConstants::$genders,
        //     'designation' => ProjectConstants::$designation,
        //     'learnAbout' => ProjectConstants::$learnAbout,
        //     'eduClass' => ProjectConstants::$class,
        //     'department' => ProjectConstants::$department,
        //     'assessorName' => $this->userRepo->getSpecificTypeUser('teacher'),
        //     'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        //     'students' => $this->studentRepo->getData(),
        //     'intervieweeData' => $intervieweeData,
        // ];

        // return view('livewire.care-needs.care-need-part-one', $data);
        return view('livewire.care-needs.care-need-part-one');
    }
}
