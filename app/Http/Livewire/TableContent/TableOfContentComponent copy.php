<?php

namespace App\Http\Livewire\TableContent;

use Livewire\Component;
use App\Models\Setup\TableOfContent;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class TableOfContentComponent extends Component
{
    // public $sections = [];
    // public $subSections = [];
    // public $areas = [];
    // public $activities = [];
    // public $tasks = [];
    // public $taskDetails = [];

    // public $selectedSection = 0;
    // public $selectedSubSection = null;
    // public $selectedArea = null;
    // public $selectedActivity = null;
    // public $selectedTask = null;
    // public $selectedTaskDetail = null;
    // public $title;
    // public $link_code;
    // public $errorMessage;

    // public function mount()
    // {
    //     $this->sections = TableOfContent::where('section', 0)->distinct()->get();
    // }

    // public function updatedSelectedSection($sectionId)
    // {
    //     $this->subSections = TableOfContent::where('section', $sectionId)->where('sub_section', 0)->distinct()->get();
    //     $this->reset(['selectedSubSection', 'selectedArea', 'selectedActivity', 'selectedTask', 'selectedTaskDetail']);
    // }

    // public function updatedSelectedSubSection($subSectionId)
    // {
    //     $this->areas = TableOfContent::where('section', $this->selectedSection)->where('sub_section', $subSectionId)->where('area', 0)->distinct()->get();
    //     $this->reset(['selectedArea', 'selectedActivity', 'selectedTask', 'selectedTaskDetail']);
    // }

    // public function updatedSelectedArea($areaId)
    // {
    //     $this->activities = TableOfContent::where('section', $this->selectedSection)->where('sub_section', $this->selectedSubSection)->where('area', $areaId)->where('activity', 0)->distinct()->get();
    //     $this->reset(['selectedActivity', 'selectedTask', 'selectedTaskDetail']);
    // }

    // public function updatedSelectedActivity($activityId)
    // {
    //     $this->tasks = TableOfContent::where('section', $this->selectedSection)->where('sub_section', $this->selectedSubSection)->where('area', $this->selectedArea)->where('activity', $activityId)->where('task', 0)->distinct()->get();
    //     $this->reset(['selectedTask', 'selectedTaskDetail']);
    // }

    // public function updatedSelectedTask($taskId)
    // {
    //     $this->taskDetails = TableOfContent::where('section', $this->selectedSection)->where('sub_section', $this->selectedSubSection)->where('area', $this->selectedArea)->where('activity', $this->selectedActivity)->where('task', $taskId)->where('task_details', 0)->distinct()->get();
    // }

    // public function submit()
    // {
    //     $this->validate([
    //         'title' => 'required|string|max:255',
    //         'link_code' => 'required|string|max:255',
    //     ]);

    //     $tableContentData = [
    //         'title' => $this->title,
    //         'section' => $this->selectedSection,
    //         'sub_section' => $this->selectedSubSection,
    //         'area' => $this->selectedArea,
    //         'activity' => $this->selectedActivity,
    //         'task' => $this->selectedTask,
    //         'task_details' => $this->selectedTask != 0 ? 0 : null,
    //         'link_code' => $this->link_code,
    //         'created_by' => auth()->id(),
    //     ];

    //     // dd($tableContentData);

    //     try {
    //         TableOfContent::create($tableContentData);
    //         $this->resetFields();
    //         session()->flash('message', 'Table of Content Data saved successfully.');
    //     } catch (\Exception $e) {
    //         $this->errorMessage = $e->getMessage();
    //     }
    // }

    // private function resetFields()
    // {
    //     $this->reset(['title', 'selectedSection', 'selectedSubSection', 'selectedArea', 'selectedActivity', 'selectedTask', 'selectedTaskDetail', 'link_code']);
    // }

    // public function render()
    // {
    //     return view('livewire.table-content.table-of-content-component', [
    //         'sections' => $this->sections,
    //         'subSections' => $this->subSections,
    //         'areas' => $this->areas,
    //         'activities' => $this->activities,
    //         'tasks' => $this->tasks,
    //         'taskDetails' => $this->taskDetails,
    //     ]);
    // }

    public $title;
    public $link_code;

    public $sections;
    public $subSections = [];
    public $areas = [];
    public $activities = [];
    public $tasks = [];
    public $taskDetails = [];

    public $selectedSection = null;
    public $selectedSubSection = null;
    public $selectedArea = null;
    public $selectedActivity = null;
    public $selectedTask = null;
    public $selectedTaskDetail = null;

    public $errorMessage = null;

    public function mount()
    {
        $this->sections = TableOfContent::whereNull('parent_id')->get();
    }

    public function updatedSelectedSection($sectionId)
    {
        $this->subSections = TableOfContent::where('parent_id', $sectionId)->get();
        $this->resetLowerLevels('section');
    }

    public function updatedSelectedSubSection($subSectionId)
    {
        $this->areas = TableOfContent::where('parent_id', $subSectionId)->get();
        $this->resetLowerLevels('subSection');
    }

    public function updatedSelectedArea($areaId)
    {
        $this->activities = TableOfContent::where('parent_id', $areaId)->get();
        $this->resetLowerLevels('area');
    }

    public function updatedSelectedActivity($activityId)
    {
        $this->tasks = TableOfContent::where('parent_id', $activityId)->get();
        $this->resetLowerLevels('activity');
    }

    public function updatedSelectedTask($taskId)
    {
        $this->taskDetails = TableOfContent::where('parent_id', $taskId)->get();
    }

    private function resetLowerLevels($level)
    {
        switch ($level) {
            case 'section':
                $this->selectedSubSection = null;
                $this->selectedArea = null;
                $this->selectedActivity = null;
                $this->selectedTask = null;
                $this->selectedTaskDetail = null;
                $this->subSections = [];
                $this->areas = [];
                $this->activities = [];
                $this->tasks = [];
                $this->taskDetails = [];
                break;
            case 'subSection':
                $this->selectedArea = null;
                $this->selectedActivity = null;
                $this->selectedTask = null;
                $this->selectedTaskDetail = null;
                $this->areas = [];
                $this->activities = [];
                $this->tasks = [];
                $this->taskDetails = [];
                break;
            case 'area':
                $this->selectedActivity = null;
                $this->selectedTask = null;
                $this->selectedTaskDetail = null;
                $this->activities = [];
                $this->tasks = [];
                $this->taskDetails = [];
                break;
            case 'activity':
                $this->selectedTask = null;
                $this->selectedTaskDetail = null;
                $this->tasks = [];
                $this->taskDetails = [];
                break;
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'link_code' => 'required|string|max:255',
        ]);

        $parentId = $this->selectedTaskDetail ?? $this->selectedTask ?? $this->selectedActivity ?? $this->selectedArea ?? $this->selectedSubSection ?? $this->selectedSection;

        $tableContentData = [
            'title' => $this->title,
            'parent_id' => $parentId,
            'link_code' => $this->link_code,
            'created_by' => auth()->id(),
        ];

        try {
            TableOfContent::create($tableContentData);
            $this->resetFields();
            session()->flash('message', 'Table of Content Data saved successfully.');
        } catch (\Exception $e) {
            $this->errorMessage = $e->getMessage();
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
        $this->selectedTaskDetail = null;
        $this->subSections = [];
        $this->areas = [];
        $this->activities = [];
        $this->tasks = [];
        $this->taskDetails = [];
        $this->errorMessage = null;
    }

    public function render()
    {
        return view('livewire.table-content.table-of-content-component');
    }
}
