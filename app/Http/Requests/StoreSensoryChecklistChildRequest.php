<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSensoryChecklistChildRequest extends FormRequest
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
            "collection_date"                                                  => 'required',
            "teacher_id"                                                       => 'required',
            "student_id"                                                       => 'required',
            "hypersensitivity_to_touch"                                        => 'nullable',
            "becomes_fearful"                                                  => 'nullable',
            "as_an_infant"                                                     => 'nullable',
            "distressed_when_diaper_is_being"                                  => 'nullable',
            "appears_fearful_of"                                               => 'nullable',
            "becomes_frightened"        => 'nullable',
            "complains_about_having_hair_brushed"                              => 'nullable',
            "bothered_by_rough_bed_sheets"                                     => 'nullable',
            "avoids_group_situations"                                          => 'nullable',
            "complains_about_having_hair_brushed"                              => 'nullable',
            "resists_friendly"                                                 => 'nullable',
            "dislikes_kisses"                                                  => 'nullable',
            "appears_fearful_of_one"                                           => 'nullable',
            "avoids_group_situations"         => 'nullable',
            "prefers_hugs"                                                     => 'nullable',
            "a_raindrop"                                                       => 'nullable',
            "may_overreact_to_minor_cuts"                                      => 'nullable',
            "avoids_touching_certain_textures"                                 => 'nullable',
            "refuses_to_wear_new_or_stiff_clothes"                             => 'nullable',
            "a_raindrop_water_from_the_shower"                                 => 'nullable',
            "avoids_using_hands_for_play"                                      => 'nullable',
            "yes_no_avoids"                                                    => 'nullable',
            "will_be_distressed_by_dirty_hands"                                => 'nullable',
            "excessively_ticklish"                                             => 'nullable',
            "distressed_by_seams_in_socks"                                     => 'nullable',
            "distressed_by_clothes_rubbing_on_skin"                            => 'nullable',
            "may_want_to_wear_long_sleeve_shirts"                              => 'nullable',
            "distressed_about_having_face_washed"                              => 'nullable',
            "distressed_about_having_hair"                                     => 'nullable',
            "resists_brushing_teeth"                                           => 'nullable',
            "is_a_picky_eater"                                                 => 'nullable',
            "may_refuse_to_walk_barefoot_on_grass_or_sand"                     => 'nullable',
            "may_walk_on_toes_only"                                            => 'nullable',

            "may_crave_touch"                                                  => 'nullable',
            "is_not_aware_of_being_touched"                                    => 'nullable',
            "is_not_bothered_by_injuries"                                      => 'nullable',
            "may_not_be_aware_that_hands"                                      => 'nullable',
            "may_be_self_abusive"                                              => 'nullable',
            "mouths_objects_excessively"                                       => 'nullable',
            "frequently_hurts"                                                 => 'nullable',
            "repeatedly_touches_surfaces"                                      => 'nullable',
            "seeks_out_surfaces"                                               => 'nullable',
            "thoroughly_enjoys_and_seeks_out_messy_play"                       => 'nullable',
            "craves_vibrating_or_strong_sensory_input"                         => 'nullable',

            "has_difficulty_with_fine_motor"                                   => 'nullable',
            "may_not_be_able_to_identify"                                      => 'nullable',
            "maybe_afraid_of_the_dark"                                         => 'nullable',
            "may_be_a_messy_dresser"                                           => 'nullable',
            "looks_disheveled"                                                 => 'nullable',
            "does_not_notice_pants_are_twisted"                                => 'nullable',
            "shirt_is_half_un_tucked"                                          => 'nullable',
            "shoes_are_untied"                                                 => 'nullable',
            "one_pant_leg_is_up_and_one_is_down"                               => 'nullable',
            "has_difficulty_using_scissors"                                    => 'nullable',
            "crayons_or_silverware"                                            => 'nullable',
            "continues_to_mouth_objects"                                       => 'nullable',
            "has_difficulty_figuring_out"                                      => 'nullable',
            "may_not_be_able_to_identify_objects"                              => 'nullable',

            "avoids_dislikes_playground_equipment"                             => 'nullable',
            "prefers_sedentary_tasks"                                          => 'nullable',
            "avoids_dislikes_elevators"                                        => 'nullable',
            "may_physically_cling_to_an_adult_they_trust"                      => 'nullable',
            "may_appear_terrified_offalling_even"                              => 'nullable',
            "afraid_of_heights"                                                => 'nullable',
            "fearful_of_feet_leaving_the_ground"                               => 'nullable',
            "fearful_of_going_up_or_down_stairs" => 'nullable',
            "afraid_of_being_tipped_upside_down"                               => 'nullable',
            "startles_if_someone_else_moves_them"                              => 'nullable',
            "as_an_infant_may"                                                     => 'nullable',
            "may_be_fearful_of"                                                => 'nullable',
            "may_have_disliked_being_placed"                                  => 'nullable',
            "loses_balance_easily"                                              => 'nullable',
            "fearful_of_activities"                                             => 'nullable',
            "avoids_rapid_or_rotating_movements"                               => 'nullable',

            "in_constant_motion_cant_seem_to_sit_still"                        => 'nullable',
            "craves_fast"                                                      => 'nullable',
            "loves_being_tossed_in_the_air"                                    => 'nullable',
            // "could_spin_for_hours"                => 'nullable',
            // "loves_the_fast_intense_and_or_or_scary_rides_at_amusement_parks"  => 'nullable',
            "always_jumping_on_furniture"                                      => 'nullable',
            "loves_to_swing_as_high_as_possible"                               => 'nullable',
            "is_a_thrill_seeker"                                               => 'nullable',
            // "always_running_jumping_hopping_etc_instead_of_walking"            => 'nullable',
            // "rocks_body_shakes_leg_or_head_while_sitting"                      => 'nullable',
            "likes_sudden"                                                     => 'nullable',

            "in_constant_motion"                                               => 'nullable',
            "craves_fast"                                                      => 'nullable',
            "loves_being_tossed_"                                              => 'nullable',
            "could_spin_for_hours"                                             => 'nullable',
            "loves_the_fast"                                                   => 'nullable',
            "always_jumping_on_furniture"                                      => 'nullable',
            "loves_to_swing_as_high"                                           => 'nullable',
            "is_a_thrill-seeker"                                               => 'nullable',
            "always_running"                                                   => 'nullable',
            "rocks_body"                                                       => 'nullable',
            "loves_being_tossed"                                               => 'nullable',
            "loves_to_swing_as_high_as_possibl"                                => 'nullable',

            "has_a_limp"                                                       => 'nullable',
            "frequently_slumps"                                                => 'nullable',
            "difficulty_simultaneously_lifting_head"                           => 'nullable',
            "often_sits_in_a"                                                  => 'nullable',
            "fatigues_easily"                                                  => 'nullable',
            "difficulty_turning_doorknobs"                                     => 'nullable',
            "difficulty_catching_him"                                          => 'nullable',
            "difficulty_getting_dressed"                   => 'nullable',
            "may_have_never_crawled_as_an_baby"                                => 'nullable',
            "has_poor_body_awareness"                                          => 'nullable',
            "poor_gross_motor_skills"                                          => 'nullable',
            "poor_fine_motor_skills"                                           => 'nullable',
            "may_appear_ambidextrous"                                          => 'nullable',
            "has_difficulty_licking"                                           => 'nullable',
            "seems_to_be_unsure_about"                                         => 'nullable',
            "difficulty_learning"                                    => 'nullable',

            "seeks_out_jumping_bumping"                                        => 'nullable',
            "stomps_feet_when_walking"                                         => 'nullable',
            "kicks_his_her_feet_on_floor_or_chair" => 'nullable',
            "bites_or_sucks_on_fingers_and"                                    => 'nullable',
            "loves_to_be_tightly_wrapped"                                      => 'nullable',
            "prefrs_clothees"                                                  => 'nullable',
            "loves_seeks_out"                                                  => 'nullable',
            "may_not_understand_the_idea_"                                     => 'nullable',
            "loves_or_seeks_out_squishing_activities"                          => 'nullable',
            "enjoys_bear_hugs"                                                 => 'nullable',
            "excessive_banging"                                                => 'nullable',
            "loves_roughhousing_and_tackling"                                   => 'nullable',
            "frequently_falls_on_floor_intentionally"                          => 'nullable',
            "would_jump_on_a_trampoline"                                       => 'nullable',
            "grinds_his_her_teeth_throughout_the_day"                          => 'nullable',
            "loves_pushing_pulling"                                            => 'nullable',
            "loves_jumping_off_furniture"                                      => 'nullable',
            "frequently_hits"                   => 'nullable',
            "chews_on_pens"                           => 'nullable',

            "misjudges_how_much_to_flex"                                       => 'nullable',
            "difficulty_regulating_pressure"                                   => 'nullable',
            "kicks_his_her_feet_on_floor"                                      => 'nullable',
            "written_work_is_messy"                                            => 'nullable',
            "always_seems_to_be_breaking"                                      => 'nullable',
            "misjudges_the_weight_of_an_object"                                => 'nullable',
            "may_not_understand_the_idea_of"                                   => 'nullable',
            "seems_to_do_everything_with"                                      => 'nullable',
            "plays_with_animals"                                               => 'nullable',
        ];
    }
}
