<div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">Warehouse</label>
                <x-input-select wireModel="warehouse_id" :records="$warehouses" targetColumn="title" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label>Date</label>
                <x-input-text name="hh" type="date"></x-input-text>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">
                    <h2 class=" text-center mb-4">All Products</h2>
                    <div class="">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Product</th>
                                    <th>Project</th>
                                    <th>Unit</th>
                                    <th>Available Stock</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($stockCountRecords as $key => $stockCountRecord)
                                <tr>
                                    <td style="width: 80px">{{ ++$key }}</td>
                                    <td>{{ $stockCountRecord->product->name }}</td>
                                    <td>{{ $stockCountRecord->project->title }}</td>
                                    <td>{{ $stockCountRecord->product->unit->name }}</td>
                                    <td>{{ $stockCountRecord->qty }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- table start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>