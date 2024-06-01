<?php

namespace App\Http\Livewire\CareNeeds;

use Livewire\Component;
use App\Models\CareNeed;

class CareNeedPartOne extends Component
{
    public $currentTab = 0;
    public $formData = [
        'firstName' => '',
        'lastName' => '',
        'cityName' => '',
        'districtName' => '',
    ];

    protected $rules = [
        'formData.firstName' => 'required|string',
        'formData.lastName' => 'required|string',
        'formData.cityName' => 'required|string',
        'formData.districtName' => 'required|string',
    ];

    public function nextTab()
    {
        
        if ($this->currentTab < 3) {
            $this->currentTab++;
        }
        
        $user = CareNeed::where('student_id', 1)->first();
        // dd($user);
        if (!$user) {
            // If student_id 1 does not exist, create a new record
            // dd("Create New Item", $this->formData);
            CareNeed::create([
                'student_id' => 1,
                'sensory_checklist' => $this->formData['firstName'],
                'social_communication' => $this->formData['lastName'],
                'self_understanding' => $this->formData['cityName'],
                'eat_drink_swallow' => $this->formData['districtName'],
            ]);
        } else {
            // If student_id 1 exists, update the existing record
            // dd("Updated existing Item", $this->formData);
            $user->update([
                'sensory_checklist' => $this->formData['firstName'],
                'social_communication' => $this->formData['lastName'],
                'self_understanding' => $this->formData['cityName'],
                'eat_drink_swallow' => $this->formData['districtName'],
            ]);
        }
    }

    public function prevTab()
    {
        if ($this->currentTab > 0) {
            $this->currentTab--;
        }
    }

    public function submit()
    {
        // Update all data when the form is submitted
        // dd("Finally Updated existing Item", $this->formData);
        CareNeed::where('student_id', 1)->update([
            'sensory_checklist' => $this->formData['firstName'],
            'social_communication' => $this->formData['lastName'],
            'self_understanding' => $this->formData['cityName'],
            'eat_drink_swallow' => $this->formData['districtName'],
        ]);

        // Redirect after submission if needed
        // $this->redirect('/thank-you');
    }

    public function isLastTab()
    {
        return $this->currentTab === 3;
    }

    public function render()
    {
        return view('livewire.care-needs.care-need-part-one');
    }
}