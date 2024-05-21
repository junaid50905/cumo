<?php

namespace App\Utility;

final class CareNeedsFormConstants
{
    const  YES = 'Yes';
    const NO = 'no';
    const HEPLREQUIRED = 'Help Required';

    public static array $yesNoHelp = [
        self::YES => 'Yes',
        self::NO => 'no',
        self::HEPLREQUIRED => 'Help Required',
    ];

    const SELF = 'Self';

    public static array $selfNeedHelp = [
        self::SELF => 'Self',
        self::HEPLREQUIRED => 'Help Required',
    ];


    const URINE = 'Urine';
    const STOOL = 'Stool';
    const BOTH = 'Both';

    public static array $urinStool = [
        self::URINE => 'Urine',
        self::STOOL => 'Stool',
        self::BOTH => 'Both',
    ];

    // Therapy assessment: OT, SLT, Physio


    const OT = 'OT';
    const SLT = 'SLT';
    const PHYSIO = 'Physio';

    public static array $therapyAssessment = [
        self::OT => 'OT',
        self::SLT => 'SLT',
        self::PHYSIO => 'Physio',
    ];

    // Self-understanding

    const SENSE = 'Sense of self';
    const AWARENESS = 'Self-Awareness';
    const ESTEEM = 'Self-Esteem';
    const REGULATION = 'Self – Regulation';
    const RESPONSIBILITIES = 'Roles rights & responsibilities';
    const EMOTIONAL = 'Facial and emotional';
    const EXPRESSION = 'Expressions';


    public static array $selfUnderstanding = [
        self::SENSE => 'Sense of self',
        self::AWARENESS => 'Self-Awareness',
        self::ESTEEM => 'Self-Esteem',
        self::REGULATION => 'Self – Regulation',
        self::RESPONSIBILITIES => 'Roles rights & responsibilities',
        self::EMOTIONAL => 'Facial and emotional',
        self::EXPRESSION => 'Expressions',
    ];

    // Eat /drink/ swallow

    const HANDS = 'Use hands';
    const SPOON = 'Use spoon';
    const HELP = 'Need help';
    const BITEFOOD = 'Bite Food';
    const EATVEG = 'Eat Veg';
    const EATMEAT = 'Eat meat';
    const EATFISH = 'Eat Fish';
    const SPARATEFISHBONE = 'Separate Fish bone';
    const DISLIKEDFOOD = 'Eat disliked food';
    const CHEWYFOOD = 'Chewy Food';
    const CRUNCHYFOOD = 'Crunchy Food';
    const SUCKINGFOOD = 'Sucking Food';

    public static array $eatDrinking = [
        self::HANDS => 'Use hands',
        self::SPOON => 'Use spoon',
        self::HELP => 'Need help',
        self::BITEFOOD => 'Bite Food',
        self::EATVEG => 'Eat Veg',
        self::EATMEAT => 'Eat meat',
        self::EATFISH => 'Eat Fish',
        self::SPARATEFISHBONE => 'Separate Fish bone',
        self::DISLIKEDFOOD => 'Eat disliked food',
        self::CHEWYFOOD => 'Chewy Food',
        self::CRUNCHYFOOD => 'Crunchy Food',
        self::SUCKINGFOOD => 'Sucking Food',

    ];

    // Washing and bathing
    const NEEDHELP = 'Need help';
    const USESHOWER = 'Use shower ?';
    const USESOAP = 'Use soap?';
    const CLEANBODY = 'Clean body';
    const SHAMPOO = 'Shampoo';
    const PUREWATER = 'See pot to pure water';
    const USETOWEL = 'Use towel to dry boy';
    const USEPROPER = 'Use proper portion of shampoo';
    const DRESSEDBYSELF = 'After shower, get dressed by self';
    const DRESSEDINSIDE = 'Get dressed inside bathroom';
    const CLEANHAIR = 'Clean hair';

    public static array $washingBathing = [
        self::SELF => 'Self',
        self::NEEDHELP => 'Need help',
        self::USESHOWER => 'Use shower',
        self::USESOAP => 'Use soap?',
        self::CLEANBODY => 'Clean body',
        self::SHAMPOO => 'Shampoo',
        self::PUREWATER => 'See pot to pure water',
        self::USETOWEL => 'Use towel to dry boy',
        self::USEPROPER => 'Use proper portion of shampoo',
        self::DISLIKEDFOOD => 'Eat disliked food',
        self::DRESSEDBYSELF => 'After shower, get dressed by self',
        self::DRESSEDINSIDE => 'Get dressed inside bathroom',
        self::CLEANHAIR => 'Clean hair',

    ];

    // Brushing teeth/mouth care
    const BRUSHALONE = 'Can brush alone';
    const TAKEPASTE = 'Can take paste';
    const BRUSHPROPERLY = 'Can brush properly';
    const CLEANMOUTH = 'Can clean mouth';

    public static array $teethMouthCare = [
        self::SELF => 'Self',
        self::NEEDHELP => 'Need help',
        self::BRUSHALONE => 'Can brush alone',
        self::TAKEPASTE => 'Can take paste',
        self::BRUSHPROPERLY => 'Can brush properly',
        self::CLEANMOUTH => 'Can clean mouth',

    ];


    // Dressing

    const WAREPANTALONE = 'Ware pant alone';
    const OPENPANTALONE = 'Open pant alone';
    const WARESHIRT = 'Ware shirt//T-shirt';
    const BUTTONING = 'Buttoning';
    const FASTENHOOK = 'Fasten Hook';
    const UNDERSTANDWAY = 'Understand correct way wearing cloths';

    public static array $dressing = [
        self::SELF => 'Self',
        self::NEEDHELP => 'Need help',
        self::WAREPANTALONE => 'Ware pant alone',
        self::OPENPANTALONE => 'Open pant alone',
        self::WARESHIRT => 'Ware shirt//T-shirt',
        self::BUTTONING => 'Buttoning',
        self::FASTENHOOK => 'Fasten Hook',
        self::UNDERSTANDWAY => 'Understand correct way wearing cloths',


    ];

    // Toilet Training

    const CLEANING = 'Proper Cleaning ?';
    const OPENWATERTAP = 'Open water tap';
    const CLOSEWATERTAP = 'Close water tap';
    const USEHANDSHOWER = 'Use handshower';
    const USEBADNA = 'Use Bodna';
    const HANDWASH = 'Hand wash';
    const USELIQUIDSOAP = 'Use soap: liquid';
    const USEBARSOAP = 'Use soap: bar soap';
    const TOILETTISSUE = 'Toilet Tissue';
    const USEHIGHCOMMODE = 'Use high commode';
    const USEHIGHPAN = 'Use high Pan';
    const USETOILETOUTSIDEHOME = 'Use toilet outside home';

    public static array $toiletTraining = [
        self::CLEANING => 'Proper Cleaning ?',
        self::OPENWATERTAP => 'Open water tap',
        self::CLOSEWATERTAP => 'Close water tap',
        self::USEHANDSHOWER => 'Use handshower',
        self::USEBADNA => 'Use Bodna',
        self::HANDWASH => 'Hand wash',
        self::USELIQUIDSOAP => 'Use soap: liquid',
        self::USEBARSOAP => 'Use soap: bar soap',
        self::TOILETTISSUE => 'Toilet Tissue',
        self::USEHIGHCOMMODE => 'Use high commode',
        self::USEHIGHPAN => 'Use high Pan',
        self::USETOILETOUTSIDEHOME => 'Use toilet outside home',

    ];

    // Intrapersonal skills
    const SEXUALORIENTATION = 'Sexual orientation';
    const BODYAWARENESS = 'Body Awareness';
    const DISTANCEMAINTAINS = 'Distance maintains';
    const GOODTOUCHBADTOUCH = 'Good touch/bad touch';
    const UNDERSTANDSITUATION = 'Understanding situation';
    const CURIOSITY = 'Curiosity and asking question';

    public static array $interpersonal = [
        self::SEXUALORIENTATION => 'Sexual orientation',
        self::BODYAWARENESS => 'Body Awareness',
        self::DISTANCEMAINTAINS => 'Distance maintains',
        self::GOODTOUCHBADTOUCH => 'Good touch/bad touch',
        self::UNDERSTANDSITUATION => 'Understanding situation',
        self::CURIOSITY => 'Curiosity and asking question',
    ];




    // Communication Skills
    const RESPOND = 'Respond';
    const ATTENTIVE = 'Attentive Listening';
    const VOCABULARY = 'Vocabulary';
    const FOLLOWINSTRUCTION = 'Follow Instruction';
    const UNDERSTANDING = 'Understanding';
    const LISTENING = 'Listening';
    const REQUESTSPEAKING = 'Request Speaking';
    const CONVERSATIONSKILL = 'Conversation Skill';


    public static array $communicationSkill = [
        self::SEXUALORIENTATION => 'Respond',
        self::BODYAWARENESS => 'Attentive Listening',
        self::DISTANCEMAINTAINS => 'Vocabulary',
        self::GOODTOUCHBADTOUCH => 'Follow Instruction',
        self::UNDERSTANDSITUATION => 'Understanding',
        self::CURIOSITY => 'Listening',
        self::CURIOSITY => 'Request Speaking',
        self::CURIOSITY => 'Conversation Skill',


    ];

    // Does the individual have any history of the following?
    const DIABETES = 'Diabetes';
    const HEARTDISEASE = 'Coronary heart disease';
    const BLOODPRESSURE = 'High blood pressure';
    const EPILEPSY = 'Epilepsy';
    const LUNGDISEASE = 'Lung disease or asthma';
    const ALLERGY = 'Allergies';
    const OSTEOPOROSIS = 'Osteoporosis';
    const ARTHRITIS = 'Arthritis';
    const STROKE = 'Stroke';
    const MENTALHEALTH = 'Mental Health problems, eg depression';



    public static array $history = [
        self::DIABETES => 'Diabetes',
        self::HEARTDISEASE => 'Coronary heart disease',
        self::BLOODPRESSURE => 'High blood pressure',
        self::EPILEPSY => 'Epilepsy',
        self::LUNGDISEASE => 'Lung disease or asthma',
        self::ALLERGY => 'Allergies',
        self::OSTEOPOROSIS => 'Osteoporosis',
        self::ARTHRITIS => 'Arthritis',
        self::STROKE => 'Stroke',
        self::MENTALHEALTH => 'Mental Health problems, eg depression',

    ];

    // Any sensory issues? ( Tick, if the child has it)
    const TOUCH = 'Touch';
    const BODYSENSE = 'Proprioception (Body Sense)';
    const MOVEMENTSENSE = 'Vestibular (Movement sense)';
    const LISTENINGAUDITORY = 'Auditory / listening';
    const VISION = 'Vision';
    const TESTSMELL = 'Taste and Smell';



    public static array $sensoryIssue = [
        self::TOUCH => 'Touch',
        self::BODYSENSE => 'Proprioception (Body Sense)',
        self::MOVEMENTSENSE => 'Vestibular (Movement sense)',
        self::LISTENINGAUDITORY => 'Auditory / listening',
        self::VISION => 'Vision',
        self::TESTSMELL => 'Taste and Smell',

    ];

    // Gross Motor Skills
    const GENERALPLAY = 'General Play';
    const ORGANIZEDPLAY = 'Organized Play';
    const BALANCING = 'Balancing';
    const SKIPPING = 'Skipping';
    const BALLPLAY = 'Ball Play';
    const JUMPING = 'Jumping';
    const WALK = 'Walks';
    const ROLLING = 'Rolling';
    const RHYTHMS = 'Rhythms';


    public static array $grossMotorSkill = [
        self::GENERALPLAY => 'General Play',
        self::ORGANIZEDPLAY => 'Organized Play',
        self::BALANCING => 'Balancing',
        self::SKIPPING => 'Skipping',
        self::BALLPLAY => 'Ball Play',
        self::JUMPING => 'Jumping',
        self::WALK => 'Walks',
        self::ROLLING => 'Rolling',
        self::RHYTHMS => 'Rhythms',


    ];


    // Fine Motor Skills
    const TOYS = 'Construction toys';
    const SCISSORACTIVITIES = 'Scissor activities';
    const CRAFTACTIVITIES = 'Craft activities';
    const GAME = 'Workbook puzzles and games';
    const HANDGAME = 'Eye-hand coordination games';
    const PAINTING = 'Work on fasteners Painting';
    const COURSE = 'Obstacle Course';
    const MIDLINE = 'Crossing the Midline';
    const ACTIVITIES = 'Two-Handed Activities';


    public static array $fineMotorSkill = [
        self::TOYS => 'Construction toys',
        self::SCISSORACTIVITIES => 'Scissor activities',
        self::CRAFTACTIVITIES => 'Craft activities',
        self::GAME => 'Workbook puzzles and games',
        self::HANDGAME => 'Eye-hand coordination games',
        self::PAINTING => 'Work on fasteners Painting',
        self::COURSE => 'Obstacle Course',
        self::MIDLINE => 'Crossing the Midline',
        self::ACTIVITIES => 'Two-Handed Activities',


    ];

    // Eye Movements
    const BALLON = 'Balloon';
    const BUBBLES = 'Bubbles';
    const CONNECT = 'Mazes and Connect';
    const BEAD = 'Bead stringing';
    const BALLGAME = 'Ball Games';
    const FLASHLIGHT = 'Flashlight';
    const LETTERS = 'Letters';


    public static array $eyeMovement = [

        self::BALLON => 'Balloon',
        self::BUBBLES => 'Bubbles',
        self::CONNECT => 'Mazes and Connect',
        self::BEAD => 'Bead stringing',
        self::BALLGAME => 'Ball Games',
        self::FLASHLIGHT => 'Flashlight',
        self::LETTERS => 'Letters',


    ];

    // Oral-motor activities
    // Eye Movements
    const SWALLOWFOODS = 'Swallow Foods';
    const SUCKINGFOODS = 'Sucking Foods';


    public static array $oralMotoractivities = [

        self::CHEWYFOOD => 'Chewy Foods',
        self::SWALLOWFOODS => 'Swallow Foods',
        self::SUCKINGFOODS => 'Sucking Foods',


    ];


    // Relationship management
    const RELATIONSHIPDIVERSITY = 'Understand diversity of relationships';
    const CLOSEFAMILY = 'Close family';
    const EXTENDFAMILY = 'Extended family';
    const FRIENDS = 'Friends';
    const RELATIVES = 'Relatives';
    const PEER = 'Peer';
    const NEIGHBOUR = 'Neighbour';



    public static array $relationshipManagement = [

        self::RELATIONSHIPDIVERSITY => 'Understand diversity of relationships',
        self::CLOSEFAMILY => 'Close family',
        self::EXTENDFAMILY => 'Extended family',
        self::FRIENDS => 'Friends',
        self::RELATIVES => 'Relatives',
        self::PEER => 'Peer',
        self::NEIGHBOUR => 'Neighbour',

    ];


    // Social Communication skills
    const COMMUNICATIONSKILL = 'Social Communication skills';
    const SHARINGPERSONALISSUE = 'Sharing Personal issues';
    const TOPICMANAGEMENT = 'Topic Maintenance';
    const CONVERSATIONSTRUCTURE = 'Conversational Structure';
    const REPAIRSTRUCTURE = 'Repair Structures';
    const UNDERSTRANDINGRIGHTWRONG = 'Understanding right and wrong';
    const SOCIALRULES = 'Social rules';
    const HOLDINGCONVERSATION = 'Initiating/holding conversation';




    public static array $socialSkill = [

        self::RELATIONSHIPDIVERSITY => 'Social Communication skills',
        self::CLOSEFAMILY => 'Sharing Personal issues',
        self::EXTENDFAMILY => 'Topic Maintenance',
        self::FRIENDS => 'Conversational Structure',
        self::RELATIVES => 'Repair Structures',
        self::PEER => 'Understanding right and wrong',
        self::NEIGHBOUR => 'Social rules',
        self::NEIGHBOUR => 'Initiating/holding conversation',


    ];

    // Work Habit
    const ATTENDANCE = 'Attendance and Punctuality';
    const DRESS = 'Dress and Hygiene';
    const RELATION = 'Relating with others';
    const COMMUNICATION = 'Communication';
    const WORKREADINESS = 'Work Readiness';
    const ATTENTION = 'Attention span';
    const EMERGENCYSITUATION = 'Emergency / accident situation';




    public static array $workHabit = [

        self::ATTENDANCE => 'Attendance and Punctuality',
        self::DRESS => 'Dress and Hygiene',
        self::RELATION => 'Relating with others',
        self::COMMUNICATION => 'Communication',
        self::WORKREADINESS => 'Work Readiness',
        self::ATTENTION => 'Attention span',
        self::EMERGENCYSITUATION => 'Emergency / accident situation',


    ];
}
