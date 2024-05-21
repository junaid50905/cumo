@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
<style>
  .borderr{
    border: 1px solid rgb(71, 177, 226)
  }
</style>
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student Profile @endslot
@endcomponent


@include('layouts.student_profile.header')


<div class="row">
    <div class="col-12">

        @include('layouts.student_profile.left_sidebar')

        <div class="email-rightbar mb-3">
            <div class="card">
                <div class="table-responsive">
                    <table id="itpEvaluateTable" class="table table-bordered w-100">
                        <thead>
                                <tr class="table-primary">
                                    <th>ITP</th>
                                    <th>January</th>
                                    <th>February</th>
                                    <th>March</th>
                                    <th>April</th>
                                    <th>May</th>
                                    <th>June</th>
                                    <th>July</th>
                                    <th>August</th>
                                    <th>September</th>
                                    <th>October</th>
                                    <th>November</th>
                                    <th>December</th>
                                    <th>Total</th>
                                    <th>Percentage</th>
                                    <th>Home Visit Updates</th>
                                    <th>Total</th>
                                    <th>Percentage</th>
                                    <th>Remarks</th>
                                </tr>
                        </thead>
                                    <tbody>
                                          <tr style="background-color: #1d7ea9 !important;">
                                            <td class="text-white"  colspan="100%">Domain: Section E:  Domain 01 - Physical development</td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Organized Play</td>      
                                          </tr>
                                          <tr class="border-info">
                                            <td>Kick a large station</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>Riding a tricycle</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>Shift weight on exte</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>Catch a large ball</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Balance Beam</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>small steps</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>backward</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>Sideways</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Ball Play</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Jumping</td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Jumping Jacks</td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Have the student jum</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Rolling</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Rhythms</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Fitness & Physical Activity</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Scissor activities</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Craft activities</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                             <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Eye-hand coordination games</td>
                                           </tr> 
                                           <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                           <tr style="background-color: #02bec9 !important;">
                                              <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Chewy Foods(Organizing)</td>
                                           </tr>
                                           <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Crunchy Foods(Alerting)</td>    
                                           </tr>
                                           <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Sucking Foods(Calming)</td>
                                           </tr>
                                           <tr style="background-color: #02bec9 !important;">
                                             <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Yoga</td>    
                                           </tr>
                                           <tr class="border-info">
                                            <td class="fw-bold border-info">Total</td>
                                            <td ></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fw-bold border-none" colspan="5">Total Domain: 0 Maximum Total: 0</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr style="background-color: #1d7ea9 !important;">
                                            <td class="text-white" colspan="100%">Domain: Section F:  Domain 02 : Intellectual / cognitive development</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Distance maintains</td>    
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Understanding situation</td>
                                          </tr>
                                          <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                          <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Curiosity and asking question</td>
                                         </tr>
                                         <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                         <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Generalization ability</td>
                                        </tr>
                                        <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Money management Skills</td>
                                        </tr>
                                        <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Request</td> 
                                        </tr>
                                        <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Pragmatic communication</td>
                                        </tr>
                                        <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Grooming</td>
                                        </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Basic First Aid Knowledge</td>
                                        </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Feeling and saying sorry</td>
                                        </tr>
                                        <tr class="border-info">
                                            <td>toss-clap-catch</td>
                                            <td class="border-info" style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                    </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td style="padding: 1px 0 0 0">
                                                    <table width="100%">
                                                        <tbody>
                                                          <tr>
                                                            <td class=""></td>
                                                            <td class=""></td>
                                                            <td class="borderr">00</td>
                                                            <td class="borderr">14</td>
                                                            <td class="borderr">00</td>
                                                          </tr>
                                                         </tbody>
                                                        </table>
                                            </td>
                                            <td>141</td>
                                            <td> 28.78 %
                                              <input type="hidden" name="name">
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                               <input type="text" name="" class="form-control">
                                            </td>
                                          </tr>
                                        <tr class="border-info">
                                            <td class="fw-bold" >Total</td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                              <td class="fw-bold border-none" colspan="5">Total Domain: 0  Maximum Total: 0</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                         </tr>
                                         <tr style="background-color: #1d7ea9 !important;">
                                            <td class="text-white" colspan="100%">Domain: Section G : Domain 03 - Emotional development</td>
                                        </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Sense of self</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                        <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Understanding self</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                        <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Self-Awareness</td>      
                                      </tr>
                                      <tr style="background-color: #02bec9 !important;">
                                        <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Self – Regulation</td>
                                      </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                                <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: breakup of relationship</td>
                                        </tr> 
                                        <tr class="border-info">
                                            <td class="fw-bold">Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fw-bold border-none" colspan="5">Total Domain: 0  Maximum Total: 0</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="background-color: #1d7ea9 !important;">
                                            <td class="text-white" colspan="100%">Domain: Section H : Domain 04 - Social and ethical development</td>   
                                        </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Dress and Hygiene</td>
                                        </tr>
                                        <tr style="background-color: #02bec9 !important;">
                                            <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Relating with others</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                        <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Communication (work related)</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                        <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Work Readiness</td>
                                      </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: How to Play with others</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Social Interaction</td>
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Topic Maintenance</td>   
                                       </tr>
        
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Accept formal/official decision</td>
                                       </tr>
                                       <tr class="border-info">
                                           <td class="fw-bold">Total</td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td class="fw-bold border-none" colspan="5">Total Domain: 0  Maximum Total: 0</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="background-color: #1d7ea9 !important;">
                                             <td class="text-white" colspan="100%">Domain: Section I: Independent skills</td>
                                        </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Cleaning  Washing Chores</td>                                  
                                       </tr>
                                       <tr style="background-color: #02bec9 !important;">
                                           <td class="text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Laundry Tasks</td> 
                                       </tr>
                                      <tr class="border-info">
                                        <td class="fw-bold">Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="fw-bold~ border-none" colspan="5">Total Domain: 0  Maximum Total: 0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td> 
                                      </tr>                                    
                                    </tbody>
                    </table>
                </div>
            </div><!-- card -->
        </div> <!-- end Col-9 -->
    </div>

</div>

@endsection
@section('script')

@endsection