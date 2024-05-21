<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12 d-flex justify-content-center align-items-center pb-3">
                        <label class="">Filter :
                        </label>
                        <div class="px-2 w-25">
                            <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title"/>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered nowrap w-100">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Item Code</th>
                                    <th>Item Desc</th>
                                    <th>Stock Qnty</th>
                                    <th>Unit Name</th>
                                    <th>Cat Name</th>
                                    <th>Recorder Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stockReorderRecords as $key => $stockReorderRecord)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $stockReorderRecord->product->code }}</td>
                                    <td><small>{{ $stockReorderRecord->product->description }}</small></td>
                                    <td>{{ $stockReorderRecord->qty }}</td>
                                    <td>{{ $stockReorderRecord->product->unit->name }}</td>
                                    <td>{{ $stockReorderRecord->product->category->name }}</td>
                                    <td>99</td>
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
            </div>
        </div> <!-- end col -->
    </div>
</div>
