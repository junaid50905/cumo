@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active apply-view-only" id="home" role="tabpanel">
                    <livewire:course-create :course="$record" mode="show"/>
                </div>
            </div>
        </div>
    </div>
@endsection

