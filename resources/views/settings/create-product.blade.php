@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title')PRODUCT  @endslot
@endcomponent


 <!-- Tab panes -->
 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Product Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Product List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="row">
                        <div class=" col-12">
                          <div class="row  container pt-3">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label text-right">Code</label>
                                    <div class="col-7 ">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product code here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label">Name</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product name here">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row  container pt-3">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="exampleInputEmail1" class="col-5 col-form-label">Description</label>
                                    <div class="col-7">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product description here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label">Type</label>
                                    <div class="col-7">
                                        <select class="form-select" class="form-control strip-tags input-border"id="ItemType" required="" >name="ItemType">
                                            <option selected="selected" value="">-- Select --</option>
                                            <option value="0">Service</option>
                                            <option value="1">Inventory item</option>
                                            <option value="2">Non-inventory item</option>
                                            <option value="3">Other charges</option>
                                            <option value="4">Sub total</option>
                                            <option value="5">Group</option>
                                            <option value="6">Discount</option>
                                            <option value="7">Fixed asset</option>
                                            <option value="8">Inhouse production</option>  
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row  container pt-3">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label text-right">Category</label>
                                    <div class="col-7">
                                        <select class="form-select">
                                           <option selected="selected" value="">-- Select --</option>
                                           <option value="1">4 Water Purifier &amp; 6 Fire Exti</option>
                                           <option value="2">AC (11)</option>
                                           <option value="3">Angel Chef Hot Kitchen</option>
                                           <option value="4">Anklet</option>
                                           <option value="5">Annual Anniversary</option>
                                           <option value="6">Annual Anniversary of PFDA - V</option>
                                           <option value="7">antivirus</option>
                                           <option value="8">Application Development</option>
                                           <option value="9">Art Finished Goods</option>
                                           <option value="10">Art Raw Materials</option>
                                           <option value="11">Art Training Materials</option>
                                           <option value="12">Asus Laptop</option>
                                           <option value="13">Attend meetings, Workshop, Sem</option>
                                           <option value="14">BAKERY</option>
                                           <option value="15">Bakery assets</option>
                                           <option value="16">Bakery Equipment</option>
                                           <option value="17">Bakery finish products</option>      
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label">Measurement</label>
                                    <div class="col-7">
                                        <select class="form-select">
                                        <option selected="selected" value="">-- Select --</option>
                                        <option value="1">bottol</option>
                                        <option value="2">Bundle</option>
                                        <option value="3">Can</option>
                                        <option value="4">CAT Veg Portion</option>
                                        <option value="5">DAY</option>
                                        <option value="6">DOZEN</option>
                                        <option value="7">FUEL</option>
                                        <option value="8">GOJ</option>
                                        <option value="9">Gram</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row  container pt-3">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-5 col-form-label text-right">Reorder Quantity</label>
                                    <div class="col-7">
                                        <input class="form-control strip-tags input-border" id="ReorderQty" placeholder="Reorder quantity here" required="" name="ReorderQty" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label for="image" class="control-label col-5">Image</label>
                                    <div class="col-7">
                                        <input type="file" name="image" class="form-control strip-tags input-border">
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        {{-- Grid one  --}}
                    <div class="container ">
                        <div class="row border  p-4 m-2">
                          <div class="col-4 d-flex">
                              <div class="col-8">
                                Is Sale Item
                              </div>
                              <div class="col-4">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                              </div>
                          </div>
                          <div class="col-4 d-flex">
                            <div class="col-8">
                               Is Purchase Item
                            </div>
                            <div class="col-4">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        <div class="col-4 d-flex">
                            <div class="col-8">
                               Is Expirable Item
                            </div>
                            <div class="col-4">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                    </div>
                       
                    
                    {{-- grid two --}}

                    <div class="container">
                        <div class="row border   p-4">
                          <div class="col-6">Sell Price</div>
                          <div class="col-6">Cost Price</div>
                        </div>
                    </div> 



                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Example</h4>
                                    <form class="repeater" enctype="multipart/form-data">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div  class="mb-3 col-lg-2">
                                                    <label for="name">P.Category</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control" />
                                                    
                                                </div>
    
                                                <div  class="mb-3 col-lg-1">
                                                    <label for="text">Product</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                </div>
    
                                                <div  class="mb-3 col-lg-2">
                                                    <label for="subject">Measure Unit</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                </div>
    
                                                <div class="mb-3 col-lg-2">
                                                    <label for="resume">Quantity</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                </div>
    
                                                <div class="mb-3 col-lg-2">
                                                    <label for="message">Price</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                </div>
                                                <div class="mb-3 col-lg-2">
                                                    <label for="message">Cost Price</label>
                                                    <input type="text" id="name" name="untyped-input" class="form-control"/>
                                                </div>
                                                
                                                <div class="col-lg-1 p-0 align-self-center">
                                                    <button class="btn btn-danger  ms-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row border  m-2 p-4">
                            <div class="col-6 d-flex">
                                <div class="col-8">
                                    <h6>Sale price in Percent</h6>
                                </div>
                                <div class="col-4">
                                  <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="col-8">
                                    <h6>Is Active</h6>
                                </div>
                                <div class="col-4">
                                  <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger w-25" data-bs-dismiss="modal">Reset</button>
                        <button type="button" class="btn btn-success w-25">Save </button>
                    </div>



                </div>
                </div>
                </div>
                </div>
                {{-- end of first page --}}
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="myTable" class="table table-striped sd-datatable dataTable no-footer border  " role="grid" aria-describedby="myTable_info">
                                        <thead>
                                        <tr role="row">
                                            <th  rowspan="1" colspan="1">Code </th>
                                            <th  rowspan="1" colspan="1">Name</th>
                                            <th  rowspan="1" colspan="1">Type</th>
                                            <th  rowspan="1" colspan="1">Catagory</th>
                                            <th  rowspan="1" colspan="1">Measurement</th>
                                            <th  rowspan="1" colspan="1">Sell Price</th>
                                            <th  rowspan="1" colspan="1">Cost Price</th>
                                            <th  rowspan="1" colspan="1">Log</th>
                                            <th  rowspan="1" colspan="1">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd " role="row">
                                                <td>Sta-0050</td>
                                                <td>Air Freshness</td>
                                                <td>Non-inventory item</td>
                                                <td>Stationary</td>
                                                <td>bottol</td>
                                                <td>0.00</td>
                                                <td>200.00</td>
                                                <td>Create: Md. Kutubuddin . <br> @ 2021-12-13 19:11:53 <br>
                                                    There is no update record.
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </button>                                      
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <div class="row">
                                        <div class="col-8"><p>Showing 1 to 1 of 1 entries</p>
                                        </div>
                                        <div class="col-4">
                                            <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link color-info">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->        
            </div>
        </div>
    </div>
</div>
</div>     
</div>














@section('script')




<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js')}} "></script>
<script src="{{ URL::asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/node-waves/waves.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
<script src="{{ URL::asset ('/assets/js/app.js')}}"></script>


@endsection

@endsection