<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseFeeHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_fee_headers')->insert([
            [
                'feeHeading' => ' Admission - Full Time ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Admission for Assessment /Observation ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Consultation Fees',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Food subsidy ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Karishma Admission Fees for Existing students ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Karishma Admission Fees for New students ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Karishma Monthly Fees for 1st subject ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Karishma Monthly Fees for additional subjects ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Late Fee ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Monthly Tuition Fees (1:1) ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Monthly Tuition Fees (1:5) ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Other subsidies ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Sports Admission Fees for existing students ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Sports Admission Fees for new student',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Subsidy on Fees ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Therapy Assesment Fees ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Therapy session fees ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Transport Subsidy ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => ' Vocational Trade course admission fees ',
                'created_at' => Carbon::now(),
            ],
            [
                'feeHeading' => '  Vocational Trade course monthly fees ',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
