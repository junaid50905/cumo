@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="journal" role="tabpanel">
                        <livewire:journal-create :journal='$record' mode='edit' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection