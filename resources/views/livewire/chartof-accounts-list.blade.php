<div>
    <x-record-list :records="$records">
    <div class="table-responsive">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>Acc. No. </th>
                    <th>Acc. Name</th>
                    <th>Parent Acc. </th>
                    <th>Opening Balance</th>
                    <th>Current Balance</th>
                    <th>Acc. Group</th>
                    <th>Defaolt Nature</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{ $record->type_name }}</td>
                    <td>{{ $record->account_name }}</td>
                    <td>{{ $record->parent_account }}</td>
                    <td>{{ $record->opening_balance }}</td>
                    <td>{{ $record->current_balance }}</td>
                    <td>{{ $record->account_group }}</td>
                    <td>{{ $record->account_group }}</td>
                    <td>{{ $record->created_at }}</td>
                    <td>
                        <a href="{{ route('chartof-accounts.show', $record->id) }}" target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i>
                        </button>
                        <a href="{{ route('chartof-accounts.edit', $record->id) }}" target="_blank"
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
    </div>
    </x-record-list>
</div>
