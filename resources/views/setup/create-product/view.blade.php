@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

@endsection

@section('content')

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
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel "> 
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                          <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Code</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                 <x-input-text name="code" type="number" placeholder="Product code here"></x-input-text>
                                                                <datalist id="ItemCode" class="ItemCode">
                                                                  <option>AB-001</option>
                                                                  <option>AC-001</option>
                                                                  <option>AC-002</option>
                                                                  <option>AC-003</option>
                                                                  <option>AC-004</option>
                                                                  <option>AC-005</option>
                                                                  <option>AC-006</option>
                                                                  <option>AC-007</option>
                                                                  <option>AC-008</option>
                                                                  <option>AC-009</option>
                                                                  <option>AC-010</option>
                                                                  <option>AC-011</option>
                                                                  <option>AC-012</option>
                                                                  <option>AC-013</option>
                                                                </datalist>
                                                               </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Description</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-textarea name="description" placeholder="Product code here"></x-input-textarea>
                                                             </div>
                                                          </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Category</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-select name="category" :records="[]" />
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Reorder Quantity</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-text name="reorder_quantit" type="number" placeholder="Reorder Quantity Here"></x-input-text>
                                                               </div>
                                                            </div>
                                                      </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                <div class="row">
                                                  <div class="col-12">
                                                     <div class="row mt-3">
                                                       <div class="col-md-12">
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Name</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-text name="name" placeholder="Product name here"></x-input-text>
                                                                 <datalist id="ItemDesc" class="ItemDesc">
                                                                  <option>2 Color Block Dice</option>
                                                                  <option>3 Color Block Dice</option>
                                                                  <option>4 feet steel Scale</option>
                                                                  <option>A-4 Paper White</option>
                                                                  <option>Aararoth</option>
                                                                  <option>Aarong Dul Angta</option>
                                                                  <option>Aarong Dul Pin</option>
                                                                  <option>Aarong Tag</option>
                                                                  <option>Accessories</option>
                                                                  <option>Accessories</option>
                                                                  <option>Acromine color</option>
                                                                  <option>Acromion Color</option>
                                                                  <option>Acrylic Color</option>
                                                                  <option>Aika</option>
                                                                  <option>Air Freshness</option>
                                                                  <option>Air Soul</option>
                                                                  <option>Akromin Color Ash</option>
                                                                  <option>Akromin Color Black</option>
                                                                  <option>Akromin Color Blue</option>
                                                                  <option>Akromin Color Cream</option>
                                                                  <option>Akromin Color Firoza</option>
                                                                  <option>Akromin Color Golden</option>
                                                                  <option>Akromin Color Green</option>
                                                                  <option>Akromin Color Grey</option>
                                                                  <option>Akromin Color Khoiri</option>
                                                                  <option>Akromin Color Navy Blue</option>
                                                                  <option>Akromin Color Off White</option>
                                                                  <option>Akromin Color Orange</option>
                                                                  <option>Akromin Color Paste</option>
                                                                  <option>Akromin Color Red</option>
                                                                  <option>Akromin Color Sky Blue</option>
                                                                  <option>Akromin Color Violet</option>
                                                                  <option>Akromin Color White</option>
                                                                  <option>Akromin Color Yellow</option>
                                                                  <option>Akromin Pink Color Pink</option>
                                                                  <option>Alta</option>
                                                                  <option>Alu Bhaji</option>
                                                                  <option>Angel-fair tag</option>
                                                                 </datalist>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Type</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-select name="type" :records="[]" />
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Measurement</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-select name="measuremen" :records="[]" />
                                                              </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Image</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="image" type="file" placeholder="Product name here"></x-input-text>
                                                             </div>
                                                           </div>
                                                     </div>
                                                     </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-4  d-flex">
                                                 <div> <h5>Is Sale Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <div><h5>Is Purchase Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                   </div>
                                                <div class="col-4 d-flex">
                                                  <div><h5>Is Expirable Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-6  d-flex align-items-center ">
                                                 <div> <h5>Sell Price</h5></div>
                                                    <div class="ms-5">
                                                      <x-input-text name="Price" type="number" placeholder="Sell Price here"></x-input-text>
                                                   </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <div><h5>Cost Price</h5></div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-12 p-0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Product BOM</h4>
                                                            <form class="repeater" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="sl">SL</label>
                                                                        <label for="p_category">P. Category</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="product">Product</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="measure_unit">Measure Unit</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="quality">Quantity</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="price">Price</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="cost_price">Cost Price</label>
                                                                    </div>
                                                                </div>
                                                                <div data-repeater-list="group-a">
                                                                    <div data-repeater-item class="row removeRow">
                
                                                                        <div  class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                                                            <span class="pe-2 pb-1">01</span>
                                                                            <x-input-select name="p_category" :records="[]" />
                                                                        </div>
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                          <x-input-select name="product" :records="[]" />
                                                                        </div>
                                                                        <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                                                          <x-input-text name="measure_unit" ></x-input-text>
                                                                        </div>
                
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                          <x-input-text name="qualaty" type="number"></x-input-text>
                                                                        </div>
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                          <x-input-text name="price" type="number"></x-input-text>
                                                                        </div>
                                                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                          <x-input-text name="cost_price" type="number"></x-input-text>
                                                                            <button class="btn btn-outline-danger ms-2 removeBtn">
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <input data-repeater-create type="button" class="btn btn-outline-success mt-3 mt-lg-0" value="Add"/>
                                                            </form>
                                                            <!-- 7th row end  -->
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-6  d-flex justify-content-center">
                                                 <div> <h5>Sale price in Percent</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                  <div><h5>Is Active</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                </div>
                                                </div>
                                              </div>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-3">
                                              <div class="col-2">
                                                  <button class="btn btn-outline-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-outline-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <div class="row">         
                      <div class="col-md-2">
                          <div class="mb-3">        
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="mb-3 d-flex align-items-center">
                               <div class="p-0 me-2">
                                 <label for="formrow-password-input" class="form-label">Product Type:</label>
                               </div>
                               <div>
                                <select class="form-control">
                                  <option value="">Select Category</option>
                                  <option value="Service">Service</option>
                                  <option value="Inventory item">Inventory item</option>
                                  <option value="Non-inventory item">Non-inventory item</option>
                                  <option value="Other charges">Other charges</option>
                                  <option value="Sub total">Sub total</option>
                                  <option value="Group">Group</option>
                                  <option value="Discount">Discount</option>
                                  <option value="Fixed asset">Fixed asset</option>
                                  <option value="Inhouse production">Inhouse production</option>
                                </select>
                               </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="mb-3 d-flex align-items-center">
                               <div class="p-0 me-2">
                                <label for="formrow-password-input" class="form-label">Category:</label>
                               </div>
                                  <div>
                                    <select class="form-control"> 
                                      <option value="4 Water Purifier 6 Fire Exti">4 Water Purifier  6 Fire Exti</option>
                                      <option value="AC (11)">AC (11)</option>
                                      <option value="Angel Chef Hot Kitchen">Angel Chef Hot Kitchen</option>
                                      <option value="Anklet">Anklet</option>
                                      <option value="Annual Anniversary">Annual Anniversary</option>
                                      <option value="Annual Anniversary of PFDA - V">Annual Anniversary of PFDA - V</option>
                                      <option value="antivirus">antivirus</option>
                                      <option value="Application Development">Application Development</option>
                                      <option value="Art Finished Goods">Art Finished Goods</option>
                                      <option value="Art Raw Materials">Art Raw Materials</option>
                                      <option value="Art Training Materials">Art Training Materials</option>
                                      <option value="Asus Laptop">Asus Laptop</option>
                                      <option value="Attend meetings, Workshop, Sem">Attend meetings, Workshop, Sem</option>
                                      <option value="BAKERY">BAKERY</option>
                                      <option value="Bakery assets">Bakery assets</option>
                                      <option value="Bakery Equipment">Bakery Equipment</option>
                                      <option value="Bakery finish products">Bakery finish products</option>
                                      <option value="Bakery Logistic Materials">Bakery Logistic Materials</option>
                                      <option value="Bakery Raw Materials">Bakery Raw Materials</option>
                                      <option value="Bakery vegetable">Bakery vegetable</option>
                                      <option value="Banner and Brochure">Banner and Brochure</option>
                                      <option value="Banner Stand">Banner Stand</option>
                                      <option value="Barmis Juta">Barmis Juta</option>
                                      <option value="Block Finished Goods">Block Finished Goods</option>
                                      <option value="Block Raw Materials">Block Raw Materials</option>
                                      <option value="Book">Book</option>
                                      <option value="Boost  Notice">Boost  Notice</option>
                                      <option value="Boost Notice">Boost  Notice</option>
                                      <option value="Boost  other cost">Boost  other cost</option>
                                      <option value="Canteen Finished Goods">Canteen Finished Goods</option>
                                      <option value="Canteen Raw Material">Canteen Raw Material</option>
                                      <option value="Carton">Carton</option>
                                      <option value="Communication">Communication</option>
                                      <option value="Computer  Allied">Computer  Allied</option>
                                      <option value="COMPUTER TRAINING">COMPUTER TRAINING</option>
                                      <option value="Crafts">Crafts</option>
                                      <option value="Crest">Crest</option>
                                      <option value="Cultural Instruments">Cultural Instruments</option>
                                      <option value="Dance Dress">Dance Dress</option>
                                      <option value="Dance props">Dance props</option>
                                      <option value="Decoration">Decoration</option>
                                      <option value="Dinning Table">Dinning Table</option>
                                      <option value="Drama Dress">Drama Dress</option>
                                      <option value="Drama Props">Drama Props</option>
                                      <option value="Educational Equipment">Educational Equipment</option>
                                      <option value="Electric Work">Electric Work</option>
                                      <option value="Equipment Repair  Maintenance">Equipment Repair  Maintenance</option>
                                      <option value="Facebook Boost Up">Facebook Boost Up</option>
                                      <option value="Food bill">Food bill</option>
                                      <option value="Food Ingredients Canteen">Food Ingredients Canteen</option>
                                      <option value="Furniture">Furniture</option>
                                      <option value="Furniture  Fixture Repair  M">Furniture  Fixture Repair  M</option>
                                      <option value="General Admin">General Admin</option>
                                      <option value="Gift items">Gift items</option>
                                      <option value="Gym and sports Equipment">Gym and sports Equipment</option>
                                      <option value="Home Visit">Home Visit</option>
                                      <option value="Huawei Media Pad">Huawei Media Pad</option>
                                      <option value="ID Card">ID Card</option>
                                      <option value="Ikebana Finished Goods">Ikebana Finished Goods</option>
                                      <option value="Ikebana Raw Materials">Ikebana Raw Materials</option>
                                      <option value="Jewelerry Raw Materials">Jewelerry Raw Materials</option>
                                      <option value="Jewelry Finished Goods">Jewelry Finished Goods</option>
                                      <option value="Karishma">Karishma</option>
                                      <option value="Kitchen Equipment  Crockeries">Kitchen Equipment  Crockeries</option>
                                      <option value="Lax Mini Sope">Lax Mini Sope</option>
                                      <option value="Liason with GoB institutes, UN">Liason with GoB institutes, UN</option>
                                      <option value="Logistc Matrial">Logistc Matrial</option>
                                      <option value="Logistc Matrial">Logistc Matrial</option>
                                      <option value="Maintenance">Maintenance</option>
                                      <option value="Maintenance (AS)">Maintenance (AS)</option>
                                      <option value="MARKETING(BOOST)">MARKETING(BOOST)</option>
                                      <option value="Mask Raw Materials">Mask Raw Materials</option>
                                      <option value="MATERIAL">MATERIAL</option>
                                      <option value="Medicine">Medicine</option>
                                      <option value="Mobile Bill">Mobile Bill</option>
                                      <option value="Muph Suta">Muph Suta</option>
                                      <option value="Music Equipment">Music Equipment</option>
                                      <option value="Office equipment  Machinery">Office equipment Machinery</option>
                                      <option value="Office Repair  Maintenance">Office Repair  Maintenance</option>
                                      <option value="Online Sales Promotion">Online Sales Promotion</option>
                                      <option value="Operating Expenses">Operating Expenses</option>
                                      <option value="Operating Expenses - Phy">Operating Expenses - Phy</option>
                                      <option value="Operating Expenses - Psy">Operating Expenses - Psy</option>
                                      <option value="Organizational Exposure Event">Organizational Exposure Event</option>
                                      <option value="Organize Training for parents ">Organize Training for parents </option>
                                      <option value="Others Maintenance">Others Maintenance</option>
                                      <option value="Paperwork Finished Goods">Paperwork Finished Goods</option>
                                      <option value="Paperwork Raw Materials">Paperwork Raw Materials</option>
                                      <option value="Participation of Mela">Participation of Mela</option>
                                      <option value="Photo Printing">Photo Printing</option>
                                      <option value="Photocopy Machine  Printer">Photocopy Machine  Printer</option>
                                      <option value="Physiotherapy">Physiotherapy</option>
                                      <option value="Pre-Vocational">Pre-Vocational</option>
                                      <option value="Printings Items">Printings Items</option>
                                      <option value="Program">Program</option>
                                      <option value="Proposal Development (Hard Cop">Proposal Development (Hard Cop</option>
                                      <option value="Psychology">Psychology</option>
                                      <option value="Raw materials (Carpet slipper">Raw materials (Carpet slipper</option>
                                      <option value="Raw materials (Coushan Cover p">Raw materials (Coushan Cover p</option>
                                      <option value="Raw materials (Door mat prod.)">Raw materials (Door mat prod.)</option>
                                      <option value="Raw materials (Shopping bag pr">Raw materials (Shopping bag pr</option>
                                      <option value="Raw materials (Table mat prod.">Raw materials (Table mat prod.</option>
                                      <option value="Renovation Work">Renovation Work</option>
                                      <option value="Rental Expenses">Rental Expenses</option>
                                      <option value="Room Decoration">Room Decoration</option>
                                      <option value="Room Maintenance">Room Maintenance</option>
                                      <option value="Security equipment">Security equipment</option>
                                      <option value="Security SurBalance">Security SurBalance</option>
                                      <option value="Sensory equipment">Sensory equipment</option>
                                      <option value="Servicing">Servicing</option>
                                      <option value="Servicing - Selling (A C)">Servicing - Selling (A C)</option>
                                      <option value="Software and patent">Software and patent</option>
                                      <option value="Staff Annual Refreshment">Staff Annual Refreshment</option>
                                      <option value="Staff Annual Refreshment">Staff Annual Refreshment</option>
                                      <option value="Stationary">Stationary</option>
                                      <option value="Stationary_2">Stationary_2</option>
                                      <option value="Surveillance Equipments">Surveillance Equipments</option>
                                      <option value="Tailoring Equipment">Tailoring Equipment</option>
                                      <option value="Tailoring Finished Goods">Tailoring Finished Goods</option>
                                      <option value="Tailoring raw material">Tailoring raw material</option>
                                      <option value="Therapy Equipment">Therapy Equipment</option>
                                      <option value="Tie-Dye Finished Goods">Tie-Dye Finished Goods</option>
                                      <option value="Tie-dye Raw Materials">Tie-dye Raw Materials</option>
                                      <option value="Training Educational Equipment">Training  Educational Equipment</option>
                                      <option value="UTILITY">UTILITY</option>
                                      <option value="Vehicle (Automobile)">Vehicle (Automobile)</option>
                                      <option value="Video  and Photo Graphic">Video  and Photo Graphic</option>
                                      <option value="Visa fee">Visa fee</option>
                                      <option value="Well being">Well being</option>
                                      <option value="windows set up">windows set up</option>
                                      <option value="Yearly Staff Recreation Tour">Yearly Staff Recreation Tour</option>
                                   </select>
                                  </div>
                           </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                            class="form-control form-control-sm form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries
                        </label>
                      </div>
                      <div class="col-sm-12 col-md-6 text-end">
                        <label style="display: inline-flex;align-items: center;">Search:
                          <input type="search" class="form-control form-control-sm" placeholder="">
                        </label>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table w-100 table-bordered">
                        <thead>
                          <tr class="table-primary">
                            <th>Code</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Measurement</th>
                            <th>Sell Price</th>
                            <th>Cost Price</th>
                            <th>Log</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>System </td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011</td>
                            <td>$320,</td>
                            <td>61</td>
                            <td>2011/</td>
                            <td>$320,</td>   
                            <td>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-pencil"></i>
                                </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        Showing 1 to 2 of 2 entries
                      </div>
                      <div class="col-sm-12 col-md-6 text-end">
                        <nav>
                          <ul class="pagination" style="justify-content: end;">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
             
                  </div>
              </div>     
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
   <!-- form repeater js -->
   <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection