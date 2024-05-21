<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Employee;
use Illuminate\Http\Request;
use App\Models\LeaveApplication;

class HrAdminController extends Controller
{
    // Recruitment
    public function employeeRequisition()
    {
        return view('HR.employee-requisition.create');
    }
    // public function applyForJob()
    // {
    //     return view('HR.apply-for-job.create');
    // }
    public function applicationList()
    {
        return view('HR.applicant-list.create');
    }

    // public function sentMail()
    // {
    //     return view('HR.sent-mail.create');
    // }

    // public function assignInterviewer()
    // {
    //     return view('HR.assign-interviewer.create');
    // }

    public function interviewerRatingForm()
    {
        return view('HR.interview-rating-form.create');
    }
    // Recruit
    // public function jobConfirmation()
    // {
    //     return view('HR.recruit.job-confirmation.create');
    // }
    // public function jobContact()
    // {
    //     return view('HR.recruit.job-contact.create');
    // }
    // public function reportingMemo()
    // {
    //     return view('HR.recruit.reporting-memo.create');
    // }
    public function warningNotice()
    {
        return view('HR.warning-notice.create');
    }

    public function showcaseNotice()
    {
        return view('HR.show-case-notice.create');
    }
    // public function adviceLetter()
    // {
    //     return view('HR.advice-letter.create');
    // }
    public function employeeLeave()
    {
        return view('HR.employee-leave-status.create');
    }
    // public function certificateSetup()
    // {
    //     return view('HR.certificate-setup.create');
    // }
    // public function employeetypeSetup()
    // {
    //     return view('HR.employee-type.create');
    // }
    // public function departmentSetup()
    // {
    //     return view('HR.department.create');
    // }
    // public function weekendSetup()
    // {
    //     return view('HR.weekend-package.create');
    // }
    public function facilityPackage()
    {
        return view('HR.facility-package.create');
    }
    public function bonousPackage()
    {
        return view('HR.bonous-package.create');
    }
    // public function currencySetup()
    // {
    //     return view('HR.currency-setup.create');
    // }
    // public function resultSetup()
    // {
    //     return view('HR.result-setup.create');
    // }
    // public function instituteSetup()
    // {
    //     return view('HR.Institute-setup.create');
    // }
    // public function organizationSetup()
    // {
    //     return view('HR.organization-setup.create');
    // }
    // public function sectionSetup()
    // {
    //     return view('HR.section-setup.create');
    // }
    // public function attendenceCreate()
    // {
    //     return view('HR.attendence.create');
    // }
    // public function designationSetup()
    // {
    //     return view('HR.designation-setup.create');
    // }
    public function leaveApplication()
    {   
        $leave_applications = LeaveApplication::with('details', 'employee')->get(); //dd($leave_applications);
        return view('HR.leave-application.create', compact('leave_applications'));
    }

    public function leaveApplicationEdit(LeaveApplication $leave_application)
    {   
        $data = [
            'record' => $leave_application,
        ]; 
        return view('HR.leave-application.edit', $data);
    }

    public function leaveApplicationView(LeaveApplication $leave_application)
    {   
        $data = [
            'record' => $leave_application
        ]; 
        return view('HR.leave-application.view', $data);
    }

    public function leaveApplicationDelete(LeaveApplication $leave_application)
    {   
        $leave_application->delete();
        return redirect()->route('HR.leave-application.create');
    }

    // public function noticeTemplate()
    // {
    //     return view('HR.notice-template-setup.create');
    // }
    public function noticeBoard()
    {
        return view('HR.notice-board.create');
    }


}
