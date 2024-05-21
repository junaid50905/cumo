<div>
  <x-record-list :records="$records">
    <div class="row ">
      <div class="col-6 d-flex mb-3">
        <label for="example-text-input" class="col-md-4 col-form-label pe-2">Select Month</label>
        <div class="col-md-8">
          <x-input-text type="month" wireModel="month" />
        </div>
      </div>
      <div class="col-6 d-flex mb-3 justify-content-end">
        <button class="btn btn-success" wire:click="getSpecificMonthData">Search by Month</button>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered w-100">
        <thead>
          <tr class="table-primary">
            <th>Employee Name</th>
            <th>Total Attendence</th>
            <th>Absent</th>
            <th>Log</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($records as $record)
          @foreach ($record->details as $detail)
          <tr>
            <td>{{ $detail->employee->name ?? ""}}</td>
            <td></td>
            <td></td>
            <td>{{ $detail->created_at}}</td>
            <td>
              <a href="{{ route('attendence.show', $record->id) }}" target="_blank" rel="noopener noreferrer"
                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                <i class="mdi mdi-eye"></i>
              </a>
              
              <a href="{{route('attendence.edit', $record->id)}}" type="button"
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
          @endforeach
        </tbody>
      </table>
    </div>
  </x-record-list>
</div>