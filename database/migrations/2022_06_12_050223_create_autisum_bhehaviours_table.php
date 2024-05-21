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
        Schema::create('autisum_bhehaviours', function(Blueprint $table)
        {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->string('poor_use_of_visual_discrimination_when_learning')->nullable();
            $table->string('seems_not_to_hear')->nullable();
            $table->string('sometimes_shows_no_startle_response')->nullable();
            $table->string('sometimes_painful_stimuli_such_as_bruises')->nullable();
            $table->string('is_directed_toward_eyes')->nullable();
            $table->string('covers_ears_at_many_sounds')->nullable();
            $table->string('squints_frowns_covers_eyes_when_in_the_presence_of_natural_light')->nullable();
            $table->string('frequently_has_no_visual_reaction')->nullable();

            $table->string('has_no_social_smile')->nullable();
            $table->string('does_not_reach_out_when_reached_for')->nullable();
            $table->string('not_responsive_to_other_peoples_facial_expressions_or_feelings')->nullable();
            $table->string('actively_avoids_eye_contact')->nullable();
            $table->string('resists_being_touched_or_held')->nullable();
            $table->string('is_flaccid_when_held_in_arms')->nullable();
            $table->string('is_stiff_and_hard_to_held')->nullable();
            $table->string('does_not_imitate_other_children_at_play')->nullable();
            $table->string('has_not_developed_any_friendships')->nullable();

            $table->string('stares_into_space_for_long_periods_of_time')->nullable();
            $table->string('whirls_self_for_long_periods_of_time')->nullable();
            $table->string('does_not_use_toys_appropriately')->nullable();
            $table->string('insists_on_keeping_certain_objects')->nullable();
            $table->string('rocks_self_for_long_periods_of_time')->nullable();
            $table->string('does_a_lot_of_lunging_and_darting')->nullable();
            $table->string('flaps_hands')->nullable();
            $table->string('walks_on_toes')->nullable();
            $table->string('hurts_self_by_banging_head')->nullable();
            $table->string('twirls_spins_and_bangs_objects_lot')->nullable();
            $table->string('will_feel_smell')->nullable();
            $table->string('gets_involved_in_complicated_rituals')->nullable();
            $table->string('is_very_destructive')->nullable();
            $table->string('often_frightened_or_very_anxious')->nullable();
            $table->string('looks_through_people')->nullable();
            $table->string('whirls_self_for_long_periods_time')->nullable();
            $table->string('rocks_self_for_long_periods_time')->nullable();
            $table->string('does_lot_lunging_and_darting')->nullable();
            $table->string('hurts_self_banging_head')->nullable();
            $table->string('twirls_spins_bangs_objects_lot')->nullable();
            $table->string('will_feel_smell_taste_objects_environment')->nullable();
            $table->string('gets_involved_complicated')->nullable();
            $table->string('does_not_follow_simple_commands_given_once')->nullable();
            $table->string('has_pronoun_reversal')->nullable();
            $table->string('atonalspeech_pattern')->nullable();
            $table->string('does_not_respond_to_own_name_when_called_out_among_two_others')->nullable();
            $table->string('seldom_says_yes_or_I')->nullable();
            $table->string('does_not_follow_simple_commands_involving_prepositions')->nullable();
            $table->string('gets_desired_objects_by_gesturing')->nullable();
            $table->string('repeats_phrases_over_and_over')->nullable();
            $table->string('cannot_point_to_more_than_five_named_objects')->nullable();
            $table->string('uses_5_spontaneous_words_per_day')->nullable();
            $table->string('repeats_sounds_or_words')->nullable();
            $table->string('echoes_questions_or_statements')->nullable();
            $table->string('uses_at_least_15_but_less_than_30')->nullable();
            $table->string('learns_a_simple_task')->nullable();
            $table->string('strong_reactions_changes_in_routine_environment')->nullable();
            $table->string('has_special_abilities_in_one_area_of_development')->nullable();
            $table->string('severe_temper_tantrums')->nullable();
            $table->string('hurts_others_by_biting_hitting_kicking')->nullable();
            $table->string('does_not_wait_for_needs_to_be_met')->nullable();
            $table->string('difficulties_with_toileting')->nullable();
            $table->string('does_not_dress_self_without_frequent_help')->nullable();
            $table->string('frequently_unaware_surroundings')->nullable();
            $table->string('prefers_to_manipulate_and_be_occupied_with_inanimate_things')->nullable();
            $table->string('a_developmental_delay_was_identified')->nullable();
            $table->timestamps();

            $table->string('poor_use_of_visual_discrimination_when_learning_1')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autisum_bhehaviours');
    }
};
