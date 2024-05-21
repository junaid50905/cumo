<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AttendenceRepository;
use Livewire\Component;
use Livewire\WithPagination;

class DailyAttendenceList extends Component
{
    use WithPagination,CommonListElements;
    private AttendenceRepository $attendenceRepo;
    private $query=null;

    public function boot(AttendenceRepository $attendenceRepo)
    {
        $this->attendenceRepo = $attendenceRepo;
    }

    public function getSpecificDateData(){
        // dump($this->validate());
        $this->query =  $this->attendenceRepo->getDateData($this->perPage,$this->validate());
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
        return view('livewire.daily-attendence-list', $data);
    }
}
