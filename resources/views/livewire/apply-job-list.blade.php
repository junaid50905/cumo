<div>
  <x-record-list :records="$records">
    <div class="row"> 
      <div class="table-responsive">
        <table class="table table-bordered w-100">
          <thead>
            <tr class="table-primary">
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Applying Position</th>
                <th>Age</th>
                <th>Log</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
            <tr>
                <td>{{ $record->name }}</td>
                <td>{{ $record->mobile_number }}</td>
                <td>{{ $record->email_add }}</td>
                <td>{{ $record->applying_for }}</td>
                <td>{{ $record->age }}</td>
                <td>{{ $record->created_at }}</td>
                <td>
                  <a href="{{ route('apply.show', $record->id) }}" type="button"
                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="mdi mdi-eye"></i></a>

                    <button type="button" wire:click="toggleApprove({{ $record->id }})"
                      class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-check"></i>
                    </button>
                  
                    <a href="{{ route('apply.edit', $record->id) }}" target="_blank"
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
      <div class="row">
        <div class="col-sm-12 col-md-6">
          Showing 1 to 2 of 2 entries
        </div>
        <div class="col-sm-12 col-md-6 text-end">
          <nav>
            <ul class="pagination" style="justify-content: end;">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </x-record-list>  
</div>
