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

class SocialCommunicationAdultChecklist extends Component
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

    public $noOptions = [];

    public $options = [
        '1' => 'Not Present',
        '2' => 'Uses NO Words (Gestures - Preverbal)',
        '3' => 'Uses 1-3 Words / sentenses',
        '4' => 'Able to communicate/ express opinion',
        '5' => 'Uses Complex Language',
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
            'Social Interaction' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Interaction with adults', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Interaction with age-appropriate peers', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'Interaction with younger children', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Waiting for a response from peers.', 'options' => $this->options, 'link_codes' => ['Ind.a.1', 'Ind.a.7', 'D4.c.1']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Negotiating deals', 'options' => $this->options, 'link_codes' => ['Ind.a.2']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Taking turns', 'options' => $this->options, 'link_codes' => ['Ind.a.2']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Ability to interact with many individuals simultaneously', 'options' => $this->options, 'link_codes' => ['Ind.a.2', 'D4.c.1']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Ability to establish multiple friendships', 'options' => $this->options, 'link_codes' => ['Ind.a.7']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Knowing when to persist or let go of an idea', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Interpreting facial expressions and voices', 'options' => $this->options, 'link_codes' => ['D2.b.3.23']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'Understanding the rules of the game', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'Expressing various appropriate expressions', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 13, 'question' => 'Receiving and giving gifts', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 14, 'question' => 'Understanding sharing and the concept of give and take', 'options' => $this->options, 'link_codes' => ['D4.c']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 15, 'question' => 'Participation in group activities', 'options' => $this->options, 'link_codes' => ['D4.a.2']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 16, 'question' => 'Passive tendencies', 'options' => $this->options, 'link_codes' => ['D4.c.6']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 17, 'question' => 'Aggressive tendencies', 'options' => $this->options, 'link_codes' => ['Ind.a.1']],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 18, 'question' => 'Responsiveness', 'options' => $this->options, 'link_codes' => ['Ind', 'D2.c']],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 19, 'question' => 'Ability to handle being “left out”', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
            ],
            'Personal' => [
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'Expresses feelings', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Identifies feelings (I’m happy.)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Explains feelings (I’m happy because it’s my birthday)', 'options' => $this->options, 'link_codes' => ['D2.b.3.13']],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'Provides excuses or reasons', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D2']],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'Offers an opinion with support', 'options' => $this->options, 'link_codes' => ['D2.b.1.09', 'D2.b.3.02', 'D2.b2.3.13']],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Complains', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Blames others', 'options' => $this->options, 'link_codes' => ['D2.b.3.06']],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)', 'options' => $this->options, 'link_codes' => ['D2.b.3.18', 'D2.b.3.19']],
            ],
            'Topic Maintenance' => [
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'Ability to establish a topic', 'options' => $this->options, 'link_codes' => ['D2.b.3.19']],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'Ability to maintain topic relevancy', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.19']],
                ['id' => 30, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'Ability to change a topic using signals', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.1.09']],
                ['id' => 31, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'Ability to change a topic using verbal means', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 32, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'Relevancy of information', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 33, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'Ability to interrupt appropriately', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D2.b.3.08']],
                ['id' => 34, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'Ability to terminate the conversation', 'options' => $this->options, 'link_codes' => ['D2.b.1.09']],
            ],
            'Conversational Structure' => [
                ['id' => 35, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 35, 'question' => 'Ability to initiate a conversation', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.1.09']],
                ['id' => 36, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 36, 'question' => 'Ability to establish a conversation outside of interest area', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D4.c.3']],
                ['id' => 37, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 37, 'question' => 'Ability to acknowledge others in conversation', 'options' => $this->options, 'link_codes' => ['D4.c.8']],
                ['id' => 38, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 38, 'question' => 'Ability to delete redundant information appropriately', 'options' => $this->options, 'link_codes' => ['D4.c.3', 'D4.c.4']],
                ['id' => 39, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 39, 'question' => 'Ability to order information appropriately (new info follows old)', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.02']],
                ['id' => 40, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 40, 'question' => 'Use of pedantic speech', 'options' => $this->options, 'link_codes' => ['D2.b.3.23']],
            ],
            'Word Structure' => [
                ['id' => 41, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => 'Ability to use generals/specifics', 'options' => $this->options, 'link_codes' => ['D2.b.1.11']],
                ['id' => 42, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => 'Pronoun use', 'options' => $this->options, 'link_codes' => ['D4.c.6']],
                ['id' => 43, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => 'Use of word referents', 'options' => $this->options, 'link_codes' => ['D2.b.3.04']],
                ['id' => 44, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => 'Ability to employ Theory of Mind (presupposition)', 'options' => $this->options, 'link_codes' => ['D2.b.3.23']],
            ],
            'Manner/Effectiveness' => [
                ['id' => 45, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => 'Lie, ambiguous, confusing information share', 'options' => $this->options, 'link_codes' => ['D4.a.1']],
                ['id' => 46, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => 'Provides relevant information', 'options' => $this->options, 'link_codes' => ['D2.b.3.13', 'D4.c.1']],
                ['id' => 47, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => 'Truthfulness of information (grandiosity)', 'options' => $this->options, 'link_codes' => ['D4.a.1']],
                ['id' => 48, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => 'Ability to establish joint activity', 'options' => $this->options, 'link_codes' => ['D4.a.2.07', 'D4.c.1']],
                ['id' => 49, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 5, 'question' => 'Tendency to present personal opinions as factual', 'options' => $this->options, 'link_codes' => ['D4.c.2', 'D4.c.4']],
            ],
            'Repair Structures' => [
                ['id' => 50, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 1, 'question' => 'Requests clarification as needed', 'options' => $this->options, 'link_codes' => ['D4.c.8']],
                ['id' => 51, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 2, 'question' => 'Spontaneously provides additional information', 'options' => $this->options, 'link_codes' => ['D4.c.8']],
                ['id' => 52, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 3, 'question' => 'Requests repetition of information for clarification purposes', 'options' => $this->options, 'link_codes' => ['D2.b.3.19', 'D2', 'D2.b.3.14']],
            ],
            'Functional Intent' => [
                ['id' => 53, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'A. Responsiveness', 'title' => true, 'link_codes' => []],
                ['id' => 54, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 1, 'question' => 'Looks at speaker when called', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.09']],
                ['id' => 55, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 2, 'question' => 'Delay of response', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.09']],
                ['id' => 56, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 3, 'question' => 'Ability to label information appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.10']],
                ['id' => 57, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 4, 'question' => 'Ability to describe objects appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.06', 'D2.b.3.17', 'D2.b.3.19', 'D2']],
                ['id' => 58, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 5, 'question' => 'Ability to describe events appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.06', 'D2.b.3.17', 'D2.b.3.19', 'D2']],
                ['id' => 59, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 6, 'question' => 'Ability to state facts appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.06', 'D2.b.3.17', 'D2.b.3.19', 'D2']],
                ['id' => 60, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 7, 'question' => 'Ability to provide clarification appropriately', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.3.08',  'D2.b.3.17',  'D2.b.3.19']],

                ['id' => 61, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'B. INSTRUMENTAL – States needs (I want….)', 'title' => true, 'link_codes' => []],
                ['id' => 62, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 8, 'question' => 'Makes polite requests', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D2.b.3.17', 'D2.b.3.19']],
                ['id' => 63, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 9, 'question' => 'Makes choices', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.3.07', 'D2.b.1.11', 'D3.a.06']],
                ['id' => 64, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 10, 'question' => 'Gives description of an object wanted', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.3.06']],
                ['id' => 65, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 11, 'question' => 'Expresses a specific personal need', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D2.b.3.13']],
                ['id' => 66, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 12, 'question' => 'Requests help', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D2.b.3.13']],

                ['id' => 67, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'C. Requesting', 'title' => true, 'link_codes' => []],
                ['id' => 68, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 13, 'question' => 'Ability to request information appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D2.b.3.15', 'D2.b.3.17']],
                ['id' => 69, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 14, 'question' => 'Ability to request permission appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D4.a.2.08']],
                ['id' => 70, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 15, 'question' => 'Ability to request yes-no responses appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.02', 'D2.b.3.14', 'D2.b.3.22']],
                ['id' => 71, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 16, 'question' => 'Ability to use Wh-Questions appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.22', 'D2.b.3.08', 'D2.b.3.19']],
                ['id' => 72, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 17, 'question' => 'Ability to request an action of another appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D4.a.2.08']],
                ['id' => 73, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 18, 'question' => 'Ability to request clarification appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D4.a.2.08']],
                ['id' => 74, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 19, 'question' => 'Ability to request attention appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D4.a.2.08']],
                ['id' => 75, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 20, 'question' => 'Ability to request help appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.14', 'D4.a.2.08']],

                ['id' => 76, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'D. Prosody', 'title' => true, 'link_codes' => []],
                ['id' => 77, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 21, 'question' => 'Ability to use appropriate rate of speech', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.15', 'D2.b.3.04']],
                ['id' => 78, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 22, 'question' => 'Ability to use appropriate tone of voice', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.15', 'D2.b.3.19']],
                ['id' => 79, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 23, 'question' => 'Ability to use appropriate pitch', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 80, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 24, 'question' => 'Ability to use appropriate loudness', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.15', 'D2.b.3.19']],
                ['id' => 81, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 25, 'question' => 'Ability to comprehend implied meanings via tone of voice', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.09', 'D2.b.3.10', 'D2.b.3.07']],
                ['id' => 82, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 26, 'question' => 'Ability to comprehend implied meanings via inflectional cues', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.09', 'D2.b.3.10', 'D2.b.3.07']],

                ['id' => 83, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'E. Protests', 'title' => true, 'link_codes' => []],
                ['id' => 84, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 27, 'question' => 'Ability to state his opinion using appropriate means', 'options' => $this->options, 'link_codes' => ['D2.b.3.17', 'D2.b.3.04', 'D2', 'D2.b.3.13']],
                ['id' => 85, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 28, 'question' => 'Ability to disagree', 'options' => $this->options, 'link_codes' => ['D3.a.01', 'D3.a.02']],

                ['id' => 86, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'F. Style of Conversation', 'title' => true, 'link_codes' => []],
                ['id' => 87, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 29, 'question' => 'Ability to shift the style of conversation according to person', 'options' => $this->options, 'link_codes' => ['D2.b.3.19', 'D4.c.4', 'D4.c.3']],
                ['id' => 88, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 30, 'question' => 'Ability to shift the style of conversation according to the setting', 'options' => $this->options, 'link_codes' => ['D2.b.3.19', 'D4.c.4', 'D4.c.3']],
                ['id' => 89, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 31, 'question' => 'Ability to shift the style of conversation according to humor', 'options' => $this->options, 'link_codes' => ['D2.b.3.19', 'D4.c.4', 'D4.c.3', 'D3.a']],
                ['id' => 90, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 32, 'question' => 'Ability to engage a listener appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.03', 'D2.b.3.10', 'D2.b.3.11', 'D2.b.3.12']],
                ['id' => 91, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 33, 'question' => 'Ability to use politeness', 'options' => $this->options, 'link_codes' => ['D3.a.04', 'D3.a.03', 'D4.a.1.01']],
                ['id' => 92, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 34, 'question' => 'Appropriateness to the situation', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D4.c.4', 'D4.c.3', 'D2.b.1.09']],
                ['id' => 93, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 35, 'question' => 'Ability to recognize other’s moods', 'options' => $this->options, 'link_codes' => ['D2', 'Ind.a.07', 'D4.a.1.01', 'D3.a.06']],
                ['id' => 94, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 36, 'question' => 'Ability to differentiate requests from demands', 'options' => $this->options, 'link_codes' => ['D2.b.1.10', 'D2.b.1.09', 'D2.b.1.06']],

                ['id' => 95, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'G. Humor', 'title' => true, 'link_codes' => []],
                ['id' => 96, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 37, 'question' => 'Comprehends humor', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.1.09', 'D2.b.1.11', 'D3.a.01', 'D3.a']],
                ['id' => 97, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 38, 'question' => 'Uses humor appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.1.10', 'D2.b.1.09', 'D4.a.1.01', 'D4.c.3', 'D4.a.1.01']],

                ['id' => 98, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'H. Greetings/Acknowledgements ', 'title' => true, 'link_codes' => []],
                ['id' => 99, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 39, 'question' => 'Provides greetings', 'options' => $this->options, 'link_codes' => ['D3.c.1.07', 'D2.b.3.13', 'D2.b.3.02', 'D4.c.1', 'Ind.a.2']],
                ['id' => 100, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 40, 'question' => 'Uses greetings', 'options' => $this->options, 'link_codes' => ['D2.b.3.01', 'D2.b.3.02', 'D2.b.3.13', 'D4.c.1', 'Ind.a.1']],
                ['id' => 101, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 41, 'question' => 'Ability to acknowledge the presence of another individual', 'options' => $this->options, 'link_codes' => ['D4.a.1']],

                ['id' => 102, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'I. Problem Solving ', 'title' => true, 'link_codes' => []],
                ['id' => 103, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 42, 'question' => 'Ability to solve problems affecting himself', 'options' => $this->options, 'link_codes' => ['D3.a', 'D3.a.01', 'D3.a.02']],
                ['id' => 104, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 43, 'question' => 'Ability to solve problems affecting others', 'options' => $this->options, 'link_codes' => ['D3.a.02', 'D2.b.1.09', 'D4.a.3', 'Ind.b.1']],
                ['id' => 105, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 44, 'question' => 'Ability to recognize problems affecting others', 'options' => $this->options, 'link_codes' => ['D4.a.1.01']],
                ['id' => 106, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 45, 'question' => 'Ability to recognize problems affecting himself', 'options' => $this->options, 'link_codes' => ['D2.b.1.09', 'D3.a', 'D3.a.01']],
                ['id' => 107, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 46, 'question' => 'Ability to establish cause-effect', 'options' => $this->options, 'link_codes' => ['D2.b.1.09', 'D2.b.1.11', 'D3.c.1.07']],
                ['id' => 108, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 47, 'question' => 'Ability to use conflict-resolution', 'options' => $this->options, 'link_codes' => ['D3.a.05', 'D3.a.02', 'D2.b.1.11']],

                ['id' => 109, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 0, 'question' => 'J. Deceit ', 'title' => true, 'link_codes' => []],
                ['id' => 110, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 48, 'question' => 'Uses language to deceive', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.13', 'D3.b.01', 'D2.b.1.11']],
                ['id' => 111, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 49, 'question' => 'Lies', 'options' => $this->options, 'link_codes' => ['D3.b.02', 'D3.b.01', 'D2.b.1.11', 'D4.d.1']],

            ],
            'Academic Communication' => [
                ['id' => 112, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 1, 'question' => 'Ability to respond appropriately to teacher requests', 'options' => $this->options, 'link_codes' => ['D2.b.3.07', 'D2.b.02', 'D2.b.3.09']],
                ['id' => 113, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 2, 'question' => 'Ability to reorient to academic agenda appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3']],
                ['id' => 114, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 3, 'question' => 'Ability to obtain teacher’s attention appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.13', 'D4.c.1']],
                ['id' => 115, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 4, 'question' => 'Ability to request clarification from teacher', 'options' => $this->options, 'link_codes' => ['D3.a.02', 'D2.b.3.14']],
                ['id' => 116, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 5, 'question' => 'Ability to participate in classroom discussions', 'options' => $this->options, 'link_codes' => ['D3.a.06', 'D3.a.07']],
                ['id' => 117, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 6, 'question' => 'Ability to interact with classroom peers', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D3.a.06']],
                ['id' => 118, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 7, 'question' => 'Ability to paraphrase text', 'options' => $this->options, 'link_codes' => ['D2']],
                ['id' => 119, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 8, 'question' => 'Ability to summarize a story providing key information', 'options' => $this->options, 'link_codes' => ['D2', 'D2.b.1.11']],
                ['id' => 120, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 9, 'question' => 'Ability to respond to questions requiring inferential reasoning', 'options' => $this->options, 'link_codes' => ['D2.b.3.02', 'D2.b.3.22', 'D2.b.3.23']],
            ],
            'Nonverbal Communication' => [
                ['id' => 121, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 1, 'question' => 'Ability to recognize “personal space” boundaries', 'options' => $this->options, 'link_codes' => ['D3.a.02', 'D3.a.03']],
                ['id' => 122, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 2, 'question' => 'Ability to touch appropriately', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D2.b.3.14']],
                ['id' => 123, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 3, 'question' => 'Comprehends facial expression', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D2.b.3.08', 'D3.a.09']],
                ['id' => 124, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 4, 'question' => 'Comprehends eye gaze', 'options' => $this->options, 'link_codes' => ['D2.b.3.08', 'D3.a.09']],
                ['id' => 125, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 5, 'question' => 'Comprehends gestures', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 126, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 6, 'question' => 'Comprehends body language', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 127, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 7, 'question' => 'Ability to use facial expression', 'options' => $this->options, 'link_codes' => ['D3.a.09']],
                ['id' => 128, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 8, 'question' => 'Ability to use eye gaze', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D3.a.09']],
                ['id' => 129, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 9, 'question' => 'Ability to use gestures', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 130, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 10, 'question' => 'Ability to use body language', 'options' => $this->options, 'link_codes' => ['D4.c.1']],
                ['id' => 131, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 11, 'question' => 'Ability to use eye contact', 'options' => $this->options, 'link_codes' => ['D4.c.1', 'D3.a.09']],
            ],
            'Perspective Taking' => [
                ['id' => 132, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 1, 'question' => 'Ability to recognize another’s viewpoints', 'options' => $this->options, 'link_codes' => ['D4.a.1.01']],
                ['id' => 133, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 2, 'question' => 'Ability to recognize another’s interests', 'options' => $this->options, 'link_codes' => ['D4.a.1.01']],
                ['id' => 134, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 3, 'question' => 'Ability to recognize another’s feelings', 'options' => $this->options, 'link_codes' => ['D4.a.1.01']],
                ['id' => 135, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 4, 'question' => 'Ability to demonstrate concern for another’s problems', 'options' => $this->options, 'link_codes' => ['D4.a.1.01']],
            ],
            'REGULATORY - Gives commands (Do as I tell you…)' => [
                ['id' => 136, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 5, 'question' => 'Gives directions to play a game', 'options' => $this->options, 'link_codes' => ['D4.b.1', 'D4.a.3', 'D3.a.08']],
                ['id' => 137, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 6, 'question' => 'Gives directions to make something', 'options' => $this->options, 'link_codes' => ['D4.b.1', 'D4.a.3', 'D3.a.08']],
                ['id' => 138, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 7, 'question' => 'Changes the style of commands or requests depending on who the child is speaking to and what the child wants', 'options' => $this->options, 'link_codes' => ['D4.b.1', 'D4.a.3', 'D3.a.08']],
            ],
            'Social-Emotional' => [
                ['id' => 139, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 1, 'question' => 'Ability to recognize personal emotional states', 'options' => $this->options, 'link_codes' => ['D4.a.1.02']],
                ['id' => 140, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 2, 'question' => 'Ability to recognize emotional states in others', 'options' => $this->options, 'link_codes' => ['D4.a.1.02', 'D4.a.1.01']],
                ['id' => 141, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 3, 'question' => 'Ability to express personal emotional state', 'options' => $this->options, 'link_codes' => ['D4.a.1.02']],
                ['id' => 142, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 4, 'question' => 'Ability to use appropriate self-control', 'options' => $this->options, 'link_codes' => ['D3.a.04', 'D3.a.05']],
                ['id' => 143, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 5, 'question' => 'Ability to lose a game graciously', 'options' => $this->options, 'link_codes' => ['D3.a.04', 'D3.a.05']],
                ['id' => 144, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 6, 'question' => 'Perfectionist quality', 'options' => $this->options, 'link_codes' => ['D3.a.03']],
                ['id' => 145, 'category_id' => $this->categoryId, 'sub_category_id' => 12, 'question_id' => 7, 'question' => 'Degree of anxiety in social settings', 'options' => $this->options, 'link_codes' => ['D3']],
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
        return view('livewire.assessment-checklists.social-communication-adult-checklist', $data);
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

    private function createOrUpdateChecklist()
    {
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

