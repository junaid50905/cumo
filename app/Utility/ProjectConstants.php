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
   
//     Payment method Start
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
//     Payment method end

//     System Status Start
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
//     System Status end
   
//     Pre Admission Payment Start
    const PAYMENT_INTERVIEW = "1";
    const PAYMENT_ASSESSMENT = "2";
    const PAYMENT_OBSERVATION = "3";

    public static array $pre_admission_payment_type = [
        self::PAYMENT_INTERVIEW           => 'Interview',
        self::PAYMENT_ASSESSMENT             => 'Assessment',
        self::PAYMENT_OBSERVATION             => 'Observation',
    ];
//     Pre Admission Payment End


//     Designation Start
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
//     Designation end

//     Start Department
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
//     End Department

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
    public static array $general_health = [
        'General Health' => 'Yes',
        self::NO  => 'No',
    ];
    //visual
    public static array $activities_to_improve_visual_perception = [
        'Activities to Improve Visual Perception' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $oral_motor_activities = [
        'Oral-motor activities' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $sucking_foods = [
        'Sucking Foods(Calming)' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $chew = [
        'Chewy Foods(Organizing)' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $eating_and_drinking = [
        'Eating and Drinking' => 'Yes',
        self::NO  => 'No',
    ];
    //communication
    public static array $Receptive_communication = [
        'Receptive communication' => 'Yes',
        self::NO  => 'No',
        ];
    
   //activities of daily living
    public static array $wash = [
    'Hygiene: Washing & Showering' => 'Yes',
    self::NO  => 'No',
    ];
    public static array $dressing = [
        'Dressing' => 'Yes',
        self::NO  => 'No',
        ];
    public static array $Toileting = [
        'Toileting' => 'Yes',
        self::NO  => 'No',
        ];
    public static array $Leisure = [
        'Leisure & Recreation' => 'Yes',
        self::NO  => 'No',
        ];

    //functional gross motor
    public static array $Movement = [
        'Movement' => 'Yes',
        self::NO  => 'No',
        ];    
    public static array $Jumping = [
        'Jumping' => 'Yes',
        self::NO  => 'No',
        ]; 
    public static array $Ball_Play = [
        'Ball Play' => 'Yes',
        self::NO  => 'No',
        ];     
    //muscle tone
    public static array $muscle_tone_upper_limb = [
        self::YES => 'Yes',
        self::NO  => 'No',
    ];
    public static array $muscle_tone_lower_limb = [
        self::YES => 'Yes',
        self::NO  => 'No',
    ];
    
    //cognitive skills
    public static array $Attentive_Listening = [
        'Attentive Listening' => 'Yes',
        self::NO  => 'No',
        ];   
    public static array $Comprehension = [
        'Comprehension: Follow Instruction' => 'Yes',
        self::NO  => 'No',
        ];   
    public static array $Self_Awareness = [
        'Self-Awareness' => 'Yes',
        self::NO  => 'No',
        ];   
    public static array $Eye_hand_coordination_games = [
        'Eye-hand coordination games' => 'Yes',
        self::NO  => 'No',
        ];
    public static array $Two_Handed_Activities = [
        'Two-Handed Activities' => 'Yes',
        self::NO  => 'No',
        ];       
    //transitional movement
    public static array $rolling = [
        'Rolling' => 'Yes',
        self::NO  => 'No',
        ];                        
    //behavior
    public static array $Social_Interaction = [
        'Social Interaction' => 'Yes',
        self::NO  => 'No',
        ];
    public static array $Social_Communication_skills = [
        'Social Communication skills' => 'Yes',
        self::NO  => 'No',
        ];
    public static array $Intrapersonal_skills = [
        'Intrapersonal skills' => 'Yes',
        self::NO  => 'No',
        ];             
        
    //automatic reaction
    public static array $Body_Awareness  = [
        'Body Awareness' => 'Yes',
        self::NO  => 'No',
        ]; 
    public static array $Assertiveness  = [
        'Assertiveness' => 'Yes',
        self::NO  => 'No',
        ];        
        
    //sensory skill
    public static array $Touch  = [
        'Touch' => 'Yes',
        self::NO  => 'No',
        ];    
    public static array $Auditory  = [
        'Auditory' => 'Yes',
        self::NO  => 'No',
        ];  
         
    //fine motor skills 
    public static array $fine_motor  = [
        'Fine Motor Skills' => 'Yes',
        self::NO  => 'No',
        ]; 
    public static array $Construction_toys  = [
        'Construction toys' => 'Yes',
        self::NO  => 'No',
        ]; 
    public static array $writing  = [
        'Writing : Includes Fine motor skills' => 'Yes',
        self::NO  => 'No',
        ];      
                      
    //domain area
    public static array $communication_skills = [
        'Communication Skills' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $general_play = [
        'General Play' => 'Yes',
        self::NO  => 'No',
    ];
    public static array $organized_play = [
        'Organized Play' => 'Yes',
        self::NO  => 'No',
    ];

    public static array $leaky_guts = [
        'Leaky Guts' => 'Yes',
        self::NO  => 'No',
    ];

    //area mapping
    public static array $gross_motor_skills = [
        'Gross Motor Skills' => 'Yes',
        self::NO  => 'No',
    ];

    //sundomain mapping
    public static array $motor_planning = [
        'Motor Planning' => 'Yes',
        self::NO  => 'No',
    ];
    //subdomain mapping
    public static array $sensory_skills = [
        'Sensory Skills' => 'Yes',
        self::NO  => 'No',
    ];

//Section E:  Domain 01 - Physical development
public static array $D1 = [
    'Section E:  Domain 01 - Physical development' => 'Yes',
    self::NO  => 'No',
];


public static array $D1_a = [
    'Motor Planning' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1 = [
    'Gross Motor Skills' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_01 = [
    'General Play' => 'Yes',
    self::NO  => 'No',
];


public static array $D1_a_1_02 = [
    'Organized' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_1_03 = [
    'Balance Beam' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_04 = [
    'Ball Play' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_05 = [
    'Skipping' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_06 = [
    'Jumping' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_07 = [
    'Jump Rope' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_08 = [
    'Jumping Jacks' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_09 = [
    'Other Walks' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_10 = [
    'Rolling' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_11 = [
    'Bouncing' => 'Yes',
    self::NO  => 'No',
];






public static array $D1_a_1_12 = [
    'Rhythms' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_1_13 = [
    'Fitness & Physical Activity' => 'Yes',
    self::NO  => 'No',
];





public static array $D1_a_1_14 = [
    'Movement' => 'Yes',
    self::NO  => 'No',
];






public static array $D1_a_1_15 = [
    'Adaptations' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_2 = [
    'Fine Motor Skills' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_2_01 = [
    'Scissor activities' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_02 = [
    'Craft activities' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_03 = [
    'Construction toys' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_04 = [
    'Workbook puzzles and games' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_05 = [
    'Game suggestions' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_06 = [
    'Eye-hand coordination games' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_2_07 = [
    'Work on fasteners' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_08 = [
    'Painting on board or paper' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_09 = [
    'Obstacle Course' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_10 = [
    'Crossing the Midline' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_2_11 = [
    'Two-Handed Activities' => 'Yes',
    self::NO  => 'No',
];




public static array $D1_a_3 = [
    'Eye Movements' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_3_01 = [
    'Exercises for eye movement' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_4 = [
    'Oral-motor activities' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_4_01 = [
    'Chewy Foods(Organizing)' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_4_02 = [
    'Crunchy Foods(Alerting)' => 'Yes',
    self::NO  => 'No',
];



public static array $D1_a_4_03 = [
    'Sucking Foods(Calming)' => 'Yes',
    self::NO  => 'No',
];    

//Section F:  Domain 02 : Intellectual / cognitive development



public static array $D2 = [
        'Section F:  Domain 02 : Intellectual / cognitive development' => 'Yes',
        self::NO  => 'No',
        ];



public static array $D2_a = [
        'Sensory Skills' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_a_1 = [
        'Sensory diet' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_a_1_01 = [
        'Leaky Guts' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_a_1_02 = [
        'Taste / Smell' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_a_1_03 = [
        'Auditory' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_a_1_04 = [
        'Touch' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_a_2 = [
        'Visual supports' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_a_2_01 = [
        'Activities to Improve Visual Perception' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b = [
        'Skill Development planner' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_1 = [
        'Intrapersonal skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_01 = [
        'Sex education' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_02 = [
        'Body Awareness' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_03 = [
        'Physical Growth' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_04 = [
        'Body parts' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_05 = [
        'Assertiveness' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_06 = [
        'Decision Making' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_07 = [
        'Distance maintains' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_08 = [
        'Good touch/bad touch' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_09 = [
        'Understanding situation' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_10 = [
        'Curiosity and asking question' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_1_11 = [
        'Generalization ability' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2 = [
        'Functional Academic Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_01 = [
        'Pre- reading' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_02 = [
        'Chronological speech Awareness Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_03 = [
        'Early Reading Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_04 = [
        'Functional Reading Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_05 = [
        'Writing : Includes Fine motor skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_06 = [
        'Physical / motor writing skills' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_2_07 = [
        'Functional writing skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_08 = [
        'Numeracy' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_2_09 = [
        'Money management Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_10 = [
        'Time Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_2_11 = [
        'Measurement Skills' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_2_12 = [
        'Computation Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3 = [
        'Communication Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_01 = [
        'Receptive communication' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_02 = [
        'Respond' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_03 = [
        'Attentive Listening' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_04 = [
        'Vocabulary' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_05 = [
        'Verbs' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_3_06 = [
        'Adjectives' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_07 = [
        'Comprehension: Follow Instruction' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_3_08 = [
        'Communication – Understanding' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_09 = [
        'Listening skills' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_3_10 = [
        'Informational Listening' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_11 = [
        'Critical Listening' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_12 = [
        'Appreciative Listening' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_13 = [
        'Expressive communication' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_14 = [
        'Request' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_15 = [
        'Oral Communication' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_16 = [
        'Sign and PECs' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_3_17 = [
        'Speaking' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_18 = [
        'Pragmatic communication' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_19 = [
        'Conversation Skill' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_20 = [
        'Subjective Questions' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_3_21 = [
        'Answering close ended question (Yes/No Questions)' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_3_22 = [
        'Conversational Questions' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_3_23 = [
        'Interpretation (verbal and imagination)' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_4 = [
        'Communication' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_4_01 = [
        'Makes eye contact when listening and speaking' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_4_02 = [
        'Stands Or sits with correct posture positioning and distance' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_4_03 = [
        'Speaks at an appropriate volume not too loudly or Softly' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_4_04 = [
        'Express own work needs to the supervisor with clear meaning' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_4_05 = [
        'Interrupt appropriately' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_4_06 = [
        'Uses Appropriate greetings and partings' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_4_07 = [
        'In conversation use both questioning and volunteering information
        skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_4_08 = [
        'Move to a new topic when appropriate' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_4_09 = [
        'Give sufficient background information during the conversation so it
        is easy to understand what she or he is talking about' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_5 = [
        'Increase of attention span' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_5_01 = [
        'Reduce Interference' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_5_02 = [
        'Mediation' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_5_03 = [
        'Video games' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_5_04 = [
        'Puzzle games' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_6 = [
        'Memory Performance' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D2_b_6_01 = [
        'Remember instructions from day to day' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_6_02 = [
        'Remember where equipment stores at Septra are kept' => 'Yes',
        self::NO  => 'No',
        ];


public static array $D2_b_6_03 = [
        'Keep track of equipment tools stores Etc without misplacing them' => 'Yes',
        self::NO  => 'No',
        ];


public static array $D2_b_6_04 = [
        'Use co-workers and supervisors name' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_6_05 = [
        'Needs Minimal assistance to remember new activities' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_6_06 = [
        "Remember instructions minutes after they're presented" => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_7 = [
        'Aggressiveness and tantrum' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_7_01 = [
        'Reasons behind' => 'Yes',
        self::NO  => 'No',
        ];



public static array $D2_b_7_02 = [
        'Ways to cool down' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D2_b_7_03 = [
        'Equipment / materials to use' => 'Yes',
        self::NO  => 'No',
        ];


public static array $D2_b_7_04 = [
        'Safety when has tantrum' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D2_b_7_05 = [
        "Use o medicine – do or don't" => 'Yes',
        self::NO  => 'No',
        ];

//Section G : Domain 03 - Emotional development
public static array $D3 = [
    'Section G : Domain 03 - Emotional development' => 'Yes',
    self::NO  => 'No',
    ];


public static array $D3_a = [
        'Intrapersonal' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_a_00 = [
        'Self understanding' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_a_01 = [
        'Sense of self' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_a_02 = [
        'Understanding self' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_a_03 = [
        'Self-Awareness' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_a_04 = [
        'Self-Esteem' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_a_05 = [
        'Self – Regulation' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_a_06 = [
        'Choice making/ Personal choices & values' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_a_07 = [
        'Personal values setting' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_a_08 = [
        'Roles rights & responsibilities' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_a_09 = [
        'Facial and emotional expressions' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_b = [
        'Behavior Management' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_01 = [
        'Types of Problem Behavior' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_b_02 = [
        'Systematic Manipulation of Environment' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_b_03 = [
        'What are the Functions of Behavior?' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_04 = [
        'Determine the Cause or Function of Behavior?' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_b_05 = [
        'Behavior-Modification' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_06 = [
        "Follow ABC’s of Behavior: Rules for Trainers" => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_07 = [
        'Strategy to Manage Problem Behaviors Creating Consequences' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_07_01 = [
        "A: DON’T - DO" => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_07_02 = [
        'B: Functions of Problem Behavior' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_b_07_03 = [
        'C: Dimensions of Behavior' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_b_07_04 = [
        'D: Conducting Functional Assessment' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c = [
        'Independent Daily Living Skills' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_1 = [
        'Life Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_01 = [
        'Personal Care (following ADLs)' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_1_02 = [
        'Hygiene: Washing & Showering' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_03 = [
        'Toileting' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_04 = [
        'Shaving Routine' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_05 = [
        'Feminine Hygiene' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_06 = [
        'Dressing Routines' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_07 = [
        'Undressing' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_08 = [
        'Dressing' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_09 = [
        'Wear Accessories' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_10 = [
        'Grooming' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_1_11 = [
        'Eating and Drinking' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_1_12 = [
        'Dinning Etiquette' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_13 = [
        'Personal Safety' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_1_14 = [
        'Basic First Aid Knowledge' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2 = [
        'Household maintenance skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2_01 = [
        'Home Maintenance' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2_02 = [
        'Operating appliances' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2_03 = [
        'Cleaning & Washing Chores' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2_04 = [
        'Laundry Tasks' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_2_05 = [
        'Telephone Skills' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_3 = [
        'Basic Safety Rules' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_3_01 = [
        'Physical Safety' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_4 = [
        'Meal preparation skills & Knowledge' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_4_01 = [
        'How to lit stove' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_4_02 = [
        'How to Electric operate oven' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_4_03 = [
        'How to measure portion of spices' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_4_04 = [
        'Different kind of foods and its uses' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_4_05 = [
        'Nutrition value of different kind of foods' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_4_06 = [
        'Different kind of cooking' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_4_07 = [
        'Different timing of eating' => 'Yes',
        self::NO  => 'No',
        ];















public static array $D3_c_5 = [
        'Healthy Living' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_5_01 = [
        'Nutrition' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_5_02 = [
        'General Health' => 'Yes',
        self::NO  => 'No',
        ];










public static array $D3_c_6 = [
        'Grocery Shopping & Other Shopping' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_6_01 = [
        'Types of items to purchase' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_6_02 = [
        'Choosing rights items' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_6_03 = [
        'Choosing necessary and luxury items' => 'Yes',
        self::NO  => 'No',
        ];














public static array $D3_c_7 = [
        'Budgeting & Planning' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_7_01 = [
        'Using calculator' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_7_02 = [
        'Most important, important and unimportant items' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_7_03 = [
        'Different needs in daily living' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_7_04 = [
        'What to consider in budgeting and planning' => 'Yes',
        self::NO  => 'No',
        ];









public static array $D3_c_8 = [
        'Banking' => 'Yes',
        self::NO  => 'No',
        ];






public static array $D3_c_8_01 = [
        'Bank account details' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_8_02 = [
        'How to open bank account' => 'Yes',
        self::NO  => 'No',
        ];





public static array $D3_c_8_03 = [
        'Savings' => 'Yes',
        self::NO  => 'No',
        ];




public static array $D3_c_8_04 = [
        'Why you need bank account' => 'Yes',
        self::NO  => 'No',
        ];
//Section H : Domain 04 - Social and ethical development
        
        
        public static array $D4 = [
        'Section H : Domain 04 - Social and ethical development' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        public static array $D4_a = [
        'Social Emotional Learning (SEL)' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_a_1 = [
        'Interpersonal Skills' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_a_1_01 = [
        'Demonstrating respect for self & others' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_1_02 = [
        'Emotions' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_1_03 = [
        'Social Awareness' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2 = [
        'Work Habit' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_01 = [
        'Attendance and Punctuality' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_02 = [
        'Dress and Hygiene' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_03 = [
        'Relating with others' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_04 = [
        'Communication (work related)' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_05 = [
        'Work Readiness' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_06 = [
        'Managing Emotions (at work area)' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_07 = [
        'Attention span' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_a_2_08 = [
        'Road and transportation' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_09 = [
        'Lost and Found' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_a_2_10 = [
        'Emergency / accident situation' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_2_11 = [
        'Reaction To Supervision Specifications' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3 = [
        'Relationships management' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3_01 = [
        'Dealing with Family members' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_a_3_02 = [
        'Dealing with siblings' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3_03 = [
        'Dealing with close relatives' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3_04 = [
        'Dealing with distant relatives' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_a_3_05 = [
        'Dealing with neighbors' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3_06 = [
        'Dealing with unknown people' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
       public static array $D4_a_3_07 = [
        'Dealing with elderly people' => 'Yes',
        self::NO  => 'No',
        ]; 
        
        
        
        
        
        public static array $D4_a_3_08 = [
        'Dealing with children' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_a_3_09 = [
        'Dealing with people who hurt' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b = [
        'Leisure & Recreation' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b_1 = [
        'Social games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_b_1_01 = [
        'How to Play with others' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b_1_02 = [
        'Types of social games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        
        
        
        
        public static array $D4_b_2 = [
        'Outdoor games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_b_2_01 = [
        'Types of outdoor games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_b_2_0 = [
        'When and where these can be played' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b_2_03 = [
        'Play mates' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b_3 = [
        'Indoor games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_b_3_01 = [
        'Types of indoor games' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_b_3_02 = [
        'When and where these can be played' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        // D4_b_3_03
        
        // public static array $D4_b_3_03 = [
        // 'Play mates' => 'Yes',
        // self::NO  => 'No',
        // ];
        
        
        
        
        // public static array $D4_b = [
        // 'Self centered games' => 'Yes',
        // self::NO  => 'No',
        // ];
        
        
        
        // Benefit of self centered games
        
        // public static array $D3_c_8_03 = [
        // 'Savings' => 'Yes',
        // self::NO  => 'No',
        // ];
        
        
        
        
        
        // public static array $D3_c_8_03 = [
        // 'Types of self centered games' => 'Yes',
        // self::NO  => 'No',
        // ];
        
        
        
        
        public static array $D4_c = [
        'Social Communication skills' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_c_1 = [
        'Social Interaction' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        public static array $D4_c_2 = [
        'Sharing Personal issues' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        public static array $D4_c_3 = [
        'Topic Maintenance' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        public static array $D4_c_4 = [
        'Conversational Structure' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        public static array $D4_c_5 = [
        'Repair Structures' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        public static array $D4_c_6 = [
        'Interactional - Me and You…' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_c_7 = [
        'Wants Explanations - Tell me Why…' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_c_8 = [
        'Shares Knowledge & Imaginations - Ive got something to tell you' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        public static array $D4_d = [
                'Ethical Values' => 'Yes',
                self::NO  => 'No',
                ];
        
        
        
        
        public static array $D4_d_1 = [
        'Understanding right and wrong' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_1_01 = [
        'Respect' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_1_02 = [
        'Cheating others' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_1_03 = [
        'Telling lies' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_1_04 = [
        'Seeking permission' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_1_05 = [
        'Using others property' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public static array $D4_d_2 = [
        'Social rules Dos and Donts' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_2_01 = [
        'Clothing' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_2_02 = [
        'Speaking' => 'Yes',
        self::NO  => 'No',
        ];
        
        
        
        
        
        public static array $D4_d_2_03 = [
        'Attitude' => 'Yes',
        self::NO  => 'No',
        ];

        

 public static array $Ind = [
        'Section I: Independent skills' => 'Yes',
        self::NO  => 'No',
        ];

 

 public static array $Ind_ = [
        'Self development' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a = [
        'Personal Management' => 'Yes',
        self::NO  => 'No',
        ];




 public static array $Ind_a_1 = [
        'Managing Behavior and Conduct' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_2 = [
        'Social Skills' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_3 = [
        'Sensory Awareness and Management' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_4 = [
        'Self-Awareness' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_5 = [
        'Self-Esteem' => 'Yes',
        self::NO  => 'No',
        ];






 public static array $Ind_a_6 = [
        'Personal Safety' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_7 = [
        'Building Relationships' => 'Yes',
        self::NO  => 'No',
        ];




 public static array $Ind_a_8 = [
        'Citizenship' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_9 = [
        'Self-Advocacy' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_a_10 = [
        'Organization' => 'Yes',
        self::NO  => 'No',
        ];






 public static array $Ind_a_11 = [
        'Personal Hygiene at work place' => 'Yes',
        self::NO  => 'No',
        ];






 

 public static array $Ind_b = [
        'Career planning' => 'Yes',
        self::NO  => 'No',
        ];



//  public static array $D4_d_2_01 = [
//         'Career Explanation and Awareness' => 'Yes',
//         self::NO  => 'No',
//         ];






 public static array $Ind_b_1 = [
        'Decision Making' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_b_2 = [
        'Goal Setting' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_b_3 = [
        'Conflict Resolution' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_b_4 = [
        'Change and Growth' => 'Yes',
        self::NO  => 'No',
        ];




 public static array $Ind_c = [
        'Career Preparation' => 'Yes',
        self::NO  => 'No',
        ];




//  public static array $D4_d_2_01 = [
//         'Career steps' => 'Yes',
//         self::NO  => 'No',
//         ];





 public static array $Ind_c_1 = [
        'Resume Development' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_c_2 = [
        'Learning Specific Skills for Various Jobs' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_c_3 = [
        'Preparing for interview' => 'Yes',
        self::NO  => 'No',
        ];





 public static array $Ind_c_4 = [
        'Money and Money Management' => 'Yes',
        self::NO  => 'No',
        ];



        
}