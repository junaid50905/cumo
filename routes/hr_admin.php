<?php

use App\Models\AssignInerviewer;
use App\Models\DesignationSetup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\HrAdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\SalaryStepController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\AdviceLetterController;
use App\Http\Controllers\ApplyForJobController;
use App\Http\Controllers\BonusPackageController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CurrencySetupController;
use App\Http\Controllers\WeekendPackageController;
use App\Http\Controllers\DepartmentSetupController;
use App\Http\Controllers\AssignInerviewerController;
use App\Http\Controllers\AttendancePolicyController;
use App\Http\Controllers\DesignationSetupController;
use App\Http\Controllers\AssignInterviewerController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\EmployeeRequisitionController;
use App\Http\Controllers\JobConfirmationController;
use App\Http\Controllers\JobContactController;
use App\Http\Controllers\NoticeTemplateSetupController;
use App\Http\Controllers\ReportingMemoController;
// use App\Http\Controllers\SendMailController;
// use App\Http\Controllers\SentMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'hr-admin', 'middleware' => ['auth']], function () {
    Route::resources([
        'advice-letter'=> AdviceLetterController::class,
        'assign-interviewer' =>AssignInterviewerController::class,
        'employee-requisition'=>EmployeeRequisitionController::class,
        'job-confirmation'=>JobConfirmationController::class,
        // 'sent-mail'=>SentMailController::class,
        'job-contact'=>JobContactController::class,
        'reporting-memo'=>ReportingMemoController::class,
        'apply' => ApplyForJobController::class,
        // 'send-mail' => SendMailController::class,
        'attendence' => AttendenceController::class
    ]);
    // Route::get('attendance-policy-setup.create', [SetupController::class, 'attendeanceSetup'])->name('setup.attendance-policy-setup.create');
    // Recruitment
    //Route::get('HR.employee-requisition.create', [HrAdminController::class, 'employeeRequisition'])->name('HR.employee-requisition.create');
   // Route::get('HR.apply-for-job.create', [HrAdminController::class, 'applyForJob'])->name('HR.apply-for-job.create');
    Route::get('HR.applicant-list.create', [HrAdminController::class, 'applicationList'])->name('HR.applicant-list.create');
    // Route::get('HR.sent-mail.create', [HrAdminController::class, 'sentMail'])->name('HR.sent-mail.create');
    Route::get('HR.assign-interviewer.create', [HrAdminController::class, 'assignInterviewer'])->name('HR.assign-interviewer.create');
    Route::get('HR.interview-rating-form.create', [HrAdminController::class, 'interviewerRatingForm'])->name('HR.interview-rating-form.create');
    // Recruit
    //Route::get('HR.recruit.job-confirmation.create', [HrAdminController::class, 'jobConfirmation'])->name('HR.recruit.job-confirmation.create');
    //Route::get('HR.recruit.job-contact.create', [HrAdminController::class, 'jobContact'])->name('HR.recruit.job-contact.create');
    //Route::get('HR.recruit.reporting-memo.create', [HrAdminController::class, 'reportingMemo'])->name('HR.recruit.reporting-memo.create');
    // warning notice
    Route::get('warning-notice.create', [HrAdminController::class, 'warningNotice'])->name('HR.warning-notice.create');
    Route::get('show-case-notice.create', [HrAdminController::class, 'showcaseNotice'])->name('HR.show-case-notice.create');
    // Route::get('advice-letter.create', [HrAdminController::class, 'adviceLetter'])->name('HR.advice-letter.create');
    Route::get('employee-leave-status.create', [HrAdminController::class, 'employeeLeave'])->name('HR.employee-leave-status.create');
    // Route::get('certificate-setup.create', [HrAdminController::class, 'certificateSetup'])->name('HR.certificate-setup.create');
    //Route::get('employee-type.create', [HrAdminController::class, 'employeetypeSetup'])->name('HR.employee-type.create');
    // Route::get('department.create', [HrAdminController::class, 'departmentSetup'])->name('HR.department.create');
    Route::get('weekend-package.create', [HrAdminController::class, 'weekendSetup'])->name('HR.weekend-package.create');
    Route::get('facility-package.create', [HrAdminController::class, 'facilityPackage'])->name('HR.facility-package.create');
    Route::get('bonous-package.create', [HrAdminController::class, 'bonousPackage'])->name('HR.bonous-package.create');
    // Route::get('currency-setup.create', [HrAdminController::class, 'currencySetup'])->name('HR.currency-setup.create');
    Route::get('result-setup.create', [HrAdminController::class, 'resultSetup'])->name('HR.result-setup.create');
    // Route::get('Institute-setup.create', [HrAdminController::class, 'instituteSetup'])->name('HR.Institute-setup.create');
    // Route::get('organization-setup.create', [HrAdminController::class, 'organizationSetup'])->name('HR.organization-setup.create');
    // Route::get('section-setup.create', [HrAdminController::class, 'sectionSetup'])->name('HR.section-setup.create');
    //Route::get('attendence.create', [HrAdminController::class, 'attendenceCreate'])->name('HR.attendence.create');
    // Route::get('designation-setup.create', [HrAdminController::class, 'designationSetup'])->name('HR.designation-setup.create');
    Route::get('leave-application.create', [HrAdminController::class, 'leaveApplication'])->name('HR.leave-application.create');
    Route::get('leave-application.edit/{leave_application}', [HrAdminController::class, 'leaveApplicationEdit'])->name('HR.leave-application.edit');
    Route::get('leave-application.delete/{leave_application}', [HrAdminController::class, 'leaveApplicationDelete'])->name('HR.leave-application.delete');
    Route::get('leave-application.view/{leave_application}', [HrAdminController::class, 'leaveApplicationView'])->name('HR.leave-application.view');
    // Route::get('notice-template-setup.create', [NoticeTemplateSetupController::class, 'noticeTemplateSetup'])->name('HR.notice-template-setup.create');
    Route::get('notice-board.create', [HrAdminController::class, 'noticeBoard'])->name('HR.notice-board.create');
});
