@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <!-- Nav tabs -->
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active apply-view-only" id="finished_good" role="tabpanel">
                        <livewire:product-create :product="$record" mode="show" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
@endsection
