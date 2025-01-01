<?php
namespace App\Http\Livewire\TableContent;

use Livewire\Component;
use App\Models\Setup\TableOfContent;

class EditTableOfContentComponent extends Component
{
    public $contentId;
    public $title;
    public $link_code;
    public $parent_id;
    public $selectedSection = null;
    public $selectedSubSection = null;
    public $selectedArea = null;
    public $selectedActivity = null;
    public $selectedTask = null;

    public $sections = [];
    public $sub_sections = [];
    public $areas = [];
    public $activities = [];
    public $tasks = [];

    public function mount($id)
    {
        $this->contentId = $id; 
        $this->loadData();
        $this->loadSections();
    }

    public function loadData()
    {
        $tableOfContent = TableOfContent::find($this->contentId);
        if ($tableOfContent) {
            $this->title = $tableOfContent->title;
            $this->link_code = $tableOfContent->link_code;
            $this->parent_id = $tableOfContent->parent_id;
        }
    }

    public function loadSections()
    {
        $this->sections = TableOfContent::whereNull('parent_id')->get();
    }

    public function updatedSelectedSection($sectionId)
    {
        $this->sub_sections = TableOfContent::where('parent_id', $sectionId)->get();
        $this->selectedSubSection = null;
        $this->areas = [];
        $this->activities = [];
        $this->tasks = [];
    }

    public function updatedSelectedSubSection($subSectionId)
    {
        $this->areas = TableOfContent::where('parent_id', $subSectionId)->get();
        $this->selectedArea = null;
        $this->activities = [];
        $this->tasks = [];
    }

    public function updatedSelectedArea($areaId)
    {
        $this->activities = TableOfContent::where('parent_id', $areaId)->get();
        $this->selectedActivity = null;
        $this->tasks = [];
    }

    public function updatedSelectedActivity($activityId)
    {
        $this->tasks = TableOfContent::where('parent_id', $activityId)->get();
        $this->selectedTask = null;
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'link_code' => 'required|string|max:255',
        ]);

        $tableOfContent = TableOfContent::find($this->contentId); 
        // dd($tableOfContent->parent_id);
        $tableContentData = [
            'title' => $this->title,
            'parent_id' => $this->selectedTask ?? $this->selectedActivity ?? $this->selectedArea ?? $this->selectedSubSection ?? $this->selectedSection ?? $tableOfContent->parent_id,
            'link_code' => $this->link_code,
            'created_by' => auth()->id(),
        ];

        if ($tableOfContent) {
            $tableOfContent->update($tableContentData);

            session()->flash('message', 'Table of Content updated successfully.');
        }
    }

    public function getHierarchy($contentId)
    {
        $hierarchy = [];
        $currentId = $contentId;

        while ($currentId) {
            $item = TableOfContent::find($currentId);
            if ($item) {
                array_unshift($hierarchy, $item->title . ' (' . $item->link_code . ')');
                $currentId = $item->parent_id;
            } else {
                break;
            }
        }

        return implode(' --> ', $hierarchy);
    }

    public function render()
    {
        $hierarchyString = $this->getHierarchy($this->contentId);

        return view('livewire.table-content.edit-table-of-content-component', [
            'hierarchyString' => $hierarchyString
        ]);
    }
}
