<?php

namespace App\Utility;

final class OtAssessment
{
    const CANMAINTAIN = 'Can fully maintain';
    const PARMAINTAIN = 'Partially maintain';
    const CANTMAINTAIN = 'Can’t maintain';
    const SUPPORT = 'Can maintain with support';

    

    public static array $maintain = [
        self::CANMAINTAIN => 'Can fully maintain',
        self::PARMAINTAIN => 'Partially maintain',
        self::CANTMAINTAIN => 'Can’t maintain',
        self::SUPPORT => 'Can maintain with support',

    ];



    const NORMAL = 'Normal';
    const LESSSTRENGTH = 'Less Strength';

    

    public static array $strength = [
        self::NORMAL => 'Normal',
        self::LESSSTRENGTH => 'Less Strength',

    ];


    const ABLE = 'Able';
    const PARTIALLY = 'Partially';
    const UNABLE = 'Unable';
    const ABLEWITHSUPPORT = 'Able with support';

    

    public static array $ability = [
        self::ABLE => 'Able',
        self::PARTIALLY => 'Partially',
        self::UNABLE => 'Unable',
        self::ABLEWITHSUPPORT => 'Able with support',

    ];


    const LESSMIN = 'Less than 5 min';
    const FIVEMIN = '5 min';
    const TENMIN = '10 min';
    const TWEENTYMIN = '20 min';
    const THIRTYMIN = '30 min';
    const THIRTYPLUSMIN = '30+ min';


    

    public static array $time = [
        self::LESSMIN => 'Less than 5 min',
        self::FIVEMIN => '5 min',
        self::TENMIN => '10 min',
        self::TWEENTYMIN => '20 min',
        self::THIRTYMIN => '30 min',
        self::THIRTYPLUSMIN => '30+ min',

    ];


    const FOLLOW = 'Can same to follow';
    const PERFORM = 'Partially perform';
    const TRYFOLLOW = 'Try to follow';
    const HELP = 'Can follow with help';


    

    public static array $follow = [
        self::FOLLOW => 'Can same to follow',
        self::PERFORM => 'Partially perform',
        self::TRYFOLLOW => 'Try to follow',
        self::HELP => 'Can follow with help',
    ];


    const RESPONSE = 'Can response';
    const PERRESPONSE = 'Partially response';
    const TRYRESPONSE = 'Try to response';
    const HELPRESPONSE = 'Help to response';


    

    public static array $response = [
        self::RESPONSE => 'Can response',
        self::PERRESPONSE => 'Partially response',
        self::TRYRESPONSE => 'Try to response',
        self::HELPRESPONSE => 'Help to response',
    ];

    const INTEREST = 'Show interest';
    const CANTINTEREST = 'Can’t show interest';
    const SHOWING = 'Sometimes showing';


    public static array $show = [
        self::INTEREST => 'Show interest',
        self::CANTINTEREST => 'Can’t show interest',
        self::CANTMAINTAIN => 'Can’t maintain',
        self::SHOWING => 'Sometimes showing',
    ];


    const APPROPRIATE = 'Appropriate';
    const ADAPTED = 'Need to adapted (height/arm rest/back support)';

    

    public static array $appropriate = [
        self::APPROPRIATE => 'Appropriate',
        self::ADAPTED => 'Need to adapted (height/arm rest/back support)',
    ];


    const VERBAL = 'Verbal';
    const SIGNLAN = 'Sign language';
    const GES = ' Gesture use: can properly';
    const UNABLEPERFORM = ' Unable to perform';
    const PARPERFORM = 'Partially perform';


    

    public static array $sign = [
        self::VERBAL => ' Verbal',
        self::SIGNLAN => 'Sign language',
        self::GES => ' Gesture use: can properly',
        self::UNABLEPERFORM => ' Unable to perform',
        self::PARPERFORM => 'Partially perform',

    ];

    const NORMALL = 'Normal';
    const HYPO = 'Hypo';
    const HYPER = 'Hyper';

    public static array $hyper = [
        self::NORMALL => 'Normal',
        self::HYPO => 'Hypo',
        self::HYPER => 'Hyper',

    ];


}