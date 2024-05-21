<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $count = 0;
        $count++;
        $parentCourseId = Course::count() > 10 ? Course::inRandomOrder()->first()->id: null;
        return [
            'title' => $courses[$count++],
            'amount' => $this->faker->randomDigit(200),
            'duration' => $this->faker->randomDigitNotZero(200),
            'parent_course_id' => $parentCourseId,
        ];
    }
}
