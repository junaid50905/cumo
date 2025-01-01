<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Livewire\AppointmentList;

use App\Http\Controllers\Appointments\AppointmentController;
use App\Http\Controllers\CareNeeds\CareNeedPartOneController;
use App\Http\Controllers\Assessments\AssessmentPIDChildController;

use App\Http\Controllers\InterviewController;
use App\Http\Controllers\CaseHistoryController;
use App\Http\Controllers\CareNeeds\CareNeedController;
use App\Http\Controllers\ReferralController;


use App\Http\Controllers\TripController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\RunMitpController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CreateItpController;
use App\Http\Controllers\AssignTaskController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\GymAndOutingController;
use App\Http\Controllers\OtAssessmentController;
use App\Http\Controllers\SensoryAdultController;
use App\Http\Controllers\AssignTeacherController;
use App\Http\Controllers\MedicineAdminController;
use App\Http\Controllers\PhysiotherapyController;
use App\Http\Controllers\StudentIncomeController;
use App\Http\Controllers\IncidentRecordController;
use App\Http\Controllers\IndividualRiskController;
use App\Http\Controllers\AutisumBhehaviourController;
use App\Http\Controllers\ExecutiveFunctionController;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\OccupationalTherapyController;
use App\Http\Controllers\VocationalEvalutionController;
use App\Http\Controllers\DramaDiaryEvaluationController;
use App\Http\Controllers\SensoryChecklistChildController;
use App\Http\Controllers\FunctionalCommunicationController;
use App\Http\Controllers\FunctionalMovementskillController;
use App\Http\Controllers\StaffAndWorkplaceInspectionController;

use App\Http\Controllers\Events\EventController;
use App\Http\Livewire\CareNeeds\CareNeedPartOne;
use App\Http\Controllers\PdfController;

Route::group(['prefix' => 'student', 'middleware' => ['auth']], function () {
    Route::resources([
        'student' => StudentController::class,
        'social-communication' => SocialController::class,
        'medicine-admin' => MedicineAdminController::class,
        'incident-record' => IncidentRecordController::class,
        'ot-assessment' => OtAssessmentController::class,
        'trip' => TripController::class,
        'appointment' => AppointmentController::class,
        'interview' => InterviewController::class,
        'care-need-part-one' => CareNeedPartOneController::class,
        'care-need' => CareNeedController::class,
        'case-history' => CaseHistoryController::class,
        'referral' => ReferralController::class,
        'assessment-pid-child' => AssessmentPIDChildController::class,
        'autisum-behaviour' => AutisumBhehaviourController::class,
        'executive-function' => ExecutiveFunctionController::class,
        'sensory-checklist-adult' => SensoryAdultController::class,
        'individual-risk' => IndividualRiskController::class,
        'functional-movement-skill' => FunctionalMovementskillController::class,
        'functional-communication' => FunctionalCommunicationController::class,
        'physiotherapy' => PhysiotherapyController::class,
        'assign-task' => AssignTaskController::class,
        'occupational-therapy' => OccupationalTherapyController::class,
        'sensory-checklist-child' => SensoryChecklistChildController::class,
        'create-itp' => CreateItpController::class,
        'assign-teacher' => AssignTeacherController::class,
        'notice-board' => NoticeBoardController::class,
        'run-mitp' => RunMitpController::class,
        'gym-and-outing' => GymAndOutingController::class,
        'drama-diary-evaluation' => DramaDiaryEvaluationController::class,
        'staff-and-workplaceinspection' => StaffAndWorkplaceInspectionController::class,
        'vocational-evaluation' => VocationalEvalutionController::class,
        'student-attendance' => StudentAttendanceController::class,
        // 'another' => \App\Http\Controllers\StudentController::class,
    ]);

    // Appointment Start
    Route::match(['get', 'post'], 'pre-appointment-interview-setup', [AppointmentController::class, 'search'])->name('pre-appointment-interview-setup.search');
    // Appointment End

    // Care Need part one start
    Route::get('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate.pdf');
    Route::match(['get', 'post'], 'care-need-part-one-search', [CareNeedPartOneController::class, 'search'])->name('care-need-part-one-search.search');
    Route::get('/care-need-part-one-report/{appointment_id}', [CareNeedPartOneController::class, 'reportCareNeedPartOne'])->name('care-need-part-one-report.report');
    Route::get('/care-need-part-one-summary/summary', [CareNeedPartOneController::class, 'summaryCareNeedPartOne'])->name('care-need-part-one-summary.summary');
    Route::post('/care_need_part_one_suggestion', [CareNeedPartOneController::class, 'suggestionCareNeedPartOne'])->name('care_need_part_one_suggestion');
    // Care Need part one end

    //Assessment Start
    Route::match(['get', 'post'], 'assessment-pid-child-search', [AssessmentPIDChildController::class, 'search'])->name('assessment-pid-child-search.search');
    Route::match(['get', 'post'], 'assessment-pid-child-report-search', [AssessmentPIDChildController::class, 'searchReport'])->name('assessment-pid-child-report-search.search');
    //Assessment End

    // Student Profile Route Start
    Route::get('profile/{id}', [StudentController::class, 'studentProfile'])->name('student.profile');
    Route::get('student_profile/activity', [StudentController::class, 'studentProfileActivity'])->name('student_profile.activity');
    Route::get('student_profile/MITP/{id}', [StudentController::class, 'studentProfileMITP'])->name('student_profile.mitp');
    Route::get('student_profile/ITP/{id}', [StudentController::class, 'studentProfileITP'])->name('student_profile.itp');
    Route::get('student_profile/messages', [StudentController::class, 'studentProfileMessages'])->name('student_profile.messages');
    Route::get('student_profile/other_courses', [StudentController::class, 'studentProfileOtherCourses'])->name('student_profile.other_courses');
    Route::get('student_profile/my_student', [StudentController::class, 'studentProfileMyStudent'])->name('student_profile.my_student');
    Route::get('student_profile/itp_evaluation', [StudentController::class, 'studentProfileITPEvaluation'])->name('student_profile.itp_evaluation');
    Route::get('student_profile/previous_itp_evaluation', [StudentController::class, 'studentProfilePreviousITPEvaluation'])->name('student_profile.previous_itp_evaluation');
    Route::get('student_profile/vocational_trade_score', [StudentController::class, 'studentProfileVocationalTradeScore'])->name('student_profile.vocational_trade_score');
    // Student Profile Route End

    //Route::get('appointment', [StudentController::class, 'appointment'])->name('student.appointment');
    // Route::get('student-income', StudentIncome::class)->name('student.income');
    // Route::get('appointment', AppointmentList::class)->name('student.appointment');
    // Route::get('referral', ReferralFormList::class)->name('referral.list');


    // Route::get('case-history', [StudentController::class, 'caseHistory'])->name('student.case-history');
    // Route::get('referral-form', [StudentController::class, 'referralForm'])->name('student.referral-form');
    // Route::get('care-needs-form', [StudentController::class, 'careNeedForm'])->name('student.care-need-form');

    // Route::get('care-needs-form', [StudentController::class, 'careNeedForm'])->name('student.care-need-form');


    Route::get('admission/add-student', [StudentController::class, 'admissionAddStudent'])->name('admission.addStudent');

    Route::get('employment/staff_and_workplace_inspecation_tool', [StudentController::class, 'staffAndWorkplaceInspecationTool'])->name('employment.staff_and_workplace_inspecation_tool');
    Route::get('student/employment/-staff-and_workplace-inspecation-tool', [StudentController::class, 'staffWorkplace'])->name('student.employment.staff_and_workplace_inspecation_tool');

    Route::get('assessment/sensory-checklist-for-child', [StudentController::class, 'sensoryChecklistForChild'])->name('sensory.checklist.for.child');

    //    Route::get('assessment/social-communication', [StudentController::class, 'socialCommunication'])->name('social.communication');
    //    Route::get('assessment/social-communication', [\App\Http\Controllers\SocialController::class, 'create']);
    //    Route::get('assessment/social-communication', [StudentController::class, 'socialCommunication'])->name('social.communication');
    //    Route::get('assessment/social-communication', [\App\Http\Controllers\SocialController::class, 'create']);


    //    Route::get('assessment/social-communication', [StudentController::class, 'socialCommunication'])->name('social.communication');
    // Route::get('assessment/social-communication', [SocialController::class, 'create']);

    // Route::get('assessment/occupational-therapy', [StudentController::class, 'occupationalTherapy'])->name('occupational.therapy');
    // Route::get('assessment/physiotherapy', [StudentController::class, 'physioTherapy'])->name('physio.therapy');
    // Route::get('assessment/executive-function-test', [StudentController::class, 'executiveFunctionTest'])->name('executive.function.test');
    Route::get('assessment/autism-behavior-checklist', [StudentController::class, 'autismBehaviorChecklist'])->name('autism.behavior.checklist');
    // Route::get('assessment/functional-communication-assessment', [StudentController::class, 'functionalCommunicationAssessment'])->name('functional.communication.assessment');
    Route::get('assessment/functional_movement_skills', [StudentController::class, 'functionalMovementskill'])->name('assessment.functional_movement_skills');
    Route::get('assessment/sensory-checklist-for-young-adult', [StudentController::class, 'sensoryChecklistForYoungAdult'])->name('sensory.checklist.for.young.adult');
    // Route::get('assessment/individual-risk-assessment-form', [StudentController::class, 'individualRiskAssessmentForm'])->name('individual.risk.assessment.form');

    // Route::get('', [StudentController::class, ''])->name('');
    Route::get('student-list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('dairy/trip-report-form', [StudentController::class, 'tripReportForm'])->name('trip.report.form');
    Route::get('dairy/gym-outing-evaluation', [StudentController::class, 'gymOutingEvaluation'])->name('gym.outing.evaluation');
    // Route::get('dairy/ot-assessment', [StudentController::class, 'otAssessment'])->name('ot.assessment');
    // Route::get('dairy/incident-record', [StudentController::class, 'incidentRecord'])->name('student.dairy.incident-record');
    Route::get('dairy/medicine-admin', [StudentController::class, 'medicineAdmin'])->name('student.dairy.medicine-admin');

    //Route::get('student-attendence', [StudentController::class, 'studentAttendence'])->name('student.attendence');
    // Route::get('', [StudentController::class, ''])->name('');
    Route::get('assessment/functional_movement_skills', [StudentController::class, 'functionalMovementskill'])->name('assessment.functional_movement_skills');
    //Route::get('co-curricular/drama-diary-evaluation', [StudentController::class, 'dramaDiary'])->name('student.co-curricular.drama-diary-evaluation');
    //Route::get('accounting/income/student_income', [StudentController::class, 'studentIncome'])->name('accounting.income.student_income');
    Route::get('accounting/income/sale_voucher', [StudentController::class, 'studentSaleVoucher'])->name('accounting.income.sale_voucher');
    Route::get('accounting/income/received_payment', [StudentController::class, 'studentReceivedPayment'])->name('accounting.income.received_payment');
    Route::get('student/co-curricular/drama-diary-evaluation', [StudentController::class, 'dramaDiary'])->name('student.co-curricular.drama-diary-evaluation');
    Route::get('program/assign-task', [StudentController::class, 'assignTask'])->name('program.assign-task');
    Route::get('program/create-itp', [StudentController::class, 'createItp'])->name('program.create-itp');
    Route::get('stock-management/stock_receive', [StudentController::class, 'stockReceive'])->name('stock-management.stock_receive');
    Route::get('stock-management/finished_goods', [StudentController::class, 'finishedGoods'])->name('stock-management.finished_goods');
    Route::get('stock-management/material_callects', [StudentController::class, 'materialCallects'])->name('stock-management.material_callects');
    Route::get('stock-management/stock_transfer', [StudentController::class, 'stockTransfer'])->name('stock-management.stock_transfer');
    Route::get('stock-management/stock_count', [StudentController::class, 'stockCount'])->name('stock-management.stock_count');
    Route::get('fetchMitp/{id}', [StudentController::class, 'fetchMitp'])->name('fetchMitp');
    Route::get('fetchItp/{id}', [StudentController::class, 'fetchItp'])->name('fetchItp');
    Route::get('fetchRoutine/{id}', [StudentController::class, 'fetchRoutine'])->name('fetchRoutine');
    Route::get('builditp/{id}', [StudentController::class, 'buildItp'])->name('builditp');
});
