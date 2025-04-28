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

class HomeVisitChecklist extends Component
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

    public $threeOptions = [
        'একা করছে' => 'একা করছে',
        'সামান্য সাহায্যে' => 'সামান্য সাহায্যে',
        'বেশী সাহায্যে' => 'বেশী সাহায্যে'
    ];

    public $fiveOptions = [
        'পুরপুরি সাহায্য নিয়ে করা' => 'পুরপুরি সাহায্য নিয়ে করা',
        'আংশিক সাহায্য নিয়ে করা' => 'আংশিক সাহায্য নিয়ে করা',
        'ছবির মাধ্যমে/দেখে কাজ করা' => 'ছবির মাধ্যমে/দেখে কাজ করা',
        'মৌখিক নির্দেশে কাজ করা' => 'মৌখিক নির্দেশে কাজ করা',
        'নিজে থেকে কাজ করা' => 'নিজে থেকে কাজ করা'
    ];


    public $options = [
        'হ্যাঁ' => 'হ্যাঁ',
        'না' => 'না',
    ];

    public $ageLimitOptions = [
        '০-২ বছর - সংবেদন-সঞ্চালন স্তর' => '০-২ বছর - সংবেদন-সঞ্চালন স্তর',
        '২-৪ বছর - প্রাক সক্রিয়তার স্তর' => '২-৪ বছর - প্রাক সক্রিয়তার স্তর',
        '৪-৭ বছর - প্রাক সক্রিয়তার স্তর' => '৪-৭ বছর - প্রাক সক্রিয়তার স্তর',
        '৭-৯ বছর - মূর্ত সক্রিয়তার স্তর' => '৭-৯ বছর - মূর্ত সক্রিয়তার স্তর',
        '৯-১১ বছর - মূর্ত সক্রিয়তার স্তর' => '৯-১১ বছর - মূর্ত সক্রিয়তার স্তর',
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
            'Home assessment' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'বাসার পরিবেশ', 'title' => true],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'বাসার পরিবেশ', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'শিক্ষার্থীর জন্য আলাদা রুম', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'আলাদা বিছানা', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'জামাকাপড় জন্য আলাদা আলমারি', 'options' => $this->options, 'link_codes' => ['D3.c.1.06']],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'জামাকাপড় পরিবর্তনের আলাদা জায়গা', 'options' => $this->options, 'link_codes' => ['D3.c.1.06']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'সংযুক্ত বাথরুম', 'options' => $this->options, 'link_codes' => ['D3.c.1.01', 'D3.c.1.03']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'সংযুক্ত ব্যালকনি / বারান্দা', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'আলাদা স্টাডি টেবিল, চেয়ার এবং বইয়ের তাক', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],

                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'নিরাপত্তা এবং সুরক্ষা', 'title' => true],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'বাইরের দরজায় বড় লক / তালা', 'options' => $this->options, 'link_codes' => ['D3.c.3']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'সামনের দরজা দরজার ফুটো/পিহোল', 'options' => $this->options, 'link_codes' => ['D3.c.3']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'উইন্ডো বার/গ্রিল বা তালা', 'options' => $this->options, 'link_codes' => ['D3.c.3']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'স্মোক এলার্ম ইনস্টল বা জরুরী ক্ষেত্রে অন্য কোন এলার্ম সিস্টেম', 'options' => $this->options, 'link_codes' => ['D3.c.3']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'প্যাসেজ ওয়ে বা হাটার জায়গায় তার বা অন্য কোন বাধা', 'options' => $this->options, 'link_codes' => ['D3.c.3']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'ছাত্রের যদি আলাদা রুম না থাকে তবে বিকল্প সমাধানঃ', 'text_area' => true, 'link_codes' => ['D3.c.1.01']],

                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'সাজসরঞ্জাম', 'title' => true],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'বিছানাএবং চেয়ার ব্যবহার করা সহজ', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'টেবিলের সঠিক উচ্চতা', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'সহজে বিছানায় নামা ও উঠা', 'options' => $this->options, 'link_codes' => ['D3.c.1.01']],

                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'আলো', 'title' => true],
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'সহজে লাইটের সুইচ অন অফ করা', 'options' => $this->options, 'link_codes' => ['s']],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'ঢোকার রাস্তা এবং হাটার পথে যথেষ্ট আলো', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'পড়াশোনার জায়গায় যথেষ্ট আলো', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'প্যাসেজ ওয়েতে রাতে জালিয়ে রাখার লাইট আছে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],


                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'রান্নাঘর', 'title' => true],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'নাগালের মধ্যে বেসিনে ট্যাপ / হ্যান্ডল', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'নাগালের মধ্যে প্লেট র‍্যাক', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'প্রায়ই ব্যবহৃত আইটেম গুলি হাতের নাগালে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 30, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'রান্নার ব্যবহৃত আইটেম গুলি হাতের নাগালের মধ্যে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 31, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'স্টোরে সহজে যাওয়া যায়', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 32, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'নাগালের মধ্যে ফ্রিজ আছে কিনা', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 33, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'চুলার উপরে কোন কিছু আছে কিনা', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 34, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'পর্যাপ্ত আলো', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],


                ['id' => 35, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'বাথরুম', 'title' => true],
                ['id' => 36, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'টয়লেট, শাওয়ার বা বাথটাব এর পাশে ধরার মত স্ট্যান্ড আছে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 37, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'পিছল-নিরোধী  বাথরুম', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 38, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'টয়লেটে এবং গোছলের জন্য হ্যান্ড শাওয়ার আছে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],
                ['id' => 39, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'সাবান, শ্যাম্পু, ব্রাশ নাগালের মধ্যে', 'options' => $this->options, 'link_codes' => ['D3.c.2.01']],

                ['id' => 40, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'মেঝে', 'title' => true],
                ['id' => 41, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'পিছল-নিরোধী  মেঝে', 'options' => $this->options, 'link_codes' => ['D3.c.3.01']],
                ['id' => 42, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'রাগ বা পাপোশে কোন আলগা ঝুল আছে কিনা', 'options' => $this->options, 'link_codes' => ['D3.c.3.01']],


                ['id' => 43, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'দৈনন্দিন কার্যাবলী', 'title' => true],
                ['id' => 44, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'গোসল', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.3.01']],
                ['id' => 45, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'কাপড় পরা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.1.08']],
                ['id' => 46, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'গ্রুমিং', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.1.10']],
                ['id' => 47, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'টয়লেট করা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.1.03']],
                ['id' => 48, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'পুষ্টিকর খাদ্য খাওয়া', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.5.01']],
                ['id' => 49, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'বিছানা থেকে ওঠা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.01']],
                ['id' => 50, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'চেয়ার থেকে ওঠা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.01']],
                ['id' => 51, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'হাটা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.5.02']],
            ],
            'Instrumental Activities of Daily Living' => [
                ['id' => 52, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'টেলিফোন ব্যবহার/ ভিডিও কল', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.05']],
                ['id' => 53, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'টাকা ম্যানেজ করা /টাকার ব্যবহার', 'options' => $this->threeOptions, 'link_codes' => ['Ind.c.4']],
                ['id' => 54, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'ব্যক্তিগত জিনিসপত্র  কেনাকাটা/পছন্দের জিনিস কেনাকাটা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.6']],
                ['id' => 55, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'পরিবহন ব্যবহার করা', 'options' => $this->threeOptions, 'link_codes' => ['D4.a.2.08']],
                ['id' => 56, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'লন্ড্রির কাজ করা / নোংরা কাপড় আলাদা করা / কাপড় শুকানোর হ্যাঙ্গারে ছোট কাপড় ঝুলানো', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 57, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'কাপড় ভাজ করা / ভাঁজ করা কাপড় ড্রয়ারে গুছিয়ে রাখবে।', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 58, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'ঘরের হালকা কাজ করা / নিজের খেলনা  ও খেলার জায়গা গুছানো', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.2.01']],
                ['id' => 59, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'খাবার প্রস্তুত করা/ নিজ হাতে খাবার খাওয়া', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.4']],
                ['id' => 60, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'সবজি কাটা / সবজির ধরন অনুযায়ি আলাদা করে গুছিয়ে রাখা', 'options' => $this->threeOptions, 'link_codes' => ['D3.c.4']],
            ],
            'Environmental Safety' => [
                ['id' => 61, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'প্রতিবেশি', 'title' => true],
                ['id' => 62, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'নিরাপত্তা', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],
                ['id' => 63, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'স্বাচ্ছন্দ্যদায়ক ব্যবস্থা', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],
                ['id' => 64, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'কাছাকাছি বন্ধু বা আত্মীয়দের অবস্থান', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],

                ['id' => 65, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'সিঁড়ি', 'title' => true],
                ['id' => 66, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'গোলমাল ও প্রতিবন্ধকতা মুক্ত', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],
                ['id' => 67, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'সিরির দু দিকেই হাতলে যথেষ্ট আলকিত', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],
                ['id' => 68, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'স্পষ্টভাবে চিহ্ন দেয়া', 'options' => $this->options, 'link_codes' => ['D3.c.1.13']],
                ['id' => 69, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'অন্যান্য (যদি থাকে):', 'text_area' => true, 'link_codes' => ['D3.c.1.13']],

            ],
            'শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন' => [
                ['id' => 70, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'সকালে ঘুম থেকে উঠে', 'title' => true],
                ['id' => 71, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'বিছানা গুছানো', 'options' => $this->fiveOptions, 'link_codes' => []],
                ['id' => 72, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 2, 'question' => 'দাঁত ব্রাশ', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.02']],
                ['id' => 73, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 3, 'question' => 'হাত মুখ ধোওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.02']],
                ['id' => 74, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 4, 'question' => 'কাপড় পালটানো', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.10']],
                ['id' => 75, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 5, 'question' => 'চুল আঁচড়ানো', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.10']],
                ['id' => 76, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 6, 'question' => 'নাস্তা তৈরি করবে ও খাবে/ টেবিলে নাস্তা খাবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12', 'D3.c.4']],
                ['id' => 77, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 7, 'question' => 'প্লেট গ্লাস ধুয়ে পরিস্কার করবে/ প্লেট নিয়ে সিংকে /ধোয়ার জায়গায় রাখবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.03']],
                ['id' => 78, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 8, 'question' => 'টেবিল পরিস্কার করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.03']],

                ['id' => 79, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'লিখাপড়া', 'title' => true],
                ['id' => 80, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 1, 'question' => 'বই পরা', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.03']],
                ['id' => 81, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 2, 'question' => 'হাতের লিখা', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.06']],
                ['id' => 82, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 3, 'question' => 'ছবি আঁকা /রঙ করা', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 83, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 4, 'question' => 'পেপার পড়া', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.03']],
                ['id' => 84, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 5, 'question' => 'গান শোনা / গানের রেওয়াজ করা (গায়কদের ক্ষেত্রে)', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 85, 'category_id' => $this->categoryId, 'sub_category_id' => 4, 'question_id' => 6, 'question' => 'কম্পিউটারে (কাজের) প্রাকটিস করবে (সহজ কিছু গেমস খেলা যেমনঃ কুকিং, ডাক্তার গেমস, গ্রোসারি রাইমস )', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.04', 'D2.b.2.07']],

                ['id' => 86, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'দৈনন্দিন কাজ', 'title' => true],
                ['id' => 87, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'বাজারের লিস্ট করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4']],
                ['id' => 88, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'বাবার / মায়ের সাথে বাজারে যাওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4']],
                ['id' => 89, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'মায়ের সাথে সবজি কাটা ও রান্নাতে সাহায্য করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4']],
                ['id' => 90, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'খাবারের মেনু তৈরি করা / ছবি দেখে খাবার চিনতে পারা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4']],

                ['id' => 91, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'নিজের কাজ', 'title' => true],
                ['id' => 92, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'কাপদ ধোওয়া ও শুঁকাতে দেওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 93, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'নিজের রুম পরিস্কার করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.03']],
                ['id' => 94, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 3, 'question' => 'কাপড় ভাজ করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 95, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'ওয়ার্ডরোব বা কাপরের ড্রয়ার গুছানো', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 96, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'কাপড় ইস্ত্রি করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.04']],
                ['id' => 97, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'নখ কাটা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.10', 'D3.c.1.13']],
                ['id' => 98, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'চুল কাটা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.10', 'D3.c.1.13']],
                ['id' => 99, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'সেভ করা', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.04', 'D3.c.1.10', 'D3.c.1.13']],

                ['id' => 100, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'দুপুরের খাবারের সময়', 'title' => true],
                ['id' => 101, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 1, 'question' => 'টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12']],
                ['id' => 102, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 2, 'question' => 'গ্লাসে পানি দিবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.11', 'D3.c.1.12']],
                ['id' => 103, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 3, 'question' => 'রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12', 'D3.c.4']],
                ['id' => 104, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 4, 'question' => 'টেবিলে / মাদুরে বসে সবার সাথে খাবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.11', 'D3.c.1.12']],
                ['id' => 105, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 5, 'question' => 'নিজের হাতে / চামচ দিয়ে খাবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.11']],
                ['id' => 106, 'category_id' => $this->categoryId, 'sub_category_id' => 5, 'question_id' => 6, 'question' => 'টেবিল / মাদুর পরিস্কার / সহযোগিতা করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.2.03']],

                ['id' => 107, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'রেস্ট টাইম', 'title' => true],
                ['id' => 108, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 1, 'question' => 'শুয়ে রেস্ট নেওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 109, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 2, 'question' => 'গল্প বই পরা', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 110, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 3, 'question' => 'গান শুনা', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 111, 'category_id' => $this->categoryId, 'sub_category_id' => 6, 'question_id' => 4, 'question' => 'ভিডিও গেমস খেলা', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],

                ['id' => 112, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'বিকেলে', 'title' => true],
                ['id' => 113, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 1, 'question' => 'বেড়াতে যাওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 114, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 2, 'question' => 'ফুল গাছ / টবে পানি দেওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 115, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 3, 'question' => 'মাঠে বা ছাদে খেলতে যাওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b', 'D4.b.1']],
                ['id' => 116, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 4, 'question' => 'পছন্দ অনুযায়ী খেলা', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b', 'D4.b.1']],
                ['id' => 117, 'category_id' => $this->categoryId, 'sub_category_id' => 7, 'question_id' => 5, 'question' => 'শপিং / আত্মীয় স্বজনের বাসায় / প্রতিবেশীর বাসায় বা প্রিয় জায়গায় ঘুরতে যাওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.6', 'D4.c.1']],

                ['id' => 118, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'সন্ধ্যা', 'title' => true],
                ['id' => 119, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 1, 'question' => 'নিজের নাস্তা / চা/ শরবত বানাবে এবং সার্ভ করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4']],
                ['id' => 120, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 2, 'question' => 'অতিথি আপ্যায়ন', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.4', 'D4.c.1']],
                ['id' => 121, 'category_id' => $this->categoryId, 'sub_category_id' => 8, 'question_id' => 3, 'question' => 'ভাইবোনদের সাথে সময় কাটানো', 'options' => $this->fiveOptions, 'link_codes' => ['Ind.a.7', 'D4.b']],

                ['id' => 122, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 1, 'question' => 'গঠনমূলক কাজ', 'title' => true],
                ['id' => 123, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 1, 'question' => 'বই পরা ও হাতের লিখা', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.01', 'D2.b.2.06']],
                ['id' => 124, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 2, 'question' => 'গঠনমূলক কোন খেলা ( পাজল, লেগো, শেফ সর্টিং)', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 125, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 3, 'question' => 'থেরাপিউটিক সাপোর্ট ( থেরাপিস্টের পরামর্শ অনুযায়ি)', 'options' => $this->fiveOptions, 'link_codes' => ['D1.a.1', 'D1.a.2']],
                ['id' => 126, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 4, 'question' => 'কম্পিউটারে (কাজের) প্র্যাকটিস করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.04', 'D2.b.2.07']],
                ['id' => 127, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 5, 'question' => 'হোম ওয়ার্ক করা', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.2.04', 'D2.b.2.07']],
                ['id' => 128, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 6, 'question' => 'পরের দিনের কাজের জন্য ব্যাগ গুছানো', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01']],
                ['id' => 129, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 7, 'question' => 'টিভি দেখা (সবার সাথে)', 'options' => $this->fiveOptions, 'link_codes' => ['D4.b']],
                ['id' => 130, 'category_id' => $this->categoryId, 'sub_category_id' => 9, 'question_id' => 8, 'question' => 'ডায়েরি লেখা', 'options' => $this->fiveOptions, 'link_codes' => ['D2.b.1.11', 'D2.b.2.07']],

                ['id' => 131, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 1, 'question' => 'রাতের খাবার', 'title' => true],
                ['id' => 132, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 1, 'question' => 'টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12']],
                ['id' => 133, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 2, 'question' => 'গ্লাসে পানি দিবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.11', 'D3.c.1.12']],
                ['id' => 134, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 3, 'question' => 'রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12', 'D3.c.4']],
                ['id' => 135, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 4, 'question' => 'খাওয়ার আগে ও পরে সাবান দিয়ে হাত ধোয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01', 'D3.c.1.02']],
                ['id' => 136, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 5, 'question' => 'টেবিলে বসে সবার সাথে খাবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12', 'D4.c.1']],
                ['id' => 137, 'category_id' => $this->categoryId, 'sub_category_id' => 10, 'question_id' => 6, 'question' => 'নিজের হাতে / চামচ দিয়ে খাবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.12', 'D3.c.1.11', 'D3.c.1.01']],

                ['id' => 138, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 1, 'question' => 'রাতে শোবার আগে', 'title' => true],
                ['id' => 139, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 1, 'question' => 'ঔষদ খাওয়া/ খাওয়ানো (যখন প্রয়োজন)', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01', 'D3.c.1.14']],
                ['id' => 140, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 2, 'question' => 'দাঁত ব্রাশ করবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.02']],
                ['id' => 141, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 3, 'question' => 'ড্রেস চেঞ্জ করবে/ রাতে শোবার ড্রেস পরবে', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.10']],
                ['id' => 142, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 4, 'question' => 'বিছানা করা/ করে দেওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01', 'D3.c.1.10', 'D3.c.2.01']],
                ['id' => 143, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 5, 'question' => 'মশারি খাটানো/টাঙ্গানো', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01', 'D3.c.2.01']],
                ['id' => 144, 'category_id' => $this->categoryId, 'sub_category_id' => 11, 'question_id' => 6, 'question' => 'লাইট বন্ধ করে শুতে যাওয়া', 'options' => $this->fiveOptions, 'link_codes' => ['D3.c.1.01', 'D3.c.2.01', 'D3.c.3', 'D3.c.3.01']],

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
        return view('livewire.assessment-checklists.home-visit-checklist', $data);
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
