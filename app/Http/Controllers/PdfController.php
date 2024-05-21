<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\CareNeedPartOne;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CareNeedPartOneRepository;
use App\Http\Requests\StoreCareNeedPartOneRequest;
use App\Http\Requests\UpdateCareNeedPartOneRequest;
use App\Services\CareNeedPartOneServices;
use App\Utility\ProjectConstants;

class PdfController extends Controller
{
    private UserRepository $userRepo;
    private CareNeedPartOneRepository $careNeedpartOneRepo;
    private CareNeedPartOneServices $service;
    private StudentRepository $studentRepo;

    public function __construct(
        UserRepository $userRepo,
        CareNeedPartOneRepository $careNeedpartOneRepo,
        CareNeedPartOneServices $service,
        StudentRepository $studentRepo
    ) {
        $this->userRepo = $userRepo;
        $this->careNeedpartOneRepo = $careNeedpartOneRepo;
        $this->service = $service;
        $this->studentRepo = $studentRepo;
    }

    public function generatePdf()
    {
        $data = [
            'gender' => ProjectConstants::$genders,
            'designation' => ProjectConstants::$designation,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'department' => ProjectConstants::$department,
            'assessorName' => $this->userRepo->getSpecificTypeUser('teacher'),
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
       
        $pdf = new Dompdf();

        // Set options
        $options = new Options();
        $options->set('isPhpEnabled', true);
        $pdf->setOptions($options);
        
        $html = view('pre_admission.care-need-part-one.section-wise-pdf', $data)->render();
       
        $pdf->loadHtml($html);

        // Render PDF
        $pdf->render();
        
        return $pdf->stream('care-need-part-one.pdf');
    }
}