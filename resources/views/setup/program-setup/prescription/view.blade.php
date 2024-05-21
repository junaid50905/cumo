@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active apply-view-only" id="case-histroy" role="tabpanel">
                      <livewire:prescription-create :prescription="$record" mode="show" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

