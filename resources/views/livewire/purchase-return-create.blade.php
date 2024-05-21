<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Purchase</label>
                <x-input-select wireModel="purchase" :records="$purchase" targetColumn="invoice_no" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Return Date</label>
                <x-input-text wireModel="collection_date" type="date"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Reference</label>
                <x-input-text wireModel="reference" type="text"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <!-- 6th row start  -->
                    <div>
                        <h3 class="text-success">Total</h3>
                    </div>
                    <div class="row bg-secondary text-light rounded-3 mb-4">
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label">
                                    Discount</label>
                                <div class="col-7">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label">
                                    Item</label>
                                <div class="col-7">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label">
                                    Cost</label>
                                <div class="col-7">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label">
                                    VAT</label>
                                <div class="col-7">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Total
                                    Deduction</label>
                                <div class="col-7">
                                    <strong class="form-control">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-5 text-end col-form-label"> Total
                                    Amount</label>
                                <div class="col-7">
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
                                <label for="quality">Qnty</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="discount">Price</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="subtotal">VAT</label>
                            </div>
                            <div class="col-lg-1 p-0 pe-1">
                                <label for="subtotal">Discount</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="subtotal">Deduct</label>
                            </div>
                            <div class="col-lg-2 p-0 pe-1">
                                <label for="subtotal">Subtotal</label>
                            </div>
                        </div>
                        <div data-repeater-list="group-a">
                            <div data-repeater-item class="row removeRow">

                                <div class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                    <select id="formrow-inputState" class="form-select py-0">
                                        <option selected="">--Select--</option>
                                        <option value="1">Koi Fish::191</option>
                                        <option value="2">Talapia Fish::193</option>
                                        <option value="3">Fish - Pangash Fish::1641</option>
                                    </select>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf" type="date"></x-input-text>
                                </div>

                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf"></x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf" placeholder="190"></x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf" placeholder="00"></x-input-text>
                                </div>
                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf" placeholder="00"></x-input-text>
                                </div>
                                <div class=" col-lg-2 p-0 pe-1 pb-1">
                                    <x-input-text name="yousuf" placeholder="190" type="number"></x-input-text>
                                </div>
                                <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                    <x-input-text name="yousuf" placeholder="190"></x-input-text>
                                    <button class="btn btn-danger ms-2 removeBtn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                            value="Add" />
                    </form>
                    <!-- 7th row start  -->
                    <div class="row mt-3 justify-content-center ">
                        <div class="col-lg-6">
                            <div class="row mb-2">
                                <label for="horizontal-firstname-input"
                                    class="col-2 text-end col-form-label">Note</label>
                                <div class="col-10">
                                    <x-input-textarea name="yousuf" rows="1">
                                    </x-input-textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 7th row end  -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <button class="btn btn-danger w-100">Reset</button>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success w-100">Save</button>
        </div>
    </div>
</div>
