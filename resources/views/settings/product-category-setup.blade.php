@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') PRODUCT CATEGORY @endslot
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
                                            <span class="d-none d-sm-block">Supplier Type Setup</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Supplier Type List</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                
                                <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="row">
                                        {{-- <div class=" col-6">
                                            <div class="row ">
                                                <div class="col-3 mt-3 mb-3">
                                                    Name
                    
                                                </div>
                                                <div class="col-7 mt-3 mb-3">
                                                      
                                                      <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Supplier type name here" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                    <div class="col-3 mt-3 mb-3">
                                                        <label for="formmessage">escription:</label>
                                                    </div>
                                                    <div class="col-7 mt-3 mb-3">
                                                        <textarea id="formmessage" class="form-control" rows="3" placeholder="Enter description here"></textarea>
                                                    </div>
                                                
                                            </div>
                
                                          <div class="d-flex justify-content-center ">
                                            <div class="me-2"> 
                                                <button class="btn btn-danger waves-effect waves-light" type="submit">RESET</button>
                                            </div>
                                            <div class="ms-2">
                                                <button class="btn btn-success waves-effect waves-light" type="submit">SAVE</button>
                                            </div>
                                          </div>
                
                                        </div> --}}

                                        <div class=" col-6 border ">
                                            <div class="row ">
                                                <div class="col-3 mt-3 mb-3">
                                                    Parent Cat.
                                                </div>
                                                <div class="col-7 mt-3 mb-3">    
                                                    <select name="ParentCatId"  class="form-control strip-tags input-border border " id="ParentCatId" required="">
                                                        <option value="0">Top</option>
                                                        <option value="87">4 Water Purifier ; 6 Fire Exti</option>
                                                        <option value="85">AC (11)</option>
                                                        <option value="23">Angel Chef Hot Kitchen</option>
                                                        <option value="14">Anklet</option>
                                                        <option value="75">Annual Anniversary</option>
                                                        <option value="103">Annual Anniversary of PFDA - V</option>
                                                        <option value="61">antivirus</option>
                                                        <option value="116">Application Development</option>
                                                        <option value="34">Art Finished Goods</option>
                                                        <option value="33">Art Raw Materials</option>
                                                        <option value="42">Art Training Materials</option>
                                                        <option value="113">Asus Laptop</option>
                                                        <option value="100">Attend meetings, Workshop, Sem</option>
                                                        <option value="44">BAKERY</option>
                                                        <option value="10">Bakery assets</option>
                                                        <option value="57">Bakery Equipment</option>
                                                        <option value="25">Bakery finish products</option>
                                                        <option value="45">Bakery Logistic Materials</option>
                                                        <option value="22">Bakery Raw Materials</option>
                                                        <option value="50">Bakery vegetable</option>
                                                        <option value="115">Banner Stand</option>
                                                        <option value="27">Block Finished Goods</option>
                                                        <option value="18">Block Raw Materials</option>
                                                        <option value="56">Book</option>
                                                        <option value="107">Boost ; Notice</option>
                                                        <option value="110">Boost ; Notice</option>
                                                        <option value="102">Boost ; other cost</option>
                                                        <option value="20">Canteen Finished Goods</option>
                                                        <option value="19">Canteen Raw Material</option>
                                                        <option value="29">Carton</option>
                                                        <option value="131">Communication</option>
                                                        <option value="127">Computer ; Allied</option>
                                                        <option value="58">COMPUTER TRAINING</option>
                                                        <option value="43">Crafts</option>
                                                        <option value="126">Cultural Instruments</option>
                                                        <option value="39">Dance Dress</option>
                                                        <option value="38">Dance props</option>
                                                        <option value="59">Decoration</option>
                                                        <option value="72">Dinning Table</option>
                                                        <option value="36">Drama Dress</option>
                                                        <option value="35">Drama Props</option>
                                                        <option value="123">Educational Equipment</option>
                                                        <option value="83">Electric Work</option>
                                                        <option value="105">Equipment Repair ; Maintenance</option>
                                                        <option value="135">Facebook Boost Up</option>
                                                        <option value="79">Food Ingredients Canteen</option>
                                                        <option value="51">Furniture</option>
                                                        <option value="88">Furniture ; Fixture Repair ; M</option>
                                                        <option value="73">General Admin</option>
                                                        <option value="55">Gift items</option>
                                                        <option value="120">Gym and sports Equipment</option>
                                                        <option value="95">Home Visit</option>
                                                        <option value="53">Huawei Media Pad</option>
                                                        <option value="114">ID Card</option>
                                                        <option value="32">Ikebana Finished Goods</option>
                                                        <option value="31">Ikebana Raw Materials</option>
                                                        <option value="15">Jewelerry Raw Materials</option>
                                                        <option value="26">Jewelry Finished Goods</option>
                                                        <option value="41">Karishma</option>
                                                        <option value="129">Kitchen Equipment ; Crockeries</option>
                                                        <option value="99">Liason with GoB institutes, UN</option>
                                                        <option value="132">Logistc Matrial</option>
                                                        <option value="133">Logistc Matrial</option>
                                                        <option value="48">Maintenance</option>
                                                        <option value="49">Maintenance (AS)</option>
                                                        <option value="65">MARKETING(BOOST)</option>
                                                        <option value="134">Mask Raw Materials</option>
                                                        <option value="63">MATERIAL</option>
                                                        <option value="7">Medicine</option>
                                                        <option value="47">Mobile Bill</option>
                                                        <option value="40">Music Equipment</option>
                                                        <option value="119">Office equipment ; Machinery</option>
                                                        <option value="81">Office Repair ; Maintenance</option>
                                                        <option value="96">Online Sales Promotion</option>
                                                        <option value="97">Operating Expenses</option>
                                                        <option value="104">Operating Expenses - Phy</option>
                                                        <option value="109">Operating Expenses - Psy</option>
                                                        <option value="76">Organizational Exposure Event</option>
                                                        <option value="101">Organize Training for parents </option>
                                                        <option value="84">Others Maintenance</option>
                                                        <option value="17">Paperwork Finished Goods</option>
                                                        <option value="16">Paperwork Raw Materials</option>
                                                        <option value="89">Participation of Mela</option>
                                                        <option value="70">Photo Printing</option>
                                                        <option value="86">Photocopy Machine ; Printer</option>
                                                        <option value="37">Physiotherapy</option>
                                                        <option value="64">Pre-Vocational</option>
                                                        <option value="71">Printings Items</option>
                                                        <option value="74">Program</option>
                                                        <option value="141">Banner and Brochure</option>
                                                        <option value="142">Crest</option><option value="143">Food bill</option>
                                                        <option value="140">Video  and Photo Graphic</option>
                                                        <option value="98">Proposal Development (Hard Cop</option>
                                                        <option value="108">Psychology</option>
                                                        <option value="90">Raw materials (Carpet slipper</option>
                                                        <option value="91">Raw materials (Coushan Cover p</option>
                                                        <option value="94">Raw materials (Door mat prod.)</option>
                                                        <option value="92">Raw materials (Shopping bag pr</option>
                                                        <option value="93">Raw materials (Table mat prod.</option>
                                                        <option value="82">Renovation Work</option>
                                                        <option value="117">Rental Expenses</option>
                                                        <option value="111">Room Decoration</option>
                                                        <option value="106">Room Maintenance</option>
                                                        <option value="125">Security equipment</option>
                                                        <option value="68">Security SurBalance</option>
                                                        <option value="124">Sensory equipment</option>
                                                        <option value="62">Servicing</option>
                                                        <option value="80">Servicing - Selling (A C)</option>
                                                        <option value="128">Software and patent</option>
                                                        <option value="78">Staff Annual Refreshment</option>
                                                        <option value="139">Staff Annual Refreshment</option>
                                                        <option value="52">Stationary</option>
                                                        <option value="136">Barmis Juta</option>
                                                        <option value="137">Lax Mini Sope</option>
                                                        <option value="138">Muph Suta</option>
                                                        <option value="67">Stationary_2</option>
                                                        <option value="69">Surveillance Equipments</option>
                                                        <option value="121">Tailoring Equipment</option>
                                                        <option value="30">Tailoring Finished Goods</option>
                                                        <option value="112">Tailoring raw material</option>
                                                        <option value="122">Therapy Equipment</option>
                                                        <option value="28">Tie-Dye Finished Goods</option>
                                                        <option value="21">Tie-dye Raw Materials</option>
                                                        <option value="130">Training; Educational Equipment</option>
                                                        <option value="46">UTILITY</option>
                                                        <option value="118">Vehicle (Automobile)</option>
                                                        <option value="54">Visa fee</option>
                                                        <option value="66">Well being</option>
                                                        <option value="60">windows set up</option>
                                                        <option value="77">Yearly Staff Recreation Tour</option>
                                                    </select>
                                                </div>
                                            </div>
    
                                                <div class="row ">
                                                    <div class="col-3 mt-3 mb-3">
                                                        Name
                        
                                                    </div>
                                                    <div class="col-7 mt-3 mb-3">
                                                          
                                                          <input type="text" class="form-control border " id="horizontal-firstname-input" placeholder="Catagory Name here" >
                                                    </div>
                                                </div>
                    
                                                <div class="row ">
                                                    <div class="col-3 mt-3 mb-3">
                                                        Sequence
                                                    </div>
                                                    <div class="col-7 mt-3 mb-3">
                                                          
                                                         <input class="form-control strip-tags input-border border " id="SeqNo" placeholder="Sequence no here" required="" name="SeqNo" type="number" value="124">
                                                    </div>
                                                </div>
                    
                                                <div class="row ">
                                                    <div class="col-3 mt-3 mb-3">
                                                        Tire No.
                                                    </div>
                                                    <div class="col-7 mt-3 mb-3">  
                                                         <input class="form-control strip-tags input-border border " id="SeqNo" placeholder="Tire  no here" required="" name="SeqNo" type="number" value="1">
                                                    </div>
                                                </div> 
    
                                            <div class="row"> 
                                                    <div class="col-3 mt-3 mb-3">
                                                        <label for="formmessage">Description:</label>
                                                    </div>
                                                    <div class="col-7 mt-3 mb-3">
                                                        <textarea id="formmessage" class="form-control border " rows="3" placeholder="Enter description here"></textarea>
                                                    </div>   
                                            </div>
    
                                            <div class="d-flex justify-content-center m-3">
                                                <div class="me-2"> 
                                                    <button class="btn btn-danger waves-effect waves-light" type="submit">RESET</button>
                                                </div>
                                                <div class="ms-2">
                                                    <button class="btn btn-success waves-effect waves-light" type="submit">SAVE</button>
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
                                                            <th  >Category Name</th>
                                                            <th  rowspan="1" colspan="1">Parent Acc</th>
                                                            <th  rowspan="1" colspan="1">Sequence</th>
                                                            <th  rowspan="1" colspan="1">Tire</th>
                                                            <th  rowspan="1" colspan="1">Log</th>
                                                            <th  rowspan="1" colspan="1">action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd " role="row">
                                                                <td>Food bill</td>
                                                                <td>74</td>
                                                                <td>4 </td>
                                                                <td>2</td>
                                                                <td>Create: Md. Kutubuddin . <br> @ 2021-12-13 19:11:53 <br>
                                                                    There is no update record.
                                                                </td>
                                                                
                                                                <td>
                                                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                                        <i class="fas fa-trash-alt"></i>
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
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection

@endsection


