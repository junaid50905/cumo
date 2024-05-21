<div>
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text wireModel="date" type="date" placeholder="dd M, yyyy"></x-input-text>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="text-end form-label">Note</label>
                <x-input-textarea wireModel="note" rows="1" placeholder="Enter Note Here" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h2 class=" text-center mb-4">All Products</h2>
                    <form class="repeater" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 p-0 pe-1">
                                <label for="name">Product</label>
                            </div>
                            <div class="col-lg-3 p-0 pe-1">
                                <label for="product">Total Stock</label>
                            </div>
                            <div class="col-lg-5 p-0 pe-1">
                                <label for="quality">Stock Out</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            @foreach ($inputs as $key => $item)
                            <div data-repeater-item class="row removeRow">
                                <div class="col-lg-4 d-flex p-0 pe-1 pb-1">
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
                                <div class=" col-lg-3 p-0 pe-1 pb-1">
                                    <x-input-text wireModel="total_stock.{{ $key }}" :readOnly="true">
                                    </x-input-text>
                                </div>
                                <div class="col-lg-5 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text wireModel="stock_out.{{ $key }}" type="number" placeholder="0">
                                    </x-input-text>
                                    @if (!($this->mode == 'show'))
                                    <button type="button" class="btn mb-1 btn-danger ms-1 waves-effect waves-light removeBtn"
                                        wire:click="removeItem({{ $key }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @if (!($this->mode == 'show'))
                            <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"
                                wire:click="addMore()" />
                            @endif
                        </div>
                    </form>
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
                <a id="goback_button" href="{{route('stock-out.create')}}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            </div>
            {{-- <a href="{{route('stock-out.create')}}" class="btn btn-lg btn-success w-100">
                Go Back
            </a> --}}
            @endif
        </div>
    </div>
</div>
