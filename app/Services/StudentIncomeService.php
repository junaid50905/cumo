<?php

namespace App\Services;

use Exception;
use Carbon\Carbon;
use App\Models\Income;
use Illuminate\Support\Arr;
use App\Models\PaymentMethod;
use App\Models\StudentIncome;
use Illuminate\Support\Facades\DB;
use App\Traits\CommonServiceElements;
use App\Repositories\IncomeRepository;
use App\Repositories\StudentIncomeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class StudentIncomeService
{
    use CommonServiceElements;

    private StudentIncomeRepository $repo;
    private IncomeRepository $incomeRepo;

    public function __construct(StudentIncomeRepository $repo, IncomeRepository $incomeRepository)
    {
        $this->repo       = $repo;
        $this->incomeRepo = $incomeRepository;
    }

    /**
     * @throws Exception
     */
    public function store(array $validate): void
    {
        [$incomeInfo, $studentIncomeInfo, $studentIncomeDetails] = $this->segregateInfo($validate);
        // // $date_of_birth =  new Carbon(request()->date_of_birth);
        // // $age = $date_of_birth->diffInYears(Carbon::now());
        // // $file = request()->file('cv_upload')->getClientOriginalName();

        //  $validatedData = $validate;
        //  dd($validatedData);
          $date = Carbon::now()->format('d-m-Y');
        try {
            DB::beginTransaction();
            $student_income = $this->incomeRepo->store($incomeInfo);
            $student_income->date = $date;
            $student_income->save();
            // dd($student_income);
            // $income = $this->incomeRepo->store($incomeInfo);
            $studentIncome = $student_income->studentIncome()->create($studentIncomeInfo);

            $studentIncome->studentIncomeDetail()->createMany($studentIncomeDetails);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }


    /**
     * @throws Exception
     */
    public function segregateInfo(array $validate): array
    {
        [$validate, $income] = $this->collectIncomeInfo($validate);

        $studentIncome = $this->collectStudentIncomeInfo($validate);

        $studentIncomeDetails = $this->collectStudentIncomeDetailsInfo($validate);

        return [$income, $studentIncome, $studentIncomeDetails];
    }

    /**
     * @throws Exception
     */
    private function collectIncomeInfo(array $validate): array
    {
        $income = []; // project_id , date
        $income = Arr::only($validate, ['project_id', 'date']);

        $income['amount'] = array_sum($validate['amount']);
        $income['type'] = 'student';

        return [$validate, $income];
    }

    private function collectStudentIncomeInfo(array $validate): array
    {
        return [
            'student_id'        => $validate['student_id'],
            'payment_method_id' => PaymentMethod::whereTitle('Cash')->first()->id,
        ];
    }

    private function collectStudentIncomeDetailsInfo(array $validate): array
    {
        $studentIncomeDetails = Arr::only($validate, ['course_id', 'amount']);

        for ($i = 0; $i < count($studentIncomeDetails['course_id']); $i++) {
            $studentIncomeData[$i] = [
                'course_id' => $studentIncomeDetails['course_id'][$i],
                'amount' => $studentIncomeDetails['amount'][$i],
            ];
        }

        return $studentIncomeData;
    }

    /**
     * @throws Exception
     */
    public function update(StudentIncome $studentIncome, mixed $validate)
    {
        $studentIncome = $this->repo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']);

        try {
            DB::beginTransaction();
            // send income for updating
            // [$validate, $income] = $this->collectIncomeInfo($validate);
            [$incomeInfo, $studentIncomeInfo, $studentIncomeDetails] = $this->segregateInfo($validate);
            $this->incomeRepo->update($studentIncome->income, $incomeInfo);

            // check each detail for matching, if not found then delete else keep it
            foreach ($studentIncome->incomeDetails as $incomeDetail) {
                $found = false;
                // dd($studentIncomeDetails);
                foreach ($studentIncomeDetails as $key => $requestedDetail) {
                    if ($requestedDetail['course_id'] == $incomeDetail->course_id && $requestedDetail['amount'] == $incomeDetail->amount) {
                        $found = true;
                        unset($studentIncomeDetails[$key]);
                        break;
                    }
                }
                if (!$found) {
                    $incomeDetail->delete();
                }
            }
            if (count($studentIncomeDetails))
                $studentIncome->incomeDetails()->createMany($studentIncomeDetails);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
