@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection


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
                                    <th>Recieved Date</th>
                                    <th>Recieved Type</th>
                                    <th>Item Code</th>
                                    <th>Item Desc</th>
                                    <th>Unit Name</th>
                                    <th>Qnty</th>
                                    <th>Expiry Date</th>
                                    <th>Serial No</th>
                                    <th>Store Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2021-10-13</td>
                                    <td>P</td>
                                    <td>CAT0034</td>
                                    <td>Rice Chal</td>
                                    <td>Kilogram</td>
                                    <td>150.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>Canteen Raw material</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2021-10-13</td>
                                    <td>P</td>
                                    <td>CAT-0067</td>
                                    <td>Oil - Mustard Oil</td>
                                    <td>Litter</td>
                                    <td>1.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>Canteen Raw material</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2021-10-13</td>
                                    <td>P</td>
                                    <td>canteen-0057</td>
                                    <td>Dal - Mosur Dal</td>
                                    <td>Kilogram</td>
                                    <td>25.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>Canteen Raw material</td>
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

