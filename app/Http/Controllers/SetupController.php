<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function warehouseSetup()
    {
        return view('setup.store-management.warehouse_setup.create');
    }
    // public function measureUnitSetup()
    // {
    //     return view('setup.store-management.measure-unit.create');
    // }
    // public function productCategorySetup()
    // {
    //     return view('setup.store-management.product-category.create');
    // }
    public function productCreate()
    {
        return view('setup.store-management.product_setup.create');
    }
    public function academicCalender()
    {
        return view('setup.program-setup.academic-calender-create.create');
    }
    public function attendenceCardSetup()
    {
        return view('setup.program-setup.attendence-card-setup.create');
    }
    // public function teskCreate()
    // {
    //     return view('setup.program-setup.tesk-create.create');
    // }
    public function vocationalSetup()
    {
        return view('setup.program-setup.vocational-category-subcategory-setup.create');
    }
    public function presCription()
    {
        return view('setup.program-setup.prescription.create');
    }
    // public function activityCreate()
    // {
    //     return view('setup.program-setup.activity-create.create');
    // }
    public function taskWeightSetup()
    {
        return view('setup.program-setup.tesk-weight-setup.create');
    }
    public function courseSetup()
    {
        return view('setup.program-setup.course-setup.create');
    }
    // public function companySetup()
    // {
    //     $data = [
    //         // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
    //         'students' => []
    //     ];
    //     return view('setup.company-setup.create', $data);
    // }
    public function projectSetup()
    {
        return view('setup.project-setup.create');
    }
    // public function doctorSetup()
    // {
    //     return view('setup.doctor-setup.create');
    // }
    // public function chartAccountSetup()
    // {
    //     return view('setup.chart-of-accounts.create');
    // }
    public function accountDetailsSetup()
    {
        return view('setup.account-details.create');
    }
    public function manageChequebook()
    {
        return view('setup.manage-chequebook.create');
    }
    public function bankReconcilationNew()
    {
        return view('setup.bank-reconcilation-new.create');
    }
    public function bankReconcilation()
    {
        return view('setup.bank-reconcilation.create');
    }
    public function salaryGradeSetup()
    {
        return view('setup.payroll-management.salary_grade_setup.create');
    }
    // public function salaryStepSetup()
    // {
    //     return view('setup.payroll-management.salary_step_setup.create');
    // }
    // public function salaryHeadSetup()
    // {
    //     return view('setup.payroll-management.salary_head_setup.create');
    // }
    public function salaryPackageSetup()
    {
        return view('setup.payroll-management.salary_package_setup.create');
    }
    public function salaryBudgetSetup()
    {
        return view('setup.payroll-management.salary_budget_setup.create');
    }
    public function supplierSetup()
    {
        return view('setup.vendor-list.supplier-setup.create');
    }
    public function supplierTypeSetup()
    {
        return view('setup.vendor-list.supplier-type-setup.create');
    }
    // public function customerReg()
    // {
    //     return view('setup.customers-list.customer-reg.create');
    // }
    // public function customerType()
    // {
    //     return view('setup.customers-list.customer-Type.create');
    // }
    public function courseAdmission()
    {
        return view('setup.course-and-admission.create');
    }
    public function markingCategory()
    {
        return view('setup.vocational-marking-category.create');
    }
    // public function markingSubcategory()
    // {
    //     return view('setup.vocational-marking-subcategory.create');
    // }
    public function studentEvolution()
    {
        return view('setup.vocational-student-evolution.create');
    }
    public function employeeInformation()
    {
        return view('setup.employee-information.create');
    }
    public function attendeanceSetup()
    {
        return view('setup.attendance-policy-setup.create');
    }
    // public function leaveTypeSetup()
    // {
    //     return view('setup.leave-type.create');
    // }
    // public function leavePackageSetup()
    // {
    //     return view('setup.leave-package.create');
    // }
    public function createProduct()
    {
        return view('setup.create-product.create');
    }
    public function accountMappingSetup()
    {
        return view('setup.accounting-mapping.account_mapping.create');
    }
    // public function accountingYearSetup()
    // {
    //     return view('setup.accounting-mapping.accounting_year_setup.create');
    // }
    // public function clossingAccountSetup()
    // {
    //     return view('setup.accounting-mapping.closing_account_setup.create');
    // }
    // public function budgetYearSetup()
    // {
    //     return view('setup.budget-year-setup.create');
    // }
    // public function budgetHeadSetup()
    // {
    //     return view('setup.budget-head-setup.create');
    // }
    // public function budgetTemplateSetup()
    // {
    //     return view('setup.Budget-Template-setup.create');
    // }
    // public function budgetReviewSetup()
    // {
    //     return view('setup.budget-review.create');
    // }
    public function yearEnd()
    {
        return view('setup.year-end-close.create');
    }
    // public function otherUser()
    // {
    //     return view('setup.other-settings.user.create');
    // }
    // public function academicCalendar()
    // {
    //     return view('setup.other-settings.academic-calender.create');
    // }
    public function taskWeight()
    {
        return view('setup.other-settings.task-weight-settings.create');
    }
    public function userPermission()
    {
        return view('setup.other-settings.user-permission-setup.create');
    }

}

