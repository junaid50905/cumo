<?php

use App\Models\Product;
use App\Models\ClosingAccount;
use App\Models\BankReconcilationNew;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\Setup\SetupQuestionController;
use App\Http\Controllers\Setup\SetupTableOfContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\BudgetHeadController;
use App\Http\Controllers\BudgetYearController;
use App\Http\Controllers\SalaryHeadController;
use App\Http\Controllers\SalaryStepController;
use App\Http\Controllers\TaskWeightController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SalaryGradeController;
use App\Http\Controllers\BonusPackageController;
use App\Http\Controllers\BudgetReviewController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\LeavePackageController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SupplierTypeController;
use App\Http\Controllers\YearEndCloseController;
use App\Http\Controllers\CreateProductController;
use App\Http\Controllers\CurrencySetupController;
use App\Http\Controllers\AccountingYearController;
use App\Http\Controllers\ActivityCreateController;
use App\Http\Controllers\AttendenceCardController;
use App\Http\Controllers\BudgetTemplateController;
use App\Http\Controllers\ClosingAccountController;
use App\Http\Controllers\InstituteSetupController;
use App\Http\Controllers\WeekendPackageController;
use App\Http\Controllers\ChartofAccountsController;
use App\Http\Controllers\CustomerRegListController;
use App\Http\Controllers\DepartmentSetupController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\AcademicCalenderController;
use App\Http\Controllers\AttendancePolicyController;
use App\Http\Controllers\DesignationSetupController;
use App\Http\Controllers\AccountingMappingController;
use App\Http\Controllers\CustomerTypeSetupController;
use App\Http\Controllers\EmployeeTypeSetupController;
use App\Http\Controllers\NoticeTemplateSetupController;
use App\Http\Controllers\BankReconcilationNewController;
use App\Http\Controllers\VocationalCatagorySubController;
use App\Http\Controllers\VocationalSubCategoryController;
use App\Http\Controllers\VocationalMarkingCategoryController;

use App\Http\Controllers\Events\EventCalendarController;

Route::group(['prefix' => 'setup', 'middleware' => ['auth']], function () {
    Route::resources([
        'project' => ProjectController::class,
        'customer-type' => CustomerTypeController::class,
        'customer-reg-list' => CustomerRegListController::class,
        'chartof-accounts' => ChartofAccountsController::class,
        'warehouse' => WarehouseController::class,
        'supplier' => SupplierController::class,
        'supplier-type' => SupplierTypeController::class,
        'bank-reconcilation-new' => BankReconcilationNewController::class,
        'account_mapping' => AccountingMappingController::class,
        'yearend' => YearEndCloseController::class,
        'budget-year' => BudgetYearController::class,
        'budget-head' => BudgetHeadController::class,
        'budget-template' => BudgetTemplateController::class,
        'budget-review' => BudgetReviewController::class,
        'unit' => UnitController::class,
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'course' => CourseController::class,
        'prescription' => PrescriptionController::class,
        'activity' => ActivityController::class,
        'task' => TaskController::class,
        'task-weight' => TaskWeightController::class,
        'attendence-card' => AttendenceCardController::class,
        'vocational-sub-category' => VocationalSubCategoryController::class,
        'academic-calender' => AcademicCalenderController::class,
        'Vocational-Mcategory' => VocationalMarkingCategoryController::class,
        'company' => CompanyController::class,
        'doctor' => DoctorController::class,
        'user' => UserController::class,
        'closing_account' => ClosingAccountController::class,

        // HR Setup
        'notice-template-setup' => NoticeTemplateSetupController::class,
        'department' => DepartmentSetupController::class,
        'attendance-policy' => AttendancePolicyController::class,
        'designation' => DesignationSetupController::class,
        'institute' => InstituteSetupController::class,
        'section' => SectionController::class,
        'organization' => OrganizationController::class,
        'result' => ResultController::class,
        'leave-type' => LeaveTypeController::class,
        'currency' => CurrencySetupController::class,
        'bonus-package' => BonusPackageController::class,
        'certificate' => CertificateController::class,
        'weekend-package' => WeekendPackageController::class,
        'account-year'=> AccountingYearController::class,
        'salary-step' => SalaryStepController::class,
        'salary-grade' => SalaryGradeController::class,
        'salary-head' => SalaryHeadController::class,
        'employee-type' => EmployeeTypeSetupController::class,
        'leave-package' => LeavePackageController::class,
        'create-product' => CreateProductController::class,
        'donor' => DonorController::class,

        //Basic Setup
        'setup-question' => SetupQuestionController::class,
        'setup-table-of-content' => SetupTableOfContentController::class,
    ]);

    //table of content start
    Route::match(['get', 'post'], 'edit-item-setup-table-of-content/{id}', [SetupTableOfContentController::class, 'edit'])->name('edit-item-setup-table-of-content');
    Route::match(['get', 'post'], 'disable-item-in-table-of-content/{id}', [SetupTableOfContentController::class, 'disabledItem'])->name('disable-item-in-table-of-content');
    //table of content end

    // Event Calendar stat
    Route::get('event-schedule/list/{event_type}', [EventCalendarController::class, 'scheduleList'])->name('event_schedule_list');
    Route::get('event-schedule/pending-list/{event_type}', [EventCalendarController::class, 'schedulePendingList'])->name('event_schedule_pending_list');
    Route::get('event-schedule/edit-schedule/{event_type}/{id}', [EventCalendarController::class, 'editSchedule'])->name('edit_event_schedule');
    Route::get('event-schedule/setup-schedule/{appointment_id}/{event_type}', [EventCalendarController::class, 'setupSchedule'])->name('setup_event_schedule');
    Route::match(['get', 'post'], 'event-schedule/search-schedule', [EventCalendarController::class, 'searchEventSchedule'])->name('search_event_schedule');
    Route::get('event-schedule/create/{event_type}', [EventCalendarController::class, 'createSchedule'])->name('event_schedule_create');
    Route::post('event-schedule/store', [EventCalendarController::class, 'storeEventSchedule'])->name('event_schedule_store');

    //Assessment Start
    Route::get('assessment-schedule/list/{event_type}', [EventCalendarController::class, 'scheduleList'])->name('assessment-schedule.list');
    Route::get('setup-assessment-schedule/{id}/edit', [EventCalendarController::class, 'edit'])->name('setup-assessment-schedule.edit');
    Route::get('setup-assessment-schedule/{id}', [EventCalendarController::class, 'show'])->name('setup-assessment-schedule.show');
    Route::delete('setup-assessment-schedule/delete/{id}', [EventCalendarController::class, 'destroy'])->name('setup-assessment-schedule.destroy');
    //Assessment Start
    // Event Calendar end






































    
    // Setup ->> Store Management Route
    // Route::get('warehouse-setup.create', [SetupController::class, 'warehouseSetup'])->name('warehouse.setup.create');
    // Route::get('measure-unit-setup.create', [SetupController::class, 'measureUnitSetup'])->name('measure.unit.setup.create');
    Route::get('product-category-setup.create', [SetupController::class, 'productCategorySetup'])->name('product.category.setup.create');
    Route::get('product-create.create', [SetupController::class, 'productCreate'])->name('product.create.create');
    // Setup ->> Store Management Route
    // Setup->> Program Setup
    // Route::get('program-setup/tesk-create.create', [SetupController::class, 'teskCreate'])->name('setup.program-setup.tesk-create.create');
    //Route::get('program-setup/prescription.create', [SetupController::class, 'presCription'])->name('setup.program-setup.prescription.create');
    // Route::get('program-setup/tesk-weight-setup.create', [SetupController::class, 'taskWeightSetup'])->name('setup.program-setup.tesk-weight-setup.create')
    Route::get('program-setup/activity-create.create', [SetupController::class, 'activityCreate'])->name('setup.program-setup.activity-create.create');
    // Route::get('program-setup/course-setup.create', [SetupController::class, 'courseSetup'])->name('setup.program-setup.course-setup.create');
    // Route::get('program-setup/vocational-category-subcategory-setup.create', [SetupController::class, 'vocationalSetup'])->name('setup.program-setup.vocational-category-subcategory-setup.create');
    // Route::get('program-setup/academic-calender-create.create', [SetupController::class, 'academicCalender'])->name('setup.program-setup.academic-calender-create.create');
    //Route::get('program-setup/attendence-card-setup.create', [SetupController::class, 'attendenceCardSetup'])->name('setup.program-setup.attendence-card-setup.create');
    // Setup->> Program Setup
    // setup ->> Company Setup
    Route::get('company-setup/company-setup/create', [SetupController::class, 'companySetup'])->name('setup.company-setup.create');

    //setup ->> project setup
    // Route::get('project-setup/project-setup.create', [SetupController::class, 'projectSetup'])->name('setup.project-setup.create');
    //setup ->> project setup
    // Route::get('project-setup/project-setup.create', [SetupController::class, 'projectSetup'])->name('setup.project-setup.create');

    //setup ->> Doctor setup
    Route::get('doctor-setup.create', [SetupController::class, 'doctorSetup'])->name('setup.doctor-setup.create');
    // account setup
    //Route::get('chart-of-accounts.create', [SetupController::class, 'chartAccountSetup'])->name('setup.chart-of-accounts.create');
    // bank details setup
    // Route::get('account-details.create', [SetupController::class, 'accountDetailsSetup'])->name('setup.account-details.create');
    // Route::get('manage-chequebook.create', [SetupController::class, 'manageChequebook'])->name('setup.manage-chequebook.create');
    // bank reconcilation
    //Route::get('bank-reconcilation-new.create', [SetupController::class, 'bankReconcilationNew'])->name('setup.bank-reconcilation-new.create');
    Route::get('bank-reconcilation.create', [SetupController::class, 'bankReconcilation'])->name('setup.bank-reconcilation.create');
    // Payroll Management setup
    Route::get('payroll-management/salary_package_setup.create', [SetupController::class, 'salaryPackageSetup'])->name('setup.payroll-management.salary_package_setup.create');
    // Route::get('payroll-management/salary_budget_setup.create', [SetupController::class, 'salaryBudgetSetup'])->name('setup.payroll-management.salary_budget_setup.create');
    // Vendor List

    // Route::get('vendor-list/supplier-setup.create', [SetupController::class, 'supplierSetup'])->name('setup.vendor-list.supplier-setup.create');
    // Route::get('vendor-list/supplier-type-setup.create', [SetupController::class, 'supplierTypeSetup'])->name('setup.vendor-list.supplier-type-setup.create');


    Route::get('vendor-list/supplier-setup.create', [SetupController::class, 'supplierSetup'])->name('setup.vendor-list.supplier-setup.create');
    Route::get('vendor-list/supplier-type-setup.create', [SetupController::class, 'supplierTypeSetup'])->name('setup.vendor-list.supplier-type-setup.create');

    Route::get('customers-list/customer-reg/create', [SetupController::class, 'customerReg'])->name('setup.customers-list.customer-reg.create');
    // Route::get('customers-list/customer-reg/create', [SetupController::class, 'customerReg'])->name('setup.customers-list.customer-reg.create');

    // Route::get('customers-list/customer-type/create', [SetupController::class, 'customerType'])->name('setup.customers-list.customer-type.create');

    // Course and Admissionp
    // Route::get('course-and-admission.create', [SetupController::class, 'courseAdmission'])->name('setup.course-and-admission.create');

    // Vocational Marking
    //Route::get('vocational-marking-category.create', [SetupController::class, 'markingCategory'])->name('setup.vocational-marking-category.create');
    Route::get('vocational-marking-subcategory.create', [SetupController::class, 'markingSubcategory'])->name('setup.vocational-marking-subcategory.create');
    Route::get('vocational-student-evolution.create', [SetupController::class, 'studentEvolution'])->name('setup.vocational-student-evolution.create');
    // HR & Admin Links
    Route::get('employee-information.create', [SetupController::class, 'employeeInformation'])->name('setup.employee-information.create');
    // Route::get('attendance-policy-setup.create', [SetupController::class, 'attendeanceSetup'])->name('setup.attendance-policy-setup.create');
    Route::get('leave-type.create', [SetupController::class, 'leaveTypeSetup'])->name('setup.leave-type.create');
    //Route::get('leave-package.create', [SetupController::class, 'leavePackageSetup'])->name('setup.leave-package.create');
    Route::get('create-product.create', [SetupController::class, 'createProduct'])->name('setup.create-product.create');
    // Accounting Mapping
    // Route::get('accounting-mapping.account_mapping.create', [SetupController::class, 'accountMappingSetup'])->name('setup.accounting-mapping.account_mapping.create');
    //Route::get('accounting-mapping.accounting_year_setup.create', [SetupController::class, 'accountingYearSetup'])->name('setup.accounting-mapping.accounting_year_setup.create');
    // Route::get('accounting-mapping.closing_account_setup.create', [SetupController::class, 'clossingAccountSetup'])->name('setup.accounting-mapping.closing_account_setup.create');
    // Budget & Forecasting
    // Route::get('budget-year-setup.create', [SetupController::class, 'budgetYearSetup'])->name('setup.budget-year-setup.create');
    // Route::get('budget-head-setup.create', [SetupController::class, 'budgetHeadSetup'])->name('setup.budget-head-setup.create');
    // Route::get('Budget-Template-setup.create', [SetupController::class, 'budgetTemplateSetup'])->name('setup.Budget-Template-setup.create');
    // Route::get('budget-review.create', [SetupController::class, 'budgetReviewSetup'])->name('setup.budget-review.create');
    // Year End Close
    //Route::get('year-end-close.create', [SetupController::class, 'yearEnd'])->name('setup.year-end-close.create');
    // Other Setting
    Route::get('other-settings.user.create', [SetupController::class, 'otherUser'])->name('setup.other-settings.user.create');
    //Route::get('setup.other-settings.academic-calender.create', [SetupController::class, 'academicCalendar'])->name('setup.other-settings.academic-calender.create');
    Route::get('other-settings.task-weight-settings.create', [SetupController::class, 'taskWeight'])->name('setup.other-settings.task-weight-settings.create');
    Route::get('other-settings.user-permission-setup.create', [SetupController::class, 'userPermission'])->name('setup.other-settings.user-permission-setup.create');
});
