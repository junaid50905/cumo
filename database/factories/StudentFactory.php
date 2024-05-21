<?php

namespace Database\Factories;

use App\Models\Student;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => rand(111111, 999999),
            'name' => $this->faker->name,
            'type' => array_rand(ProjectConstants::$studentTypes),
            'dob' => $this->faker->dateTimeBetween('-30 years', '-10 years')->format('Y-m-d'),
            'date_of_assessment' => $this->faker->date(),
            'nid' => rand(11111111111, 99999999999999999),
            'present_address' => $this->faker->streetAddress(),
            'permanent_address' => $this->faker->streetAddress(),
            'diagnosis' => $this->faker->name,
            'suborno_card_no' => $this->faker->randomDigitNotNull(),
            'photo' => $this->faker->name,
            'gender' => array_rand(ProjectConstants::$genders),
            'blood_group' => array_rand(ProjectConstants::$bloodGroups),
            'statuss' => $this->faker->name,
            'stage' => 1,
            'approved_for_observation' => "1",
            'is_interested_in_job' => "1",
            'disability' => $this->faker->name,
            'work_interest' => $this->faker->name,
            'transport' => $this->faker->name,
            'device_name' => $this->faker->name,
            'prefer_work_area' => $this->faker->name,
            'position' => $this->faker->name,
            'duration' => $this->faker->name,
            'skill_of_work' => $this->faker->name,
            'reasonable_accommodation' => $this->faker->name,
            'device_use' => $this->faker->name,
            'qualification' => $this->faker->name,
            'training' => $this->faker->name,
            'organization' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber(),
            'cause_of_leave' => $this->faker->name,
        ];
    }

    public function configure(): StudentFactory
    {
        return $this->afterCreating(function (Student $obj) {
            $parentInfo = [
                'father_name' => $this->faker->name,
                'father_email' => $this->faker->unique()->email,
                'father_number' => $this->faker->phoneNumber,
                'mother_name' => $this->faker->name,
                'mother_email' => $this->faker->unique()->email,
                'mother_number' => $this->faker->phoneNumber,
            ];

            $obj->parentDetail()->create($parentInfo);
        });
    }
}
