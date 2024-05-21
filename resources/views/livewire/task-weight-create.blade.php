<div>
    <div class="modal-body p-0">  
        <div class="card p-0 m-0">
            <div class="card-body">
                <div class="row pb-3">
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Domain</label>
                        <div class="col-8">
                          <x-input-select wireModel="domain" :records="[]" />
                        </div>
                    </div> 
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Sub Domain</label>
                        <div class="col-8">
                          <x-input-select wireModel="sub_domain" :records="[]" />
                        </div>
                    </div> 
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Area</label>
                        <div class="col-8">
                          <x-input-select wireModel="area" :records="[]" />
                        </div>
                    </div> 
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Activity</label>
                        <div class="col-8">
                          <x-input-select wireModel="activity" :records="[]" />
                        </div>
                    </div> 
                    <div class="col-6 row mb-3">
                        <label class="col-4 col-form-label">Activity Type</label>
                        <div class="col-8">
                            <x-input-select wireModel="activity_type" :records="[]" />
                        </div>
                    </div> 
                    <div class="row">
                      <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100 p-0">
                          <thead>
                              <tr class="table-primary">
                                  <th>SL.</th>
                                  <th>Task</th>
                                  <th>Time</th>
                                  <th>Sequence</th>
                                  <th>Quantity</th>
                                  <th>Quality</th>
                                  <th>Delivery</th>
                                  <th>Time Taken</th>
                                  <th>Target</th>
                                  <th>Type</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Ray Waters</td>
                                  <td>5</td>
                                  <td>5</td>
                                  <td>5</td>
                                  <td>5</td>
                                  <td>5</td>
                                  <td>5</td>
                                  <td>A</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                      <div class="text-end pe-5">
                        
                        <button type="button" class="btn btn-outline-success waves-effect waves-light">Save</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
