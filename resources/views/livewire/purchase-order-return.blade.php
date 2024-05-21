<div class="tab-pane active" id="purchase_order" role="tabpanel">
    @if($record)
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" :disabled="true" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Requisition</label>
                <x-input-select wireModel="requisition_id" :records="$requisitions" targetColumn="title"
                    :selected="$record->id" :disabled="true" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <x-input-select wireModel="supplier_id" :records="$suppliers" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text wireModel="date" type="date"></x-input-text>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="m-3 mt-4">
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light"
                    data-bs-toggle="modal" data-bs-target=".purchase-order-view">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div> --}}

    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <!-- 6th row start  -->
                    <div class="row py-3 bg-secondary text-light rounded-3 mb-4">
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    Discount</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    Item</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    Cost</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-4 text-end col-form-label">
                                    VAT</label>
                                <div class="col-8">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 6th row end  -->
                    <h4 class="card-title mb-4">All product</h4>
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="name">Product</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="product">Exp. Date</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="product">Avl. Qnty </label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="quality">Qnty</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="discount">Price</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="subtotal">VAT %</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="subtotal">Discount</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="subtotal">Subtotal</label>
                            </div>
                        </div>
                        @foreach($inputs as $key => $item)
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row">
                                <div class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                    <select class="form-control form-select" wire:model="product_id.{{$key}}" disabled>
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
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="exp_date.{{$key}}" type="date"></x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="available_qty.{{$key}}" type="number" :readOnly="true">
                                    </x-input-text>
                                </div>

                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="qty.{{$key}}" type="number">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="price.{{$key}}" type="number" :readOnly="true">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="vat.{{$key}}" type="number">
                                    </x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="discount.{{$key}}" type="number" :readOnly="true">
                                    </x-input-text>
                                </div>
                                <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text wireModel="sub_total.{{$key}}" type="number" />
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </form>
                    <!-- 7th row start  -->
                    <div class="row mt-3 justify-content-center ">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input"
                                    class="col-2 text-end col-form-label">Note</label>
                                <div class="col-10">
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
            <a href="{{route('purchase-order-return.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
    <!-- end row -->
    @else
    <h2 class="text-center">Come Through Requisition</h2>
    @endif
</div>