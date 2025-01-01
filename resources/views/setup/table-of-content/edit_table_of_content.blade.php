@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div>
    @livewire('table-content.edit-table-of-content-component', ['id' => $id])
</div>
@endsection