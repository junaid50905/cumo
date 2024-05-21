@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <livewire:course-create :course="$record" mode="edit"/>
                </div>
            </div>
        </div>
    </div>
@endsection
