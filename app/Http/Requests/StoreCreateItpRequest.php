<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreateItpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            
            "student_id"             => 'nullable',
            "teacher_id"             => 'nullable',
            "itp_name"               => 'nullable',
            "start_date"             => 'nullable',
            "end_date"               => 'nullable',
            "instruction"            => 'nullable',
            "personal_work"          => 'nullable',
            "family_work"            => 'nullable',
            "recreational_work"      => 'nullable',
            "household_work"         => 'nullable',
            "computer_homework"      => 'nullable',
            "meal_preparetion_skill" => 'nullable',
            "cooking_catering"       => 'nullable',
            "gym_exercise"           => 'nullable',
            "therapeutic_homework"   => 'nullable',
            "Homework_karisma"       => 'nullable',
            "Homework_karisma1"      => 'nullable',
            "Homework_karisma2"      => 'nullable',
            "Homework_karisma3"      => 'nullable',
            "Homework_karisma4"      => 'nullable',
            "Homework_karisma5"      => 'nullable',
            "Homework_karisma6"      => 'nullable',
            "Homework_karisma7"      => 'nullable',
            "Homework_karisma8"      => 'nullable',
            "Homework_karisma9"      => 'nullable',
            "section_g"              => 'nullable',
            "Homework_karisma10"     => 'nullable',
            "section_interpersonal_skill"              => 'nullable',
            "section_different_situation"             => 'nullable',
            "section_termsof_age"             => 'nullable',
            "section_play_with_others"             => 'nullable',
            "section_social_interection"             => 'nullable',
            "section_ethical_values"             => 'nullable',
            "section_work_habit_ethical_values"             => 'nullable',
            "section_self_development"              => 'nullable',
            "section_cleaning_selfdevelopment"             => 'nullable',
            "section_telephone_selfdevelopment"             => 'nullable',

        ];
    }
}
