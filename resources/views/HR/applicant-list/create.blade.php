@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
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
                    <x-input-text type="search" name="search" />
                    </label>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered w-100">
                    <thead>
                    <tr class="table-primary">
                        <th></th>
                        <th>Name</th>
                        <th>Apply for</th>
                        <th>Is Employee</th>
                        <th>CV</th>
                        <th>Log</th>
                        <th>Status</th>
                        <th>Sent mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="applicant_list"> </td>
                        <td>Test</td>
                        <td>Office Manager</td>
                        <td>Yes</td>
                        <td>File</td>
                        <td>Create: Karishma Cultural @ 2018-12-27 19:24:14</td>
                        <td>Confirmed </td>
                        <td>Yes</td>
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
@endsection