@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                <livewire:vocational-marking-category-create mode="edit" :record="$record" />
            </div>
        </div>
    </div>
</div>
@endsection