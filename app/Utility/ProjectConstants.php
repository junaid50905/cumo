<?php

namespace App\Utility;


final class ProjectConstants
{
    const DATA_PER_PAGE = 10;
    const YES = 'yes';
    const NO = 'no';

    const A = 'A';
    const B = 'B';
    const C = 'C';

    const USER_TYPE_TEACHER = 'teacher';
    const USER_TYPE_GENERAL = 'general';

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_OTHER = 'other';

    const NOTPRESENT = 'Not Present';
    const USESNOWORD = 'Uses NO Words (Gestures - Preverbal)';
    const USES1TO3WORDS = 'Uses 1-3 Words / sentences';
    const ABLETOCOMMUNICATION = 'Able to communicate/ express opinion';
    const USESCOMLESLANG = 'Uses Complex Language';

    // Autism Behavior Checklist
    const DO_REGULARLY = "Do regularly";
    const SOMETIME = "Sometimes";
    const IN_SPECIAL_OCCASION = "In special occasion";
    const DONT_DO_AT_ALL = "Don't do at all";

    const SWAL_CONFIRM_DELETE_TYPE = 'confirm';
    const SWAL_CONFIRM_DELETE_METHOD = 'delete';

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    public static array $activityTypes = [
        self::A => 'A',
        self::B => 'B',
        self::C => 'C',
    ];

    public static array $statuses = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public static array $swalConfirmDeleteEvents = [
        'type' => self::SWAL_CONFIRM_DELETE_TYPE,
        'method' => self::SWAL_CONFIRM_DELETE_METHOD,
    ];

    public static array $genders = [
        self::GENDER_MALE   => 'Male',
        self::GENDER_FEMALE => 'Female',
        self::GENDER_OTHER  => 'Other',
    ];

    public static array $yesNo = [
        self::YES => 'হ্যাঁ',
        self::NO  => 'না',
    ];

    public static array $yesNoEn = [
        self::YES => 'Yes',
        self::NO  => 'No',
    ];

    const BLOOD_GROUP_A_POSITIVE = 'A+';
    const BLOOD_GROUP_A_NEGATIVE = 'A-';
    const BLOOD_GROUP_B_POSITIVE = 'B+';
    const BLOOD_GROUP_B_NEGATIVE = 'B-';
    const BLOOD_GROUP_O_POSITIVE = 'O+';
    const BLOOD_GROUP_O_NEGATIVE = 'O-';
    const BLOOD_GROUP_AB_POSITIVE = 'AB+';
    const BLOOD_GROUP_AB_NEGATIVE = 'AB-';

    public static array $bloodGroups = [
        self::BLOOD_GROUP_A_POSITIVE  => 'A+',
        self::BLOOD_GROUP_A_NEGATIVE  => 'A-',
        self::BLOOD_GROUP_B_POSITIVE  => 'B+',
        self::BLOOD_GROUP_B_NEGATIVE  => 'B-',
        self::BLOOD_GROUP_O_POSITIVE  => 'O+',
        self::BLOOD_GROUP_O_NEGATIVE  => 'O-',
        self::BLOOD_GROUP_AB_POSITIVE => 'AB+',
        self::BLOOD_GROUP_AB_NEGATIVE => 'AB-',
    ];
   
    // Payment method Start
    const PAYMENT_BKASH = "bKash";
    const PAYMENT_NAGAD = "Nagad";
    const PAYMENT_UCASH = "Ucash";
    const PAYMENT_BANK_CARD = "Bank Card";
    const PAYMENT_CASH = "Cash";

    public static array $paymentGateways = [
        self::PAYMENT_BKASH           => 'bKash',
        self::PAYMENT_NAGAD           => 'Nagad',
        self::PAYMENT_UCASH           => 'Ucash',
        self::PAYMENT_BANK_CARD       => 'Bank Card',
        self::PAYMENT_CASH            => 'Cash',
    ];
    // Payment method end

    // System Status Start
    const STATUS_PENDING = "1";
    const STATUS_PROCESSING = "2";
    const STATUS_CANCEL = "3";
    const STATUS_FAILED = "4";
    const STATUS_COMPLETED = "5";
    
    public static array $systemStatus = [
        self::STATUS_PENDING           => 'Pending',
        self::STATUS_PROCESSING        => 'Processing',
        self::STATUS_CANCEL            => 'Cancel',
        self::STATUS_FAILED            => 'Failed',
        self::STATUS_COMPLETED         => 'Completed',
    ];
    // System Status end
   
    // Pre Admission Payment Start
    const PAYMENT_INTERVIEW = "1";
    const PAYMENT_ASSESSMENT = "2";
    const PAYMENT_OBSERVATION = "3";

    public static array $pre_admission_payment_type = [
        self::PAYMENT_INTERVIEW           => 'Interview',
        self::PAYMENT_ASSESSMENT          => 'Assessment',
        self::PAYMENT_OBSERVATION         => 'Observation',
    ];
    // Pre Admission Payment End

    // Assessment ABC Checklist Start
    const ABC_NEVER_OR_RARELY = "0";
    const ABC_OCCASIONALLY = "1";
    const ABC_SOMETIMES = "2";
    const ABC_FREQUENTLY = "3";
    const ABC_FREQUENTLY_OR_ALWAYS = "4";
    
    public static array $assessment_abc_checklist_options = [
        self::ABC_NEVER_OR_RARELY        => 'Never or rarely',
        self::ABC_OCCASIONALLY           => 'Occasionally',
        self::ABC_SOMETIMES              => 'Sometimes',
        self::ABC_FREQUENTLY             => 'Frequently',
        self::ABC_FREQUENTLY_OR_ALWAYS   => 'Very frequently or always',
    ];
    // Assessment ABC Checklist End

    // Other Checklist start
     public static array $canDoCanNotDoEn = [
        self::YES => 'Can Do',
        self::NO  => 'Cannot Do',
    ];
    
    public static array $oftenNotOftenEn = [
        self::YES => 'Often',
        self::NO  => 'Not often',
    ];
    
    public static array $agreeDisagreeEn = [
        self::YES => 'Agree',
        self::NO  => 'Disagree',
    ]; 
    // Other Checklist end


    // Designation Start
    const FOUNDER_CHAIRMAN = "Founder Chairman";
    const ADVISER = "Adviser";
    const CHIEF_EXECUTIVE_OFFICER = "Chief Executive Officer";
    const ADMINISTRATIVE_HR_MANAGER = "Administrative & HR Manager";
    const ACCOUNTS_OFFICER = "Accounts Officer";
    const PRINCIPAL = "Principal";
    const SENIOR_PROG_SPECIALIST = "Senior Prog. Specialist";
    const JUNIOR_PROGRAM_OFFICER = "Junior Program Officer";
    const ASSISTANT_PROGRAMME_OFFICER = "Assistant Programme Officer";
    const PROGRAMME_OFFICER = "Programme Officer";
    const JUNIOR_PROGRAM_ASSISTANT = "Junior Program Assistant";
    const IT_TEACHER = "IT Teacher";
    const TRAINER_SATRANJI = "Trainer Satranji";
    const ASSISTANCE_TEACHER = "Assistance Teacher";
    const PHYSIOTHERAPIST = "Physiotherapist";
    const MUSIC_TEACHER = "Music Teacher";
    const GYM_INSTRACTOR = "Gym, Instractor";
    const HEAD_OF_BAKERY = "Head of bakery";
    const PROJECT_TECHNICAL_MANAGER= "Project Technical Manager";
    const PROJECT_MANAGER = "Project Manager";
    const PRODUCTION_MANAGER_PART_TIME = "Production Manager (Part Time)";
    
    public static array $designation = [
        self::FOUNDER_CHAIRMAN                      => "Founder Chairman",
        self::ADVISER                               => "Adviser",
        self::CHIEF_EXECUTIVE_OFFICER               => "Chief Executive Officer",
        self::ADMINISTRATIVE_HR_MANAGER             => "Administrative & HR Manager",
        self::ACCOUNTS_OFFICER                      => "Accounts Officer",
        self::PRINCIPAL                             => "Principal",
        self::SENIOR_PROG_SPECIALIST                => "Senior Prog. Specialist",
        self::JUNIOR_PROGRAM_OFFICER                => "Junior Program Officer",
        self::ASSISTANT_PROGRAMME_OFFICER           => "Assistant Programme Officer",
        self::PROGRAMME_OFFICER                     => "Programme Officer",
        self::JUNIOR_PROGRAM_ASSISTANT              => "Junior Program Assistant",
        self::IT_TEACHER                            => "IT Teacher",
        self::TRAINER_SATRANJI                      => "Trainer Satranji",
        self::ASSISTANCE_TEACHER                    => "Assistance Teacher",
        self::PHYSIOTHERAPIST                       => "Physiotherapist",
        self::MUSIC_TEACHER                         => "Music Teacher",
        self::GYM_INSTRACTOR                        => "Gym, Instractor",
        self::HEAD_OF_BAKERY                        => "Head of bakery",
        self::PROJECT_TECHNICAL_MANAGER             => "Project Technical Manager",
        self::PROJECT_MANAGER                       => "Project Manager",
        self::PRODUCTION_MANAGER_PART_TIME          => "Production Manager (Part Time)",
    ];
    // Designation end

    // Start Department
    const MANAGEMENT = "Management";
    const VOCATIONAL = "Vocational";
    const PRE_VOCATIONAL = "Pre-Vocational";
    const MOBILE_PHONE_SERVICING = "Mobile phone servicing";
    const COMPUTER_MULTIMEDIA = "Computer (Mulimedia)";
    const JEWELLERY = "Jewellery";
    const HANDLOOM = "Handloom";
    const PAINTING = "Painting";
    const PHYSIOTHERAPY = "Physiotherapy";
    const KARISHMA_CULTURAL_GROUP = "Karishma Cultural Group";
    const GYM = "Gym";
    
    public static array $department = [
            self::MANAGEMENT                => "Management",
            self::VOCATIONAL                => "Vocational",
            self::PRE_VOCATIONAL            => "Pre-Vocational",
            self::MOBILE_PHONE_SERVICING    => "Mobile phone servicing",
            self::COMPUTER_MULTIMEDIA       => "Computer (Mulimedia)",
            self::JEWELLERY                 => "Jewellery",
            self::HANDLOOM                  => "Handloom",
            self::PAINTING                  => "Painting",
            self::PHYSIOTHERAPY             => "Physiotherapy",
            self::KARISHMA_CULTURAL_GROUP   => "Karishma Cultural Group",
            self::GYM                       => "Gym",
    ];
    // End Department

    public static array $userTypes = [
        self::USER_TYPE_TEACHER => 'Teacher',
        self::USER_TYPE_GENERAL => 'General',
    ];

    const STUDENT_TYPE_ONLINE = '1';
    const STUDENT_TYPE_OFFLINE = '2';

    public static array $studentTypes = [
        self::STUDENT_TYPE_ONLINE => 'Online',
        self::STUDENT_TYPE_OFFLINE => 'Offline',
    ];

    public static array $socialCommunication = [
        self::NOTPRESENT => 'Not Present',
        self::USESNOWORD => 'Uses NO Words (Gestures - Preverbal)',
        self::USES1TO3WORDS => 'Uses 1-3 Words / sentences',
        self::ABLETOCOMMUNICATION => 'Able to communicate/ express opinion',
        self::USESCOMLESLANG => 'Uses Complex Language',
    ];

    public static array $autismBehaviorCheck = [
        self::DO_REGULARLY => 'Do regularly',
        self::SOMETIME => 'Sometimes',
        self::IN_SPECIAL_OCCASION => 'In special occasion',
        self::DONT_DO_AT_ALL => "Don't do at all",
    ];

    // Salary Head Setup

    const OTHER_PAYMENT = 'Other Payment';
    const  SALARY_HEAD  = 'Salary head';

    public static array $salaryHead = [
        self::OTHER_PAYMENT => 'Other Payment',
        self::SALARY_HEAD  => 'Salary head',
    ];


    const ADDITIVE  = 'Additive';
    const DEDUCTIVE = 'Deductive';

    public static array $setup = [
        self::ADDITIVE  => 'Additive',
        self::DEDUCTIVE => 'Deductive',
    ];


    const HOURLY  = 'Hourly';
    const DAILY = ' Daily';
    const MONTHLY = 'Monthly';

    public static array $payType = [
        self::HOURLY  => 'Hourly',
        self::DAILY => 'Daily',
        self::MONTHLY => 'Monthly',
    ];

    const BASIC  = 'Basic';
    const GROSS = 'Gross';
    const NET_SALARY = 'Net Salary';

    public static array $deduct = [
        self::BASIC   => 'Basic',
        self::GROSS => 'Gross',
        self::NET_SALARY => 'Net Salary',
    ];
    public static array $basic = [
        self::BASIC   => 'Basic',
        self::GROSS => 'Gross',
    ];
    
    //assign teacher
    const BOUTIQUE  = 'Boutique';
    const PAPERWORK = 'Paperwork';
    const ELEMENTRARY = 'Elementary';
    const MUSIC = 'Music';
    const TAILORING = 'Tailoring';
    const STARTER = 'Starter';
    const YOGA = 'Yoga';
    const DANCE = 'Dance';
    const ONLINECHESSCLASS = 'Online Chess class';
    const JEWELRY  = 'Jewelry';
    const RADIAL  = 'Radial';
    const PHYSICALEXERCISE = 'Physical Exercise(PE)';

    public static array $assignTeacher = [
        self::BOUTIQUE  => 'Boutique',
        self::PAPERWORK => 'Paperwork',
        self::ELEMENTRARY => 'Elementary',
        self::MUSIC => 'Music',
        self::TAILORING => 'Tailoring',
        self::STARTER => 'Starter',
        self::YOGA => 'Yoga',
        self::DANCE => 'Dance',
        self::ONLINECHESSCLASS => 'Online Chess class',
        self::JEWELRY  => 'Jewelry',
        self::RADIAL  => 'Radial',
        self::PHYSICALEXERCISE => 'Physical Exercise(PE)',
    ];

    // ====================
    // care Need Part 1
    // ====================

    // where you learned about us
    const DOCTORS  = 'Doctors';
    const COUNSELOR  = 'Counselor';
    const PEDIATRICIAN  = 'Pediatrician';
    const LEAFLET  = 'Leaflet';
    const NEWSPAPER  = 'News paper';
    const FACEBOOK  = 'Facebook';
    const WEBSITE  = 'Website';
    const SCHOOL  = 'School';
    const ORGANIZATION  = 'Organization';
    const PARENTS  = 'Parents';
    const OTHERS  = 'Others';

    public static array $learnAbout = [
        self::DOCTORS  => 'Doctors',
        self::COUNSELOR  => 'Counselor',
        self::PEDIATRICIAN  => 'Pediatrician',
        self::LEAFLET  => 'Leaflet',
        self::NEWSPAPER  => 'News paper',
        self::FACEBOOK  => 'Facebook',
        self::WEBSITE  => 'Website',
        self::SCHOOL  => 'School',
        self::ORGANIZATION  => 'Organization',
        self::PARENTS  => 'Parents',
        self::OTHERS  => 'Others',
    ];


    const DONTKNOW  = "don't know";

    public static array $yesNoDontknow = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::DONTKNOW  => "Don't know",
    ];

    const WANTTODO  = 'want to do';

    public static array $yesNoWantdo = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::WANTTODO  => 'Want to do',
    ];

    // Schooling
    const PSCHOOL  = 'Primary School';
    const HSCHOOL  = 'High School';
    const DC  = 'Day care ';
    const SSCHOOL  = 'Special School';
    const HSCHOOOL  = 'Home school';
    const COLLEGE  = 'College';
    const UNIVERSITY  = 'University';
    const OTHERINSTITUTE  = 'Other Institute';

    public static array $school = [
        self::PSCHOOL => 'Primary School',
        self::HSCHOOL => 'High School',
        self::DC => 'Day care',
        self::SSCHOOL => 'Special School',
        self::HSCHOOOL => 'Home school',
        self::COLLEGE => 'College',
        self::UNIVERSITY => 'University',
        self::OTHERINSTITUTE => 'Other Institute',
    ];

    const MID  = 'Mid';

    public static array $yesMidNo = [
        self::YES => 'Yes',
        self::NO  => 'No',
        self::MID  => 'Mid',
    ];

    const VERBAL  = 'Verbal';
    const SVERBAL  = 'Semi Verbal';
    const NVERBAL  = 'Non-Verbal';
    const SIGN  = 'Sign';
    const PECS  = 'PECs';
    const GESTURE  = 'Gesture';

    public static array $communicate = [
        self::VERBAL => 'Verbal',
        self::SVERBAL => 'Semi Verbal',
        self::NVERBAL => 'Non-Verbal',
        self::SIGN => 'Sign',
        self::PECS => 'PECs',
        self::GESTURE => 'Gesture',
    ];

    const FOOD  = 'Food';
    const NFOOD  = 'Non-Food';
    const CLOTHING  = 'Clothing';
    const EXPRESS  = 'Express';
    const DEMANDING  = 'Demanding';
    const LOVE  = 'Love';
    const HATE  = 'Hate';
    const FAMILY  = 'Family';
    const FRIENDS  = 'Friends';
    const SHOPPING  = 'Shopping';
    const GROCERIES  = 'Groceries';
    const BASICNEEDS  = 'Basic needs';
    const GAMES  = 'Games';
    const SAFETY  = 'Safety';
    const EMERGENCY  = 'Emergency';
    const ACCIDENT  = 'Accident';
    const IMPORTANCE  = 'Importance';
    const TRANSPORT  = 'Transport';
    const RIGHT  = 'Right';
    const WRONG  = 'Wrong';
    const GOOD  = 'Good';
    const BAD  = 'Bad';

    public static array $dailyLife = [
        self::FOOD => 'Food',
        self::NFOOD => 'Non-Food',
        self::CLOTHING => 'Clothing',
        self::EXPRESS => 'Express',
        self::DEMANDING => 'Demanding',
        self::LOVE => 'Love',
        self::HATE => 'Hate',
        self::FAMILY => 'Family',
        self::FRIENDS => 'Friends',
        self::SHOPPING => 'Shopping',
        self::GROCERIES => 'Groceries',
        self::BASICNEEDS => 'Basic needs',
        self::GAMES => 'Games',
        self::SAFETY => 'Safety',
        self::EMERGENCY => 'Emergency',
        self::ACCIDENT => 'Accident',
        self::IMPORTANCE => 'Importance',
        self::TRANSPORT => 'Transport',
        self::RIGHT => 'Right',
        self::WRONG => 'Wrong',
        self::GOOD => 'Good',
        self::BAD => 'Bad',
    ];


    const REGULAR  = 'Regular';
    const SOMETIMES  = 'Sometimes';
    const ONEINS  = 'Follow One way instructions';
    const BOTHINS  = 'Follow both way instructions';

    public static array $followInstruction = [
        // self::YES => 'Yes',
        // self::NO  => 'No',
        self::REGULAR  => 'Regular',
        self::SOMETIMES  => 'Sometimes',
        self::ONEINS  => 'Follow One way instructions',
        self::BOTHINS  => 'Follow both way instructions',
    ];


    const FIVEMIN  = '5 mins';
    const FIFTINMIN  = '15 mins';
    const MIN  = '30 mins';
    const TTIME  = 'Till targeted time';

    public static array $havit = [
        // self::YES => 'Yes',
        // self::NO  => 'No',
        self::FIVEMIN  => '5 mins',
        self::FIFTINMIN  => '15 mins',
        self::MIN  => '30 mins',
        self::TTIME  => 'Till targeted time',
        self::OTHERS  => 'Others',
    ];

    // Till targeted time
    public static array $havittime = [
        // self::YES => 'Yes',
        // self::NO  => 'No',
        self::FIVEMIN  => '5 mins',
        self::MIN  => '30 mins',
        self::OTHERS  => 'Others',
    ];

    // Family Economical condition
    const RICH  = 'Rich';
    const MIDDLE  = 'Middle';
    const INC  = 'Low Income';

    public static array $famCon = [
        self::RICH => 'Rich',
        self::MIDDLE => 'MIDDLE',
        self::INC => 'Low Income',
    ];

    // Going to school?

    const NOTGOING  = 'Other Institute';

    public static array $goingSchool = [
        self::NOTGOING => 'Not Going',
        self::SSCHOOL => 'Special School',
        self::PSCHOOL => 'Primary School',
        self::HSCHOOL => 'High School',
        self::COLLEGE => 'College',
        self::UNIVERSITY => 'University',
        self::OTHERINSTITUTE => 'Other Institute',
    ];

    // Studied till which class?

    const SSC  = 'SSC';
    const HSC  = 'HSC';
    const U  = 'University';

    public static array $class = [
        self::SSC => 'SSC',
        self::HSC => 'HSC',
        self::U => 'University',
        self::COLLEGE => 'College',
    ];

    // Why not attending school?

    const CHILDS  = "Child didn't like it";
    const SKEEPS  = 'School didn’t keep';
    const FDS  = 'Father didn’t want';
    const MS  = 'Mother didn’t want';
    const T  = 'Transportation problem';
    const FP  = 'Financial problem';
    const WM  = 'Wastage of money';
    const NOUT  = 'No output';
    const DOTHE  = 'Doing the same thing everyday at school';

    public static array $attendSchool = [
        self::CHILD => "Child didn't like it",
        self::SKEEP => 'School didn’t keep',
        self::FD => 'Father didn’t want',
        self::M => 'Mother didn’t want',
        self::T => 'Transportation problem',
        self::FP => 'Financial problem',
        self::WM => 'Wastage of money',
        self::NOUT => 'No output',
        self::DOTHE => 'Doing the same thing everyday at school',
    ];


    // Own equipment

    const CHILD  = 'Phone';
    const SKEEP  = 'Laptop ';
    const FD  = 'Computer';
    const M  = 'Game Console';

    public static array $Ph = [
        self::CHILD => 'Phone',
        self::SKEEP => 'Laptop',
        self::FD => 'Computer',
        self::M => 'Game Console',
    ];

    const FLAT = 'Flat';
    const CALCULATIVE = 'Calculative';

    public static array $flatCalculative = [
        self::FLAT => 'Flat',
        self::CALCULATIVE => 'Calculative',
    ];
    const NUMBER= 'Number of Days';
    const WORK = 'Work in Organization';

    public static array $calculativeBase = [
        self::NUMBER => 'Number of Days',
        self::WORK => 'Work in Organization',
    ];
    const HOUR= 'Hour';
    const DAY = 'Day';

    public static array $unit = [
        self::HOUR => 'Hour',
        self::DAY => 'Day',
    ];

    const ENJOYED= 'Enjoyed';
    const OVER = 'Carry Over';
    const CASHED = 'Cashed';
    const CARRY = 'Carry Over or Cashed';
    const MATERNAL = 'Maternal Leave';

    public static array $leave = [
        self::ENJOYED => 'Enjoyed',
        self::OVER => 'Carry Over',
        self::CASHED => 'Carry Over',
        self::CARRY => 'Carry Over',
        self::MATERNAL => 'Carry Over',
    ];
    //general section
}