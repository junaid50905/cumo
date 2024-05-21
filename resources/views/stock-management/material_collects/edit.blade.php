@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@endcomponent
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <livewire:material-collect-create :materialCollect="$records" mode="edit" />
            </div>
        </div>
    </div>
</div>
@endsection