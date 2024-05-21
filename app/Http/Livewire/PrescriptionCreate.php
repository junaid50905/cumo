<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\PrescriptionService;
use App\Repositories\StudentRepository;
use App\Http\Livewire\Traits\CommonAddMore;
use App\Repositories\PrescriptionRepository;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\DoctorRepository;

class PrescriptionCreate extends Component
{
    use WithPagination, CommonListElements, CommonAddMore;
    private PrescriptionService $service;
    private PrescriptionRepository $repo;
    private StudentRepository $studentRepo;
    private DoctorRepository $doctorRepo;
    protected array $addMoreItems = ['medicine_admin', 'medicine_dose', 'medicine_route'];

    public function boot(

        PrescriptionService $service,
        PrescriptionRepository $repository,
        StudentRepository $studentRepo,
        DoctorRepository $doctorRepo,
    ) {
        $this->inputs[] = $this->numberOfItems;
        $this->service = $service;
        $this->repo = $repository;
        $this->studentRepo = $studentRepo;
        $this->doctorRepo = $doctorRepo;
        $targetKey = count($this->inputs) - 1;
        foreach ($this->addMoreItems as $each) {
            $this->{$each}[$targetKey] = null;
        }
    }
    public $student_id;
    public $pres_name;
    public $pres_by;
    public $medicine_admin;
    public $medicine_dose;
    public $medicine_route;
    public $prescription;

    protected array $rules =  [
        'student_id' => 'nullable',
        'pres_name' => 'nullable',
        'pres_by'   => 'nullable',
        'medicine_admin.*' => 'nullable',
        'medicine_dose.*' => 'nullable',
        'medicine_route.*'  => 'nullable',
    ];

    public function mount()
    {
        if ($this->prescription) {

            $this->prescription = $this->repo->getRelatedData($this->prescription, ['details']);
            $this->student_id = $this->prescription->student_id;
            $this->pres_name = $this->prescription->pres_name;
            $this->pres_by = $this->prescription->pres_by;
            $this->inputs = $this->prescription->details->toArray();

            foreach ($this->prescription->details as $key => $detail) {
                $this->medicine_admin[$key] = $detail->medicine_admin;
                $this->medicine_dose[$key] = $detail->medicine_dose;
                $this->medicine_route[$key] = $detail->medicine_route;
            }
        }
    }

    public function update()
    {
        $this->service->update($this->prescription, $this->validate());
        $this->dispatchBrowserEvent('notify');
        $this->redirectRoute('prescription.create');
    }

    public function render()
    {
        $data =[
            'students' => $this->studentRepo->getData(),
            'doctors' => $this->doctorRepo->getData(),
        ];
        return view('livewire.prescription-create',$data);
    }
}
