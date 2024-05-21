<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Project</th>
                        <th>Type</th>
                        <th>Reference</th>
                        <th>Date</th>
                        <th>Total Item Quantity</th>
                        <th>Location From</th>
                        <th>Location To</th>
                        <th>Is Approved</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $records as $record)
                    <tr>
                        <td>{{ $record->project->title }}</td>
                        <td>{{ $record->issue_type }}</td>
                        <td>{{ $record->reference }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->total_transfer_quantity }}</td>
                        <td>{{ $record->warehouseFrom->title }}</td>
                        @if ($record->issue_type === 'Warehouse to Warehouse')
                        <td>{{ $record->warehouseTo->title }}</td>
                        @elseif ($record->issue_type === 'Warehouse to Customer')
                        <td>{{ $record->customer->name }}</td>
                        @elseif ($record->issue_type === 'Warehouse to Service Provider')
                        <td>{{ $record->supplier->name }}</td>
                        @endif
                        <td>{{ $record->is_approved ? "YES" : "NO" }}</td>
                        <td><small>{{ $record->created_at }}</small></td>
                        <td>
                            <a href="{{route('stock-transfer.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i></a>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('stock-transfer.edit', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button type="button" wire:click="confirmDelete({{$record->id}})"
                                class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>