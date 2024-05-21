<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        if (!Course::count()) {
            for ($i = 0; $i < 10; $i++) {
                $custom[] = [
                    'name'            => "Course_$i",
                    // 'amount'           => rand(100, 1000),
                    'duration'         => rand(50, 1000),
                    'parent_course_id' => null,
                ];
            }

            DB::table('courses')->insert($custom ?? []);
        }

        $numberOfExistingCourses = Course::count();

        for ($i = $numberOfExistingCourses; $i < $numberOfExistingCourses+10; $i++) {
            $custom[] = [
                'name'            => "Course_$i",
                // 'amount'           => rand(100, 1000),
                'duration'         => rand(50, 1000),
                'parent_course_id' => Course::inRandomOrder()->first()->id,
            ];
        }

        DB::table('courses')->insert($custom ?? []);
    }
}
