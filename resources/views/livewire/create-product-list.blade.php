<div>
    {{-- <x-record-list :records="$records"> --}}
        <div class="row">         
            <div class="col-md-2">
                <div class="mb-3">        
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 d-flex align-items-center">
                     <div class="p-0 me-2">
                       <label for="formrow-password-input" class="form-label">Product Type:</label>
                     </div>
                     <div>
                        <x-input-select name="category" :records="$productType" />
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 d-flex align-items-center">
                     <div class="p-0 me-2">
                      <label for="formrow-password-input" class="form-label">Category:</label>
                     </div>
                     <div>
                        <x-input-select name="category" :records="$category" />
                     </div>
                 </div>
            </div>
          </div>
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
                  <th>Code</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th>Measurement</th>
                  <th>Sell Price</th>
                  <th>Cost Price</th>
                  <th>Log</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>   
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
    {{-- </x-record-list> --}}
</div>