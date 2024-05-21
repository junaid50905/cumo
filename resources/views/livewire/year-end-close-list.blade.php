<div>
<x-record-list :records="$records">

    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
        <thead>
            <tr class="table-primary">
                <th>Warehouse</th>
                <th>Count Date</th>
                <th>Counted By</th>
                <th>Note</th>
                <th>Is Approved</th>
                <th>Log</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->warehouse->title }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->counted_by }}</td>
                    <td>{{ $record->note }}</td>
                    <td>{{ $record->is_approved }}</td>
                    <td>{{ $record->created_at }}</td>
                    <td>
                        <button type="button" wire:click="toggleApprove({{ $record->id }})"
                            class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>

                        <a href="{{ route('yearend.edit', $record->id) }}" target="_blank"
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
        

</x-record-list>
</div>
