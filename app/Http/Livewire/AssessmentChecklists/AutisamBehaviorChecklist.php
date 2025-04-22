<?php

namespace App\Http\Livewire\AssessmentChecklists;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Utility\ProjectConstants;
use App\Models\LinkCodeCount\LinkCodeCount;
use App\Models\Assessments\AssessmentChecklistQuesAns;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Events\EventCalendarRepository;

class AutisamBehaviorChecklist extends Component
{
    protected AppointmentRepository $appointmentRepository;
    protected EventCalendarRepository $eventCalendarRepository;
    public $checklistId;
    public $checklistTitle;
    public $searchId;
    public $categoryId;
    public $appointmentId;
    public $currentTabLivewire = 0;
    public $formData = [
        'answers' => []
    ];
    public $questions = [];
    public $options = [
        0 => 'Never or rarely',
        1 => 'Occasionally',
        2 => 'Sometimes',
        3 => 'Frequently',
        4 => 'Very freqently or always',
    ];

    public function changeCurrentTab($index)
    {
        $this->currentTabLivewire = $index;
    }

    public function __construct()
    {
        parent::__construct();
        $this->appointmentRepository = app(AppointmentRepository::class);
        $this->eventCalendarRepository = app(EventCalendarRepository::class);
    }

    public function mount($checklistId = null, $searchId = null)
    {
        $this->checklistId = $checklistId; // Category/Tools Id
        $this->searchId = $searchId; // Student ID
        // dd((int) $this->checklistId, $this->searchId, 'Livewire');
        $this->categoryId = (int) $this->checklistId; // 1 = Child Age 11-17
        
        $paymentStatus = 5; 
        $incomeType = 2; 
        $eventType = 2; 

        $introduction = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, $eventType, $paymentStatus);
        $this->formData['introduction'] = $this->getIntroductionData($introduction);
        $this->appointmentId = $introduction->id ?? null;

        // Load questions
        $this->questions = [
            'Sensory Behavior' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Unusual sensitivity to texture in clothing or food', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.04', 'D2.a.1.02', 'D2.a.1.06']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Tendency to mouth or lick objects (e.g., tasting or chewing non-food items)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.02']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Extreme responses to temperature changes (e.g., excessively distressed by cold or heat)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.07']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Fascination with lights, spinning objects, or reflective surfaces', 'options' => $this->options, 'link_codes' => ['D2.a.1.05', 'D3.b.02.4']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Seeks excessive sensory input (e.g., touches everything, rubs hands on surfaces)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D1.c.1.01.2', 'D2.a.1.04']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Avoids certain textures (e.g., dislikes finger painting, refuses to walk on grass)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.07']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Unusual reaction to smells (e.g., sniffing objects or people, strong aversion to certain smells)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.06']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Enjoys spinning, swinging, or jumping for prolonged periods', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D1.a.1.06', 'D1.a.1.07']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Overreaction to loud noises (e.g., covers ears, cries, or appears distressed)', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.03']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Poor use of visual discrimination when learning.', 'options' => $this->options, 'link_codes' => ['D2.b.3.16.9', 'D2.a.2.01', 'D1.a.3.01', 'D2.a.1']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'Seems not to hear, so that a hearing loss is suspected.', 'options' => $this->options, 'link_codes' => ['D2.b.3.16', 'D2.a.1.03', 'D2.a.1']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'Underreaction to loud noises (e.g., seems unaware of loud sounds)', 'options' => $this->options, 'link_codes' => ['D2.a.1.03', 'D2.b.3.16.12', 'D2.a.1']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 13, 'question' => 'Sometimes painful stimuli such as bruises, cuts, and injections evoke no reaction.', 'options' => $this->options, 'link_codes' => ['D2.a.1.04', 'D2.a.1']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 14, 'question' => 'Often will not blink when bright light is directed toward eyes.', 'options' => $this->options, 'link_codes' => ['D2.a.2.01', 'D2.a.1', 'D2.a.1.05']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 15, 'question' => 'Covers ears at loud sounds.', 'options' => $this->options, 'link_codes' => ['D2.a.1.03', 'D2.a.1']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 16, 'question' => 'Squints, frowns, or covers eyes when in the presence of natural light', 'options' => $this->options, 'link_codes' => ['D2.a.2.01', 'D2.a.1', 'D2.a.1.05']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 17, 'question' => 'Frequently has no visual reaction to a “new” person', 'options' => $this->options, 'link_codes' => ['D4.a.1.03', 'D2', 'D2.a.1', 'D3.a.09']],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 18, 'question' => 'Stares at visual stimuli for extended periods (e.g., ceiling fans, lights).', 'options' => $this->options, 'link_codes' => ['D4.a.2.07', 'D2.a.1', 'D3.a.03']],
            ],
            'Relating to People' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'Maintain eye contact?', 'options' => $this->options, 'link_codes' => ['D1.a.1', 'D2.a.1','D2.a.2']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Avoids eye contact or looks through people rather than look at them', 'options' => $this->options, 'link_codes' => ['D4.e.3', 'D2.a.2.01.4', 'D4.a.2.11', 'D2.b.3.18',  'D2.b.3.02']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Appears to be unaware of the presence of others', 'options' => $this->options, 'link_codes' => ['D4.a.3', 'D2.b.1', 'D4.a.3.03', 'D4.c.4']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'Does not seek comfort from parents or caregivers when distressed', 'options' => $this->options, 'link_codes' => ['D2.b.1', 'D1.e.1.03.05', 'D2.b.3.18']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'Shows little interest in other children', 'options' => $this->options, 'link_codes' => ['D4.a.3.08', 'D2.b.1.09', 'D4.b.1', 'D2.b.3.02']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Does not respond to their name being called', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.3.02']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Lack of interest in social games or interactions with peers', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D4.b.1', 'D4.b.5', 'D4.c.1.02', 'D4.d.13', 'D4.e.1', 'D1.c.1.02.6', 'D4.b.6']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Difficulty understanding or interpreting facial expressions', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.1.09', 'D4.c.1.07', 'D2.b.3.26']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'Frequently does not attend to social/environmental stimuli', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.1.09', 'D2.b.3.18.19', 'D1.c.1.02.5', 'D2.b.3.02.1']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 10, 'question' => 'Has no social smile', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.3.02.15', 'D2.b.3.18.4', 'D2.b.3.30', 'D4.a.1.01.23']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 11, 'question' => 'Does not reach out when reached for', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.1.09', 'D4.a.1.01.23', 'D4.a.4.05', 'D4.c.1', 'D2.b.3.02']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 12, 'question' => 'Not responsive to other people’s facial expressions/feelings', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D4.c.1.07', 'D2.b.3.26', 'D3.b.01']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 13, 'question' => 'Actively avoids eye contact', 'options' => $this->options, 'link_codes' => ['D2.b.3.30', 'D2.b.3.18.5', 'D2.b.3.41', 'D2.b.5.01a.5', 'D4.a.1.01.20', 'D4.a.1.01.21', 'D4.a.2.10', 'D4.e.9', 'D4.e.3']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 14, 'question' => 'Resists being touched or held', 'options' => $this->options, 'link_codes' => ['D2.a.1.04', 'D2.b.1.02.6', 'D3.c.1.14', 'D4.a.4.03', 'D2.b.1.08']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 15, 'question' => 'Prefers to be alone rather than with others', 'options' => $this->options, 'link_codes' => ['D2.b.1', 'D4.a.3.08', 'D1.a.1.01.5', 'D1.c.1.02.18', 'D4.a.1', 'D4.a.1.03', 'D4.a.1.04']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 16, 'question' => 'Does not show empathy (e.g., does not comfort someone who is upset)', 'options' => $this->options, 'link_codes' => ['D4.a.1', 'D4.a.1.03', 'D4.a.1.04']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 17, 'question' => 'Does not imitate other children at play', 'options' => $this->options, 'link_codes' => ['D2.b.1.09', 'D4.a.1.03', 'D4.a.1.04']],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 18, 'question' => 'Will feel, smell, and/or taste objects in the environment', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.02', 'D2.a.1.06', 'D2.a.1.07']],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 19, 'question' => 'Appears indifferent to affection (e.g., resists hugs or physical contact)', 'options' => $this->options, 'link_codes' => ['D4.a.1.04', 'D4.a.1.03']],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 20, 'question' => 'Does not imitate actions or behaviors of others (e.g., clapping, waving)', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D4.a.1.04', 'D4.b.5.07']],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 21, 'question' => 'Will feel, smell, and/or taste objects in the environment', 'options' => $this->options, 'link_codes' => ['D2.a.1', 'D2.a.1.02', 'D2.a.1.06', 'D2.a.1.07']]
            ],
            'Body and Object Use' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'Engaging in prepetative movement (e.g. Hand flapping, rocking)', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D4.a.1.04', 'D4.b.5.07', 'D1.a.1']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'Using toys or objects in unusual ways (e.g. lining up toys)', 'options' => $this->options, 'link_codes' => ['D1.a.2.03', 'D2.a.2.01', 'D2.b.2.05.5']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'Difficulty with fine motor skills (e.g., using utensils, buttoning clothes)', 'options' => $this->options, 'link_codes' => ['D2.b.2.05', 'D1.a.2']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'Difficulty with gross motor skills (e.g., running, jumping, climbing)', 'options' => $this->options, 'link_codes' => ['D1.a.1', 'D1.a.1.13']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'Appears clumsy or has poor coordination', 'options' => $this->options, 'link_codes' => ['D1.a.1', 'D1.a.1.03', 'D1.a.1.13', 'D1.c.1.01']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'Repeats certain actions or routines compulsively', 'options' => $this->options, 'link_codes' => ['D1.e.1.03.04', 'D1.e.1.03']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'Fascination with specific parts of objects (e.g., wheels of a car)', 'options' => $this->options, 'link_codes' => ['D2.b.2.05.1']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'Fixation on unusual interests or objects (e.g., fans, vacuum cleaners)', 'options' => $this->options, 'link_codes' => ['D2.b.2.05.1']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 9, 'question' => 'Difficulty transitioning from one activity to another', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D2.b.1.04', 'D4.a.2.13']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 10, 'question' => 'Whirls self for long periods of time', 'options' => $this->options, 'link_codes' => ['D1.e.1.02.15', 'D1.e.1.02.16']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 11, 'question' => 'Insists on keeping certain objects with him/her', 'options' => $this->options, 'link_codes' => ['D3.a.03.1', 'D2.b.1.16']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 12, 'question' => 'Rocks self for long periods of time', 'options' => $this->options, 'link_codes' => ['D2.a.1.04.2', 'D1.e.1.04.16', 'D1.c.1.01']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 13, 'question' => 'Does a lot of lunging and darting', 'options' => $this->options, 'link_codes' => ['D2.a.1.04.3', 'D1.a.1.10.1']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 14, 'question' => 'Walks on tiptoes frequently', 'options' => $this->options, 'link_codes' => ['D1.a.1.03', 'D1.a.1.03.3', 'D1.a.1.09', 'D1.c.1.01']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 15, 'question' => 'Unusual hand or finger movements (e.g., flapping hands, finger flicking, twisting hands)', 'options' => $this->options, 'link_codes' => ['D1.c.1.01.2', 'D1.a.2.05.18', 'D1.a.2.06', 'D1.a.2.11', 'D1.b.2.06', 'D1.b.2.07', 'D1.c.1.01']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'Difficulty imitating actions or using tools correctly', 'options' => $this->options, 'link_codes' => ['D4.b.5.24', 'D4.b.5', 'D2.b.5.09', 'D3.c.4.02']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 17, 'question' => 'Hurts self by banging head, biting hand, etc.', 'options' => $this->options, 'link_codes' => []]
            ],
            'Language and communication' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'Delayed speech development compared to peers', 'options' => $this->options, 'link_codes' => ['D1.d.1', 'D2.b.2.02', 'D4.c.4']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 2, 'question' => 'Repeating phrases out of context (echolalia)', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.15']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 3, 'question' => 'Limited use of gestures and expressive language (e.g., rarely points, waves, or nods, few words, monotone speech)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13', 'D2.b.3.18.38', 'D2.b.3.02', 'D2.b.3.04']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 4, 'question' => 'Difficulty understanding or using pronouns correctly', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.13', 'D2.b.3.15']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 5, 'question' => 'Rarely initiates or sustains conversations', 'options' => $this->options, 'link_codes' => ['D2.b.3.19', 'D2.b.3.29', 'D2.b.3.18']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 6, 'question' => 'Difficulty understanding or following simple instructions', 'options' => $this->options, 'link_codes' => ['D2.b.3.23', 'D2.b.6.01', 'D2.b.6.06', 'D4.a.1.01.9', 'D4.a.2.10', 'D4.a.2.03.1']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 7, 'question' => 'Does not follow simple commands given once', 'options' => $this->options, 'link_codes' => ['D4.a.1.01.9', 'D4.a.2.10', 'D4.a.2.03.1', 'D4.a.2.04.3']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 8, 'question' => 'Does not respond to own name when called out among two others', 'options' => $this->options, 'link_codes' => ['D2.b.2.01.25', 'D2.b.3.17.8']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 9, 'question' => 'Seldom says “yes” or “I”', 'options' => $this->options, 'link_codes' => ['D2.b.3.02.18', 'D2.b.3.02', 'D2.b.3.21', 'D2.b.1.05.3']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 10, 'question' => 'Does not follow simple commands involving prepositions', 'options' => $this->options, 'link_codes' => ['D2.b.3.09.3', 'D2.b.3.09']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 11, 'question' => 'Unusual tone of voice (e.g., robotic, sing-song, flat)', 'options' => $this->options, 'link_codes' => ['D2.b.3.18.7', 'D2.b.1.07', 'D2.b.1.07.2']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 12, 'question' => 'Uses 0-5 spontaneous words per day to communicate wants and needs', 'options' => $this->options, 'link_codes' => ['D2.b.3.18.20', 'D3.b.02.8', 'D4.a.4.04.7', 'D4.c.1', 'D4.c.4.01']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 13, 'question' => 'Uses at least 15 but less than 30 spontaneous phrases daily to communicate', 'options' => $this->options, 'link_codes' => ['D4.c.3', 'D4.c.4', 'D4.c.1', 'D4.c.6']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 14, 'question' => 'Limited understanding of humour or jokes', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D4.c.8.07', 'D2.b.3.18.14', 'D2.b.3.18.29', 'D2.b.3.12', 'D2.b.3.18.30']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 15, 'question' => 'Difficulty understanding abstract concepts or idioms', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D2.b.3.18.15', 'D2.b.2.12', 'D2.b.3.08']]
            ],
            'Social and self-Help skills' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => 'Difficulties with self-care tasks (i.e. dressing, toileting)', 'options' => $this->options, 'link_codes' => ['D2.c.1.01', 'D4.c.1', 'D3.c.1.06']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => 'Limited interest in pretending play or imaginative activities', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D4.c.1', 'D2.b.6.a.6', 'D2.b.3.23.1', 'D2.b.3.23']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => 'Rigidity in routines and difficulty adapting to change', 'options' => $this->options, 'link_codes' => ['Ind.d.04', 'D2.b.3.26.11', 'D2.b.1.04.3']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => 'Does not engage in turn-taking or sharing during play', 'options' => $this->options, 'link_codes' => ['D3.a', 'D3.a.01', 'D3.a.02', 'D3.a.03', 'D3.a.04', 'D3.a.05', 'D4.c.1']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 5, 'question' => 'Difficulty making friends or maintaining friendships', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D4.c.1', 'D2.b.3.18', 'D4.c.4', 'D4.a.1.04', 'D4.a.1.06', 'D4.c.1.11', 'D4.d.5.01', 'D4.a.1.01.46']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 6, 'question' => 'Shows little or no interest in engaging in group activities', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D2.b.3.02', 'D4.a.1.01.8', 'D4.a.1.01.41', 'D4.a.1.02.19']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 7, 'question' => 'Unusual eating habits (e.g., limited diet, ritualistic eating behaviors)', 'options' => $this->options, 'link_codes' => ['D3.c.1.11', 'D3.c.5.01', 'D3.c.5.02', 'D2.a.1.02']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 8, 'question' => 'Difficulty understanding social cues (e.g., body language, tone of voice)', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D3.b.02.8.1', 'D2.b.3.07', 'D2.b.3.18.4', 'Ind.a.1.07.6', 'D2.b.3.18.8', 'D2.b.3.18.9', 'D2.b.3.18.22']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 9, 'question' => 'Difficulty recognizing dangers or understanding safety rules', 'options' => $this->options, 'link_codes' => ['D2.b.1.11', 'D2.b.3.23', 'D3.c.3.01.1', 'D3.c.3.01', 'D4.a.2.10', 'D3.b', 'D4.c.1']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 10, 'question' => 'Limited or absent response to social praise or rewards', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D3.b.01.6', 'D4.a.4.03.1', 'D4.a.1.01', 'D4.a.1.03']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 11, 'question' => 'Severe temper tantrums and/or frequent minor tantrums', 'options' => $this->options, 'link_codes' => ['D2.b.7', 'D3.b.01', 'D4.a.1.02.3']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 12, 'question' => 'Hurts others by biting, hitting, kicking, etc.', 'options' => $this->options, 'link_codes' => ['D3.b.01', 'D2.b.7.04', 'D2.b.1.08.3', 'D4.e.9.9']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 13, 'question' => 'Does not wait for needs to be met', 'options' => $this->options, 'link_codes' => ['D3.b.01', 'D2.b.3.02.19', 'D4.c.1']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 14, 'question' => 'Difficulties with toileting', 'options' => $this->options, 'link_codes' => ['D3.c.1.03']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 15, 'question' => 'Does not dress self without frequent help', 'options' => $this->options, 'link_codes' => ['D3.c.1.07', 'D3.c.1.08', 'D3.c.1.06', 'D3.c.1.10']]
            ]
        ];

        // // Load previously answered questions
        $this->loadPreviousAnswers();
        // dd($this->appointmentId, $this->loadPreviousAnswers());
    }

    private function loadPreviousAnswers()
    {
        // Fetch previously answered questions from the database
        $previousAnswers = AssessmentChecklistQuesAns::where('appointment_id', $this->appointmentId)->get();

        // Populate the formData array with previous answers
        foreach ($previousAnswers as $answer) {
            $key = "{$answer->category_id}_{$answer->sub_category_id}_{$answer->question_id}";
            $this->formData['answers'][$key] = $answer->answer;
        }
    }

    public function nextTab()
    {
        // Save data before moving to the next tab
        $this->createOrUpdateChecklist();
        $this->loadPreviousAnswers();

        // Navigate to the next tab
        if ($this->currentTabLivewire <= count($this->questions) - 1) {
            $this->currentTabLivewire++;
        }
    }

    public function prevTab()
    {
        if ($this->currentTabLivewire > 0) {
            $this->currentTabLivewire--;
        }
    }

    public function submit()
    {
        $this->createOrUpdateChecklist();
        $categoryId = $this->categoryId;
        $appointmentId = $this->appointmentId;
        $checklistTitle = 'Autism Behavior Checklist (ABC Checklist)';
        Session::flash('alert', ['type' => 'success', 'title' => 'Success! ', 'message' => 'Data save successfully!']);
        return redirect()->route('assessment-checklists.show', ['assessment_checklist' => $categoryId, 'checklist_id' => $categoryId, 'appointmentId' => $appointmentId, 'checklistTitle' => $checklistTitle]);
    }
    

    public function render()
    {
        $data = [
            'gender' => ProjectConstants::$genders,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'questions' => $this->questions,
            'formData' => $this->formData,
        ];
        return view('livewire.assessment-checklists.autisam-behavior-checklist', $data);
    }

    private function getIntroductionData($introduction)
    {
        return [
            'payment_status_updated' => $introduction->payment_status_updated ?? '',
            'interview_status' => $introduction->interview_status ?? '',
            'assessment_status' => $introduction->assessment_status ?? '',
            'student_id' => $introduction->student_id ?? '',
            'name' => $introduction->name ?? '',
            'dob' => $introduction->dob ?? '',
            'age' => $introduction->age ?? '',
            'mother_name' => $introduction->mother_name ?? '',
            'mother_edu_level' => $introduction->mother_edu_level ?? '',
            'mother_occupation' => $introduction->mother_occupation ?? '',
            'mother_nid' => $introduction->mother_nid ?? '',
            'father_name' => $introduction->father_name ?? '',
            'father_edu_level' => $introduction->father_edu_level ?? '',
            'father_occupation' => $introduction->father_occupation ?? '',
            'father_nid' => $introduction->father_nid ?? '',
            'phone_number' => $introduction->phone_number ?? '',
            'parent_email' => $introduction->parent_email ?? '',
            'permanent_address' => $introduction->permanent_address ?? '',
            'gender' => $introduction->gender ?? '',
            'emergency_contact_one' => $introduction->emergency_contact_one ?? '',
            'emergency_contact_two' => $introduction->emergency_contact_two ?? '',
            'emergency_contact_three' => $introduction->emergency_contact_three ?? '',
            'main_teacher_department_name' => $introduction->main_teacher_department_name ?? '',
            'main_teacher_name' => ($introduction->main_teacher_name ?? '') . ' (' . ($introduction->main_teacher_designation_name ?? '') . ')',
            'main_teacher_signature' => $introduction->main_teacher_signature ?? '',
            'assistant_teacher_department_name' => $introduction->assistant_teacher_department_name ?? '',
            'assistant_teacher_name' => ($introduction->assistant_teacher_name ?? '') . ' (' . ($introduction->assistant_teacher_department_name ?? '') . ')',
            'assistant_teacher_signature' => $introduction->assistant_teacher_signature ?? '',
            'appointment_id' => $introduction->id ?? '',
            'main_teacher_id' => $introduction->main_teacher_id ?? '',
            'assistant_teacher_id' => $introduction->assistant_teacher_id ?? '',
            'created_by' => auth()->id() ?? 1,
        ];
    }

    private function createOrUpdateChecklist(){
        $linkCodeCounts = [];

        // Loop through all questions
        foreach ($this->questions as $title => $questionGroup) {
            foreach ($questionGroup as $question) {
                $key = "{$question['category_id']}_{$question['sub_category_id']}_{$question['id']}";
                $answer = $this->formData['answers'][$key] ?? null;

                // dd($this->formData['introduction']['main_teacher_id']);
                // Save the answer to the assessment_checklist_table
                AssessmentChecklistQuesAns::updateOrCreate(
                    [
                        'appointment_id' => $this->appointmentId,
                        'category_id' => $question['category_id'],
                        'sub_category_id' => $question['sub_category_id'],
                        'question_id' => $question['id'],
                    ],
                    [
                        'answer' => $answer,
                        'main_teacher_id' => $this->formData['introduction']['main_teacher_id'] ?? 1,
                        'assistant_teacher_id' => $this->formData['introduction']['assistant_teacher_id'] ?? 1,
                        'created_by' => auth()->id() ?? 1,
                    ]
                );

                // Count link codes only if an answer is provided
                if (!is_null($answer)) {
                    foreach ($question['link_codes'] as $linkCode) {
                        // Track the link code in the array
                        if (!isset($linkCodeCounts[$linkCode])) {
                            $linkCodeCounts[$linkCode] = 0;
                        }
                        $linkCodeCounts[$linkCode]++;
                    }
                }
            }
        }

        // Save the total counts for each unique link code
        foreach ($linkCodeCounts as $linkCode => $count) {
            LinkCodeCount::updateOrCreate(
                [
                    'link_code_for' => $this->categoryId + 6, // 7 = Fundamental Communication 8 = ABC Checklist
                    'link_code' => $linkCode,
                    'appointment_id' => $this->appointmentId,
                ],
                [
                    'count' => $count, // Set the total count for the link code
                    'created_by' => auth()->id() ?? 1,
                ]
            );
        }
    }
}