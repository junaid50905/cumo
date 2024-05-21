<?php

namespace App\Http\Livewire\StudentIncome;

use Livewire\Component;

class StudentIncome extends Component
{
    public function render()
    {
        return view('livewire.student-income.student-income')->extends('layouts.master')->section('content');
    }
}
