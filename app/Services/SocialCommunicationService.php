<?php

namespace App\Services;

use App\Utility\SocialCommunication;
use App\Models\Social;
use App\Repositories\SocialCommunicationRepository;


class SocialCommunicationService
{
    private SocialCommunicationRepository $repo;

    public function __construct(SocialCommunicationRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {

        $data = $this->processInfo($validated);
        
        $this->repo->store($data);
    }

    public function update($social, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($social, $data);
    }

    private function processInfo(array $validated): array
    {
        [$pragmaticObjective, $data] = $this->collectPragmaticObjective($validated);
        [$personal, $data] = $this->collectPersonal($data);
        [$topicMaintenance, $data] = $this->collectTopicMaintenance($data);
        [$conversationalStructure, $data] = $this->collectConversationalStructure($data);
        [$wordStructure, $data] = $this->collectWordStructure($data);
        [$mannerEffectiveness, $data] = $this->collectMannerEffectiveness($data);
        [$repairStructures, $data] = $this->collectRepairStructures($data);
        [$responsiveness, $data] = $this->collectResponsiveness($data);
        [$instrumentalStatesNeeds, $data] = $this->collectInstrumentalStatesNeeds($data);
        [$requesting, $data] = $this->collectRequesting($data);
        [$prosody, $data] = $this->collectProsody($data);
        [$protests, $data] = $this->collectProtests($data);
        [$styleOfConversation, $data] = $this->collectStyleOfConversation($data);
        [$humor, $data] = $this->collectHumor($data);
        [$greetingsAcknowledgements, $data] = $this->collectGreetingsAcknowledgements($data);
        [$problemSolving, $data] = $this->collectProblemSolving($data);
        [$deceit, $data] = $this->collectDeceit($data);
        [$academyCommunication, $data] = $this->collectAcademyCommunication($data);
        [$nonverbalCommunication, $data] = $this->collectNonverbalCommunication($data);
        [$perspectiveTaking, $data] = $this->collectPerspectiveTaking($data);
        [$regulatoryGivesCommands, $data] = $this->collectRegulatoryGivesCommands($data);
        [$socialEmotional, $data] = $this->collectSocialEmotional($data);

        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'pragmatic_objective' => $pragmaticObjective,
            'personal' => $personal,
            'topic_maintenance' => $topicMaintenance,
            'conversational_structure' => $conversationalStructure,
            'word_structure' => $wordStructure,
            'manner_effectiveness' => $mannerEffectiveness,
            'repair_structures' => $repairStructures,
            'responsiveness' => $responsiveness,
            'instrumental_states_needs' => $instrumentalStatesNeeds,
            'requesting' => $requesting,
            'prosody' => $prosody,
            'protests' => $protests,
            'style_of_conversation' => $styleOfConversation,
            'humor' => $humor,
            'greetings_acknowledgements' => $greetingsAcknowledgements,
            'problem_solving' => $problemSolving,
            'deceit' => $deceit,
            'academy_communication' => $academyCommunication,
            'nonverbal_communication' => $nonverbalCommunication,
            'perspective_taking' => $perspectiveTaking,
            'regulatory_gives_commands' => $regulatoryGivesCommands,
            'social_emotional' => $socialEmotional,
        ];
    }

    private function collectPragmaticObjective(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, SocialCommunication::$columnCollections['pragmatic_objective']);
    }

    private function collectPersonal(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['personal']);
    }

    private function collectTopicMaintenance(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['topic_maintenance']);
    }

    private function collectConversationalStructure(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['conversational_structure']);
    }
    private function collectWordStructure(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['word_structure']);
    }
    private function collectMannerEffectiveness(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['manner_effectiveness']);
    }
    private function collectRepairStructures(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['repair_structures']);
    }
    private function collectResponsiveness(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['responsiveness']);
    }
    private function collectInstrumentalStatesNeeds(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['instrumental_states_needs']);
    }
    private function collectRequesting(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['requesting']);
    }
    private function collectProsody(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['prosody']);
    }
    private function collectProtests(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['protests']);
    }
    private function collectStyleOfConversation(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['style_of_Conversation']);
    }
    private function collectHumor(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['humor']);
    }
    private function collectGreetingsAcknowledgements(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['greetings_acknowledgements']);
    }
    private function collectProblemSolving(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['problem_solving']);
    }
    private function collectDeceit(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['deceit']);
    }
    private function collectAcademyCommunication(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['academy_communication']);
    }
    private function collectNonverbalCommunication(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['nonverbal_communication']);
    }
    private function collectPerspectiveTaking(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['perspective_taking']);
    }
    private function collectRegulatoryGivesCommands(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['regulatory_gives_commands']);
    }
    private function collectSocialEmotional(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['social_emotional']);
    }
}
