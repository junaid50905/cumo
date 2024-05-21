@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Item Code</th>
                            <th>Item Desc</th>
                            <th>Stock Qnty</th>
                            <th>Unit Name</th>
                            <th>Cat Name</th>
                            <th>Reorder Qtn</th>
                            <th>Office Outlet</th>
                            <th>Office Programme</th>
                            <th>Canteen Raw Material</th>
                            <th>Office Store</th>
                            <th>Content Logistic Materials</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Slipper-0006</td>
                            <td><small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi voluptates
                                    voluptate veniam veritatis odit magni.</small></td>
                            <td>450</td>
                            <td>pair</td>
                            <td>Raw materials (Carpet slipper</td>
                            <td>3000</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4500.00</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
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
