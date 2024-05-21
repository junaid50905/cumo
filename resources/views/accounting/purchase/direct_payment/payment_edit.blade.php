@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <!-- form start -->
                    <livewire:direct-payment-create :record='$record' mode='edit'>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection