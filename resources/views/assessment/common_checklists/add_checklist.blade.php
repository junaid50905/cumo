@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('css')
<style>
.sidebar {
    width: 200px;
    background-color: #f0f0f0;
    float: left;
    height: 100vh;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    padding: 10px;
    cursor: pointer;
}

.sidebar li.active {
    background-color: #ccc;
}

.content {
    margin-left: 220px;
}

.tabPane {
    display: none;
}

.tabPane.active {
    display: block;
}

.tabContent .card__data__box {
    margin-top: -70px;
}

.tabContent .card__data__box section {
    padding-top: 10px;
    padding-right: 10px;
    max-height: 100vh;
    overflow-y: auto;
    overflow-x: hidden;
}

.assessor__signature {
    width: 100%;
    height: 40px;
}

.assessor__signature img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.sticky {
    position: fixed;
    top: 10%;
    height: auto;
}

.sticky+.content {
    padding-top: 60px;
}

.card__search__box.custom__search__box {
    width: 100%;
    float: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.interview__status__completed {
    background: green !important;
    color: white !important;
}

.interview__status__processing {
    background: blue !important;
    color: white !important;
}

.interview__status__pending {
    background: red !important;
    color: white !important;
}
</style>
@endsection
@section('content')

<div>
    @if($checklistId === '1')
        <livewire:assessment-checklists.functional-communication-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '2')
        <livewire:assessment-checklists.autisam-behavior-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '3')
        <livewire:assessment-checklists.balancing-mobility-and-stability :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '4')
        <livewire:assessment-checklists.executive-function-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '5')
        <livewire:assessment-checklists.computer-training-o-t-observation :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '6')
        <livewire:assessment-checklists.sensory-checklist-for-child :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '7')
        <livewire:assessment-checklists.tactile-sensory-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '8')
        <livewire:assessment-checklists.psychological-assessment :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '9')
        <livewire:assessment-checklists.reviewed-case-history-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '10')
        <livewire:assessment-checklists.home-visit-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '11')
        <livewire:assessment-checklists.psychological-assessment-report :checklistId="$checklistId" :searchId="$searchId"/>
    @elseif($checklistId === '12')
        <livewire:assessment-checklists.social-communication-adult-checklist :checklistId="$checklistId" :searchId="$searchId"/>
    @endif
</div>
@endsection
