@extends('layouts.master')

@section('title')
    @lang('translation.Report_Details')
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-center header__part">
                        <div class="col-xl-9">
                            <p style="color: #7e8d9f;font-size: 20px;">Report >> <strong>ID: #{{ $appointment->student_id }}</strong></p>
                        </div>
                        <div class="col-xl-3 d-flex align-items-center justify-content-end gap-2">
                            <a id="printButton" class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark">
                                <i class="fas fa-print text-primary"></i> Print
                            </a>
                            <button type="button" class="btn btn-primary text-capitalize" style="background-color:#60bdf3;" onclick="window.location.href = '{{ url()->previous() }}';">Back</button>
                        </div>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="text-center">
                            <h3>Report Details of {{ $appointment->name }}</h3>
                            <p class="pt-0">cumo.com</p>
                        </div>

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-6">
                                <p class="text-muted"><strong>Appointment Details</strong></p>
                                <ul class="list-unstyled">
                                    <li class="text-muted"><strong>Name: </strong>{{ $appointment->name }}</li>
                                    <li class="text-muted"><strong>Father's Name: </strong>{{ $appointment->father_name }}</li>
                                    <li class="text-muted"><strong>Mother's Name: </strong>{{ $appointment->mother_name }}</li>
                                    <li class="text-muted"><strong>Phone: </strong>{{ $appointment->phone_number }}</li>
                                </ul>
                            </div> 
                            <div class="col-xl-6 text-end">
                                <p class="text-muted"><strong>Invoice</strong></p>
                                <ul class="list-unstyled">
                                    <li class="text-muted">#{{ $appointment->student_id }}</li>
                                    <li class="text-muted">{{ $appointment->created_at->format('d-M-Y') }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row my-2 mx-1 justify-content-center table-responsive">
                            <table class="table table-sm table-hover table-striped table-bordered">
                                <thead style="background-color:#84B0CA;" class="text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $loopIndex = 1; @endphp  

                                    @forelse ($data as $index => $result)
                                        <tr>
                                            <th scope="row">{{ $loopIndex }}</th>
                                            <td>{{ ucfirst(str_replace('_', ' ', $index)) }}</td> 
                                            <td>{{ $result }}</td>  
                                        </tr>
                                        @php $loopIndex++; @endphp 
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No data available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="field__data">
                                    <div class="field__label">
                                        <span>Suggestions for future meetings</span>
                                    </div>
                                    <div class="input__field_data mt-3">
                                        <form action="{{ route('care_need_part_one_suggestion') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="appointment_id" value="{{ $appointment->id}}" />
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <x-input-radio-or-check 
                                                            name="observation"
                                                            label="Do you want to observation?"
                                                            selectedValue="{{ $suggestionData->observation ?? '' }}"
                                                            :records="$projectConstants::$yesNoEn" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <x-input-radio-or-check 
                                                            name="follow_up"
                                                            selectedValue="{{ $suggestionData->follow_up ?? '' }}"
                                                            label="Do you want to follow up?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <x-input-radio-or-check 
                                                            name="assessment"
                                                            label="Do you want to assessment?"
                                                            selectedValue="{{ $suggestionData->assessment ?? '' }}"
                                                            :records="$projectConstants::$yesNoEn" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <x-input-radio-or-check 
                                                            name="reference" 
                                                            label="Do you want to reference?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            selectedValue="{{ old('reference', $suggestionData->reference ?? '') }}"
                                                            secondaryInputName="reference_name" 
                                                            secondaryInputLabel="If Yes, Enter reference name" 
                                                            secondaryInputPlaceholder="Enter Reference Name" 
                                                            secondaryInputValue="{{ old('reference_name', $suggestionData->reference_name ?? '') }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <label for="therapies">Select Therapy:</label>
                                                        <x-checkbox-select 
                                                            name="therapies" 
                                                            :records="$therapies" 
                                                            label="Select Items" 
                                                            :selectedItems="$suggestionData->therapies ?? ''" />
                                                        
                                                        @error('therapies')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                                    <div class="form-group">
                                                        <label for="cocurricular_activities">Select Co-curricular Activities:</label>
                                                        <x-checkbox-select 
                                                            name="cocurricular_activities" 
                                                            :records="$cocurricularActivities" 
                                                            label="Select Items" 
                                                            :selectedItems="$suggestionData->cocurricular_activities ?? ''" />
                                                        
                                                        @error('cocurricular_activities')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 d-flex">
                                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Function to handle printing
document.getElementById('printButton').addEventListener('click', function() {
    window.print();
});
</script>
@endsection
