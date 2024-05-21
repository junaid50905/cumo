<div>
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
                                              {{-- <datalist id="ItemCode" class="ItemCode">
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
                                              </datalist> --}}
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
                                              <x-input-select name="category" :records="$category" />
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
                                               {{-- <datalist id="ItemDesc" class="ItemDesc">
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
                                               </datalist> --}}
                                            </div>
                                         </div>
                                        <div class="row mb-4">
                                           <div class="col-4 d-flex align-items-center">
                                             <h6>Type</h6>
                                           </div>
                                            <div class="col-8">
                                              <x-input-select name="type"  :records="$productType"/>
                                            </div>
                                         </div>
                                        <div class="row mb-4">
                                           <div class="col-4 d-flex align-items-center">
                                             <h6>Measurement</h6>
                                           </div>
                                            <div class="col-8">
                                              <x-input-select name="measuremen" :records="$measurements" />
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
                                  <x-input-text name="Price" type="number" placeholder="Cost Price here"></x-input-text>
                              </div>
                            </div>
                            <div class="row ">
                              <div class="col-12 p-0">
                                  <div class="card">
                                      <div class="card-body">
                                          <h4 class="card-title mb-4">Product BOM</h4>
                                          <form class="repeater" enctype="multipart/form-data">
                                              <div class="row">
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
                                                @foreach ($inputs as $key => $item)
                                                <div data-repeater-item class="row removeRow">
                                                    <div  class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                                        <select class="form-control form-select" wire:model="product_id.{{$key}}">
                                                            <option>--Select--</option>
                                                            @foreach($products as $product)
                                                            <optgroup label="{{$product['name']}}">
                                                                @foreach($product['children'] as $childCourse)
                                                                <option value="{{$childCourse['id']}}">{{$childCourse['name']}}</option>
                                                                @endforeach
                                                            </optgroup>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class=" col-lg-4 p-0 pe-1 pb-1">
                                                        <x-input-select :records="$unitType" wireModel="measure_unit.{{ $key }}" />
                                                    </div> --}}
                                                    {{-- <div class="col-lg-4 p-0 pe-1 pb-1 align-self-center d-flex">
                                                        <x-input-text type="number" wireModel="qty.{{ $key }}"></x-input-text>
                                                        @if (!($this->mode == 'show'))
                                                        <button type="button" class="btn ms-2 btn-danger t removeBtn"
                                                            wire:click="removeItem({{ $key }})">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                        @endif
                                                    </div> --}}

                                                    <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                                      <x-input-text name="measure_unit" ></x-input-text>
                                                    </div>

                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                      <x-input-text name="qualaty" type="number"></x-input-text>
                                                    </div>
                                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                      <x-input-text name="price" type="number"></x-input-text>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @if (!($this->mode == 'show'))
                                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                                                    wire:click="addMore()" />
                                                @endif
                                            </div>

                                              {{-- <div data-repeater-list="group-a">
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
                                              <input data-repeater-create type="button" class="btn btn-outline-success mt-3 mt-lg-0" value="Add"/> --}}
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
