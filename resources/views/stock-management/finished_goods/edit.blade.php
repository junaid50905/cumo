@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <livewire:finished-good-create :finishedGood="$record" mode="edit"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
