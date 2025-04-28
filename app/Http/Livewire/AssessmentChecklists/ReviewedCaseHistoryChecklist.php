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

class ReviewedCaseHistoryChecklist extends Component
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
        'হ্যাঁ' => 'হ্যাঁ',
        'না' => 'না',
        'জানি না' => 'জানি না',
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
            'রেফারাল তথ্য' => [
                ['id' => 1, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 0, 'question' => 'আপনার সন্তানের ব্যাপারে নিম্নেবর্ণিত কোন বিষয়ে আপনার কোন উদ্বেগ ছিল কিনা এবং কখন বিষয়গুলি আপনার উদ্বেগের কারন হয় ?', 'title' => true],
                ['id' => 2, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 1, 'question' => 'সমন্বয় দক্ষতা আছে কি ?', 'options' => $this->options, 'link_codes' => ['D1.a.2.06']],
                ['id' => 3, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 2, 'question' => 'চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি ?', 'options' => $this->options, 'link_codes' => ['BMS']],
                ['id' => 4, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 3, 'question' => 'সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি ?', 'options' => $this->options, 'link_codes' => ['D1.a.2']],
                ['id' => 5, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 4, 'question' => 'লিখার পদ্ধতি ঠিক আছে কিনা ', 'options' => $this->noOptions],
                ['id' => 6, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '4.1', 'question' => 'আকার, গঠন ঠিক আছে কিনা ', 'options' => $this->options, 'link_codes' => ['D2.b.2.05']],
                ['id' => 7, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '4.2', 'question' => 'আকৃতিঃ ঠিক আছে কিনা ', 'options' => $this->options, 'link_codes' => ['D2.b.2.05']],
                ['id' => 8, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '4.3', 'question' => 'লিখা শেষ করার ধৈর্য : ঠিক আছে কিনা ', 'options' => $this->options, 'link_codes' => ['D2.b.2.05']],
                ['id' => 9, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 5, 'question' => 'পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা', 'options' => $this->options, 'link_codes' => ['D2.b.2.04']],
                ['id' => 10, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 6, 'question' => 'স্বনির্ভরতার (নিজে নিজে কাজ করার) দক্ষতা আছে কিনা (রুটিন জানা)', 'options' => $this->options, 'link_codes' => ['D3.c']],
                ['id' => 11, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 7, 'question' => 'সামাজিক যোগাযোগ করতে পারে কিনা', 'options' => $this->options, 'link_codes' => ['D4.c', 'SCC']],
                ['id' => 12, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 8, 'question' => 'খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা?', 'options' => $this->options, 'link_codes' => ['D4.b.1']],
                ['id' => 13, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 9, 'question' => 'শেখার প্রতিবন্ধকতা আছে কি', 'options' => $this->options, 'link_codes' => ['D2.b.2']],
                ['id' => 14, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 10, 'question' => 'শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?', 'options' => $this->options, 'link_codes' => ['D1.a.1.14', 'D4.a.2.10', 'D4.a.2.07']],
                ['id' => 15, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 11, 'question' => 'কথা বলার সমস্যা আছে কিনা', 'options' => $this->options, 'link_codes' => ['D2.b.3.17']],
                ['id' => 16, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => 12, 'question' => 'ভাষা বুঝতে পারে কিনা', 'options' => $this->options, 'link_codes' => ['D2.b.3.08']],
                ['id' => 17, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '13', 'question' => 'ভাষা এবং শব্দের ব্যবহার পারে ? ', 'options' => $this->options],
                ['id' => 18, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '13.1', 'question' => 'অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 19, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '13.2', 'question' => 'পারিবারিক প্রতিবন্ধীতার কোন ইতিহাস আছে কিনা ?   ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 20, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '13.3', 'question' => 'লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারও ছিল কিনা ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 21, 'category_id' => $this->categoryId, 'sub_category_id' => 1, 'question_id' => '13.3', 'question' => 'ভাষা শিখতে কোন  সমস্যা আছে কিনা  ', 'options' => $this->options, 'link_codes' => []],
            ],
            'সর্বশেষ পরিক্ষার তথ্য/রিপোর্ট' => [
                ['id' => 22, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 1, 'question' => 'চোখের পরিক্ষা হয়েছিল কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 23, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 2, 'question' => 'শ্রবণ (Hearing) পরিক্ষা হয়েছিল কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 24, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 3, 'question' => 'প্রেগন্যান্ট অবস্থায় বা শিশুর জন্মের সময়ে কোন সমস্যা ছিল কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 25, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 4, 'question' => 'শিশু মাথায় কোন আঘাত পেয়েছিল কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 26, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 5, 'question' => 'সন্তান সিজার অপারেশনের মাধ্যমে হয়েছে কিনা', 'options' => $this->options, 'link_codes' => []],
                ['id' => 27, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 6, 'question' => 'শিশুর কানে ইনফেকশন বা কোন সমস্যা হয়েছিল কিনা', 'options' => $this->options, 'link_codes' => []],
                ['id' => 28, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 7, 'question' => 'কানে কি ধরনের সমস্যা:', 'options' => ['অন্তকর্ণ' => 'অন্তকর্ণ', 'মধ্যকর্ণ' => 'মধ্যকর্ণ', 'বহিঃকর্ণ' => 'বহিঃকর্ণ'], 'link_codes' => []],
                ['id' => 29, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 8, 'question' => 'কোন অসুখ বা হসপিটালে ভর্তি হতে হয়েছিল কিনা', 'options' => $this->options, 'link_codes' => []],
                ['id' => 30, 'category_id' => $this->categoryId, 'sub_category_id' => 2, 'question_id' => 9, 'question' => 'অন্যান্য প্রাসঙ্গিক চিকিৎসার তথ্য আছে কিনা', 'options' => $this->options, 'link_codes' => []],
            ],
            'উন্নয়নের ইতিহাস' => [
                ['id' => 31, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'ছোট থেকে বড় হবার ক্রমউন্নয়নের ধারাঃ ', 'title' => true],
                ['id' => 32, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 1, 'question' => 'আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন ?', 'options' => ['সক্রিয়' => 'সক্রিয়', 'বেশি কান্নাকাটি/ চিৎকার' => 'বেশি কান্নাকাটি/ চিৎকার', 'বেশি ডিমান্ডিং' => 'বেশি ডিমান্ডিং', 'জেদি' => 'জেদি', 'হাশি খুশী' => 'হাশি খুশী', 'বেশি ঘুমিয়েছে' => 'বেশি ঘুমিয়েছে'], 'link_codes' => []],
                ['id' => 33, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 2, 'question' => 'ঘুমের প্যাটার্নে কোন সমস্যা আছে কিনা ?', 'options' => $this->options, 'link_codes' => []],

                ['id' => 34, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'মোটর দক্ষতা: কোন সমস্যা ছিল কিনা', 'title' => true],
                ['id' => 35, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => '3.1', 'question' => 'চুষে  খেতে পারে কিনা', 'options' => $this->options, 'link_codes' => []],
                ['id' => 36, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => '3.2', 'question' => 'শক্ত খাবার খেতে পারে কিনা ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 37, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => '3.3', 'question' => 'শ্বাস-প্রশ্বাস নিয়ন্ত্রন করতে পারে কিনা ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 38, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => '3.4', 'question' => 'খাবার একবারে গিলে ফেলে কিনা ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 39, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => '3.5', 'question' => 'চিবিয়ে খাবার খেতে কোন সমস্যা ছিল কিনা? ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 40, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 4, 'question' => 'কোন বয়সে একা একা  বসতে শিখেছে? ', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 41, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 5, 'question' => 'কোন বয়সে চাবানো শিখেছে?', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 42, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 6, 'question' => 'কোন বয়সে হামাগুরি দিতে শিখেছে ? পেছন দিক ছেঁচড়ে বা চার হাতপা ব্যবহার করে দিয়েছে', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 43, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 7, 'question' => 'কোন বয়সে নিজে নিজে একা হাটতে শিখেছে?', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 44, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 8, 'question' => 'তিন বা চার চাকার বাইসাইকেল চালানো শিখেছে ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 45, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 9, 'question' => 'শিশু কি সাঁতার জানে ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 46, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 10, 'question' => 'শিশু বাইরে খেলার উপকরন পছন্দ করে কিনা ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 47, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 11, 'question' => 'শিশু কি খুব সহজেই ক্লান্ত হয়ে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 48, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 12, 'question' => 'ভারসাম্য হীনতা আছে কি না?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 49, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 13, 'question' => 'দেহভঙ্গি, অঙ্গভঙ্গি বেমানান কিনা ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 50, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 14, 'question' => 'পেশী ব্যথা সব সময় থাকে কিনা ', 'options' => $this->options, 'link_codes' => []],


                ['id' => 51, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'ভাষার দক্ষতাঃ', 'title' => true],
                ['id' => 52, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 15, 'question' => 'শিশুর কথা বলার প্রথম ভাষা কোনটি ? ', 'options' => ['বাংলা' => 'বাংলা', 'ইংরেজি' => 'ইংরেজি']],
                ['id' => 53, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'কোন বয়সে শিশু প্রথম শব্দ বলেছে ? ', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 54, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'সহজ বাক্য বলতে পারে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 55, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'কয় শব্দে বাক্য বলে?', 'options' => ['এক শব্দে' => 'এক শব্দে', 'দুই শব্দে' => 'দুই শব্দে', 'তিন শব্দে'=> 'তিন শব্দে', 'ততোধিক শব্দে' => 'ততোধিক শব্দে'], 'link_codes' => []],
                ['id' => 56, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'অন্য কোন ভাষায় কথা বলতে পারে কি ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 57, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'কোন ভাষা ', 'options' => ['বাংলা' => 'বাংলা', 'ইংরেজি' => 'ইংরেজি', 'ফ্রেঞ্চ'=> 'ফ্রেঞ্চ', 'স্প্যানিশ' => 'স্প্যানিশ', 'অন্যান্য' => 'অন্যান্য'], 'link_codes' => []],
                ['id' => 58, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'কোন বয়স থেকে শিখেছে ?', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 59, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 17, 'question' => 'কোথা থেকে সেই ভাষা শিখেছে ?', 'options' => ['পরিবার' => 'পরিবার', 'আত্মীয়' => 'আত্মীয়', 'বন্ধু' => 'বন্ধু', 'প্রতিবেশি' => 'প্রতিবেশি', 'স্কুল' => 'স্কুল', 'শিক্ষক' => 'শিক্ষক', 'অন্যান্য' => 'অন্যান্য'], 'link_codes' => []],
                ['id' => 60, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 18, 'question' => 'নাম ধরে ডাকলে শিশু সারা দ্যায় কি?', 'options' => ['কখনও না' => 'কখনও না', 'মাঝে মাঝে' => 'মাঝে মাঝে', 'সবসময়' => 'সবসময়'], 'link_codes' => []],
                ['id' => 61, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 19, 'question' => 'প্রাথমিক ও সহজ ভাষায় নির্দেশ ও দিক নির্দেশনা অনুসরণ করতে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 62, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 19, 'question' => 'কোন কোন শব্দে শিশু প্রতিক্রিয়াশিলতা', 'text_area' => true, 'link_codes' => []],
                ['id' => 63, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 20, 'question' => 'বর্ণমালা শিখতে শিশুর দেরি হয়েছিলো কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 64, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'হ্যাঁ হলে কোন বয়সে শিখেছে', 'options' => $this->ageLimitOptions, 'link_codes' => []],
                ['id' => 65, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 20, 'question' => 'শিশু কোন কোন শব্দ ভুল উচ্চারণ করে কিনা', 'options' => $this->options, 'link_codes' => []],

                ['id' => 66, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'কাজ করার দক্ষতাঃ', 'title' => true],
                ['id' => 67, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 20, 'question' => 'শিশু কি চাকু বা কাটা চামচ ব্যবহার করেতে পারে ? ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 68, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 20, 'question' => 'নিজে একা একা কাপড় পরতে পারে ? ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 69, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'হ্যাঁ হলে', 'options' => ['পরাপুরি স্বনির্ভর' => 'পরাপুরি স্বনির্ভর', 'কিছুটা সাহায্যে পারে' => 'কিছুটা সাহায্যে পারে', 'অনেক বেশি সহায়তা লাগে' => 'অনেক বেশি সহায়তা লাগে', 'পুরাপুরি পরনির্ভর' => 'পুরাপুরি পরনির্ভর'], 'link_codes' => []],
                ['id' => 70, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 20, 'question' => 'শিশু নিজের জিনিষ গুছিয়ে রাখে ? ', 'options' => $this->options, 'link_codes' => []],
                ['id' => 71, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 16, 'question' => 'কোন বয়সে টয়লেট ট্রেনিং পেয়েছে?', 'options' => [
                    '০-২ বছর - সংবেদন-সঞ্চালন স্তর' => '০-২ বছর - সংবেদন-সঞ্চালন স্তর',
                    '২-৪ বছর - প্রাক সক্রিয়তার স্তর' => '২-৪ বছর - প্রাক সক্রিয়তার স্তর',
                    '৪-৭ বছর - প্রাক সক্রিয়তার স্তর' => '৪-৭ বছর - প্রাক সক্রিয়তার স্তর',
                    '৭-৯ বছর - মূর্ত সক্রিয়তার স্তর' => '৭-৯ বছর - মূর্ত সক্রিয়তার স্তর',
                    '৯-১১ বছর - মূর্ত সক্রিয়তার স্তর' => '৯-১১ বছর - মূর্ত সক্রিয়তার স্তর',
                    '১১-১১+ -যৌক্তিক সক্রিয়তার স্তর' => '১১-১১+ -যৌক্তিক সক্রিয়তার স্তর',
                ], 'link_codes' => []],
                ['id' => 72, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 21, 'question' => 'বাড়িতে কি নিজে নিজে টয়লেটে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 73, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 22, 'question' => 'অপরিচত জায়গায় টয়লেটে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 74, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 23, 'question' => 'বাড়িতে কি ছবি আঁকতে, কাটাকাঁটি করতে পছন্দ করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 75, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 24, 'question' => 'খেলাধুলা করতে পছন্দ করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 76, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 25, 'question' => 'সে কি স্বাধীনভাবে খেলতে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 77, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 26, 'question' => 'কি খেলা পছন্দ করে?ঃ গঠনগত খেলা/ কাল্পনিক খেলা/ বস্তুগত খেলা', 'options' => ['গঠনগত খেলা' => 'গঠনগত খেলা', 'কাল্পনিক খেলা' => 'কাল্পনিক খেলা', 'বস্তুগত খেলা' => 'বস্তুগত খেলা'], 'link_codes' => []],
                ['id' => 78, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 27, 'question' => 'বড়দের নির্দেশ মেনে বা মানিয়ে চলতে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 79, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 28, 'question' => 'আপনি কি মনে করেন এটা একটি খুবই কঠিন কাজ?', 'options' => $this->options, 'link_codes' => []],


                ['id' => 80, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'সামাজিক দক্ষতাঃ', 'title' => true],
                ['id' => 81, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 29, 'question' => 'বাসায় ভাইবোনদের সাথে খেলাধুলা করে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 82, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 30, 'question' => 'সন্তানের বন্ধুরা কি বাসায় খেলতে আসে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 83, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 31, 'question' => 'বন্ধুদের সাথে খেলনা শেয়ার করে কি নাকি বড়দের সহায়তা লাগে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 84, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 32, 'question' => 'গেমস বা খেলাধুলায় অথবা কথা বলার সময় তার নিজের পালা বা টার্ন এর জন্য অপেক্ষা করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 85, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 33, 'question' => 'বড়দের সাথে বা অন্য শিশুদের ব্যপারে আগ্রহ দেখায় নাকি উদাসীন থাকে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 86, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 33, 'question' => 'আপনি কি সন্তানের বিশেষ কোন আচরন নিয়ে চিন্তিত?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 87, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 33, 'question' => 'থাকলে উল্লেখ করুন- ', 'text_area' => true, 'link_codes' => []],

                ['id' => 88, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'শেখার দক্ষতাঃ', 'title' => true],
                ['id' => 89, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 33, 'question' => 'স্কুলের কাজের ক্ষেত্রে আপনার সন্তানের প্রধান উদ্বেগের কারন/বিষয় গুলি কি কি ? উল্লেখ করুন- ', 'text_area' => true, 'link_codes' => []],
                ['id' => 90, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 34, 'question' => 'নতুন নতুন বিষয় শেখার আগ্রহ আছে কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 91, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 35, 'question' => 'বিষয়/নির্দেশ বুঝতে পারে কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 92, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 36, 'question' => 'বর্ণমালা শেখার দক্ষতা', 'options' => $this->options, 'link_codes' => []],
                ['id' => 93, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 37, 'question' => 'শব্দের বানান শিখতে পারে কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 94, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 38, 'question' => 'নিজে নিজে লিখতে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 95, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 39, 'question' => 'কাজ করার গতি কেমন', 'options' => ['খুব ভালো' => 'খুব ভালো', 'ভালো' => 'ভালো', 'মোটামুটি' => 'মোটামুটি', 'কম' => 'কম'], 'link_codes' => []],

                ['id' => 96, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 40, 'question' => 'বয়স অনুযায়ী সংখ্যা জ্ঞান/নামতা পারে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 97, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 41, 'question' => 'বয়স অনুযায়ী অক্ষর জ্ঞান আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 98, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 42, 'question' => 'ভাষার সঠিক ব্যবহার করে লিখতে পারে কিনা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 99, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 43, 'question' => 'মৌখিক নির্দেশ মেনে চলে', 'options' => $this->options, 'link_codes' => []],
                ['id' => 100, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 44, 'question' => 'বাক্য গঠনে সঠিক শব্দের সঠিক ব্যবহার পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 101, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 45, 'question' => 'আপনার সন্তানের কোন ও বিষয়ে বোঝার ক্ষমতা বোঝানোর পর কতদিন পর্যন্ত থাকে?', 'options' => ['একদিন দেখিয়ে দিতে হয়' => 'একদিন দেখিয়ে দিতে হয়', 'পরবর্তী দিনগুলিতে দেখিয়ে দিতে হয়' => 'পরবর্তী দিনগুলিতে দেখিয়ে দিতে হয়', 'নিয়মিত দেখিয়ে দিতে হয়' => 'নিয়মিত দেখিয়ে দিতে হয়'], 'link_codes' => []],
                ['id' => 102, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 46, 'question' => 'হোমওয়ার্ক কি তার কাছে সাধারণ কাজ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 103, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 47, 'question' => 'স্কুলের কাজ করার সময় কি তার ব্যবহার/আচরণ অন্য রকম হয়ে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 104, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 48, 'question' => 'তাকে কি উত্তেজিত মনে হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 105, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 49, 'question' => 'কাগজপত্র বা বই খাতায় অগোছালো মনে হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 106, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 50, 'question' => 'সে কি নিয়মিত পেন্সিল বক্স থেকে বিভিন্ন্য আইটেম বা স্কুল ব্যাগ থেকে বিভিন্ন জিনিষ হারায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 107, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 51, 'question' => 'আপনার সন্তানের মাঝে নিচের বিষয়গুলির নিয়ে কোন অসুবিধা পরিলক্ষন করেছেন কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 108, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 52, 'question' => 'করে থাকলে, নিচের কমেন্টে বিস্তারিত লিখুন। এই বিষয়গুলি মুলত স্কুলে যাওয়ার বয়সের জন্য প্রযোজ্যঃ', 'text_area' => true, 'link_codes' => [],],


                ['id' => 109, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 53, 'question' => 'খাওয়াদাওয়ার সময় বিশ্রী/বেমানান কাজ করে কিনা যেটা পিতামাতার জন্য বিরক্তি সৃষ্টি করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 110, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 54, 'question' => 'জামা বা শার্ট এর হাতা বা গলার ফাঁক খুজে পেতে সমস্যা?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 111, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 55, 'question' => 'বোতাম ঘরের ফাঁকা অংশ দেখে বোতাম লাগাতে হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 112, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 56, 'question' => 'না দেখে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 113, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 57, 'question' => 'গোসলে সহায়তা প্রয়োজন হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 114, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 58, 'question' => 'সাবান লাগানোর সময় হাত থেকে পরে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 115, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 59, 'question' => 'শ্যাম্পুর সময় চোখ বন্ধ করতে ভয় পায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 116, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 60, 'question' => 'প্রয়োজনীয় জিনিষ খুজে পায় না?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 117, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 61, 'question' => 'খেলনা বা অন্যান্য জিনিষ গুছিয়ে রাখতে সাহায্য প্রয়োজন হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 118, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 62, 'question' => 'দিক নির্ণয়ের দক্ষতা আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 119, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 63, 'question' => 'বার বার হারিয়ে যায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 120, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 64, 'question' => 'লেগো দিয়ে খেলনা তৈরি করতে পছন্দ করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 121, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 65, 'question' => 'একটা লেগোর সাথে আর একটা লেগোর কানেকশন বের করা তার জন্য শক্ত কাজ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 122, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 66, 'question' => 'খুব বেশী চাপ দিয়ে দিয়ে খেলনা গুলি ভেঙ্গে ফেলেছে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 123, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 67, 'question' => 'হোঁচট খায় বা জিনিষ পত্রের বা বন্ধুদের সাথে ধাক্কা খায়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 124, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 68, 'question' => 'কাঁচি, ছুরি বেমানান ভাবে ব্যবহার করে এবং সাহায্য প্রয়োজন হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 125, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 69, 'question' => 'লিখার কাজটি তার কাছে কঠিন মনে হয়?', 'options' => $this->options, 'link_codes' => []],

                ['id' => 126, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'নতুন কোন কাজ শেখাতে অনেক ধৈর্য প্রয়োজন হয় এবং মাঝে মাঝে মনে হয় একই জিনিষের পুনরাবৃত্তি করছেনঃ', 'title' => true],
                ['id' => 127, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 70, 'question' => 'রুটিন পছন্দ করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 128, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 71, 'question' => 'রুটিনে কোন পরিবর্তন মেনে নেয় কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 129, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 72, 'question' => 'নতুন পরিস্থিতি পছন্দ করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 130, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 73, 'question' => 'ধারাবাহিক নির্দেশ ঠিক মত পালন করতে পারে না?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 131, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 74, 'question' => 'মেজাজ খুব তাড়াতাড়ি পরিবর্তিত হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 132, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 75, 'question' => 'সহজে হতাশাগ্রস্থ হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 133, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 76, 'question' => 'কাজ করা বন্ধ করে দেয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 134, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 77, 'question' => 'অস্থিরতা আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 135, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 78, 'question' => 'একজায়গায় ঠিক মত বসতে পারে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 136, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 79, 'question' => 'বাসায় ধ্বংসাত্মক বা আক্রমণাত্মক ব্যাবহার আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 137, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 80, 'question' => 'থাকলে কি ধরনের আচরন প্রদর্শন করে?', 'text_area' => true, 'link_codes' => []],
                ['id' => 138, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 81, 'question' => 'খেলাধুলায় মনে হয় মনোযোগ নেই, শুধু বসে থাকে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 139, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 82, 'question' => 'আপনার সন্তানের সময় সম্পর্কে জ্ঞান আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 140, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 83, 'question' => 'দিন, মাস ও সময় জ্ঞান অর্জনে সমস্যা আছে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 141, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 84, 'question' => 'ডাকলে সাড়া দ্যায় না?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 142, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 85, 'question' => 'অনুরোধে প্রায়ই সাড়া দ্যায় না?', 'options' => $this->options, 'link_codes' => []],


                ['id' => 143, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 86, 'question' => 'দিবাস্বপ্নচারী মনে হয়?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 143, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 87, 'question' => 'একজায়গায় ঘোরে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 145, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 88, 'question' => 'ঘোরাঘুরি করে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 146, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 89, 'question' => 'সবসময়ই নড়াচড়া বা চলাফেরার মধ্যে থাকে?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 147, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 90, 'question' => 'সোজা হয়ে বসতে পছন্দ করে কি?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 148, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 91, 'question' => 'বল নিয়ে খেলার ক্ষেত্রে পারদর্শীঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 149, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 92, 'question' => 'বল নিয়ে যে কোন ধরনের খেলা এড়িয়ে চলেঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 150, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 93, 'question' => 'ভাংচুর করতে পছন্দ করেঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 151, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 94, 'question' => 'বেমানান ভঙ্গিতে দৌঁড়ায়ঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 152, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 95, 'question' => 'উচ্চতা, নড়াচড়া, সিঁড়ি দিয়ে নামার ক্ষেত্রে সাবধান থাকেঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 153, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 96, 'question' => 'সারাক্ষণ নড়াচড়ার মধ্যে থাকেঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 154, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 97, 'question' => 'কাজ এড়িয়ে চলতে চায়ঃ?', 'options' => $this->options, 'link_codes' => []],
                ['id' => 155, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 98, 'question' => 'মনোযোগ বেশি থাকে এমন কাজ গুলো উল্লেখ করুন', 'options' => null, 'text_area' => true, 'link_codes' => []],

                ['id' => 156, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 0, 'question' => 'জীবন ধারনের বিষয়গুলিঃ', 'title' => true],
                ['id' => 157, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 101, 'question' => 'শিশু নিচে বর্ণিত খেলাধুলা ও শারীরিক কসরত বা সঙ্গীত সংক্রান্ত বিষয়ে অংশগ্রহণ করেঃ', 'options' => ['প্রতিদিন' => 'প্রতিদিন', 'নিয়মিত' => 'নিয়মিত', 'মাঝে মাঝে' => 'মাঝে মাঝে'], 'link_codes' => []],
                ['id' => 158, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 99, 'question' => 'আপনি সন্তানকে কি ভাবে বর্ণনা করবেন?', 'options' => [
                    'হাসি খুশী',
                    'সহজেই বন্ধুত্ব তৈরি করে',
                    'ঝামেলা করে',
                    'আক্রমণাত্মক',
                    'সক্রিয়',
                    'একা থাকতে পছন্দ করে',
                    'বেধপ/বেখাপ্পা',
                    'শৃঙ্খলার মধ্যে আনা কঠিন',
                    'অতিথির সামনে লাজুক',
                    'ভীরু / দুর্বল চিত্তের',
                    'ঢিলেমি /ধিরস্থির',
                    'আবেগ প্রবণ',
                    'অন্যান্য'
                ], 'link_codes' => []],
                ['id' => 159, 'category_id' => $this->categoryId, 'sub_category_id' => 3, 'question_id' => 100, 'question' => 'তিনটি প্রধান উদ্বেগের বিষয়গুলি লিখুনঃ', 'options' => [], 'link_codes' => [], 'text_area' => true],

            ],



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
        return view('livewire.assessment-checklists.reviewed-case-history-checklist', $data);
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
