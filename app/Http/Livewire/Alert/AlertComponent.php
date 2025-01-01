<?php

namespace App\Http\Livewire\Alert;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class AlertComponent extends Component
{
    public function render()
    {
        return view('livewire.alert.alert-component');
    }

    public function setAlert($type, $title, $message)
    {
        Session::flash('alert', [
            'type' => $type,
            'title' => $title,
            'message' => $message,
        ]);
    }
}
