<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Package Name</th>
                        <th>Amount</th>
                        <th>IsInPercent</th>
                        <th>Salary Head</th>
                        <th>Each Year Payment</th>
                        <th>Currency</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->package_name }}</td>
                        <td>{{ $record->amount }}</td>
                        <td>{{ $record->is_in_percent }}</td>
                        <td>{{ $record->sal_head }}</td>
                        <td>{{ $record->total_amount }}</td>
                        <td>{{ $record->curnc_id }}</td>
                        <td><small>{{ $record->created_at }}</small></td>
                        <td>
                            <a href="{{ route('bonus-package.show', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>
                            <a href="{{ route('bonus-package.edit', $record->id) }}" target="_blank"
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
