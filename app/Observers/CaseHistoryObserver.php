<?php

namespace App\Observers;

use App\Models\Mitp;
use App\Models\Task;
use App\Models\CaseHistory;

class CaseHistoryObserver
{
    /**
     * Handle the CaseHistory "created" event.
     *
     * @param CaseHistory $caseHistory
     *
     * @return void
     */
    public function created(CaseHistory $caseHistory): void
    {
        $this->calculateMitp($caseHistory);
    }

    /**
     * Handle the CaseHistory "updated" event.
     *
     * @param CaseHistory $caseHistory
     *
     * @return void
     */
    public function updated(CaseHistory $caseHistory): void
    {
        $mitp = Mitp::whereStudentId($caseHistory->student_id)->first();
        if ($mitp) {
            $mitp->delete();
        }

        $this->calculateMitp($caseHistory);
    }

    private function calculateMitp(CaseHistory $caseHistory): void
    {
        try {
            foreach (\App\Tasks\CaseHistory::$items as $key => $item) {//dd($item['answers']);
                $eachVal = $caseHistory->{$key}; 
                if (is_array($eachVal)) {//dd($eachVal);
                    $countMatched = count($item['answers']) == count($eachVal);
                    $countDiff = count(array_diff($eachVal, $item['answers']));

                    $result = $countMatched && !$countDiff;//dd($result);
                    // dump("isArray & key: $key & result: $result");
                } else {
                    $result = $eachVal == $item['answers'][0];
                    // dump("isString, eachVal: $eachVal & key: $key & result: $result");
                }

                if ($result) {
                    $mitp = new Mitp();
                    $mitp->student_id = $caseHistory->student_id;
                    $mitp->task_id = Task::whereTitle($item['task'])->first()->id;
                    $mitp->saveQuietly();
                }
            }
        } catch (\Exception $e) {
            dd($e->getMessage(), $e->getLine(), $item, $eachVal, $key);
        }
    }
}
