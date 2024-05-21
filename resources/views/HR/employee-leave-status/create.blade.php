@extends('layouts.master')
@section('content')
    <div class="">
        <div class="">
            <div class="container-fluid">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
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
                                        <table class="table table-bordered w-100">
                                          <thead>
                                            <tr class="table-primary">
                                                <th>SL</th>
                                                <th>Employee ID </th>
                                                <th>Employee Full Name</th>
                                                <th>Leave Type Name</th>
                                                <th>Leave Carry Overed</th>
                                                <th>Leave Entitled</th>
                                                <th>Leave Cashed</th>
                                                <th>Leave Enjoyed</th>
                                                <th>Leave Elapsed</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td>1</td>
                                                <td>Test Muhammad Employee</td>
                                                <td>Test Leave</td>
                                                <td>0.00 </td>
                                                <td>3.00</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>0.00 </td>
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
                        </div> 
                    </div> 
            </div> 
        </div>
    </div>
@endsection