<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGymAndOutingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "collection_date"        => 'nullable',
            "teacher_id"             => 'nullable',
            "treadmill"              => 'nullable',
            "cycling_5_min"          => 'nullable',
            "butterfly"              => 'nullable',
            "lat_pull_down"          => 'nullable',
            "lat_up"                 => 'nullable',
            "dumble"                 => 'nullable',
            "Leg_curl"               => 'nullable',
            "vibration"              => 'nullable',
            "spot_jump"              => 'nullable',
            "Free_hand_exercise"     => 'nullable',
            "ball_throw"             => 'nullable',
            "basket_ball_throw"      => 'nullable',
            "ball_kick"              => 'nullable',
            "walking"                => 'nullable',
            "running"                => 'nullable',
            "height_down_jump"       => 'nullable',
            "tennis_ball_throw"      => 'nullable',
            "tennis_ball_catch"      => 'nullable',
            "ball_fielding_practice" => 'nullable',
        ];
    }
}
