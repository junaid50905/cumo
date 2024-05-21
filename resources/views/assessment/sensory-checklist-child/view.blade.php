@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
<style>
    .wizard .steps>ul>li a {
        padding-right: 0 !important;
    }

    .wizard .steps>ul>li a {
        padding-left: 5px !important;
    }
</style>
@endsection
@section('content')

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Sensory_Checklist"
                                                            data-toggle="tab">Sensory
                                                            Checklist</a></li>
                                                    <li class="w-100"><a href="#Signs_Of_Tactile_Dysfunction"
                                                            data-toggle="tab">Signs Of Tactile
                                                            Dysfunction</a></li>
                                                    <li class="w-100"><a href="#Hyposensitivity_To_Touch"
                                                            data-toggle="tab">Hyposensitivity To
                                                            Touch (Under-Responsive)</a></li>
                                                    <li class="w-100"><a
                                                            href="#Poor_Tactile_Perception_And_Discrimination"
                                                            data-toggle="tab">Poor Tactile
                                                            Perception And Discrimination</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Signs_Of_Vestibular_Dysfunction"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction >
                                                            Hypersensitivity To Movement
                                                            (Over-Responsive)</a></li>
                                                    <li class="w-100"><a href="#Signs_Of_Vestibular_Dysfunction_under"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction >
                                                            Hyposensitivity To Movement
                                                            (Under-Responsive)</a></li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Coordination"
                                                            data-toggle="tab">Signs Of
                                                            Vestibular Dysfunction > . Poor
                                                            Muscle Tone And/Or Coordination</a>
                                                    </li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Behaviors"
                                                            data-toggle="tab">Signs Of
                                                            Proprioceptive Dysfunction > Sensory
                                                            Seeking Behaviors</a></li>
                                                    <li class="w-100"><a
                                                            href="#Signs_Of_Vestibular_Dysfunction_Movement"
                                                            data-toggle="tab">Signs Of
                                                            Proprioceptive Dysfunction > 2.
                                                            Difficulty With "Grading Of
                                                            Movement"</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9 apply-view-only" id="questionSerial">
                                            <form action="{{ route('sensory-checklist-child.update', $id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Sensory_Checklist">
                                                        <h3>Sensory Checklist</h3>
                                                        <section>

                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <x-input-text value="{{ $collection_date }}"
                                                                            name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select :selected="$teacher_id"
                                                                            name="teacher_id" :records="$teachers">
                                                                        </x-input-select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-phoneno-input">Candidate
                                                                            ID:</label>
                                                                        <x-input-select :selected="$student_id"
                                                                            name="student_id" :records="$students">
                                                                        </x-input-select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Description:</label>
                                                                        <p>Sensory checklist
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-email-input">Instruction:</label>
                                                                        <p>Parents can use
                                                                            this checklist
                                                                            to identify
                                                                            potential
                                                                            sensory
                                                                            challenges for
                                                                            their Child. The
                                                                            checklist is
                                                                            designed to
                                                                            target specific
                                                                            areas of
                                                                            potential
                                                                            dysfunction and
                                                                            to give you an
                                                                            opportunity to
                                                                            look at child’s
                                                                            environment and
                                                                            assess potential
                                                                            triggers for
                                                                            challenging
                                                                            behaviors. Read
                                                                            the statements
                                                                            and put a check
                                                                            mark or an X
                                                                            next to any
                                                                            statements that
                                                                            are true.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Tactile_Dysfunction">
                                                        <section>

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->hypersensitivity_to_touch ?? ''"
                                                                name="hypersensitivity_to_touch"
                                                                label="Hypersensitivity To Touch (Tactile Defensiveness)"
                                                                :records="$constants::$Touch">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->becomes_fearful ?? ''"
                                                                name="becomes_fearful"
                                                                label="Becomes fearful, anxious or aggressive with light or unexpected touch"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->as_an_infant ?? ''"
                                                                name="as_an_infant"
                                                                label="As an infant, did/does not like to be held or cuddled; may arch back, cry, and pull away"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->distressed_when_diaper_is_being ?? ''"
                                                                name="distressed_when_diaper_is_being"
                                                                label="Distressed when diaper is being, or needs to be, changed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->appears_fearful_of ?? ''"
                                                                name="appears_fearful_of"
                                                                label="Appears fearful of, or avoids standing in close proximity to other people or peers (especially in lines)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->becomes_frightened ?? ''"
                                                                name="becomes_frightened"
                                                                label="Becomes frightened when touched from behind or by someone/something they can not see (such as under a blanket)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->complains_about_having_hair_brushed ?? ''"
                                                                name="complains_about_having_hair_brushed"
                                                                label="Complains about having hair brushed; may be very picky about using a particular brush"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->bothered_by_rough_bed_sheets ?? ''"
                                                                name="bothered_by_rough_bed_sheets"
                                                                label="Bothered by rough bed sheets (i.e., if old and 'bumpy')"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->avoids_group_situations ?? ''"
                                                                name="avoids_group_situations"
                                                                label="Avoids group situations for fear of the unexpected touch"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->resists_friendly ?? ''"
                                                                name="resists_friendly"
                                                                label="Resists friendly or affectionate touch from anyone besides parents or siblings (and sometimes them too!)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->dislikes_kisses ?? ''"
                                                                name="dislikes_kisses"
                                                                label="Dislikes kisses, will 'wipe off' place where kissed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->prefers_hugs ?? ''"
                                                                name="prefers_hugs" label="Prefers hugs"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->a_raindrop ?? ''"
                                                                name="a_raindrop"
                                                                label="A raindrop, water from the shower, or wind blowing on the skin may feel like torture and produce adverse and avoidance reactions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->may_overreact_to_minor_cuts ?? ''"
                                                                name="may_overreact_to_minor_cuts"
                                                                label="May overreact to minor cuts, scrapes, and or bug bites"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->avoids_touching_certain_textures ?? ''"
                                                                name="avoids_touching_certain_textures"
                                                                label="Avoids touching certain textures of material (blankets, rugs, stuffed animals)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->refuses_to_wear_new_or_stiff_clothes ?? ''"
                                                                name="refuses_to_wear_new_or_stiff_clothes"
                                                                label="Refuses to wear new or stiff clothes, clothes with rough textures, turtlenecks, jeans, hats, or belts, etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->a_raindrop_water_from_the_shower ?? ''"
                                                                name="a_raindrop_water_from_the_shower"
                                                                label="A raindrop, water from the shower, or wind blowing on the skin may feel like torture and produce adverse and avoidance reactions"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->avoids_using_hands_for_play ?? ''"
                                                                name="avoids_using_hands_for_play"
                                                                label="Avoids using hands for play"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->yes_no_avoids ?? ''"
                                                                name="yes_no_avoids"
                                                                label="Yes No Avoids/dislikes/aversive to 'messy play', i.e., sand, mud, water, glue, glitter, playdoh, slime, shaving cream/funny foam etc."
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->will_be_distressed_by_dirty_hands ?? ''"
                                                                name="will_be_distressed_by_dirty_hands"
                                                                label="Will be distressed by dirty hands and want to wipe or wash them frequently"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->excessively_ticklish ?? ''"
                                                                name="excessively_ticklish" label="Excessively ticklish"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->distressed_by_seams_in_socks ?? ''"
                                                                name="distressed_by_seams_in_socks"
                                                                label="Distressed by seams in socks and may refuse to wear them"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->distressed_by_clothes_rubbing_on_skin ?? ''"
                                                                name="distressed_by_clothes_rubbing_on_skin"
                                                                label="Distressed by clothes rubbing on skin; may want to wear shorts and short sleeves year round, toddlers may prefer to be naked and pull diapers and clothes off constantly"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->may_want_to_wear_long_sleeve_shirts ?? ''"
                                                                name="may_want_to_wear_long_sleeve_shirts"
                                                                label="May want to wear long sleeve shirts and long pants year-round to avoid having skin exposed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->distressed_about_having_face_washed ?? ''"
                                                                name="distressed_about_having_face_washed"
                                                                label="Distressed about having face washed"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->distressed_about_having_hair ?? ''"
                                                                name="distressed_about_having_hair"
                                                                label="Distressed about having hair, toenails, or fingernails cut"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->resists_brushing_teeth ?? ''"
                                                                name="resists_brushing_teeth"
                                                                label="Resists brushing teeth and is extremely fearful of the dentist"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->is_a_picky_eater ?? ''"
                                                                name="is_a_picky_eater"
                                                                label="Is a picky eater, only eating certain tastes and textures; mixed textures tend to be avoided as well as hot or cold foods; resists trying new foods"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->may_refuse_to_walk_barefoot_on_grass_or_sand ?? ''"
                                                                name="may_refuse_to_walk_barefoot_on_grass_or_sand"
                                                                label="May refuse to walk barefoot on grass or sand"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$signs_of_tactile_dysfunction->may_walk_on_toes_only ?? ''"
                                                                name="may_walk_on_toes_only"
                                                                label="May walk on toes only"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <!-- end row -->

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Hyposensitivity_To_Touch">
                                                        <section>

                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->may_crave_touch ??''"
                                                                name="may_crave_touch"
                                                                label="May crave touch, needs to touch everything and everyone"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->is_not_aware_of_being_touched ??''"
                                                                name="is_not_aware_of_being_touched"
                                                                label="Is not aware of being touched/bumped unless done with extreme force or intensity"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->is_not_bothered_by_injuries ??''"
                                                                name="is_not_bothered_by_injuries"
                                                                label="Is not bothered by injuries, like cuts and bruises, and shows no distress with shots (may even say they love getting shots!)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->may_not_be_aware_that_hands ??''"
                                                                name="may_not_be_aware_that_hands"
                                                                label="May not be aware that hands or face are dirty or feel his/her nose running"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->may_be_self_abusive ??''"
                                                                name="may_be_self_abusive"
                                                                label="May be self-abusive; pinching, biting, or banging his own head"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->mouths_objects_excessively ??''"
                                                                name="mouths_objects_excessively"
                                                                label="Mouths objects excessively"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->frequently_hurts ??''"
                                                                name="frequently_hurts"
                                                                label="Frequently hurts other children or pets while playing"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->repeatedly_touches_surfaces ??''"
                                                                name="repeatedly_touches_surfaces"
                                                                label="Repeatedly touches surfaces or objects that are soothing (i.e., blanket)"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->seeks_out_surfaces ??''"
                                                                name="seeks_out_surfaces"
                                                                label="Seeks out surfaces and textures that provide strong tactile feedback"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->thoroughly_enjoys_and_seeks_out_messy_play ??''"
                                                                name="thoroughly_enjoys_and_seeks_out_messy_play"
                                                                label="Thoroughly enjoys and seeks out messy play"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$hyposensitivity_to_touch->craves_vibrating_or_strong_sensory_input ??''"
                                                                name="craves_vibrating_or_strong_sensory_input"
                                                                label="Craves vibrating or strong sensory input"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <!-- end row -->

                                                        </section>

                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Poor_Tactile_Perception_And_Discrimination">
                                                        <h3>Poor Tactile Perception And Discrimination</h3>
                                                        <section>
                                                            <div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->has_difficulty_with_fine_motor ??''"
                                                                    name="has_difficulty_with_fine_motor"
                                                                    label="Has difficulty with fine motor tasks such as buttoning ,zipping,and fastening clothes"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->may_not_be_able_to_identify ??''"
                                                                    name="may_not_be_able_to_identify"
                                                                    label="May not be able to identify which part of their body was touched if they were not looking"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->maybe_afraid_of_the_dark ??''"
                                                                    name="maybe_afraid_of_the_dark"
                                                                    label="Maybe afraid of the dark"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->may_be_a_messy_dresser ??''"
                                                                    name="may_be_a_messy_dresser"
                                                                    label="May be a messy dresser"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->looks_disheveled ??''"
                                                                    name="looks_disheveled" label="Looks disheveled"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->does_not_notice_pants_are_twisted ??''"
                                                                    name="does_not_notice_pants_are_twisted"
                                                                    label="Does not notice pants are twisted"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->shirt_is_half_un_tucked ??''"
                                                                    name="shirt_is_half_un_tucked"
                                                                    label="Shirt is half un tucked"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->shoes_are_untied ??''"
                                                                    name="shoes_are_untied" label="Shoes are untied"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->one_pant_leg_is_up_and_one_is_down ??''"
                                                                    name="one_pant_leg_is_up_and_one_is_down"
                                                                    label="One pant leg is up and one is down"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->has_difficulty_using_scissors ??''"
                                                                    name="has_difficulty_using_scissors"
                                                                    label="Has difficulty using scissors"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->crayons_or_silverware ??''"
                                                                    name="crayons_or_silverware"
                                                                    label="Crayons, or silverware"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->continues_to_mouth_objects ??''"
                                                                    name="continues_to_mouth_objects"
                                                                    label="Continues to mouth objects to explore them even after age two"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->has_difficulty_figuring_out ??''"
                                                                    name="has_difficulty_figuring_out"
                                                                    label="Has difficulty figuring out physical characteristics of objects; shape, size, texture, . Temperature, weight, etc"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$poor_tactile_perception_and_discrimination->may_not_be_able_to_identify_objects ??''"
                                                                    name="may_not_be_able_to_identify_objects"
                                                                    label="May not be able to identify objects by feel, uses vision to help; such as, reaching into backpack or desk to retrieve an item Vestibular Sense: input from the inner ear about equilibrium, gravitational changes, movement experiences, and position in space."
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction">
                                                        <h3>Signs Of Vestibular Dysfunction >
                                                            Hypersensitivity To Movement
                                                            (Over-Responsive)</h3>
                                                        <section>
                                                            <div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->avoids_dislikes_playground_equipment ??''"
                                                                    name="avoids_dislikes_playground_equipment"
                                                                    label="Avoids/dislikes playground equipment; i.e., swings, ladders, slides, or merry-go-rounds"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->prefers_sedentary_tasks ??''"
                                                                    name="prefers_sedentary_tasks"
                                                                    label="Prefers sedentary tasks, moves slowly and cautiously, avoids taking risks, and may appear 'wimpy'"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->avoids_dislikes_elevators ??''"
                                                                    name="avoids_dislikes_elevators"
                                                                    label="Avoids/dislikes elevators and escalators; may prefer sitting while they are on them or, actually get motion sickness from them"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->may_physically_cling_to_an_adult_they_trust ??''"
                                                                    name="may_physically_cling_to_an_adult_they_trust"
                                                                    label="May physically cling to an adult they trust"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->may_appear_terrified_offalling_even ??''"
                                                                    name="may_appear_terrified_offalling_even"
                                                                    label="May appear terrified of falling even when there is no real risk of it"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->afraid_of_heights ??''"
                                                                    name="afraid_of_heights"
                                                                    label="Afraid of heights, even the height of a curb or step"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->fearful_of_feet_leaving_the_ground ??''"
                                                                    name="fearful_of_feet_leaving_the_ground"
                                                                    label="Fearful of feet leaving the ground"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->fearful_of_going_up_or_down_stairs ??''"
                                                                    name="fearful_of_going_up_or_down_stairs"
                                                                    label="Fearful of going up or down stairs or walking on uneven surfaces"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->afraid_of_being_tipped_upside_down ??''"
                                                                    name="afraid_of_being_tipped_upside_down"
                                                                    label="Afraid of being tipped upside down, sideways or backwards; will strongly resist getting hair washed over the sink"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->startles_if_someone_else_moves_them ??''"
                                                                    name="startles_if_someone_else_moves_them"
                                                                    label="Startles if someone else moves them; i.e., pushing his/her chair closer to the table"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->as_an_infant_may ??''"
                                                                    name="as_an_infant_may"
                                                                    label="As an infant, may never have liked baby swings or jumpers"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->may_be_fearful_of ??''"
                                                                    name="may_be_fearful_of"
                                                                    label="May be fearful of, and have difficulty riding a bike, jumping, hopping, or balancing on one foot (especially if eyes are closed)"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->may_have_disliked_being_placed ??''"
                                                                    name="may_have_disliked_being_placed"
                                                                    label="May have disliked being placed on stomach as an infant"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->loses_balance_easily??''"
                                                                    name="loses_balance_easily"
                                                                    label="Loses balance easily and may appear clumsy"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->fearful_of_activities ??''"
                                                                    name="fearful_of_activities"
                                                                    label="Fearful of activities which require good balance"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction->avoids_rapid_or_rotating_movements ??''"
                                                                    name="avoids_rapid_or_rotating_movements"
                                                                    label="Avoids rapid or rotating movements"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->


                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_under">
                                                        <h3>Signs Of Vestibular Dysfunction >
                                                            Hyposensitivity To Movement
                                                            (Under-Responsive)</h3>
                                                        <section>
                                                            <div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->in_constant_motion_cant_seem_to_sit_still ??''"
                                                                    name="in_constant_motion_cant_seem_to_sit_still"
                                                                    label="in constant motion, can't seem to sit still"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->craves_fast ??''"
                                                                    name="craves_fast"
                                                                    label="Craves fast, spinning, and/or intense movement experiences"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->loves_being_tossed_in_the_air ??''"
                                                                    name="loves_being_tossed_in_the_air"
                                                                    label="loves being tossed in the air"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->could_spin_for_hours ??''"
                                                                    name="could_spin_for_hours"
                                                                    label="Could spin for hours and never appear to be dizzy"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->loves_the_fast ??''"
                                                                    name="loves_the_fast"
                                                                    label="Loves the fast, intense, and/or scary rides at amusement parks"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->always_jumping_on_furniture ??''"
                                                                    name="always_jumping_on_furniture"
                                                                    label="Always jumping on furniture, trampolines, spinning in a swivel chair, or getting into upside down positions"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->loves_to_swing_as_high_as_possible ??''"
                                                                    name="loves_to_swing_as_high_as_possible"
                                                                    label="Loves to swing as high as possible and for long periods of time"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->is_a_thrill_seeker ??''"
                                                                    name="is_a_thrill_seeker"
                                                                    label="Is a 'thrill-seeker' dangerous at times"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->always_running ??''"
                                                                    name="always_running"
                                                                    label="Always running, jumping, hopping etc. instead of walking"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->rocks_body ??''"
                                                                    name="rocks_body"
                                                                    label="Rocks body, shakes leg, or head while sitting"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                {{-- <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->Avoids_rapid_or_rotating_movements ??''"
                                                                    name="" label="demo"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_under->likes_sudden ??''"
                                                                    name="likes_sudden"
                                                                    label="Likes sudden or quick movements, such as, going over a big bump in the car or on a bike"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Signs_Of_Vestibular_Dysfunction_Coordination">
                                                        <h3>Signs Of Vestibular Dysfunction > .
                                                            Poor Muscle Tone And/Or Coordination
                                                        </h3>
                                                        <section>
                                                            <div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_a_limp"
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->has_a_limp ??''"
                                                                    label="has a limp, 'floppy' body"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="frequently_slumps"
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->frequently_slumps??''"
                                                                    label="Frequently slumps, lies down, and/or leans head on hand or arm while working at his/her desk"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->difficulty_simultaneously_lifting_head??''"
                                                                    name="difficulty_simultaneously_lifting_head"
                                                                    label="Difficulty simultaneously lifting head, arms, and legs off the floor while lying on stomach ('superman' position)"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->often_sits_in_a??''"
                                                                    name="often_sits_in_a"
                                                                    label="Often sits in a 'W sit' position on the floor to stabilize body"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->fatigues_easily??''"
                                                                    name="fatigues_easily"
                                                                    label="Fatigues easily! __ compensates for 'looseness' by grasping objects tightly"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->difficulty_turning_doorknobs??''"
                                                                    name="difficulty_turning_doorknobs"
                                                                    label="Difficulty turning doorknobs, handles, opening and closing items"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->difficulty_catching_him??''"
                                                                    name="difficulty_catching_him"
                                                                    label="Difficulty catching him/her self if falling"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->difficulty_getting_dressed??''"
                                                                    name="difficulty_getting_dressed"
                                                                    label="Difficulty getting dressed and doing fasteners, zippers, and buttons"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->may_have_never_crawled_as_an_baby??''"
                                                                    name="may_have_never_crawled_as_an_baby"
                                                                    label="May have never crawled as an baby"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->has_poor_body_awareness??''"
                                                                    name="has_poor_body_awareness"
                                                                    label="has poor body awareness; bumps into things, knocks things over, trips, and/or appears clumsy"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->poor_gross_motor_skills??''"
                                                                    name="poor_gross_motor_skills"
                                                                    label="Poor gross motor skills; jumping, catching a ball, jumping jacks, climbing a ladder etc."
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->poor_fine_motor_skills ??''"
                                                                    name="poor_fine_motor_skills"
                                                                    label="Poor fine motor skills; difficulty using 'tools', such as pencils, silverware, combs, scissors etc."
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->may_appear_ambidextrous??''"
                                                                    name="may_appear_ambidextrous"
                                                                    label="May appear ambidextrous, frequently switching hands for coloring, cutting, writing etc.; does not have an established hand preference/dominance by 4 or 5 years old"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->has_difficulty_licking??''"
                                                                    name="has_difficulty_licking"
                                                                    label="has difficulty licking an ice cream cone"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->seems_to_be_unsure_about??''"
                                                                    name="seems_to_be_unsure_about"
                                                                    label="Seems to be unsure about how to move body during movement, for example, stepping over something"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_coordination->difficulty_learning ??''"
                                                                    name="difficulty_learning"
                                                                    label="Difficulty learning exercise or dance steps"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane"
                                                        id="Signs_Of_Vestibular_Dysfunction_Behaviors">
                                                        <h3> Signs Of Proprioceptive Dysfunction
                                                            > Sensory Seeking Behaviors</h3>
                                                        <section>
                                                            <div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->seeks_out_jumping_bumping??''"
                                                                    name="seeks_out_jumping_bumping"
                                                                    label="Seeks out jumping, bumping, and crashing activities"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->stomps_feet_when_walking??''"
                                                                    name="stomps_feet_when_walking"
                                                                    label="Stomps feet when walking"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->kicks_his_her_feet_on_floor_or_chair??''"
                                                                    name=""
                                                                    label="Kicks_his-her_feet_on_floor_or_chair_while_sitting_at_desk_table"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->bites_or_sucks_on_fingers_and??''"
                                                                    name="bites_or_sucks_on_fingers_and"
                                                                    label="Bites or sucks on fingers and/or frequently cracks his/her knuckles"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->loves_to_be_tightly_wrapped ??''"
                                                                    name="loves_to_be_tightly_wrapped"
                                                                    label="Loves to be tightly wrapped in many or weighted blankets, especially at bedtime"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->prefrs_clothees??''"
                                                                    name="prefrs_clothees"
                                                                    label="Prefrs clothees (and belts, hoods, shoelaces) to be as tight as possible"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->may_not_understand_the_idea??''"
                                                                    name="may_not_understand_the_idea "
                                                                    label="May not understand the idea of 'heavy' or 'light'; would not be able to hold two objects and tell you which weighs more"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->loves_seeks_out ??''"
                                                                    name="loves_seeks_out"
                                                                    label="Loves/seeks out 'squishing' activities"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->enjoys_bear_hugs??''"
                                                                    name="enjoys_bear_hugs" label="Enjoys bear hugs"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->excessive_banging??''"
                                                                    name="excessive_banging"
                                                                    label="Excessive banging on/with toys and objects"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->loves_roughhousing_and_tackling??''"
                                                                    name="loves_roughhousing_and_tackling"
                                                                    label="loves 'roughhousing' and tackling/wrestling games"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->frequently_falls_on_floor_intentionally??''"
                                                                    name="frequently_falls_on_floor_intentionally"
                                                                    label="Frequently falls on floor intentionally"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->would_jump_on_a_trampoline??''"
                                                                    name="would_jump_on_a_trampoline"
                                                                    label="Would jump on a trampoline for hours on end"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->grinds_his_her_teeth_throughout_the_day??''"
                                                                    name="grinds_his_her_teeth_throughout_the_day"
                                                                    label="Grinds his/her teeth throughout the day"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->loves_pushing_pulling??''"
                                                                    name="loves_pushing_pulling"
                                                                    label="Loves pushing/pulling/dragging objects"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->loves_jumping_off_furniture ??''"
                                                                    name="loves_jumping_off_furniture"
                                                                    label="Loves jumping off furniture or from high places"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->frequently_hits ??''"
                                                                    name="frequently_hits"
                                                                    label="Frequently hits, bumps or pushes other children"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_behaviors->chews_on_pens ??''"
                                                                    name="chews_on_pens"
                                                                    label="chews on pens, straws, shirt sleeves etc."
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </div>
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Signs_Of_Vestibular_Dysfunction_Movement">
                                                        <h3> Signs Of Proprioceptive Dysfunction
                                                            > 2. Difficulty With "Grading Of
                                                            Movement"</h3>
                                                        <section>
                                                            <div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->misjudges_how_much_to_flex??''"
                                                                    name="misjudges_how_much_to_flex"
                                                                    label="Misjudges how much to flex and extend muscles during tasks/activities (i.e., putting arms into sleeves or climbing)"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->difficulty_regulating_pressure??''"
                                                                    name="difficulty_regulating_pressure"
                                                                    label="Difficulty regulating pressure when writing/drawing; may be too light to see or so hard the tip"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->kicks_his_her_feet_on_floor??''"
                                                                    name="kicks_his_her_feet_on_floor"
                                                                    label="Kicks his/her feet on floor or chair while sitting at desk/table"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->written_work_is_messy??''"
                                                                    name="written_work_is_messy"
                                                                    label="Written work is messy and he/she often rips the paper when erasing"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->always_seems_to_be_breaking??''"
                                                                    name="always_seems_to_be_breaking"
                                                                    label="Always seems to be breaking objects and toys"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->misjudges_the_weight_of_an_object??''"
                                                                    name="misjudges_the_weight_of_an_object"
                                                                    label="Misjudges the weight of an object, such as a glass of juice, picking it up with too much force sending it flying or spilling, or with too little force and complaining about objects being too heavy"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->may_not_understand_the_idea_of??''"
                                                                    name="may_not_understand_the_idea_of"
                                                                    label="May not understand the idea of 'heavy' or 'light'; would not be able to hold two objects and tell you which weighs more"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->seems_to_do_everything_with??''"
                                                                    name="seems_to_do_everything_with"
                                                                    label="Seems to do everything with too much force; i.e., walking, slamming doors, pressing things too hard, slamming objects down"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    :checked="$signs_of_vestibular_dysfunction_movement->plays_with_animals??''"
                                                                    name="plays_with_animals"
                                                                    label="plays with animals with too much force, often hurting them"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->

                                                            </div>
                                                        </section>

                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-previous'
                                                            name='previous' value='Previous' />
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-next'
                                                            name='next' value='Next' />
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            wire:click='save' value='update' />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end col -->

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<script>
    const parent = document.querySelector('#questionSerial');
    const children = parent.querySelectorAll('h5 > span');

    for (let i = 0; i < children.length; i++) {
    children[i].innerText += '('+ (i+1) +')';
    }
</script>
@endsection