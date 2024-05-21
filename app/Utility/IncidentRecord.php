<?php 

namespace App\Utility;

use Illuminate\Support\Arr;

final class IncidentRecord{
    
    const SAME_AS_PRIVIOUS ="Same as previous";
    const NEW ="New";

    public static array $incidentType = [
        self::SAME_AS_PRIVIOUS => "Same as previous",
        self::NEW => "new",

    ];

    // What is the Previous cause of Incident/Antecedent Behavior?

    const BEGINNING_A_NEW_ACTIVITY ="Beginning a new activity";
    const ENDING_AN_ACTIVITY ="Ending an activity";
    const TRANSITIONS_BETWEEN_CLASSROOMS ="Transitions between classrooms";
    const PARTICIPATING_IN_GROUPS ="Participating in groups";
    const SAME_WORKING_AREA ="Same working area";
    const ASKED_FOR_A_PARTICULAR_TASK ="Asked for a particular task";
    const OBSERVED_SAME_ACTIVITY_OF_TEACHER_BY_STUDENTS ="Observed same activity of teacher by students";
    const ASKED_TO_DO_PERFERRED_ACTIVITY ="Asked to do preferred activity";
    const ASKED_TO_DO_NON_PERFERRED_ACTIVITY ="Asked to do non preferred activity";
    const ASKED_NO_TO ="Asked ‘not to’";
    const PEER_INTERACTION ="Peer interaction";
    const ALONE ="Alone";
    const WITH_PEERS ="With peers";
    const WITH_SAME_PEER ="With same peer";
    const DIFFERENT_ADULT ="Different adult";
    const BEING_IGNORED ="Being ignored";
    const FOR_FULFILLMENT_OF_SAME_PURPOSE ="For fulfillment of same purpose";
    const INCIDENT_IN_TRANSPORT ="Incident in transport";
    const OTHERS ="Others";

    public static array $activityType = [
        self::BEGINNING_A_NEW_ACTIVITY => "Beginning a new activity",
        self::ENDING_AN_ACTIVITY => "Ending an activity",
        self::TRANSITIONS_BETWEEN_CLASSROOMS => "Transitions between classrooms",
        self::PARTICIPATING_IN_GROUPS => "Participating in groups",
        self::SAME_WORKING_AREA => "Same working area",
        self::ASKED_FOR_A_PARTICULAR_TASK => "Asked for a particular task",
        self::OBSERVED_SAME_ACTIVITY_OF_TEACHER_BY_STUDENTS => "Observed same activity of teacher by students",
        self::ASKED_TO_DO_PERFERRED_ACTIVITY => "Asked to do preferred activity",
        self::ASKED_TO_DO_NON_PERFERRED_ACTIVITY => "Asked to do non preferred activity",
        self::ASKED_NO_TO => "Asked ‘not to’",
        self::PEER_INTERACTION => "Peer interaction",
        self::ALONE => "Alone",
        self::WITH_PEERS => "With peers",
        self::WITH_SAME_PEER => "With same peer",
        self::DIFFERENT_ADULT => "Different adult",
        self::BEING_IGNORED => "Being ignored",
        self::FOR_FULFILLMENT_OF_SAME_PURPOSE => "For fulfillment of same purpose",
        self::INCIDENT_IN_TRANSPORT => "Incident in transport",
        self::OTHERS => "Others",
    ];
}