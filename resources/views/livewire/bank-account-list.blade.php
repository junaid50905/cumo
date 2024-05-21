<div class="table-responsive">
    <x-record-list :records="$records">
        <table class="table w-100 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Bank</th>
                    <th>Account No</th>
                    <th>Account Name</th>
                    <th>Initial Balance</th>
                    <th>Current Balance</th>
                    <th>Note</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{ $record->bank }}</td>
                    <td>{{ $record->account_no }}</td>
                    <td>{{ $record->account_name }}</td>
                    <td>{{ $record->initial_balance }}</td>
                    <td>{{ $record->current_balance }}</td>
                    <td>{{ $record->note }}</td>
                    <td><small>{{ $record->created_at }}</small></td>
                    <td>
                        <button type="button" wire:click="confirmDelete({{$record->id}})"
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