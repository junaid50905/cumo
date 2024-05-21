<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\StudentService;
use App\Models\StudentParentDetail;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Repositories\StudentRepository;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;

class StudentCreate extends Component
{
    //    use WithPagination;

    public string $code = '';
    public string $name = '';
    public string $gender = '';
    public string $dob = '';
    public string $date_of_assessment = '';
    public string $blood_group = '';
    public string $suborno_card_no = '';
    public string $diagnosis = '';
    public string $nid = '';
    public string $photo = '';
    public string $present_address = '';
    public string $permanent_address = '';
    public string $approved_for_observation = '';
    public string $father_name = '';
    public string $father_number = '';
    public string $father_profession = '';
    public string $father_email = '';
    public string $father_doc = '';
    public string $father_fb_link = '';
    public string $mother_name = '';
    public string $mother_number = '';
    public string $mother_profession = '';
    public string $mother_email = '';
    public string $mother_doc = '';
    public string $mother_fb_link = '';
    public string $mode = '';
    public $recordId = 0;

    private StudentService $service;
    private StudentRepository $repo;

    protected $listeners = ['show-appointment' => 'showAppointment'];

    protected array $rules = [
        'code'   => 'required|min:2',
        'name'   => 'required|min:3',
        'gender' => 'nullable',
        'dob'    => 'nullable|string',
        'date_of_assessment' => 'nullable',
        'blood_group' => 'nullable',
        'suborno_card_no' => 'nullable',
        'diagnosis' => 'nullable',
        'nid'    => 'nullable',
        'photo' => 'nullable',
        'present_address' => 'nullable',
        'permanent_address' => 'nullable',
        'approved_for_observation' => 'nullable',
        'father_name' => 'nullable',
        'father_number' => 'nullable',
        'father_profession' => 'nullable',
        'father_email' => 'nullable',
        'father_doc' => 'nullable',
        'father_fb_link' => 'nullable',
        'mother_name' => 'nullable',
        'mother_number' => 'nullable',
        'mother_profession' => 'nullable',
        'mother_email' => 'nullable',
        'mother_doc' => 'nullable',
        'mother_fb_link' => 'nullable',
    ];

    public function showAppointment($studentInfos = [], $mode = 'create', $recordId = 0)
    {
        if (!count($studentInfos)) {
            $class = new \ReflectionClass($this);
            foreach ($class->getProperties() as $property) {
                if ($property->isPublic() && $property->class === get_class($this)) {
                    $this->{$property->name} = '';
                }
            }
        } else {
            foreach ($studentInfos as $key => $val) {
                $this->{$key} = $val;
            }
        }


        $this->mode = $mode;
        $this->recordId = $recordId;
    }

    /**
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function boot(StudentService $service, StudentRepository $repo)
    {
        $this->service = $service;
        $this->repo    = $repo;
    }

    public function store()
    {
        $this->service->store($this->validate());
        $this->dispatchBrowserEvent('notify');
        // $this->redirectRoute('stock-assign.create');
    }

    public function update($studentId)
    {
        $this->service->update(Student::find($studentId), $this->validate());

        $this->dispatchBrowserEvent('notify');
        $this->dispatchBrowserEvent("close-modal");
        $this->emit('rerender-appointment-list');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.student-create');
    }
}
