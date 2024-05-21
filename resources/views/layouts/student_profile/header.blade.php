<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 me-3">
                        <img src="assets/images/users/avatar-1.jpg" alt=""
                            class="avatar-md rounded-circle img-thumbnail">
                    </div>
                    <div class="flex-grow-1 align-self-center">
                        <div class="text-muted">
                            <h5>NAME & ID:</h5>
                            <p class="mb-1">
                                @if ($student)
                                  {{$student->name}} 
                                @endif
                            </p>
                            <p class="mb-0">
                             Id no:
                                @if ($student)
                                  {{$student->code}} 
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="flex-grow-1 align-self-center">
                        <div class="text-muted">
                            <h5>Gender & Blood Group:</h5>
                            <p class="mb-1">
                                @if ($student)
                                  {{$student->gender}} 
                                @endif
                                 & 
                                @if ($student)
                                  {{$student->blood_group}} 
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="flex-grow-1 align-self-center">
                        <div class="text-muted">
                            <h5>Date Of Assessment</h5>
                            <p class="mb-1">
                                @if ($student)
                                  {{$student->date_of_assessment}} 
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="flex-grow-1 align-self-center">
                        <div class="text-muted">
                            <h5>Contact Numbers</h5>
                            <p class="mb-1">
                                @if ($student)
                                  {{$student->phone_number}} 
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->