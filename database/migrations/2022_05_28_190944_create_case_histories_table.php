<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_histories', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_approved')->default(0);
            $table->foreignIdFor(User::class, 'created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'teacher_id')->constrained('users')->cascadeOnDelete();
            $table->text('date');
            $table->text('has_adjustment_capability')->nullable();
            $table->text('has_adjustment_capability_secondary')->nullable();

            $table->text('has_move_ability')->nullable();
            $table->text('has_move_ability_secondary')->nullable();

            $table->text('has_fine_equipment_use_ability')->nullable();
            $table->text('has_fine_equipment_use_ability_secondary')->nullable();

            $table->json('has_write_ability')->nullable();
            $table->json('has_write_ability_secondary')->nullable();

            $table->text('has_education_intersted')->nullable();
            $table->text('has_education_intersted_secondary')->nullable();

            $table->text('has_self_work_capabelity')->nullable();
            $table->text('has_self_work_capabelity_secondary')->nullable();

            $table->text('has_abil_to_comminite_socilely')->nullable();
            $table->text('has_abil_to_comminite_socilely_secondary')->nullable();

            $table->text('is_ableto_paly_others')->nullable();
            $table->text('is_ableto_paly_others_secondary')->nullable();

            $table->json('has_any_learning_obstacle')->nullable();
            $table->json('has_any_learning_obstacle_secondary')->nullable();

            $table->text('has_control_over_body')->nullable();
            $table->text('has_control_over_body_secondary')->nullable();

            $table->text('has_speaking_problem')->nullable();
            $table->text('has_speaking_problem_secondary')->nullable();

            $table->text('is_able_to_understand_tense')->nullable();
            $table->text('is_able_to_understand_tense_secondary')->nullable();

            $table->text('is_able_to_use_correct_word_in_sentence')->nullable();
            $table->text('is_able_to_use_correct_word_in_sentence_secondary')->nullable();

            $table->text('has_past_assessment_by_specialist')->nullable();
            $table->text('has_past_assessment_by_specialist_secondary')->nullable();
            
            $table->text('is_there_any_family_history_of_disability')->nullable();
            $table->text('is_there_any_family_history_of_disability_secondary')->nullable();
            $table->text('has_family_learning_disability')->nullable();
            $table->text('has_family_learning_disability_secondary')->nullable();
            $table->text('do_you_have_any_learning_difficulties')->nullable();
            $table->text('do_you_have_any_learning_difficulties_secondary')->nullable();
            // $table->text('has_instability')->nullable();
            $table->json('child_description')->nullable();
            $table->text('child_description_secondary')->nullable();
            $table->text('has_sleep_patten_problem')->nullable();
            $table->text('has_sleep_patten_problem_secondary')->nullable();

            $table->text('is_able_to_lick')->nullable();
            $table->text('is_able_to_eat_hard_thing')->nullable();
            $table->text('is_able_to_control_breathing')->nullable();
            $table->text('does_swallow_food_at_once')->nullable();
            $table->text('does_take_longer_time_while_eating')->nullable();
            $table->text('is_any_problem_in_chewing_food')->nullable();
            $table->text('is_any_problem_in_chewing_food_secondary')->nullable();
            $table->text('sat_alone_in')->nullable();
            $table->text('learned_to_chewing_in')->nullable();
            $table->text('learned_to_scrolling_in')->nullable();
            $table->text('learned_to_walk_alone_in')->nullable();
            $table->text('is_able_to_chewing')->nullable();
            $table->text('is_able_to_swimming')->nullable();
            $table->text('dose_like_play_outside')->nullable();
            $table->text('dose_get_tired_soon')->nullable();
            $table->text('dose_get_tired_soon_secondary')->nullable();
            $table->text('dose_have_balancing_problem')->nullable();
            $table->text('dose_have_muscle_pain')->nullable();
            $table->text('first_voice_lang')->nullable();
            $table->text('first_voice_lang_secondary')->nullable();
            $table->text('in_which_age_spoke_the_first_word')->nullable();
            $table->text('in_which_age_spoke_the_first_word_secondary')->nullable();
            $table->text('is_able_spake_simple_sentence')->nullable();
            $table->text('how_many_word_use_in_a_sentence_max')->nullable();
            $table->text('dose_spake_in_other_lang')->nullable();
            $table->text('dose_spake_in_other_lang_secondary')->nullable();
            $table->text('from_which_year_learning_other_lang')->nullable();
            $table->text('from_which_year_learning_other_lang_secondary')->nullable();
            $table->text('from_where_learn_other_lang')->nullable();
            $table->text('does_he_response_if_call_by_his_name')->nullable();
            $table->text('can_give_simple_instruction_and_follow_direction')->nullable();
            $table->text('dose_use_wrong_word_while_speaking')->nullable();
            $table->json('in_which_sound_child_react')->nullable();
            $table->text('does_follow_verbal_commend')->nullable();
            $table->text('is_able_to_use_right_word_for_right_sentence')->nullable();
            $table->text('can_use_spoon')->nullable();
            $table->text('can_wear_cloth_alone')->nullable();
            $table->text('can_wear_cloth_alone_secondary')->nullable();
            $table->text('can_arrange_own_things')->nullable();
            $table->text('in_which_age_got_toilet_training')->nullable();
            $table->text('does_go_to_toilet_himself')->nullable();
            $table->text('does_go_to_toilet_in_unknown_place')->nullable();
            $table->text('does_like_drawing_and_writing_in_home')->nullable();
            $table->text('does_like_play')->nullable();
            $table->text('can_play_independently')->nullable();
            $table->text('favorite_games')->nullable();
            $table->text('favorite_games_secondary')->nullable();
            $table->text('can_obey_elder_commends')->nullable();
            $table->text('do_you_things_obey_elder_elder_is_heard')->nullable();
            $table->text('can_clean_himself_after_properly')->nullable();
            $table->text('can_wear_cloth_himself_after_properly')->nullable();
            $table->text('does_play_with_siblings')->nullable();
            $table->text('does_friend_come_to_play_in_home')->nullable();
            $table->text('does_share_toys')->nullable();
            $table->text('does_wait_for_his_turn')->nullable();
            $table->text('does_careless_for_others')->nullable();
            $table->text('are_you_tense_for_specific_behaviour')->nullable();
            $table->text('are_you_tense_for_specific_behaviour_secondary')->nullable();
            $table->text('concerning_points_of_child_school_work')->nullable();
            $table->text('is_curious_to_learn_new_things')->nullable();
            $table->text('can_understand_simple_things_right_way')->nullable();
            $table->text('can_learn_word_spelling')->nullable();
            $table->text('can_write_himself')->nullable();
            $table->text('working_speed')->nullable();
            $table->text('how_long_child_can_remember_after_teaching')->nullable();
            $table->text('is_home_work_a_simple_things')->nullable();
            $table->text('does_change_behaviour_during_homework')->nullable();
            $table->text('is_he_angry')->nullable();
            $table->text('does_feel_messy_about_paper_and_books')->nullable();
            $table->text('does_lose_different_things_from_bags_regularly')->nullable();
            $table->text('does_irrelevant_work_during_meal')->nullable();
            $table->text('does_scream_during_wearing_cloth')->nullable();
            $table->json('how_you_will_describe_you_child')->nullable();
            $table->json('bath')->nullable();
            $table->text('bath_secondary')->nullable();
            $table->json('necessary_things')->nullable();
            $table->text('necessary_things_secondary')->nullable();
            $table->text('does_have_the_navigation_capability')->nullable();
            $table->json('play')->nullable();
            $table->json('mobility')->nullable();
            $table->text('does_like_routine')->nullable();
            $table->text('does_accept_routing_change')->nullable();
            $table->text('does_like_new_situation')->nullable();
            $table->text('can_not_obey_regularity')->nullable();
            $table->text('does_get_angry_quickly')->nullable();
            $table->text('does_get_disappointed_quickly')->nullable();
            $table->text('does_stop_working')->nullable();
            $table->text('is_there_instability')->nullable();
            $table->text('can_stay_longer_if_needed')->nullable();
            $table->text('does_have_tremendous_behaviors_at_home')->nullable();
            $table->text('seems_like_not_interested_in_playing')->nullable();
            $table->text('does_have_time_sense')->nullable();
            $table->text('doest_have_knowledge_problem_about_day_monty_and_time')->nullable();
            $table->text('response')->nullable();
            $table->text('day_dreamer')->nullable();
            $table->text('does_move_in_one_place')->nullable();
            $table->text('does_move')->nullable();
            $table->text('does_move_all_time')->nullable();
            $table->text('does_like_to_sit_straight')->nullable();
            $table->text('is_expert_play_with_ball')->nullable();
            $table->text('does_ignore_playing_with_ball')->nullable();
            $table->text('does_like_to_destroy')->nullable();
            $table->text('does_run_in_wrong_way')->nullable();
            $table->text('does_height_movement_be_careful_when_going_down_stairs')->nullable();
            $table->text('try_to_ignore_task')->nullable();
            $table->text('which_kind_of_task_he_try_to_skip')->nullable();
            $table->text('lost_again_and_again')->nullable();
            $table->text('learned_thestructure')->nullable();
            $table->text('can_you_speak_any_other_language')->nullable();
            $table->text('can_use_language_correctly')->nullable();
            $table->text('does_the_toilet_use_alone')->nullable();
            $table->text('does_have_tremendous_behaviors_at_home_secondary')->nullable();
            $table->text('staying_in_motion_all_the_time')->nullable();
            $table->text('i_listen_to_the_baby_later')->nullable();
            $table->text('how_would_you_describe_the_child')->nullable();
            $table->text('three_main_concerns')->nullable();
            $table->text('whether_the_eyes_were_examined')->nullable();
            $table->text('whether_the_eyes_were_examined_secondary')->nullable();
            $table->text('report_if_eye_examination_has_been_done')->nullable();
            $table->text('hearing_attach_report_if_checked')->nullable();
            $table->text('hearing_attach_report_if_checked_secondary')->nullable();
            $table->text('any_problems_during_pregnancy_or_at_birth')->nullable();
            $table->text('any_problems_during_pregnancy_or_at_birth_secondary')->nullable();
            $table->text('whether_the_child_received_any_head_injuries')->nullable();
            $table->text('whether_there_is_caesar')->nullable();
            $table->text('the_baby_had_an_ear_infection_or_a_problem')->nullable();
            $table->text('the_baby_had_an_ear_infection_or_a_problem_secondary')->nullable();
            $table->text('what_kind_of_ear_problems')->nullable();
            $table->text('what_kind_of_ear_problems_secondary')->nullable();
            $table->text('no_illness_or_hospitalization_was_required')->nullable();
            $table->text('whether_there_is_other_relevant_treatment_information')->nullable();
            $table->text('whether_there_is_other_relevant_treatment_information_secondary')->nullable();
            $table->text('attach_the_report_if_you_have_other_relevant')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_histories');
    }
};
