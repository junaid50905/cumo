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
</style>
@endsection
@section('content')
<div>
    <livewire:assessments.assessment-p-i-d-child/>
</div>
@endsection