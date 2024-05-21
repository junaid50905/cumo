<?php
namespace App\Utility;
final class MitpConstent
{
    const  YES = 'হ্যাঁ';
    const  NO = 'না';
    const WANTTODO = 'Want to do';

    public static array $yesNo = [
        self::YES => 'হ্যাঁ',
        self::NO  => 'না',
    ];

    public static array $yesNoEn = [
        self:: YES => 'Yes',
        self:: NO => 'No',
        self::WANTTODO  => 'Want to do',
    ];

    const  GENERALPLAY = 'General Play';
    const ORGANIZEDPLAY = 'Organized Play';
    const BALANCING = 'Balancing';
    const SKIPPING = 'Skipping';
    const BALLPLAY = 'Ball Play';
    const JUMPING = 'Jumping';
    const RHYTHMS = 'Rhythms';

    public static array $organization = [
        self:: GENERALPLAY => 'General Play',
        self:: ORGANIZEDPLAY => 'Organized Play',
        self:: BALANCING => 'Balancing',
        self:: SKIPPING => 'Skipping',
        self:: BALLPLAY => 'Ball Play',
        self:: JUMPING => 'Jumping',
        self:: RHYTHMS => 'Rhythms',
    ];
    const CONSTRUNCTIONTOYS = 'Construction toys';
    const SCISSORACTIVITIES = 'Scissor activities';
    const CRAFTACTIVITIES = 'Craft activities';
    const WORKBOOKPUZZLESANDGAMES = 'Workbook puzzles and games';
    const EYEHANDCOORDINATIONGAMES = 'Eye-hand coordination games';
    const WORKONFASTENERSPAINTING = 'Work on fasteners Painting';
    const OBSTACLECOURS = 'Obstacle Cours';
    const CROSSINGTHEMIDLINE = 'Crossing the Midline';

    public static array $fine = [
        self:: CONSTRUNCTIONTOYS => 'Construction toys',
        self:: SCISSORACTIVITIES => 'Scissor activities',
        self:: CRAFTACTIVITIES => 'Craft activities',
        self:: WORKBOOKPUZZLESANDGAMES => 'Workbook puzzles and games',
        self:: EYEHANDCOORDINATIONGAMES => 'Eye-hand coordination games',
        self:: WORKONFASTENERSPAINTING => 'Work on fasteners Painting',
        self:: OBSTACLECOURS => 'Obstacle Course',
        self:: CROSSINGTHEMIDLINE => 'Crossing the Midline',
    ];

    const  STUMBLE= 'হোঁচট খায় বা জিনিষ পত্রের বা বন্ধুদের সাথে ধাক্কা খায়';
    const   SCISSORS= 'কাঁচি, ছুরি বেমানান ভাবে ব্যবহার করে এবং সাহায্য প্রয়োজন হয়';

    public static array $mobility = [
        self:: STUMBLE=> 'হোঁচট খায় বা জিনিষ পত্রের বা বন্ধুদের সাথে ধাক্কা খায়',
        self:: SCISSORS=> 'কাঁচি, ছুরি বেমানান ভাবে ব্যবহার করে এবং সাহায্য প্রয়োজন হয়',
    ];
}