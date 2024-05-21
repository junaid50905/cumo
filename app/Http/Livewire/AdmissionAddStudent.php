<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Utility\ProjectConstants;

class AdmissionAddStudent extends Component
{
    public function save()
    {
        dd('Livewire: form submited');
        $this->referralRepo->store($this->validate());
        $this->dispatchBrowserEvent('notifyr');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "AdmissionForm"]);
    }

    public function render()
    {
        // $data = [
        //     'gender' => ProjectConstants::$genders,
        // ];
        // dd("Livewire: Admission Add Student File");
        return view('livewire.admission-add-student');
    }
}
