@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <livewire:attendence-create :attendence="$record" mode="edit"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection