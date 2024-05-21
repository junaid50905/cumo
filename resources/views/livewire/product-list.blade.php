<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100 table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Code</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Measurement</th>
                        <th>Sell Price</th>
                        <th>Cost Price</th>
                        <th>Log</th>
                        <th class="nowrap">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->code }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->type }}</td>
                            <td>{{ $record->category_id}}</td>
                            <td>{{ $record->unit_id }}</td>
                            <td>{{ $record->selling_price }}</td>
                            <td>{{ $record->making_cost }}</td>
                            <td>{{ $record->create_at }}</td>
                            <td>
                                <a href="{{ route('product.show', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </a>

                                <a href="{{ route('product.edit', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" wire:click="confirmDelete({{ $record->id }})"
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
