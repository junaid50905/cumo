@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <form action="{{ route('assessment-pid-child-report-search.search') }}"
                            method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_id"
                                    placeholder="Search by ID (000001)" required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h4>Reports of DSM-5 (PID-5)_Adult</h4>
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table class="table table-striped table-hover table-bordered border-info table-sm">
                            <thead>
                                <tr class="table-primary">
                                    <th>A. Personality Trait Facet
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>B. PID-5 items
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>C. Total/Partial Raw Facet Score</th>
                                    <th>D. Prorated Raw Facet Score</th>
                                    <th>E. Average Facet Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($collections as $collection => $data)
                                    @php
                                        $prorated_raw_facet_score = '';
                                        $average_facet_score = '';
                                        if($data['number_of_items_actually_answered'] != 0 && $data['total_unanswered_subcategory_percentage'] < 25){
                                            $prorated_raw_facet_score = round(($data['partical_raw_score'] * $data['number_of_items_of_that_facet_pid_5']) / $data['number_of_items_actually_answered']); 
                                        }else {
                                            $prorated_raw_facet_score='Less 25%' ; 
                                        }
                                        if($data['number_of_items_of_that_facet_pid_5'] !=0 && $data['total_unanswered_subcategory_percentage'] < 25){
                                            $average_facet_score = round($data['partical_raw_score'] / $data['number_of_items_of_that_facet_pid_5']); 
                                        }else {
                                            $average_facet_score='Less 25%' ; 
                                        } 
                                    @endphp 
                                    <tr>
                                        <td>{{ $collection }}</td>
                                        <td class="fw-bold font-monospace">{{ $data['all_ids'] }}</td>
                                        <td>{{ $data['partical_raw_score'] != 0 ? $data['partical_raw_score'] : '-' }}</td>
                                        <td>{{ $prorated_raw_facet_score }}</td>
                                        <td>{{ $average_facet_score }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="table-primary">
                                    <td colspan="5" class="text-center fw-bold">Highest Average Scores of Personality Trait Facet:
                                        <span class="bg-success p-1">{{ $highestAverageTraitFacet }}</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table class="table table-striped table-hover table-bordered border-info table-sm">
                            <thead>
                                <tr class="table-primary">
                                    <th>A. Personality Trait Domain
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>B. PID-5 Facet Scales Contributing Primarily to Domain
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>C. Total of Average Facet Scores (From column E of Facet Table)</th>
                                    <th>D. Overall Average of Facet Scores (The total in column C of this table divided
                                        by 3 [i.e., the number of scales listed in column B])</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Negative Affect</td>
                                    <td class="fw-bold font-monospace">Emotional Lability, Anxiousness, Separation
                                        Insecurity</td>
                                    <td>{{ $total_average_facet_scores_negative_affect }}</td>
                                    <td>{{ number_format($average_negative_affect, '2','.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Detachment</td>
                                    <td class="fw-bold font-monospace">Withdrawal, Anhedonia, Intimacy Avoidance</td>
                                    <td>{{ $total_average_facet_scores_detachment }}</td>
                                    <td>{{ number_format($average_detachment, '2','.') }}</td>
                                </tr>
                                <tr>
                                    <td>Antagonism</td>
                                    <td class="fw-bold font-monospace">Manipulativeness, Deceitfulness, Grandiosity</td>
                                    <td>{{ $total_average_facet_scores_antagonism }}</td>
                                    <td>{{ number_format($average_antagonism, '2','.') }}</td>
                                </tr>
                                <tr>
                                    <td>Disinhibition</td>
                                    <td class="fw-bold font-monospace">Irresponsibility, Impulsivity, Distractibility
                                    </td>
                                    <td>{{ $total_average_facet_scores_disinhibition }}</td>
                                    <td>{{ number_format($average_disinhibition, '2','.') }}</td>
                                </tr>
                                <tr>
                                    <td>Psychoticism</td>
                                    <td class="fw-bold font-monospace">Unusual Beliefs & Experiences, Eccentricity,
                                        Perceptual Dysregulation</td>
                                    <td>{{ $total_average_facet_scores_psychoticism }}</td>
                                    <td>{{ number_format($average_psychoticism, '2','.') }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="table-primary">
                                    <td colspan="4" class="text-center fw-bold">Highest Average Scores of Personality Trait Domain:
                                        <span class="bg-success p-1">{{ $highest_average_trait_domain }}</span></td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection