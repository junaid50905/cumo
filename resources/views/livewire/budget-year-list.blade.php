<div>
    <x-record-list :records="$records">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>date</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
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
