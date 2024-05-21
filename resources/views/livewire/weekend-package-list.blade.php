<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Package Name</th>
                        <th>Sunday </th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Total Week End</th>
                        <th>log</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->package_name }}</td>
                        <td>{{ $record->sunday ? "Yes" : "No" }}</td>
                        <td>{{ $record->monday ? "Yes" : "No" }}</td>
                        <td>{{ $record->tuesday ? "Yes" : "No" }}</td>
                        <td>{{ $record->wednesday ? "Yes" : "No" }}</td>
                        <td>{{ $record->thursday ? "Yes" : "No" }}</td>
                        <td>{{ $record->friday ? "Yes" : "No" }}</td>
                        <td>{{ $record->saturday ? "Yes" : "No" }}</td>
                        <td>{{ $record->created_by }}</td>
                        <td>{{ $record->created_by }}</td>
                        <td>
                            <a href="{{ route('weekend-package.edit', $record->id) }}" target="_blank"
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