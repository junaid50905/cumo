<div>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        Some Product are Same
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select :records="$projects" wireModel="project_id" targetColumn="title"></x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Requested By</label>
                <x-input-select :records="$users" wireModel="requested_by" additional="email"></x-input-select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text wireModel="date" name="date" type="date"></x-input-text>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Requisition Title</label>
                <x-input-text wireModel="title" type="text" placeholder="Enter Requisition Name here">
                </x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouses</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title">
                </x-input-select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0 pt-3">
            <div class="card">
                <div class="text-center">
                    <h4 class="mb-4">All product</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="repeater">
                        <div class="row">
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Product</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="product">Available Quality </label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="discount">Price</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="quality">Quantity</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="total">Sub-total</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="total">Account</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="total">Budget Head</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="total">Budget Sub Head</label>
                            </div>
                            {{-- <div class="col-lg-2 p-0 pe-1">
                                <label for="subtotal">Discount</label>
                            </div> --}}
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <select class="form-control form-select" wire:model="product_id.{{$key}}">
                                        <option></option>
                                        @foreach($products as $product)
                                        <optgroup label="{{$product['name']}}">
                                            @foreach($product['children'] as $childCourse)
                                            <option value="{{$childCourse['id']}}">{{$childCourse['name']}}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="available_qty.{{$key}}" type="number"
                                        sub_total="true">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="price.{{$key}}"></x-input-text>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text type="number" wireModel="qty.{{$key}}"></x-input-text>
                                </div>

                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text type="text" wireModel="sub_total.{{$key}}" type="number"
                                        sub_total="true">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-select :records="$chartOfAccount"  wireModel="account.{{$key}}"
                                        targetColumn="account_name">
                                    </x-input-select>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-select :records="$budgetHead" wireModel="budget_head_id.{{$key}}"
                                        targetColumn="title">
                                    </x-input-select>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                    <x-input-select :records="$budgetHead" wireModel="budget_sub_head_id.{{$key}}"
                                        targetColumn="title">
                                    </x-input-select>
                                    @if (!($this->mode == 'show'))
                                    <button type="button" class="btn mb-1 ms-1 btn-danger waves-effect waves-light removeBtn"
                                        wire:click="removeItem({{ $key }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    @endif
                                </div>
                                {{-- <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                    <x-input-text type="text" wireModel="discount.{{$key}}"></x-input-text>

                                </div> --}}
                            </div>
                            @endforeach
                        </div>
                        @if (!($this->mode == 'show'))
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                            wire:click="addMore()" />

                        @endif
                    </div>
                    <!-- 7th row start  -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mt-3">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input"
                                    class="col-3 text-end col-form-label">Note</label>
                                <div class="col-9">
                                    <x-input-textarea wireModel="note" rows="1"></x-input-textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 7th row end  -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!($this->mode) == 'show')
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
            <div class="d-flex">
                <button onClick="printdiv('div_print');"  class="btn btn-danger w-100 me-3" id="print_button">Print</button>
                <a id="goback_button" href="{{route('requisition.create')}}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            </div>
            @endif
        </div>
    </div>
    <!-- end row -->
</div>
