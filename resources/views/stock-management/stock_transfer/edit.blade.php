@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-5">
                <div class="tab-content p-3 text-muted">
                    <livewire:stock-transfer-create :stockTransfer="$record" mode="edit"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection