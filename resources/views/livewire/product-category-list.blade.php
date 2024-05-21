<div>
    <x-record-list :records="$records">
    <div class="row">
        <div class="col p-0 table-responsive border-0">
            <table id="datatable-buttons" class="table table-bordered table-responsive w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Category Name</th>
                        <th>Parent Acc</th>
                        <th>Sequence</th>
                        <th>Tire</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->parent_category_id}}</td>
                        <td>{{ $record->seqence }}</td>
                        <td>{{ $record->tire_no }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('category.show', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>
                            <a href="{{ route('category.edit', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
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
        </div> <!-- end col -->
    </div>
    </x-record-list>
</div>
