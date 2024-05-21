<div>
    <!-- form start -->
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Project</label>
                <x-input-select wireModel="project_id" :records="$projects" targetColumn="title">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <x-input-select wireModel="supplier_id" :records="$suppliers" additional="phone">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Payment Date</label>
                <x-input-text wireModel="date" type="date"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Remarks</label>
                <x-input-text wireModel="remark" type="text"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Invoice (Purchase
                    Order)</label>
                <x-input-select wireModel="purchase_id" :records="$purchaseOrder" targetColumn="invoice_no">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Note</label>
                <x-input-textarea wireModel="note" rows="1"></x-input-textarea>
            </div>
        </div>
    </div>
    @if ($purchaseOrderInfo)

    {{-- Purchase Info Start --}}
    <div class="row border border-3 border-danger">
        <h3 class="mb-4 text-center">All product</h3>
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
                <label for="quality">Stock Receive</label>
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
            <div class="col-lg-1 p-0 pe-1">
                <label for="subtotal">Payable</label>
            </div>
        </div>
        @foreach($purchaseOrderInfo->details as $key => $item)
        <div class="row my-2">
            <div class="col-lg-2 d-flex p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->product->name }}</p>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->exp_date }}</p>
            </div>
            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->available_qty }}</p>
            </div>

            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->qty }}</p>
            </div>
            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->total_receive_qty }}</p>
            </div>
            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->price }}</p>
            </div>
            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->vat }}</p>
            </div>
            <div class=" col-lg-1 p-0 pe-1 pb-1">
                <p class="form-control">{{ $item->discount }}</p>
            </div>
            <div class="col-lg-1 p-0 pe-1 pb-1 align-self-center d-flex">
                <p class="form-control">{{ $item->price * $item->total_receive_qty }}</p>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-lg-2 d-flex p-0 pe-1 pb-1">
                <label for="quality">Purchase Order Price</label>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <p class="form-control">{{ $purchaseOrderPrice }}</p>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <label for="quality">Total Paid</label>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <p class="form-control">{{ $totalPaid }}</p>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <label for="quality">Total Payable</label>
            </div>
            <div class=" col-lg-2 p-0 pe-1 pb-1">
                <p class="form-control">{{ $payable }}</p>
            </div>
        </div>
    </div>
    {{-- Purchase Info End --}}
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Cash Pay</label>
                <x-input-text wireModel="cash"></x-input-text>
            </div>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Bank Account</label>
                <x-input-select wireModel="bank_account_id" :records="$bankAccount" targetColumn="account_name">
                </x-input-select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Cheque</label>
                <x-input-select wireModel="cheque_id" :records="$cheque" targetColumn="page_no">
                </x-input-select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="validationCustom02" class="form-label">Amount</label>
            <x-input-text wireModel="cheque_amount" type="text"></x-input-text>
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
                <a id="goback_button" href="{{route('supplier-payment.create')}}" class="btn btn-lg btn-success w-100">
                    Go Back
                </a>
            </div>
            @endif
        </div>
    </div>
</div>