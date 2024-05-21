<div>
    <div class="tab-pane active" id="home" role="tabpanel">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-3">
                  <div class="mb-3">
                      <label class="form-label">Package Name</label>
                      <x-input-text name="package_name" placeholder="Enter Package Name here">
                      </x-input-text>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <div>
                    <x-input-textarea name="description" placeholder="Description">
                    </x-input-textarea-outline>
                  </div>
              </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <h5 class="ms-2">Offday Counted</h5>
                  <div class="form-check form-check-danger ms-2 mt-2">
                    <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <div>
                <x-input-radio-or-check name="join_date" label="Calculation On Join Date" :records="$constants::$yesNoEn" />
              </div>
          </div>
          </div> 
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body p-0">
                      <form class="repeater" enctype="multipart/form-data">
                          <div class="row">  
                          </div>
                            <div data-repeater-list="group-a">
                              <div data-repeater-item class="row removeRow">
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="basicpill-lastname-input">Leave Type</label>
                                    <x-input-select name="leave_type" :records="[]" />
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="mb-3">
                                      <label class="form-label">Max. Amount</label>
                                      <x-input-text name="max_amount" type="number" placeholder="Enter Max. Amount here">
                                      </x-input-text>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="mb-3">
                                    <h5 class="ms-2">Leave Pay</h5>
                                    <div class="form-check form-check-danger ms-2 mt-2">
                                      <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="mb-3">
                                      <label class="form-label">Pay Amount</label>
                                      <x-input-text name="Amount" type="number" placeholder="Enter Max. Amount here">
                                      </x-input-text>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div>
                                    <x-input-radio-or-check name="salary_head" label="Salary Head" :records="$constants::$basic" />
                                  </div>
                                  
                                </div>
                                <div class="col-md-1">
                                  <button class="btn btn-outline-danger  ms-2 removeBtn">
                                    <i class="fas fa-trash-alt"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          <input data-repeater-create type="button"
                            class="btn btn-outline-success mt-3 px-4 mt-lg-0" value="Add" />
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn  btn-outline-danger" data-bs-dismiss="modal"> Close</button>
      <button type="button" class="btn  btn-outline-success" data-bs-dismiss="modal"> Save</button>
    </div>
</div>
