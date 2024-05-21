@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card apply-view-only">
                <livewire:job-contact-create :jobContact="$record" mode="show" /> 
            </div>
        </div>
    </div>
@endsection
