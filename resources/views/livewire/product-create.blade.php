<div>
    <div class="row">
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Code</label>
            <div class="col-md-8">
                <x-input-text wireModel="code" placeholder="Code"></x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Name</label>
            <div class="col-md-8">
                <x-input-text wireModel="name" placeholder="Name"></x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex pt-2 pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Description</label>
            <div class="col-md-8">
                <x-input-textarea wireModel="description" rows=1 placeholder="Description">
                </x-input-textarea>
            </div>
        </div>
        <div class="col-6 d-flex pt-2 pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Type</label>
            <div class="col-md-8">
                <x-input-select wireModel="type" :records="$types" />
            </div>
        </div>

        <div class="col-6 d-flex  pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Category</label>
            <div class="col-md-8">
                <x-input-select wireModel="category_id" :records="$categories" targetColumn="name" />
            </div>
        </div>
        <div class="col-6 d-flex  pb-2">
            <label for="example-text-input" class="col-md-3 col-form-label">Measurement</label>
            <div class="col-md-8">
                <x-input-select wireModel="unit_id" :records="$unit" />
            </div>
        </div>

        <div class="col-6 d-flex pb-4">
            <label for="example-text-input" class="col-md-3 col-form-label">Reorder Quantity</label>
            <div class="col-md-8">
                <x-input-text type="number" wireModel="reorder_quantity" placeholder="Reorder Quantity">
                </x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex">
            <label for="example-text-input" class="col-md-3 col-form-label">Image</label>
            <div class="col-md-8">
                <div>
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input wireModel="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>
                            <h4>Please uploade product Image.</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-4 pb-4 ">
            <div class="hide_sell">
                <h4 class="pb-0 mb-0 ">Is Sale Item:</h4>
                <label for="example-text-input" class="col-form-label">Sell Price</label>
                <x-input-text type="number" wireModel="selling_price" placeholder="Sell Price">
                </x-input-text>
            </div>
        </div>
        <div class="col-4 pb-4 ">
            <div class="hide_cost">
                <h4 class="pb-0 mb-0">Is Purchase Item:</h4>
                <label for="example-text-input" class=" col-form-label">Cost Price</label>
                <x-input-text wireModel="making_cost" type="number" placeholder="Cost Price Here">
                </x-input-text>
            </div>
        </div>
        <div class="col-4 pb-4 ">
            <div class="hide_expiry">
                <h4 class="pb-0 mb-0">Is Expirable Item:</h4>
                <label for="example-text-input" class=" col-form-label ">Expiry Alert</label>
                <x-input-text type="number" wireModel="expiry_alert" placeholder="Expiry Alert">
                </x-input-text>
            </div>
        </div>
    </div>
    <h4 class="card-title mb-4">Product BOM</h4>
    <form class="repeater" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-2 p-0 pe-1">
                <label for="product">Product</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="measure">Measure Unit</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="quality">Quantity</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="price">Price</label>
            </div>
            <div class="col-lg-2 p-0 pe-1">
                <label for="cost">Cost Price</label>
            </div>
        </div>
        <div data-repeater-list="group-a">
            @foreach ($inputs as $key => $item)
            <div data-repeater-item class="row removeRow">
                <div class=" col-lg-3 p-0 pe-1 pb-1">
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
                <div class=" col-lg-3 p-0 pe-1 pb-1">
                    <x-input-text wireModel="measure.{{ $key }}" placeholder="Measure Unit">
                    </x-input-text>
                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-text wireModel="quantity.{{ $key }}" placeholder="Quantity">
                    </x-input-text>
                </div>
                <div class=" col-lg-2 p-0 pe-1 pb-1">
                    <x-input-text wireModel="price.{{ $key }}" type="number" placeholder="Price">
                    </x-input-text>
                </div>
                <div class="col-lg-2 p-0 pe-1 pb-1 d-flex">
                    <x-input-text wireModel="cost.{{ $key }}" type="number" placeholder="Cost">
                    </x-input-text>
                    <button type="button" class="btn ms-2 btn-danger t removeBtn" wire:click="removeItem({{ $key }})">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        @if (!($this->mode == 'show'))
        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
            wire:click="addMore()" />
        @endif
    </form>
    <div class="row pt-3">
        <div class="col-6 d-flex pb-3 ">
            <label for="example-datetime-local-input" class=" pe-2 col-form-label">
                <h4 class="pb-0 mb-0 ">Sale price in Percent</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                {{-- <input class="form-check-input" id="sell" type="checkbox" wireModel="container"> --}}
                <x-input-text id="sell" type="checkbox" wireModel="sale_price_in_percent">
                </x-input-text>
            </div>
        </div>
        <div class="col-6 d-flex pb-3">
            <label for="example-datetime-local-input" class="pe-2 col-form-label">
                <h4 class="pb-0 mb-0">Is Active:</h4>
            </label>
            <div class="form-check d-flex align-items-center ">
                {{-- <input class="form-check-input" id="cost" type="checkbox" wireModel="container"> --}}
                <x-input-text id="cost" type="checkbox" wireModel="is_active">
                </x-input-text>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="w-25">
            @if ($this->mode == 'edit')
            <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
            @elseif (!$this->mode == 'show')
            <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
            @else
            <a href="{{ route('product.create') }}" class="btn btn-lg btn-success w-100">
                Go Back
            </a>
            @endif
        </div>
    </div>
</div>
