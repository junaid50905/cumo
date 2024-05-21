<div>
    <section>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Warehouses</label>
                    <x-input-select wireModel="warehouse_id" :records="$warehouse"  targetColumn="title"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="basicpill-lastname-input">Date:</label>
                    <x-input-text type="date" wireModel="date" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <h4 class="text-center pt-3">All Products</h4>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="product_id">Product</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="unit">Unit</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="counted_stock">Counted Stock</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                @foreach ($inputs as $key => $item)
                                    <div data-repeater-item class="row removeRow">
                                        <div class=" col-lg-4 p-0 pe-2 ps-4 pb-1">
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
                                        {{-- <div class="col-lg-4 d-flex p-0 pe-1 pb-1 align-items-center">

                                        </div> --}}
                                        <div class=" col-lg-4 p-0 pe-2 ps-2 pb-1">
                                            <x-input-text wireModel="unit.{{ $key }}" type="text" />
                                        </div>
                                        <div class="col-lg-4 p-0 pe-4 ps-2 pe-2 pb-1 align-self-center d-flex">
                                            <x-input-text wireModel="counted_stock.{{ $key }}" type="text" />
                                            @if (!($this->mode == 'show'))
                                                <button type="button"
                                                    class="btn mb-1 ms-1 btn-danger waves-effect waves-light removeBtn"
                                                    wire:click="removeItem({{ $key }})">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if (!($this->mode == 'show'))
                                <input data-repeater-create type="button" class="btn btn-success mt-3 ms-3 mt-lg-0"
                                    value="Add" wire:click="addMore()" />
                            @endif
                        </form>
                        <div class="col-lg-12 gap-2 pt-3 d-flex">
                            <div class="col-4 text-end">
                                <label for="basicpill-phoneno-input">Note:</label>
                            </div>
                            <div class="col-6">
                                <x-input-text wireModel="note" type="text" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="w-25">
                                @if ($this->mode == 'edit')
                                    <button class="btn btn-lg btn-success w-100" wire:click="update()">Update</button>
                                @elseif (!$this->mode == 'show')
                                    <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
                                @else
                                    <a href="{{ route('yearend.create') }}" class="btn btn-lg btn-success w-100">
                                        Go Back
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
