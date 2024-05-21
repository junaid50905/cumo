<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\UserRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\StudentRepository;
use App\Repositories\AdmissionRepository;

class AdmissionAddStudentCreate extends Component
{

    private UserRepository $userRepo;
    private DoctorRepository $doctorRepo;
    private StudentRepository $studentRepo;
    private AdmissionRepository $admissionRepo;

    public string $date = '';
    public string $teacher_id = '';
    public string $candidate_id = '';
    public string $doctor_id = '';

    public function boot(UserRepository $userRepo, StudentRepository $studentRepo, DoctorRepository $doctorRepo, AdmissionRepository $admissionRepo)
    {
        $this->userRepo = $userRepo;
        $this->doctorRepo = $doctorRepo;
        $this->studentRepo = $studentRepo;
        $this->AdmissionRepository = $admissionRepo;
    }

    protected array $rules = [
        'date' => 'required',
        'teacher_id' => 'required',
        'candidate_id' => 'required',
        'student_id' => 'required',
        'student_name' => 'required',
        'dob' => 'required',
        'date_of_assesment' => 'required',
        'student_nid' => 'required',
        'student_present_address' => 'required',
        'student_parmanent_address' => 'required',
        'gender' => 'required',
        'blood_group' => 'required',
        'suborno_card_no' => 'required',
        'diagnosis' => 'required',
        'student_photo' => 'required',
        'father_name' => 'required',
        'father_number' => 'required',
        'father_profession' => 'required',
        'father_email' => 'required',
        'father_doc' => 'required',
        'father_fb_link' => 'required',
        'mother_name' => 'required',
        'mother_number' => 'required',
        'mother_profession' => 'required',
        'mother_email' => 'required',
        'mother_doc' => 'required',
        'mother_fb_link' => 'required',
        'work_interest' => 'required',
        'disability' => 'required',
        'transport' => 'required',
        'device_name' => 'required',
        'prefer_work_area' => 'required',
        'local_guardian' => 'required',
        'position' => 'required',
        'duration' => 'required',
        'skill_of_work' => 'required',
        'reasonable_accommodation' => 'required',
        'device_use' => 'required',
        'qualification' => 'required',
        'training' => 'required',
        'organization' => 'required',
        'phone_number' => 'required',
        'cause_of_leave' => 'required',




    ];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->referralRepo->store($this->validate());
        $this->dispatchBrowserEvent('notifyr');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "AdmissionForm"]);
    }

    public function render()
    {
        dd("Livewire: Admission Add Student Create File");
        $data = [
            'date' => $this->userRepo->getSpecificTypeUser('teacher'),
            'teacher_id' => $this->doctorRepo->getData(),
            'candidate_id' => $this->studentRepo->getData(),
            'student_id' => $this->studentRepo->getData(),
            'student_name' => $this->studentRepo->getData(),
            'dob' => $this->studentRepo->getData(),
            'date_of_assesment' => $this->studentRepo->getData(),
            'student_nid' => $this->studentRepo->getData(),
            'student_present_address' => $this->studentRepo->getData(),
            'student_parmanent_address' => $this->studentRepo->getData(),
            'gender' => $this->studentRepo->getData(),
            'blood_group' => $this->studentRepo->getData(),
            'suborno_card_no' => $this->studentRepo->getData(),
            'diagnosis' => $this->studentRepo->getData(),
            'student_photo' => $this->studentRepo->getData(),
            'father_name' => $this->studentRepo->getData(),
            'father_number' => $this->studentRepo->getData(),
            'father_profession' => $this->studentRepo->getData(),
            'father_email' => $this->studentRepo->getData(),
            'father_doc' => $this->studentRepo->getData(),
            'father_fb_link' => $this->studentRepo->getData(),
            'mother_name' => $this->studentRepo->getData(),
            'mother_number' => $this->studentRepo->getData(),
            'mother_profession' => $this->studentRepo->getData(),
            'mother_email' => $this->studentRepo->getData(),
            'mother_doc' => $this->studentRepo->getData(),
            'mother_fb_link' => $this->studentRepo->getData(),
            'work_interest' => $this->studentRepo->getData(),
            'disability' => $this->studentRepo->getData(),
            'transport' => $this->studentRepo->getData(),
            'device_name' => $this->studentRepo->getData(),
            'prefer_work_area' => $this->studentRepo->getData(),
            'local_guardian' => $this->studentRepo->getData(),
            'position' => $this->studentRepo->getData(),
            'duration' => $this->studentRepo->getData(),
            'skill_of_work' => $this->studentRepo->getData(),
            'reasonable_accommodation' => $this->studentRepo->getData(),
            'device_use' => $this->studentRepo->getData(),
            'qualification' => $this->studentRepo->getData(),
            'training' => $this->studentRepo->getData(),
            'organization' => $this->studentRepo->getData(),
            'phone_number' => $this->studentRepo->getData(),
            'cause_of_leave' => $this->studentRepo->getData(),


        ];
        // return view('livewire.admission-add-student-create');
    }
}
