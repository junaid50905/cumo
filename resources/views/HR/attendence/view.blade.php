@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card apply-view-only">
                    <livewire:attendence-create :attendence="$record" mode="show" /> 
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection 