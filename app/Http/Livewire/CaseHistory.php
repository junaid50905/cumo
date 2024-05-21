<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use App\Services\CaseHistoryService;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CaseHistory extends Component
{
    use WithPagination, CommonListElements;

    private UserRepository $userRepo;
    private StudentRepository $studentRepo;

    public string $date;
    public mixed $teacher_id;
    public mixed $student_id;
    public string $phone;
    public string $email;
    public string $address;
    public string $has_adjustment_capability;
    public string $has_move_ability;
    public string $has_fine_equipment_use_ability;
    public string $has_write_ability;
    public string $has_interest_in_education;
    public string $has_self_work_capability;
    public string $has_social_communication_ability;
    public string $is_able_to_play_with_others;
    public string $has_any_learning_obstacle;
    public string $has_control_over_body;
    public string $has_speaking_problem;
    public string $has_speaking_problem_secondary;
    public string $is_able_to_understand_tense;
    public string $is_able_to_use_correct_word_in_sentence;
    public string $is_able_to_use_correct_word_in_sentence_secondary;
    public string $has_past_assessment_by_specialist;
    public string $has_family_learning_disability;
    public string $has_instability;
    public string $child_description;
    public string $child_description_secondary;
    public string $has_sleep_patten_problem;
    public string $is_able_to_lick;
    public string $is_able_to_eat_hard_thing;
    public string $is_able_to_control_breathing;
    public string $does_swallow_food_at_once;
    public string $does_take_longer_time_while_eating;
    public string $is_any_problem_in_chewing_food;
    public string $sat_alone_in;
    public string $learned_to_chewing_in;
    public string $learned_to_scrolling_in;
    public string $learned_to_walk_alone_in;
    public string $is_able_to_chewing;
    public string $is_able_to_swimming;
    public string $dose_like_play_outside;
    public string $dose_get_tired_soon;
    public string $dose_have_balancing_problem;
    public string $dose_have_muscle_pain;
    public string $first_voice_lang;
    public string $first_voice_lang_secondary;
    public string $in_which_age_spoke_the_first_word;
    public string $is_able_spake_simple_sentence;
    public string $how_many_word_use_in_a_sentence_max;
    public string $dose_spake_in_other_lang;
    public string $from_which_year_learning_other_lang;
    public string $from_where_learn_other_lang;
    public string $does_he_response_if_call_by_his_name;
    public string $can_give_simple_instruction_and_follow_direction;
    public string $dose_use_wrong_word_while_speaking;
    public string $in_which_sound_child_react;
    public string $does_follow_verbal_commend;
    public string $is_able_to_use_right_word_for_right_sentence;
    public string $can_use_spoon;
    public string $can_wear_cloth_alone;
    public string $can_arrange_own_things;
    public string $in_which_age_got_toilet_training;
    public string $does_go_to_toilet_himself;
    public string $does_go_to_toilet_in_unknown_place;
    public string $does_like_drawing_and_writing_in_home;
    public string $does_like_play;
    public string $can_play_independently;
    public string $favorite_games;
    public string $can_obey_elder_commends;
    public string $do_you_things_obey_elder_elder_is_heard;
    public string $can_clean_himself_after_properly;
    public string $can_wear_cloth_himself_after_properly;
    public string $does_play_with_siblings;
    public string $does_friend_come_to_play_in_home;
    public string $does_share_toys;
    public string $does_wait_for_his_turn;
    public string $does_careless_for_others;
    public string $are_you_tense_for_specific_behaviour;
    public string $concerning_points_of_child_school_work;
    public string $is_curious_to_learn_new_things;
    public string $can_understand_simple_things_right_way;
    public string $can_learn_word_spelling;
    public string $can_write_himself;
    public string $working_speed;
    public string $how_long_child_can_remember_after_teaching;
    public string $is_home_work_a_simple_things;
    public string $does_change_behaviour_during_homework;
    public string $is_he_angry;
    public string $does_feel_messy_about_paper_and_books;
    public string $does_lose_different_things_from_bags_regularly;
    public string $does_irrelevant_work_during_meal;
    public string $does_scream_during_wearing_cloth;
    public string $how_you_will_describe_you_child;
    public string $bath;
    public string $necessary_things;
    public string $does_have_the_navigation_capability;
    public string $play;
    public string $mobility;
    public string $does_like_routine;
    public string $does_accept_routing_change;
    public string $does_like_new_situation;
    public string $can_not_obey_regularity;
    public string $does_get_angry_quickly;
    public string $does_get_disappointed_quickly;
    public string $does_stop_working;
    public string $can_stay_longer_if_needed;
    public string $does_have_tremendous_behaviors_at_home;
    public string $seems_like_not_interested_in_playing;
    public string $does_have_time_sense;
    public string $doest_have_knowledge_problem_about_day_monty_and_time;
    public string $response;
    public string $day_dreamer;
    public string $does_move_in_one_place;
    public string $does_move;
    public string $does_move_all_time;
    public string $does_like_to_sit_straight;
    public string $is_expert_play_with_ball;
    public string $does_ignore_playing_with_ball;
    public string $does_like_to_destroy;
    public string $does_run_in_wrong_way;
    public string $does_height_movement_be_careful_when_going_down_stairs;
    public string $try_to_ignore_task;
    public string $which_kind_of_task_he_try_to_skip;
    public string $lost_again_and_again;

    public string $mode = '';
    public $recordId = 0;
    private CaseHistoryService $service;
    private CaseHistoryRepository $caseRepo;

    public function boot(CaseHistoryService $service, UserRepository $userRepository, StudentRepository $studentRepository, CaseHistoryRepository $caseHistoryRepository)
    {
        $this->service     = $service;
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
    }

    // protected array $rules = [
    //     'date'                                                   => 'nullable',
    //     'teacher_id'                                             => 'nullable',
    //     'student_id'                                             => 'nullable',
    //     'phone'                                                  => 'nullable',
    //     'email'                                                  => 'nullable',
    //     'address'                                                => 'nullable',
    //     'has_adjustment_capability'                              => 'nullable',
    //     'has_move_ability'                                       => 'nullable',
    //     'has_fine_equipment_use_ability'                         => 'nullable',
    //     'has_write_ability'                                      => 'nullable',
    //     'has_interest_in_education'                              => 'nullable',
    //     'has_self_work_capability'                               => 'nullable',
    //     'has_social_communication_ability'                       => 'nullable',
    //     'is_able_to_play_with_others'                            => 'nullable',
    //     'has_any_learning_obstacle'                              => 'nullable',
    //     'has_control_over_body'                                  => 'nullable',
    //     'has_speaking_problem'                                   => 'nullable',
    //     'has_speaking_problem_secondary'                        => 'nullable',
    //     'is_able_to_understand_tense'                            => 'nullable',
    //     'is_able_to_use_correct_word_in_sentence'                => 'nullable',
    //     'is_able_to_use_correct_word_in_sentence_secondary'     => 'nullable',
    //     'has_past_assessment_by_specialist'                      => 'nullable',
    //     'has_family_learning_disability'                         => 'nullable',
    //     'has_instability'                                        => 'nullable',
    //     'child_description'                                      => 'nullable',
    //     'child_description_secondary'                           => 'nullable',
    //     'has_sleep_patten_problem'                               => 'nullable',
    //     'is_able_to_lick'                                        => 'nullable',
    //     'is_able_to_eat_hard_thing'                              => 'nullable',
    //     'is_able_to_control_breathing'                           => 'nullable',
    //     'does_swallow_food_at_once'                              => 'nullable',
    //     'does_take_longer_time_while_eating'                     => 'nullable',
    //     'is_any_problem_in_chewing_food'                         => 'nullable',
    //     'sat_alone_in'                                           => 'nullable',
    //     'learned_to_chewing_in'                                  => 'nullable',
    //     'learned_to_scrolling_in'                                => 'nullable',
    //     'learned_to_walk_alone_in'                               => 'nullable',

    //     'is_able_to_chewing'                                     => 'nullable',

    //     'is_able_to_swimming'                                    => 'nullable',
    //     'dose_like_play_outside'                                 => 'nullable',
    //     'dose_get_tired_soon'                                    => 'nullable',
    //     'dose_have_balancing_problem'                            => 'nullable',
    //     'dose_have_muscle_pain'                                  => 'nullable',
    //     'first_voice_lang'                                       => 'nullable',
    //     'first_voice_lang_secondary'                            => 'nullable',
    //     'in_which_age_spoke_the_first_word'                      => 'nullable',
    //     'is_able_spake_simple_sentence'                          => 'nullable',
    //     'how_many_word_use_in_a_sentence_max'                    => 'nullable',
    //     'dose_spake_in_other_lang'                               => 'nullable',
    //     'from_which_year_learning_other_lang'                    => 'nullable',

    // কোন বয়স থেকে শিখেছে ?

    //     'from_where_learn_other_lang'                            => 'nullable',
    //     'does_he_response_if_call_by_his_name'                   => 'nullable',
    //     'can_give_simple_instruction_and_follow_direction'       => 'nullable',
    //     'dose_use_wrong_word_while_speaking'                     => 'nullable',
    //     'in_which_sound_child_react'                             => 'nullable',
    //     'does_follow_verbal_commend'                             => 'nullable',
    //     'is_able_to_use_right_word_for_right_sentence'           => 'nullable',
    //     'can_use_spoon'                                          => 'nullable',
    //     'can_wear_cloth_alone'                                   => 'nullable',
    //     'can_arrange_own_things'                                 => 'nullable',
    //     'in_which_age_got_toilet_training'                       => 'nullable',
    //     'does_go_to_toilet_himself'                              => 'nullable',
    //     'does_go_to_toilet_in_unknown_place'                     => 'nullable',
    //     'does_like_drawing_and_writing_in_home'                  => 'nullable',
    //     'does_like_play'                                         => 'nullable',
    //     'can_play_independently'                                 => 'nullable',
    //     'favorite_games'                                         => 'nullable',
    //     'can_obey_elder_commends'                                => 'nullable',
    //     'do_you_things_obey_elder_elder_is_heard'                => 'nullable',
    //     'can_clean_himself_after_properly'                       => 'nullable',
    //     'can_wear_cloth_himself_after_properly'                  => 'nullable',
    //     'does_play_with_siblings'                                => 'nullable',
    //     'does_friend_come_to_play_in_home'                       => 'nullable',
    //     'does_share_toys'                                        => 'nullable',
    //     'does_wait_for_his_turn'                                 => 'nullable',
    //     'does_careless_for_others'                               => 'nullable',
    //     'are_you_tense_for_specific_behaviour'                   => 'nullable',
    //     'concerning_points_of_child_school_work'                 => 'nullable',
    //     'is_curious_to_learn_new_things'                         => 'nullable',
    //     'can_understand_simple_things_right_way'                 => 'nullable',
    //     'can_learn_word_spelling'                                => 'nullable',
    //     'can_write_himself'                                      => 'nullable',
    //     'working_speed'                                          => 'nullable',
    //     'how_long_child_can_remember_after_teaching'             => 'nullable',
    //     'is_home_work_a_simple_things'                           => 'nullable',
    //     'does_change_behaviour_during_homework'                  => 'nullable',
    //     'is_he_angry'                                            => 'nullable',
    //     'does_feel_messy_about_paper_and_books'                  => 'nullable',
    //     'does_lose_different_things_from_bags_regularly'         => 'nullable',
    //     'does_irrelevant_work_during_meal'                       => 'nullable',
    //     'does_scream_during_wearing_cloth'                       => 'nullable',
    //     'how_you_will_describe_you_child'                        => 'nullable',
    //     'bath'                                                   => 'nullable',
    //     'necessary_things'                                       => 'nullable',
    //     'does_have_the_navigation_capability'                    => 'nullable',
    //     'play'                                                   => 'nullable',
    //     'mobility'                                               => 'nullable',
    //     'does_like_routine'                                      => 'nullable',
    //     'does_accept_routing_change'                             => 'nullable',
    //     'does_like_new_situation'                                => 'nullable',
    //     'can_not_obey_regularity'                                => 'nullable',
    //     'does_get_angry_quickly'                                 => 'nullable',
    //     'does_get_disappointed_quickly'                          => 'nullable',
    //     'does_stop_working'                                      => 'nullable',
    //     'can_stay_longer_if_needed'                              => 'nullable',
    //     'does_have_tremendous_behaviors_at_home'                 => 'nullable',
    //     'seems_like_not_interested_in_playing'                   => 'nullable',
    //     'does_have_time_sense'                                   => 'nullable',
    //     'doest_have_knowledge_problem_about_day_monty_and_time'  => 'nullable',
    //     'response'                                               => 'nullable',
    //     'day_dreamer'                                            => 'nullable',
    //     'does_move_in_one_place'                                 => 'nullable',
    //     'does_move'                                              => 'nullable',
    //     'does_move_all_time'                                     => 'nullable',
    //     'does_like_to_sit_straight'                              => 'nullable',
    //     'is_expert_play_with_ball'                               => 'nullable',
    //     'does_ignore_playing_with_ball'                          => 'nullable',
    //     'does_like_to_destroy'                                   => 'nullable',
    //     'does_run_in_wrong_way'                                  => 'nullable',
    //     'does_height_movement_be_careful_when_going_down_stairs' => 'nullable',
    
    //     'try_to_ignore_task'                                     => 'nullable',
    //     'which_kind_of_task_he_try_to_skip'                      => 'nullable',
    //     'lost_again_and_again'                                   => 'nullable',
    // ];

    public function show($record = [], $mode = 'create', $recordId = 0)
    {
        $this->dispatchBrowserEvent('inject', ['record' => $record, 'mode' => $mode, 'recordId' => $recordId]);

        if (!count($record)) {
            $class = new \ReflectionClass($this);
            foreach ($class->getProperties() as $property) {
                if ($property->isPublic() && $property->class === get_class($this)) {
                    $this->{$property->name} = '';
                }
            }
        } else {
            foreach ($record as $key => $val) {
                $this->{$key} = $val;
            }
        }

        $this->mode     = $mode;
        $this->recordId = $recordId;
    }

    protected array $rules = [
        'date' => 'nullable',
        'student_id' => 'nullable',
        'phone' => 'nullable',
        'email' => 'nullable',
        'address' => 'nullable',
        'has_adjustment_capability' => 'nullable',
        'is_able_to_use_correct_word_in_sentence_secondary' => 'nullable',
    ];

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    public function save()
    {
        if ($this->mode === 'edit') {
            $this->service->update($this->recordId, $this->validate());
        } else {
            $this->service->store($this->validate());
        }

        /*$this->dispatchBrowserEvent('notifyr');
        $this->dispatchBrowserEvent("close-modal");
        $this->dispatchBrowserEvent("reset-form", ["formName" => "StudentCreateForm"]);
        $this->emit('reset-appointment-list');*/
    }

    public function render()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'records' => $this->caseRepo->getListData($this->perPage, $this->search),
        ];

        return view('livewire.case-history', $data)->extends('layouts.master')->section('content');
    }
}
