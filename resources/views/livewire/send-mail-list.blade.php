<div>
    <x-record-list :records="$records">

        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>

                    <tr>
                        <th>Depertmnet</th>
                        <th>To</th>
                        <th>Subject</th>
                        <th>Date </th>
                        <th>time</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    @foreach($record->details as $key => $value)
                    <tr>
                        <td>{{ $record->dep->department_name  ??''}}</td>
                        <td>{{ $value->to  ??''}}</td>
                        <td>{{ $value->subject }}</td>
                        <td>{{ $value->date }}</td>
                        <td>{{ $value->time }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('send-mail.show', $record->id) }}" target="_blank"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>

                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                            wire:click="confirmDelete({{$record->id}})">
                            <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        @endforeach
        @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>
