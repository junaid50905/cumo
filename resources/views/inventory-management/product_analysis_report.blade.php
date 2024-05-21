@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
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
                    <table class="table table-bordered w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Id</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Unit Name</th>
                                <th>List Sale Price</th>
                                <th>Minimum Sale Price</th>
                                <th>Maximum Sale Price</th>
                                <th>Average Sale Price</th>
                                <th>List Cost Price</th>
                                <th>Minimum Cost Price</th>
                                <th>Maximum Cost Price</th>
                                <th>Average Cost Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>02</td>
                                <td>Jw0112</td>
                                <td>Anklet</td>
                                <td>Anklet</td>
                                <td>Piece</td>
                                <td>100</td>
                                <td>70</td>
                                <td>780</td>
                                <td>450</td>
                                <td>80</td>
                                <td>450</td>
                                <td>150</td>
                                <td>120</td>
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