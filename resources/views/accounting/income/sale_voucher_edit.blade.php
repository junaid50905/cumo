@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <livewire:sale-voucher-create :record="$record" mode="edit" />
            </div>
        </div>
    </div>
</div>
@endsection