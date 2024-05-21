<div>
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex align-items-center">
                <label class="me-3">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Item Code</th>
                                <th>Item Desc</th>
                                <th>Stock Qnty</th>
                                <th>Unit Name</th>
                                <th>Cat Name</th>
                                <th>Reorder Qty</th>
                                <th>Store Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($stockHandRecords as $key => $stockHandRecord)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $stockHandRecord->product->code }}</td>
                                <td><small>{{ $stockHandRecord->product->description }}</small></td>
                                <td>{{ $stockHandRecord->qty }}</td>
                                <td>{{ $stockHandRecord->product->unit->name }}</td>
                                <td>{{ $stockHandRecord->product->category->name }}</td>
                                <td>99</td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="card-body text-center">Sorry! No Record Found.</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>