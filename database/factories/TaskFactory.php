<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Task;
use App\Models\TaskDetail;
use App\Models\TaskType;
use App\Utility\ProjectConstants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'activity_id' => Activity::inRandomOrder()->first()->id,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Task $task) {
            $taskDetail = new TaskDetail();
            $taskDetail->task_id = $task->id;
            $taskDetail->task_type_id = TaskType::inRandomOrder()->first()->id;
            $taskDetail->time = 5;
            $taskDetail->sequence = 5;
            $taskDetail->quantity = 5;
            $taskDetail->quality = 5;
            $taskDetail->time_taken = 5;
            $taskDetail->target = 5;
            $taskDetail->activity_type = array_rand(ProjectConstants::$activityTypes);
            $taskDetail->created_at = now();
            $taskDetail->updated_at = now();
            $taskDetail->save();
        });
    }
}
