<div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel "> 
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified flex-nowrap" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active p-0" data-bs-toggle="tab" href="#home1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Personal</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#profile1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Photo & CV</span> 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#messages1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block"> Education</span>   
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#settings1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Experience</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Language" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Language</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Reference" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block"> Reference</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Family" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Family</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Organization" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Organization</span>    
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Summery" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block"> Summery</span>    
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                     <h4>Basic Information</h4>
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                          <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Employee Code</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-text placeholder="Enter code hare" name="employee_code" />
                                                               </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>User ID</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-select name="user_id" :records="[]" />
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Gender</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <div class="form-check d-flex">
                                                                  <div class="me-4">
                                                                    <x-input-select name="gender" :records="[]" />
                                                                  </div>
                                                                </div>
                                                               </div>
                                                             </div>
                                                            <div class="row mb-4">
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>DOB</h6>
                                                              </div>
                                                               <div class="col-4">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text type="date" name="dob"/>
                                                              </div>
                                                               </div>
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>Age</h6>
                                                              </div>
                                                               <div class="col-4">
                                                                 <x-input-text type="date" name="age"/>
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-3 d-flex align-items-center">
                                                                <h6>First Name</h6>
                                                              </div>
                                                               <div class="col-9">
                                                                <div class="input-group" >
                                                                       <!-- EmpFName -->
                                                                       <x-input-text wireModel="name" placeholder="First Name">
                                                                        </x-input-text>
                                                                      
                                                                </div>
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Full Name in Bangla</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-text  name="full_name_in_bangla" placeholder="Enter Bangla name hare.. "/>
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Fathers Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text  name="father_name" placeholder="Enter Father Name Hare"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Mothers Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text  name="mother_name" placeholder="Enter Mother Name Hare"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Present Address</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-textarea  name="present_address"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Permanent Address</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-textarea  name="permanent_address"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Phone</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="phone" placeholder="Enter Your Phone Number"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Mobile</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="mobile" placeholder="Enter Your Mobile Number"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Blood Group</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="blood_group" :records="[]" />
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Marital Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="marital_status" :records="[]" />
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Marriage Date</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="input-group" id="datepicker1">
                                                               <x-input-text type="date" name="marriage_date"/>
                                                            </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Spouse Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="spouse_name" placeholder="Spouse Name"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Occupation</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="occupation" placeholder="Occupation"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Religion</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="religion" :records="[]" />
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Nationality</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text placeholder="Enter Nationality here" name="nationality"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Passport No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text type="number" name="passport_no" placeholder="Enter Passport No here"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Personal Mobile</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="personal_mobile" placeholder="Enter Personal Mobile"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Personal Email1</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="personal_email_1" placeholder="Personal Email 1"/>  
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>National ID</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text type="number" name="national_id" placeholder="National ID"/>  
                                                             </div>
                                                           </div>
                                                      </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                <div class="row">
                                                  <div class="col-12">
                                                    <h4>Other Information</h4>
                                                     <div class="row mt-3">
                                                       <div class="col-md-12">
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Department</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-select name="department" :records="[]" />
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Section</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-select name="sectiont" :records="[]" />
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Designation</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <x-input-select name="designation" :records="[]" />
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Route</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="route" placeholder="Route"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Week End</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="week_end" :records="[]" />
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Attendance Policy</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="attendance_policy" :records="[]" />
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Leave Package</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="leave_package" :records="[]" />
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Salary Pak Id</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="salary_pak-id" :records="[]" />
                                                             </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Sal Pak Eff Date</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text name="sal_pak_eff_date" placeholder="dd/mm/yyyy"/>
                                                              </div>
                                                               </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Bonus Package</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-select name="bonus_package" :records="[]" />
                                                               </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Project Name</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="project_name" :records="[]" />
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Name</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="budget_name" :records="[]" />
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Head</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="budget_head" :records="[]" />
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Sub Head</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="budget_sub_name" :records="[]" />
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Account</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="budget_account" :records="[]" />
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Attendance Bonus</h6>
                                                                </div>
                                                                    <div class="col-8">
                                                                      <div class="form-check form-check-danger">
                                                                        <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                                      </div>                                                        
                                                                    </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Reporting To</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <x-input-select name="reporting_to" :records="[]" />
                                                                 </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Joining Date</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                    <x-input-text type="date" name="joining_date" placeholder="Joining Date"/>
                                                                 </div>
                                                               </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Confirm Due Date</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text type="date" name="confirm_due_date" placeholder="Confirm Due Date"/>
                                                                 </div>
                                                               </div>
                                                            </div>   
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Type Id</h6>
                                                           </div>
                                                            <div class="col-8">
                                                              <x-input-select name="type_id" :records="[]" />
                                                            </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Type Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="form-check d-flex">
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Staff</label>
                                                                </div>
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label"> Worker</label>
                                                                </div>
                                                              </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Next Valuation Date</h6>
                                                            </div>
                                                             <div class="col-8">
                                                               <div class="input-group" id="datepicker1">
                                                                <x-input-text type="date" name="next_valuation_date" placeholder="Next Valuation Date"/>
                                                                </div>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Valuation Interval</h6>
                                                           </div>
                                                            <div class="col-8">
                                                              <x-input-text type="date" name="valuation_interval" placeholder="Valuation Interval"/>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Employee Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="employee_status" :records="[]" />
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Card No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text type="number" name="card_no"  placeholder="Enter card number here"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Bank Acc No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text type="number" name="bank_acc_no" placeholder="Enter Bank acc no here"/>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Salary Pay Type</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="form-check d-flex">
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Cash</label>
                                                                </div>
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Bank</label>
                                                                </div>
                                                              </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Is Visit Restricted</h6>
                                                            </div>
                                                                <div class="col-8">
                                                                  <div class="form-check form-check-danger">
                                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                                  </div>                                                        
                                                                </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Faciliy Pack Id</h6>
                                                           </div>
                                                            <div class="col-8">
                                                              <x-input-select name="faciliy_pack_id" :records="[]" />
                                                            </div>
                                                          </div>
                                                     </div>
                                                     </div>
                                                  </div>
                                                </div>
                                              </div>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-3">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                              <button class="btn btn-lg btn-success w-100" wire:click="submit()">Save</button>
                                              </div>
                                            </div>
                                        </div></div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="">
                                               <h5 class="ms-3">Employee Photo & CV</h5><hr>
                                               <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                            </div>
                                            <div class="row d-flex justify-content-end mt-2">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                              <div class="">
                                                <h5 class="ms-3">Employee Education Info</h5><hr>
                                                <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-2">
                                               <div class="col-2">
                                                   <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                               </div>
                                               <div class="col-2">
                                                   <button class="btn btn-success w-100">Save</button>
                                               </div>
                                             </div>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Experience Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Language" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Language Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Reference" role="tabpanel">
                                            <div class="">
                                              <h5 class="ms-3">Employee Reference Info</h5><hr>
                                              <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                           </div>
                                           <div class="row d-flex justify-content-end mt-2">
                                             <div class="col-2">
                                                 <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                             </div>
                                             <div class="col-2">
                                                 <button class="btn btn-success w-100">Save</button>
                                             </div>
                                           </div>
                                        </div>
                                        <div class="tab-pane" id="Family" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Family Member Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Organization" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Activity/Organization Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Summery" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Summery of the Employee</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                            class="form-control form-control-sm form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries
                        </label>
                      </div>
                      <div class="col-sm-12 col-md-6 text-end">
                        <label style="display: inline-flex;align-items: center;">Search:
                          <input type="search" class="form-control form-control-sm" placeholder="">
                        </label>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table w-100 table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>Name</th>
                                <th>Gander</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Religion</th>
                                <th>Department</th>
                                <th>Section</th>
                                <th>Type</th>
                                <th>Log</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011</td>
                                <td>$320,</td>
                                <td>61</td>
                                <td>2011/</td>
                                <td>$320,</td>
                                <td>$320,</td>
                                <td>
                                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                      <i class="mdi mdi-pencil"></i>
                                  </button>
                                </td>
                            </tr>
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
             
                  </div>
              </div> 