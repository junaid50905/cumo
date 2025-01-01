<?php

namespace App\Http\Livewire\TableContent;

use Livewire\Component;
use App\Models\Setup\TableOfContent;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class TableOfContentComponent extends Component
{
    public $title;
    public $link_code;

    public $sections;
    public $sub_sections = [];
    public $areas = [];
    public $activities = [];
    public $tasks = [];

    public $selectedSection = null;
    public $selectedSubSection = null;
    public $selectedArea = null;
    public $selectedActivity = null;
    public $selectedTask = null;

    public $returnMessage = null;

    public function mount()
    {
        $this->sections = TableOfContent::whereNull('parent_id')->get();
    }

    public function updatedSelectedSection($parentId)
    {
        $this->sub_sections = TableOfContent::where('parent_id', $parentId)->get();
        $this->selectedSubSection = null; // Reset selected sub_section
        $this->areas = []; // Reset areas
        $this->activities = []; // Reset activities
        $this->tasks = []; // Reset tasks
    }

    public function updatedSelectedSubSection($childId)
    {
        $this->areas = TableOfContent::where('parent_id', $childId)->get();
        $this->selectedArea = null; // Reset selected area
        $this->activities = []; // Reset activities
        $this->tasks = []; // Reset tasks
    }

    public function updatedSelectedArea($childId)
    {
        $this->activities = TableOfContent::where('parent_id', $childId)->get();
        $this->selectedActivity = null; // Reset selected activity
        $this->tasks = []; // Reset tasks
    }

    public function updatedSelectedActivity($childId)
    {
        $this->tasks = TableOfContent::where('parent_id', $childId)->get();
        $this->selectedTask = null; // Reset selected task
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'link_code' => 'required|string|max:255',
        ]);

        $tableContentData = [
            'title' => $this->title,
            'parent_id' => $this->selectedTask ?? $this->selectedActivity ?? $this->selectedArea ?? $this->selectedSubSection ?? $this->selectedSection,
            'link_code' => $this->link_code,
            'created_by' => auth()->id(),
        ];

        try {
            TableOfContent::create($tableContentData);
            $this->resetFields();
            $this->returnMessage = ['success', 'Table of Content Data saved successfully.'];
        } catch (\Exception $e) {
            $this->returnMessage = ['danger', $e->getMessage()];
        }
    }

    public function resetFields()
    {
        $this->title = '';
        $this->link_code = '';
        $this->selectedSection = null;
        $this->selectedSubSection = null;
        $this->selectedArea = null;
        $this->selectedActivity = null;
        $this->selectedTask = null;
        $this->sub_sections = [];
        $this->areas = [];
        $this->activities = [];
        $this->tasks = [];
        $this->returnMessage = null;
    }

    public function render()
    {
        return view('livewire.table-content.table-of-content-component');
    }
}
