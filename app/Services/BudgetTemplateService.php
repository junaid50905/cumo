<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\BudgetTemplateRepository;

class BudgetTemplateService
{
    private BudgetTemplateRepository $repo;

    public function __construct(BudgetTemplateRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$budgetTemplateData, $data] = $this->collectBudgetTemplate($validated);
            $budgetTemplateData = $this->repo->store($budgetTemplateData);
            $budgetTemplateDetailsInfos = $this->collectBudgetTemplateDetailsInfos($data);
            $budgetTemplateData->details()->createMany($budgetTemplateDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectBudgetTemplate(array $validated)
    {
        [$budgetTemplateData, $data] = extractNecessaryFieldsFromData($validated, [
            'project_id', 'title'
        ]);

        $budgetTemplateData['created_by'] = auth()->id();

        return [$budgetTemplateData, $data];
    }

    private function collectBudgetTemplateDetailsInfos(mixed $data): array
    {
        [$budgetTemplateDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['budget_head', 'account_id', 'note']);
        for ($i = 0; $i < count($budgetTemplateDetailsInfos['budget_head']); $i++) {
            $custom[$i] = [
                'budget_head' => $budgetTemplateDetailsInfos['budget_head'][$i],
                'account_id' => $budgetTemplateDetailsInfos['account_id'][$i],
                'note' => $budgetTemplateDetailsInfos['note'][$i],
            ];
        }
        return $custom ?? [];
    }


    // public function getFormattedDataAsOptGroup(): array
    // {
    //     $records = $this->repo->getWithSpecifyingRelation();
    //     return $this->formattedCoursesAsOptGroup($records);
    // }

    // private function formattedCoursesAsOptGroup($records): array
    // {
    //     foreach ($records as $key => $record) {
    //         if (!isset($custom[$record->category_id])) {
    //             $custom[$record->category_id] = [
    //                 'id'       => $record->category_id,
    //                 'name'    => $record->category->name,
    //                 'children' => [],
    //             ];
    //         }

    //         $childrenInfo = [
    //             'id'    => $record->id,
    //             'name' => $record->name,
    //         ];

    //         $custom[$record->category_id]['children'][] = $childrenInfo;
    //     }

    //     return $custom ?? [];
    // }


    public function update($budgetTemplate, array $validated)
    {
        try {
            DB::beginTransaction();
            [$budgetTemplateData, $data] = $this->collectBudgetTemplate($validated);
            $budgetTemplate = $this->repo->update($budgetTemplate, $budgetTemplateData);
            $budgetTemplate->details()?->delete();
            $budgetTemplateDetailsInfos = $this->collectBudgetTemplateDetailsInfos($data);
            $budgetTemplate->details()->createMany($budgetTemplateDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
