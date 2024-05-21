<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AttendenceRepository;
use Livewire\Component;
use Livewire\WithPagination;

class AttendenceList extends Component
{
    use WithPagination, CommonListElements;
    private AttendenceRepository $attendenceRepo;
    public $month;
    private $query=null;


    public function boot(AttendenceRepository $attendenceRepo)
    {
        $this->attendenceRepo = $attendenceRepo;
    }

    protected array $rules = [
        'month'=> 'nullable',
    ];


    public function getSpecificMonthData(){
        // dump($this->validate());
        $this->query =  $this->attendenceRepo->getMonthData($this->perPage,$this->validate());
        // dd($this->query);
    }
    
    public function render()
    {
        if($this->query){
            $data = [
                'records' => $this->query,
            ];
            // dd($data);
        }else{
            $data = [
                'records' => $this->attendenceRepo->getListData($this->perPage, $this->search),
            ];
        }
        // dd($data['records']);
        return view('livewire.attendence-list', $data);
    }
}
