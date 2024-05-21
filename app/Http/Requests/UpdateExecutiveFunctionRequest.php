<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExecutiveFunctionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      return tuue;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "date"                                 => 'required',
            "teacher_id"                           => 'required',
            "candidate_id"                         => 'required',
            "have_trouble_getting"                 => 'nullable',
            "start_tasks_with_enthusiasm"          => 'nullable',
            "find_it_hard"                         => 'nullable',
            "i_see_or_hear"                         => 'nullable',
            "become_absorbed_in_things"            => 'nullable',
            "have_trouble_following_conversations" => 'nullable',
            "forget_things"                        => 'nullable',
            "At_least_once_a_day"                  => 'nullable',
            "consistently_forget_appointments"     => 'nullable',
            "Cant_seem_to_get"                     => 'nullable',
            "have_difficulty_figuring"             => 'nullable',
            "waste_time_trying"                    => 'nullable',
            "become_frustrated_when_things"        => 'nullable',
            "have_trouble_completing"              => 'nullable',
            "I_will_do_it_later"                   => 'nullable',
        ];
    }
}
