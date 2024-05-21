@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <livewire:supplier-payment-create :record="$record" mode="edit" />
        </div>
    </div>
</div>
@endsection