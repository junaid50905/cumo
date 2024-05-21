<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\SendMailRepository;

class SendMailService
{
    private SendMailRepository $sentMailRepo;

    public function __construct(SendMailRepository $sentMailRepo)
    {
        $this->repo = $sentMailRepo;
    }

    public function store(array $validated){
        try{
            DB::beginTransaction();
            [$sendMail, $data] = $this->collectSendMailContact($validated);
            $sendMailData = $this->repo->store($sendMail);

            $sendMailDetailsInfo = $this->collectSendMailDetails($data);

            $sendMailData->details()->createMany($sendMailDetailsInfo);

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
       
    }

    private function collectSendMailContact(array $validated){//dd($validated);
        [$sendMail, $data] = extractNecessaryFieldsFromData($validated, [
            'job_title','department_setup_id',
        ]);

        $sendMail['created_by'] = auth()->id();

        return [$sendMail, $data];
    }

    private function collectSendMailDetails(mixed $data){
        [$sendMailDetailsInfo,$data] = extractNecessaryFieldsFromData($data,['to', 'subject', 'date','time']);
        for($i=0; $i<count($sendMailDetailsInfo['to']);$i++){
            $custom[$i] = [
                'to' => $sendMailDetailsInfo['to'][$i],
                'subject' => $sendMailDetailsInfo['subject'][$i],
                'date' => $sendMailDetailsInfo['date'][$i],
                'time' => $sendMailDetailsInfo['time'][$i],
                'logs' => $sendMailDetailsInfo['time'][$i],
            ];
        }

        return $custom ?? [];
    }

}
