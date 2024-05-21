<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                    <tr class="table-primary">
                        <th class="">Project</th>
                        <th class="">Category</th>
                        <th class="">Log</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->title }}</td>
                            <td>{{ $record->location }}</td>
                            <td>{{ $record->store_type }}</td>
                            <td>{{ $record->description }}</td>
                            <td>
                                <a href="{{ route('warehouse.show', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="{{ route('warehouse.edit', $record->id) }}" target="_blank"
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
