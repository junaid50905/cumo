@extends('layouts.master')

@section('title') @endsection
@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12 d-flex justify-content-center align-items-center pb-3">
                    <label class="">Filter :
                    </label>
                    <div class="px-2 w-25">
                        <x-input-select name="search" :records="[]" />
                       </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Item Code</th>
                                <th>Item Desc</th>
                                <th>Stock Qnty</th>
                                <th>Unit Name</th>
                                <th>Cat Name</th>
                                <th>Recorder Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!-- end row -->

@endsection
@section('script')
@endsection
@section('script-bottom')
@endsection