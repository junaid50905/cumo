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

class SensoryChecklistForChild extends Component
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

    public $noOptions = [
    ];

    public $options = [
        'Yes' => 'Yes',
        'No' => 'No',
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
            'Signs Of Tactile Dysfunction' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'Hypersensitivity To Touch (Tactile Defensiveness)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'Becomes fearful, anxious or aggressive with light or unexpected touch', 'options' => $this->options, 'link_codes' => []],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'As an infant, did/does not like to be held or cuddled; may arch back, cry, and pull away', 'options' => $this->options, 'link_codes' => []],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'Distressed when diaper is being, or needs to be, changed', 'options' => $this->options, 'link_codes' => []],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'Appears fearful of, or avoids standing in close proximity to other people or peers (especially in lines)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'Becomes frightened when touched from behind or by someone/something they cannot see (such as under a blanket)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'Complains about having hair brushed; may be very picky about using a particular brush', 'options' => $this->options, 'link_codes' => []],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'Bothered by rough bed sheets (i.e., if old and bumpy)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'Avoids group situations for fear of the unexpected touch', 'options' => $this->options, 'link_codes' => []],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'Resists friendly or affectionate touch from anyone besides parents or siblings (and sometimes them too!)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'Dislikes kisses, will wipe off place where kissed', 'options' => $this->options, 'link_codes' => []],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'Prefers hugs', 'options' => $this->options, 'link_codes' => []],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 13, 'question' => 'A raindrop, water from the shower, or wind blowing on the skin may feel like torture and produce adverse and avoidance reactions', 'options' => $this->options, 'link_codes' => []],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 14, 'question' => 'May overreact to minor cuts, scrapes, and/or bug bites', 'options' => $this->options, 'link_codes' => []],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 15, 'question' => 'Avoids touching certain textures of material (blankets, rugs, stuffed animals)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 16, 'question' => 'Refuses to wear new or stiff clothes, clothes with rough textures, turtlenecks, jeans, hats, or belts, etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 17, 'question' => 'Avoids using hands for play', 'options' => $this->options, 'link_codes' => []],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 18, 'question' => 'Avoids/dislikes/aversive to "messy play", i.e., sand, mud, water, glue, glitter, playdoh, slime, shaving cream/funny foam etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 19, 'question' => 'Will be distressed by dirty hands and want to wipe or wash them frequently', 'options' => $this->options, 'link_codes' => []],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 20, 'question' => 'Excessively ticklish', 'options' => $this->options, 'link_codes' => []],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 21, 'question' => 'Distressed by seams in socks and may refuse to wear them', 'options' => $this->options, 'link_codes' => []],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 22, 'question' => 'Distressed by clothes rubbing on skin; may want to wear shorts and short sleeves year round, toddlers may prefer to be naked and pull diapers and clothes off constantly', 'options' => $this->options, 'link_codes' => []],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 23, 'question' => 'Or, may want to wear long sleeve shirts and long pants year round to avoid having skin exposed', 'options' => $this->options, 'link_codes' => []],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 24, 'question' => 'Distressed about having face washed', 'options' => $this->options, 'link_codes' => []],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 25, 'question' => 'Distressed about having hair, toenails, or fingernails cut', 'options' => $this->options, 'link_codes' => []],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 26, 'question' => 'Resists brushing teeth and is extremely fearful of the dentist', 'options' => $this->options, 'link_codes' => []],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 27, 'question' => 'Is a picky eater, only eating certain tastes and textures; mixed textures tend to be avoided as well as hot or cold foods; resists trying new foods', 'options' => $this->options, 'link_codes' => []],
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 28, 'question' => 'May refuse to walk barefoot on grass or sand', 'options' => $this->options, 'link_codes' => []],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 29, 'question' => 'May walk on toes only', 'options' => $this->options, 'link_codes' => []],
            ],
            'Hyposensitivity To Touch (Under-Responsive)' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'May crave touch, needs to touch everything and everyone', 'options' => $this->options, 'link_codes' => []],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'Is not aware of being touched/bumped unless done with extreme force or intensity', 'options' => $this->options, 'link_codes' => []],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'Is not bothered by injuries, like cuts and bruises, and shows no distress with shots (may even say they love getting shots!)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'May not be aware that hands or face are dirty or feel his/her nose running', 'options' => $this->options, 'link_codes' => []],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'May be self-abusive; pinching, biting, or banging his own head', 'options' => $this->options, 'link_codes' => []],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'Mouths objects excessively', 'options' => $this->options, 'link_codes' => []],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'Frequently hurts other children or pets while playing', 'options' => $this->options, 'link_codes' => []],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'Repeatedly touches surfaces or objects that are soothing (i.e., blanket)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'Seeks out surfaces and textures that provide strong tactile feedback', 'options' => $this->options, 'link_codes' => []],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 10, 'question' => 'Thoroughly enjoys and seeks out messy play', 'options' => $this->options, 'link_codes' => []],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 11, 'question' => 'Craves vibrating or strong sensory input', 'options' => $this->options, 'link_codes' => []],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 12, 'question' => 'Has a preference and craving for excessively spicy, sweet, sour, or salty foods', 'options' => $this->options, 'link_codes' => []],
            ],
            'Poor Tactile Perception And Discrimination' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'Has difficulty with fine motor tasks such as buttoning, zipping, and fastening clothes', 'options' => $this->options, 'link_codes' => []],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'May not be able to identify which part of their body was touched if they were not looking', 'options' => $this->options, 'link_codes' => []],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'May be afraid of the dark', 'options' => $this->options, 'link_codes' => []],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'May be a messy dresser; looks disheveled, does not notice pants are twisted, shirt is half untucked, shoes are untied, one pant leg is up and one is down, etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'Has difficulty using scissors, crayons, or silverware', 'options' => $this->options, 'link_codes' => []],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'Continues to mouth objects to explore them even after age two', 'options' => $this->options, 'link_codes' => []],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'Has difficulty figuring out physical characteristics of objects such as shape, size, texture, temperature, weight, etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'May not be able to identify objects by feel and uses vision to help; such as reaching into a backpack or desk to retrieve an item', 'options' => $this->options, 'link_codes' => []],
            ],
            'Signs Of Vestibular Dysfunction' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A', 'question' => 'Hypersensitivity To Movement (Over-Responsive):', 'options' => $this->options, 'link_codes' => []],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.1', 'question' => '__ avoids/dislikes playground equipment; i.e., swings, ladders, slides, or merry-go-rounds', 'options' => $this->options, 'link_codes' => []],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.2', 'question' => "__ prefers sedentary tasks, moves slowly and cautiously, avoids taking risks, and may appear wimpy", 'options' => $this->options, 'link_codes' => []],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.3', 'question' => '__ avoids/dislikes elevators and escalators; may prefer sitting while they are on them or actually get motion sickness from them', 'options' => $this->options, 'link_codes' => []],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.4', 'question' => '__ may physically cling to an adult they trust', 'options' => $this->options, 'link_codes' => []],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.5', 'question' => '__ may appear terrified of falling even when there is no real risk of it', 'options' => $this->options, 'link_codes' => []],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.6', 'question' => '__ afraid of heights, even the height of a curb or step', 'options' => $this->options, 'link_codes' => []],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.7', 'question' => '__ fearful of feet leaving the ground', 'options' => $this->options, 'link_codes' => []],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.8', 'question' => '__ fearful of going up or down stairs or walking on uneven surfaces', 'options' => $this->options, 'link_codes' => []],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.9', 'question' => '__ afraid of being tipped upside down, sideways or backwards; will strongly resist getting hair washed over the sink', 'options' => $this->options, 'link_codes' => []],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.10', 'question' => '__ startles if someone else moves them; i.e., pushing his/her chair closer to the table', 'options' => $this->options, 'link_codes' => []],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.11', 'question' => '__ as an infant, may never have liked baby swings or jumpers', 'options' => $this->options, 'link_codes' => []],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.12', 'question' => '__ may be fearful of, and have difficulty riding a bike, jumping, hopping, or balancing on one foot (especially if eyes are closed)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.13', 'question' => '__ may have disliked being placed on stomach as an infant', 'options' => $this->options, 'link_codes' => []],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.14', 'question' => '__ loses balance easily and may appear clumsy', 'options' => $this->options, 'link_codes' => []],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.15', 'question' => '__ fearful of activities which require good balance', 'options' => $this->options, 'link_codes' => []],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'A.16', 'question' => '__ avoids rapid or rotating movements', 'options' => $this->options, 'link_codes' => []],

                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B', 'question' => 'Hyposensitivity To Movement (Under-Responsive):', 'options' => $this->options, 'link_codes' => []],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.1', 'question' => '__ in constant motion, cannot seem to sit still', 'options' => $this->options, 'link_codes' => []],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.2', 'question' => '__ craves fast, spinning, and/or intense movement experiences', 'options' => $this->options, 'link_codes' => []],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.3', 'question' => '__ loves being tossed in the air', 'options' => $this->options, 'link_codes' => []],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.4', 'question' => '__ could spin for hours and never appear to be dizzy', 'options' => $this->options, 'link_codes' => []],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.5', 'question' => '__ loves the fast, intense, and/or scary rides at amusement parks', 'options' => $this->options, 'link_codes' => []],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.6', 'question' => '__ always jumping on furniture, trampolines, spinning in a swivel chair, or getting into upside down positions', 'options' => $this->options, 'link_codes' => []],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.7', 'question' => '__ loves to swing as high as possible and for long periods of time', 'options' => $this->options, 'link_codes' => []],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.8', 'question' => '__ is a \'thrill-seeker\'; dangerous at times', 'options' => $this->options, 'link_codes' => []],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.9', 'question' => '__ always running, jumping, hopping etc. instead of walking', 'options' => $this->options, 'link_codes' => []],
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.10', 'question' => '__ rocks body, shakes leg, or head while sitting', 'options' => $this->options, 'link_codes' => []],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'B.11', 'question' => '__ likes sudden or quick movements, such as, going over a big bump in the car or on a bike', 'options' => $this->options, 'link_codes' => []],

                ['id' => 30, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C', 'question' => 'Poor Muscle Tone And/Or Coordination:', 'options' => $this->options, 'link_codes' => []],
                ['id' => 31, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.1', 'question' => '__ has a limp, "floppy" body', 'options' => $this->options, 'link_codes' => []],
                ['id' => 32, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.2', 'question' => '__ frequently slumps, lies down, and/or leans head on hand or arm while working at his/her desk', 'options' => $this->options, 'link_codes' => []],
                ['id' => 33, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.3', 'question' => '__ difficulty simultaneously lifting head, arms, and legs off the floor while lying on stomach ("superman" position)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 34, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.4', 'question' => '__ often sits in a "W sit" position on the floor to stabilize body', 'options' => $this->options, 'link_codes' => []],
                ['id' => 35, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.5', 'question' => '__ fatigues easily; compensates for "looseness" by grasping objects tightly', 'options' => $this->options, 'link_codes' => []],
                ['id' => 36, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.6', 'question' => '__ difficulty turning doorknobs, handles, opening and closing items', 'options' => $this->options, 'link_codes' => []],
                ['id' => 37, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.7', 'question' => '__ difficulty catching him/her self if falling', 'options' => $this->options, 'link_codes' => []],
                ['id' => 38, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.8', 'question' => '__ difficulty getting dressed and doing fasteners, zippers, and buttons', 'options' => $this->options, 'link_codes' => []],
                ['id' => 39, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.9', 'question' => '__ may have never crawled as a baby', 'options' => $this->options, 'link_codes' => []],
                ['id' => 40, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.10', 'question' => '__ has poor body awareness; bumps into things, knocks things over, trips, and/or appears clumsy', 'options' => $this->options, 'link_codes' => []],
                ['id' => 41, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.11', 'question' => '__ poor gross motor skills; jumping, catching a ball, jumping jacks, climbing a ladder etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 42, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.12', 'question' => '__ poor fine motor skills; difficulty using "tools", such as pencils, silverware, combs, scissors etc.', 'options' => $this->options, 'link_codes' => []],
                ['id' => 43, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.13', 'question' => '__ may appear ambidextrous, frequently switching hands for coloring, cutting, writing etc.; does not have an established hand preference/dominance by 4 or 5 years old', 'options' => $this->options, 'link_codes' => []],
                ['id' => 44, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.14', 'question' => '__ has difficulty licking an ice cream cone', 'options' => $this->options, 'link_codes' => []],
                ['id' => 45, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.15', 'question' => '__ seems to be unsure about how to move body during movement, for example, stepping over something', 'options' => $this->options, 'link_codes' => []],
                ['id' => 46, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 'C.16', 'question' => '__ difficulty learning exercise or dance steps', 'options' => $this->options, 'link_codes' => []],
            ],
            'Signs Of Proprioceptive Dysfunction' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1', 'question' => 'Sensory Seeking Behaviors:', 'options' => $this->noOptions, 'link_codes' => []],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.1', 'question' => '__ Seeks out jumping, bumping, and crashing activities', 'options' => $this->options, 'link_codes' => []],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.2', 'question' => '__ Stomps feet when walking', 'options' => $this->options, 'link_codes' => []],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.3', 'question' => '__ Kicks his/her feet on floor or chair while sitting at desk/table', 'options' => $this->options, 'link_codes' => []],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.4', 'question' => '__ Loves to be tightly wrapped in many or weighted blankets, especially at bedtime', 'options' => $this->options, 'link_codes' => []],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.5', 'question' => '__ Bites or sucks on fingers and/or frequently cracks his/her knuckles', 'options' => $this->options, 'link_codes' => []],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.6', 'question' => '__ Prefers clothes (and belts, hoods, shoelaces) to be as tight as possible', 'options' => $this->options, 'link_codes' => []],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.7', 'question' => '__ Loves/seeks out squishing activities', 'options' => $this->options, 'link_codes' => []],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.8', 'question' => '__ Enjoys bear hugs', 'options' => $this->options, 'link_codes' => []],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.9.', 'question' => '__ Excessive banging on/with toys and objects', 'options' => $this->options, 'link_codes' => []],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.10', 'question' => '__ Loves roughhousing and tackling/wrestling games', 'options' => $this->options, 'link_codes' => []],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.11', 'question' => '__ Frequently falls on floor intentionally', 'options' => $this->options, 'link_codes' => []],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.12', 'question' => '__ Would jump on a trampoline for hours on end', 'options' => $this->options, 'link_codes' => []],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.13', 'question' => '__ Grinds his/her teeth throughout the day', 'options' => $this->options, 'link_codes' => []],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.14', 'question' => '__ Loves pushing/pulling/dragging objects', 'options' => $this->options, 'link_codes' => []],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.15', 'question' => '__ Loves jumping off furniture or from high places', 'options' => $this->options, 'link_codes' => []],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.16', 'question' => '__ Frequently hits, bumps or pushes other children', 'options' => $this->options, 'link_codes' => []],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '1.17', 'question' => '__ Chews on pens, straws, shirt sleeves etc', 'options' => $this->options, 'link_codes' => []],


                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2', 'question' => 'Difficulty With Grading Of Movement:', 'options' => $this->options, 'link_codes' => []],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.1', 'question' => '__ Misjudges how much to flex and extend muscles during tasks/activities (i.e., putting arms into sleeves or climbing)', 'options' => $this->options, 'link_codes' => []],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.2', 'question' => '__ Difficulty regulating pressure when writing/drawing; may be too light to see or so hard the tip', 'options' => $this->options, 'link_codes' => []],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.3', 'question' => '__ Written work is messy and he/she often rips the paper when erasing', 'options' => $this->options, 'link_codes' => []],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.4', 'question' => '__ Always seems to be breaking objects and toys', 'options' => $this->options, 'link_codes' => []],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.5', 'question' => '__ Misjudges the weight of an object, such as a glass of juice, picking it up with too much force sending it flying or spilling, or with too little force and complaining about objects being too heavy', 'options' => $this->options, 'link_codes' => []],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.6', 'question' => '__ May not understand the idea of "heavy" or "light"; would not be able to hold two objects and tell you which weighs more', 'options' => $this->options, 'link_codes' => []],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.7', 'question' => '__ Seems to do everything with too much force; i.e., walking, slamming doors, pressing things too hard, slamming objects down', 'options' => $this->options, 'link_codes' => []],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => '2.8', 'question' => '__ Plays with animals with too much force, often hurting them', 'options' => $this->options, 'link_codes' => []],

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
        return view('livewire.assessment-checklists.sensory-checklist-for-child', $data);
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
