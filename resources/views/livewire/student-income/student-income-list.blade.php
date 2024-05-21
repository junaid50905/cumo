<div>
    <x-record-list :records="$records" title="STUDENT QAS">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>Project Name</th>
                    <th>Voucher Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record )
                <tr>
                    <td>{{ $record->income->project->title }}</td>
                    <td>{{ $record->income->date }}</td>
                    <td>{{ $record->income->amount }}</td>
                    <td class="text-center">
                        {{--<button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i></button>--}}
                            <a href="{{route('student-income.show', $record->id)}}"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                <i class=" fas fa-eye"></i>
                                </a>
                        <a href="{{route('student-income.edit', $record->id)}}"
                           class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-pen"></i></a>
                        <button type="button" wire:click="confirmDelete({{$record->id}})"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-record-list>
</div>
