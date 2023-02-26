<?php
//Start of Master Controllers
use App\Http\Controllers\Assets\FixedassetsController;
use App\Http\Controllers\Hr\EmployeeonboardingController;
use App\Http\Controllers\Master\CityController;
use App\Http\Controllers\Master\CountryController;
use App\Http\Controllers\Master\DepartmentController as MasterDepartmentController;
use App\Http\Controllers\Master\DistrictController;
use App\Http\Controllers\Master\FleetController;
use App\Http\Controllers\Master\HolidayTypesController;
use App\Http\Controllers\Master\NationalityController;
use App\Http\Controllers\Master\OrganizationCategoryController;
use App\Http\Controllers\Master\EmploymentSizeCategoryController;
use App\Http\Controllers\Master\JobTitleController;
use App\Http\Controllers\Master\OrganizationTypeController;
use App\Http\Controllers\Master\PolicyController;
use App\Http\Controllers\Master\StateController;
use App\Http\Controllers\Master\DepartmenttypeController;
use App\Http\Controllers\Master\ownershipController;
use App\Http\Controllers\Master\LeavetypeController;

use App\Http\Controllers\Master\AttendanceFromController;
use App\Http\Controllers\Master\TraveltypeController;


//end of master
use App\Http\Controllers\Assets\AssestCategoryController;
use App\Http\Controllers\Assets\EquipmentdemandController;
use App\Http\Controllers\Crm\LeadsController;
use App\Http\Controllers\Finance\AdvancerequestController;
use App\Http\Controllers\Finance\InvoicesController;
use App\Http\Controllers\Finance\ProposalController;
use App\Http\Controllers\Form\GeneralFormController;

use App\Http\Controllers\Hr\ComplaintsController;
use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\AppreciationController;
use App\Http\Controllers\Hr\MangeHolidayController;
use App\Http\Controllers\Hr\PromotiondemotionController;
use App\Http\Controllers\Hr\ResignationController;
use App\Http\Controllers\Hr\WarningsController;
use App\Http\Controllers\Hr\LeaveApplicationController;
use App\Http\Controllers\Inventory\GoodreceivedreconcileController;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\PurchaseentryController;
use App\Http\Controllers\Inventory\PurchaseorderController;
use App\Http\Controllers\Inventory\ServiceController;
use App\Http\Controllers\Inventory\ServicelogController;
use App\Http\Controllers\Inventory\StockreconcileController;
use App\Http\Controllers\Notice\OverviewController;
use App\Http\Controllers\Officemanagement\CashdepositeController;
use App\Http\Controllers\Officemanagement\ContractController;
use App\Http\Controllers\Officemanagement\GeneratorlogbookController;
use App\Http\Controllers\Payroll\NewpaymentController;
use App\Http\Controllers\Recruit\JobinterviewController;
use App\Http\Controllers\Recruit\JobpostController;
use App\Http\Controllers\Recruit\InterviewscheduleController;
use App\Http\Controllers\Recruit\JobapplicationController;
use App\Http\Controllers\Recruit\ExperienceletterController;
use App\Http\Controllers\Recruit\OfferletterController;
use App\Http\Controllers\Recruit\RecuritreportsController;
use App\Http\Controllers\Reports\TaskreportsController;
use App\Http\Controllers\Requisition\LeaverequestController;
use App\Http\Controllers\requisition\TravelController;
use App\Http\Controllers\requisition\RequisitiontravelController;
use App\Http\Controllers\requisition\ConvinceRequestController;
use App\Http\Controllers\requisition\CompensatoryLeaveController;
use App\Http\Controllers\Inventory\BarcodeManagementController;
use App\Http\Controllers\Hr\TransferController;

use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Superadmin\PackageController;
use App\Http\Controllers\Supplier\SuppliercategoryController;
use App\Http\Controllers\Supplier\AddsupplierController;
use App\Http\Controllers\Training\TrainerController;
use App\Http\Controllers\Training\TraininglistController;
use App\Http\Controllers\Training\TrainingtypeController;
use App\Http\Controllers\Travelfleet\FleetmanagementController;
use App\Http\Controllers\Travelfleet\FleetrequestController;
use App\Http\Controllers\Travelfleet\FleetrosterController;
use App\Http\Controllers\Travelfleet\MaintenancelogController;
use App\Http\Controllers\Travelfleet\TravelapprovalController;
use App\Http\Controllers\Travelfleet\TravelcategoryController;
use App\Http\Controllers\Travelfleet\TravelrequestController;
use App\Http\Controllers\Travelfleet\TravelslogController;
use App\Http\Controllers\Travelfleet\VehiclelogController;
use App\Http\Controllers\Work\TasksController;
use App\Http\Controllers\work\WorkProjectsController;

use App\Http\Controllers\Finance\CreditNotesController;
use App\Http\Controllers\Finance\EstimatesController;
use App\Http\Controllers\Finance\FinancePayController;
use App\Http\Controllers\Crm\ClientsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Eventsandmeetings\MeetingController;
use App\Http\Controllers\Finance\CashrequestController;
use App\Http\Controllers\Finance\ExpensesclaimController;
use App\Http\Controllers\Finance\FinanceExpensesController;
use App\Http\Controllers\Hr\AbsentReasonController;
use App\Http\Controllers\Hr\AttendenceController;
use App\Http\Controllers\Hr\DesignationController;
use App\Http\Controllers\Hr\CmsController;
use App\Http\Controllers\Hr\EmployeelistController;
use App\Http\Controllers\Hr\EmployeementtimelineController;
use App\Http\Controllers\Eventsandmeetings\EventController;
use App\Http\Controllers\Hr\ShiftrosterController;
use App\Http\Controllers\Hr\LatereasonsController;
use App\Http\Controllers\Master\ModuleController;
use App\Http\Controllers\Notice\AnnouncementController;
use App\Http\Controllers\Notice\DetailsviewController;
use App\Http\Controllers\Officemanagement\PurchaseserviceController;
use App\Http\Controllers\Settings\OrganizationSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Project\WorkfromhomeController;
use App\Http\Controllers\Reports\AttendancereportsController;
use App\Http\Controllers\Reports\ExpensesreportsController;
use App\Http\Controllers\Reports\FinancereportsController;
use App\Http\Controllers\Reports\LeavereportsController;
use App\Http\Controllers\Reports\TravelreportsController;
use App\Http\Controllers\Rostermanagement\RostercategoryController;
use App\Http\Controllers\Rostermanagement\RosterentriesController;
use App\Http\Controllers\Settings\NotificationSettingsController;
use App\Http\Controllers\Settings\OrganizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Travelfleet\DriverrosterController;
use App\Http\Controllers\Work\TimelogController;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\OrganizationSettings\OrganizationSettings;
use App\Models\User;

Route::prefix('hr')->group(function () {

    Route::prefix("latereasons")->group(function () {
        Route::get('/', [LatereasonsController::class, 'index'])->name('hr.latereasons.index')->middleware('permission:hr-latereasons-index');
        Route::get('/create', [LatereasonsController::class, 'create'])->name('hr.latereasons.create')->middleware('permission:hr-latereasons-create');
        Route::post('/store', [LatereasonsController::class, 'store'])->name('hr.latereasons.store')->middleware('permission:hr-latereasons-store');
        Route::get('/show/{id}', [LatereasonsController::class, 'show'])->name('hr.latereasons.show')->middleware('permission:hr-latereasons-show');
        Route::get('/edit/{id}', [LatereasonsController::class, 'edit'])->name('hr.latereasons.edit')->middleware('permission:hr-latereasons-edit');
        Route::put('/update/{id}', [LatereasonsController::class, 'update'])->name('hr.latereasons.update')->middleware('permission:hr-latereasons-update');
        Route::get('/destroy/{id}', [LatereasonsController::class, 'destroy'])->name('hr.latereasons.destroy')->middleware('permission:hr-latereasons-destroy');
    });

    Route::prefix("employeeonboarding")->group(function () {
        Route::get('/', [EmployeeonboardingController::class, 'index'])->name('hr.employeeonboarding.index')->middleware('permission:hr-employeeonboarding-index');
        Route::get('/create', [EmployeeonboardingController::class, 'create'])->name('hr.employeeonboarding.create')->middleware('permission:hr-employeeonboarding-create');
        Route::post('/store', [EmployeeonboardingController::class, 'store'])->name('hr.employeeonboarding.store')->middleware('permission:hr-employeeonboarding-store');
        Route::get('/show/{id}', [EmployeeonboardingController::class, 'show'])->name('hr.employeeonboarding.show')->middleware('permission:hr-employeeonboarding-show');
        Route::get('/edit/{id}', [EmployeeonboardingController::class, 'edit'])->name('hr.employeeonboarding.edit')->middleware('permission:hr-employeeonboarding-edit');
        Route::put('/update/{id}', [EmployeeonboardingController::class, 'update'])->name('hr.employeeonboarding.update')->middleware('permission:hr-employeeonboarding-update');
        Route::get('/destroy/{id}', [EmployeeonboardingController::class, 'destroy'])->name('hr.employeeonboarding.destroy')->middleware('permission:hr-employeeonboarding-destroy');
    });

    Route::prefix("employee")->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('hr.employee.index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('hr.employee.create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('hr.employee.store');
        Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('hr.employee.show');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('hr.employee.edit');
        Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('hr.employee.update');
        Route::get('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('hr.employee.destroy');
        Route::get('get-department', [EmployeeController::class, 'getHeadOfDepartment'])->name('hr.employee.getHeadOfDepartment');
        Route::get('get-department-employee', [EmployeeController::class, 'getDepartmentEmployee'])->name('hr.employee.getDepartmentEmployee');
    });


    Route::prefix("resignation")->group(function () {
        Route::get('/', [ResignationController::class, 'index'])->name('hr.resignation.index')->middleware('permission:hr-resignation-index');
        Route::get('/create', [ResignationController::class, 'create'])->name('hr.resignation.create')->middleware('permission:hr-resignation-create');
        Route::post('/store', [ResignationController::class, 'store'])->name('hr.resignation.store')->middleware('permission:hr-resignation-store');
        Route::get('/show/{id}', [ResignationController::class, 'show'])->name('hr.resignation.show')->middleware('permission:hr-resignation-show');
        Route::get('/edit/{id}', [ResignationController::class, 'edit'])->name('hr.resignation.edit')->middleware('permission:hr-resignation-edit');
        Route::put('/update/{id}', [ResignationController::class, 'update'])->name('hr.resignation.update')->middleware('permission:hr-resignation-update');
        Route::get('/destroy/{id}', [ResignationController::class, 'destroy'])->name('hr.resignation.destroy')->middleware('permission:hr-resignation-destroy');
    });

    Route::prefix("promotiondemotion")->group(function () {
        Route::get('/', [PromotiondemotionController::class, 'index'])->name('hr.promotiondemotion.index')->middleware('permission:hr-promotiondemotion-index');
        Route::get('/create', [PromotiondemotionController::class, 'create'])->name('hr.promotiondemotion.create')->middleware('permission:hr-promotiondemotion-create');
        Route::post('/store', [PromotiondemotionController::class, 'store'])->name('hr.promotiondemotion.store')->middleware('permission:hr-promotiondemotion-store');
        Route::get('/show/{id}', [PromotiondemotionController::class, 'show'])->name('hr.promotiondemotion.show')->middleware('permission:hr-promotiondemotion-show');
        Route::get('/edit/{id}', [PromotiondemotionController::class, 'edit'])->name('hr.promotiondemotion.edit')->middleware('permission:hr-promotiondemotion-edit');
        Route::put('/update/{id}', [PromotiondemotionController::class, 'update'])->name('hr.promotiondemotion.update')->middleware('permission:hr-promotiondemotion-update');
        Route::get('/destroy/{id}', [PromotiondemotionController::class, 'destroy'])->name('hr.promotiondemotion.destroy')->middleware('permission:hr-promotiondemotion-destroy');
        Route::get('get-employee-designation', [PromotiondemotionController::class, 'getEmployeeDesignation'])->name('hr.promotiondemotion.getEmployeeDesignation');

    });


    Route::prefix("mangeholiday")->group(function () {
        Route::get('/', [MangeholidayController::class, 'index'])->name('hr.mangeholiday.index')->middleware('permission:hr-mangeholiday-index');
        Route::get('/create', [MangeholidayController::class, 'create'])->name('hr.mangeholiday.create')->middleware('permission:hr-mangeholiday-create');
        Route::post('/store', [MangeholidayController::class, 'store'])->name('hr.mangeholiday.store')->middleware('permission:hr-mangeholiday-store');
        Route::get('/show/{id}', [MangeholidayController::class, 'show'])->name('hr.mangeholiday.show')->middleware('permission:hr-mangeholiday-show');
        Route::get('/edit/{id}', [MangeholidayController::class, 'edit'])->name('hr.mangeholiday.edit')->middleware('permission:hr-mangeholiday-edit');
        Route::put('/update/{id}', [MangeholidayController::class, 'update'])->name('hr.mangeholiday.update')->middleware('permission:hr-mangeholiday-update');
        Route::get('/destroy/{id}', [MangeholidayController::class, 'destroy'])->name('hr.mangeholiday.destroy')->middleware('permission:hr-mangeholiday-destroy');
    });

    Route::prefix("shiftroster")->group(function () {
        Route::get('/', [ShiftrosterController::class, 'index'])->name('hr.shiftroster.index')->middleware('permission:hr-shiftroster-index');
        Route::get('/create', [ShiftrosterController::class, 'create'])->name('hr.shiftroster.create')->middleware('permission:hr-shiftroster-create');
        Route::post('/store', [ShiftrosterController::class, 'store'])->name('hr.shiftroster.store')->middleware('permission:hr-shiftroster-store');
        Route::get('/show/{id}', [ShiftrosterController::class, 'show'])->name('hr.shiftroster.show')->middleware('permission:hr-shiftroster-show');
        Route::get('/edit/{id}', [ShiftrosterController::class, 'edit'])->name('hr.shiftroster.edit')->middleware('permission:hr-shiftroster-edit');
        Route::put('/update/{id}', [ShiftrosterController::class, 'update'])->name('hr.shiftroster.update')->middleware('permission:hr-shiftroster-update');
        Route::get('/destroy/{id}', [ShiftrosterController::class, 'destroy'])->name('hr.shiftroster.destroy')->middleware('permission:hr-shiftroster-destroy');
    });

    Route::prefix("department")->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('hr.department.index')->middleware('permission:hr-department-index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('hr.department.create')->middleware('permission:hr-department-create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('hr.department.store')->middleware('permission:hr-department-store');
        Route::get('/show/{id}', [DepartmentController::class, 'show'])->name('hr.department.show')->middleware('permission:hr-department-show');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('hr.department.edit')->middleware('permission:hr-department-edit');
        Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('hr.department.update')->middleware('permission:hr-department-update');
        Route::get('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('hr.department.destroy')->middleware('permission:hr-department-destroy');
    });


    Route::prefix("cms")->group(function () {
        Route::get('/', [CmsController::class, 'index'])->name('hr.cms.index')->middleware('permission:hr-cms-index');
        Route::get('/create', [CmsController::class, 'create'])->name('hr.cms.create')->middleware('permission:hr-cms-create');
        Route::post('/store', [CmsController::class, 'store'])->name('hr.cms.store')->middleware('permission:hr-cms-store');
        Route::get('/show/{id}', [CmsController::class, 'show'])->name('hr.cms.show')->middleware('permission:hr-cms-show');
        Route::get('/edit/{id}', [CmsController::class, 'edit'])->name('hr.cms.edit')->middleware('permission:hr-cms-edit');
        Route::put('/update/{id}', [CmsController::class, 'update'])->name('hr.cms.update')->middleware('permission:hr-cms-update');
        Route::get('/destroy/{id}', [CmsController::class, 'destroy'])->name('hr.cms.destroy')->middleware('permission:hr-cms-destroy');
    });

    Route::prefix("designation")->group(function () {
        Route::get('/', [DesignationController::class, 'index'])->name('hr.designation.index')->middleware('permission:hr-designation-index');
        Route::get('/create', [DesignationController::class, 'create'])->name('hr.designation.create')->middleware('permission:hr-designation-create');
        Route::post('/store', [DesignationController::class, 'store'])->name('hr.designation.store')->middleware('permission:hr-designation-store');
        Route::get('/show/{id}', [DesignationController::class, 'show'])->name('hr.designation.show')->middleware('permission:hr-designation-show');
        Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('hr.designation.edit')->middleware('permission:hr-designation-edit');
        Route::put('/update/{id}', [DesignationController::class, 'update'])->name('hr.designation.update')->middleware('permission:hr-designation-update');
        Route::get('/destroy/{id}', [DesignationController::class, 'destroy'])->name('hr.designation.destroy')->middleware('permission:hr-designation-destroy');
    });

    Route::prefix("leaveApplication")->group(function () {
        Route::get('/', [LeaveApplicationController::class, 'index'])->name('hr.leaveapplication.index');
        Route::get('/create', [LeaveApplicationController::class, 'create'])->name('hr.leaveapplication.create');
        Route::post('/store', [LeaveApplicationController::class, 'store'])->name('hr.leaveapplication.store');
        Route::get('/show/{id}', [LeaveApplicationController::class, 'show'])->name('hr.leaveapplication.show');
        Route::get('/edit/{id}', [LeaveApplicationController::class, 'edit'])->name('hr.leaveapplication.edit');
        Route::put('/update/{id}', [LeaveApplicationController::class, 'update'])->name('hr.leaveapplication.update');
        Route::get('/destroy/{id}', [LeaveApplicationController::class, 'destroy'])->name('hr.leaveapplication.destroy');
        Route::get('tobeapprove', [LeaveApplicationController::class, 'toApprove'])->name('hr.leaveapplication.tobeapprove');
        Route::get('tobereject', [LeaveApplicationController::class, 'toReject'])->name('hr.leaveapplication.tobereject');
        Route::get('tobeforward', [LeaveApplicationController::class, 'toForward'])->name('hr.leaveapplication.tobeforward');
    });


    Route::prefix("absentreason")->group(function () {
        Route::get('/', [AbsentreasonController::class, 'index'])->name('hr.absentreason.index')->middleware('permission:hr-absentreason-index');
        Route::get('/create', [AbsentreasonController::class, 'create'])->name('hr.absentreason.create')->middleware('permission:hr-absentreason-create');
        Route::post('/store', [AbsentreasonController::class, 'store'])->name('hr.absentreason.store')->middleware('permission:hr-absentreason-store');
        Route::get('/show/{id}', [AbsentreasonController::class, 'show'])->name('hr.absentreason.show')->middleware('permission:hr-absentreason-show');
        Route::get('/edit/{id}', [AbsentreasonController::class, 'edit'])->name('hr.absentreason.edit')->middleware('permission:hr-absentreason-edit');
        Route::put('/update/{id}', [AbsentreasonController::class, 'update'])->name('hr.absentreason.update')->middleware('permission:hr-absentreason-update');
        Route::get('/destroy/{id}', [AbsentReasonController::class, 'destroy'])->name('hr.absentreason.destroy')->middleware('permission:hr-absentreason-destroy');
    });




    Route::prefix("appreciation")->group(function () {
        Route::get('/', [AppreciationController::class, 'index'])->name('hr.appreciation.index')->middleware('permission:hr-appreciation-index');
        Route::get('/create', [AppreciationController::class, 'create'])->name('hr.appreciation.create')->middleware('permission:hr-appreciation-create');
        Route::post('/store', [AppreciationController::class, 'store'])->name('hr.appreciation.store')->middleware('permission:hr-appreciation-store');
        Route::get('/show/{id}', [AppreciationController::class, 'show'])->name('hr.appreciation.show')->middleware('permission:hr-appreciation-show');
        Route::get('/edit/{id}', [AppreciationController::class, 'edit'])->name('hr.appreciation.edit')->middleware('permission:hr-appreciation-edit');
        Route::put('/update/{id}', [AppreciationController::class, 'update'])->name('hr.appreciation.update')->middleware('permission:hr-appreciation-update');
        Route::get('/destroy/{id}', [AppreciationController::class, 'destroy'])->name('hr.appreciation.destroy')->middleware('permission:hr-appreciation-destroy');
    });
    Route::prefix("attendence")->group(function () {
        Route::get('/', [AttendenceController::class, 'index'])->name('hr.attendence.index')->middleware('permission:hr-attendence-index');
        Route::get('/create', [AttendenceController::class, 'create'])->name('hr.attendence.create')->middleware('permission:hr-attendence-create');
        Route::post('/store', [AttendenceController::class, 'store'])->name('hr.attendence.store')->middleware('permission:hr-attendence-store');
        Route::get('/show/{id}', [AttendenceController::class, 'show'])->name('hr.attendence.show')->middleware('permission:hr-attendence-show');
        Route::get('/edit/{id}', [AttendenceController::class, 'edit'])->name('hr.attendence.edit')->middleware('permission:hr-attendence-update');
        Route::put('/update/{id}', [AttendenceController::class, 'update'])->name('hr.attendence.update')->middleware('permission:hr-attendence-update');
        Route::get('/destroy/{id}', [AttendenceController::class, 'destroy'])->name('hr.attendence.destroy')->middleware('permission:hr-attendence-destroy');
        Route::post('/checkIn', [AttendenceController::class, 'checkIn'])->name('hr.attendence.checkIn');//->middleware('permission:hr-attendence-checkin');
        Route::post('/checkOut/{id}', [AttendenceController::class, 'checkOut'])->name('hr.attendence.checkOut');//->middleware('permission:hr-attendence-checkout');
        Route::get('/getAttendenceDetail', [AttendenceController::class, 'getAttendenceDetail'])->name('hr.attendence.getAttendenceDetail');//->middleware('permission:hr-attendence-checkout');
    });

    Route::prefix("complaints")->group(function () {
        Route::get('/', [ComplaintsController::class, 'index'])->name('hr.complaints.index')->middleware('permission:hr-complaints-index');
        Route::get('/create', [ComplaintsController::class, 'create'])->name('hr.complaints.create')->middleware('permission:hr-complaints-create');
        Route::post('/store', [ComplaintsController::class, 'store'])->name('hr.complaints.store')->middleware('permission:hr-complaints-store');
        Route::get('/show/{id}', [ComplaintsController::class, 'show'])->name('hr.complaints.show')->middleware('permission:hr-complaints-show');
        Route::get('/edit/{id}', [ComplaintsController::class, 'edit'])->name('hr.complaints.edit')->middleware('permission:hr-complaints-edot');
        Route::put('/update/{id}', [ComplaintsController::class, 'update'])->name('hr.complaints.update')->middleware('permission:hr-complaints-update');
        Route::get('/destroy/{id}', [ComplaintsController::class, 'destroy'])->name('hr.complaints.destroy')->middleware('permission:hr-complaints-destory');
    });


    Route::prefix("warnings")->group(function () {
        Route::get('/', [WarningsController::class, 'index'])->name('hr.warnings.index')->middleware('permission:hr-warnings-index');
        Route::get('/create', [WarningsController::class, 'create'])->name('hr.warnings.create')->middleware('permission:hr-warnings-create');
        Route::post('/store', [WarningsController::class, 'store'])->name('hr.warnings.store')->middleware('permission:hr-warnings-store');
        Route::get('/show/{id}', [WarningsController::class, 'show'])->name('hr.warnings.show')->middleware('permission:hr-warnings-show');
        Route::get('/edit/{id}', [WarningsController::class, 'edit'])->name('hr.warnings.edit')->middleware('permission:hr-warnings-edit');
        Route::put('/update/{id}', [WarningsController::class, 'update'])->name('hr.warnings.update')->middleware('permission:hr-warnings-update');
        Route::get('/destroy/{id}', [WarningsController::class, 'destroy'])->name('hr.warnings.destroy')->middleware('permission:hr-warnings-destory');
    });

    Route::prefix("transfer")->group(function () {
        Route::get('/', [TransferController::class, 'index'])->name('hr.transfer.index')->middleware('permission:hr-transfer-index');
        Route::get('/create', [TransferController::class, 'create'])->name('hr.transfer.create')->middleware('permission:hr-transfer-create');
        Route::post('/store', [TransferController::class, 'store'])->name('hr.transfer.store')->middleware('permission:hr-transfer-store');
        Route::get('/show/{id}', [TransferController::class, 'show'])->name('hr.transfer.show')->middleware('permission:hr-transfer-show');
        Route::get('/edit/{id}', [TransferController::class, 'edit'])->name('hr.transfer.edit')->middleware('permission:hr-transfer-edit');
        Route::put('/update/{id}', [TransferController::class, 'update'])->name('hr.transfer.update')->middleware('permission:hr-transfer-update');
        Route::get('/destroy/{id}', [TransferController::class, 'destroy'])->name('hr.transfer.destroy')->middleware('permission:hr-transfer-destory');
    });


    Route::prefix("attendence")->group(function () {
        Route::get('/', [AttendenceController::class, 'index'])->name('hr.attendence.index')->middleware('permission:hr-attendence-index');
        Route::get('/create', [AttendenceController::class, 'create'])->name('hr.attendence.create')->middleware('permission:hr-attendence-create');
        Route::post('/store', [AttendenceController::class, 'store'])->name('hr.attendence.store')->middleware('permission:hr-attendence-store');
        Route::get('/show/{id}', [AttendenceController::class, 'show'])->name('hr.attendence.show')->middleware('permission:hr-attendence-show');
        Route::get('/edit/{id}', [AttendenceController::class, 'edit'])->name('hr.attendence.edit')->middleware('permission:hr-attendence-edit');
        Route::put('/update/{id}', [AttendenceController::class, 'update'])->name('hr.attendence.update')->middleware('permission:hr-attendence-update');
        Route::get('/destroy/{id}', [AttendenceController::class, 'destroy'])->name('hr.attendence.destroy')->middleware('permission:hr-attendence-destory');
    });
    Route::prefix("employeelist")->group(function () {
        Route::get('/', [EmployeelistController::class, 'index'])->name('hr.employeelist.index')->middleware('permission:hr-employeelist-index');
        Route::get('/create', [EmployeelistController::class, 'create'])->name('hr.employeelist.create')->middleware('permission:hr-employeelist-create');
        Route::post('/store', [EmployeelistController::class, 'store'])->name('hr.employeelist.store')->middleware('permission:hr-employeelist-store');
        Route::get('/show/{id}', [EmployeelistController::class, 'show'])->name('hr.employeelist.show')->middleware('permission:hr-employeelist-show');
        Route::get('/edit/{id}', [EmployeelistController::class, 'edit'])->name('hr.employeelist.edit')->middleware('permission:hr-employeelist-edit');
        Route::put('/update/{id}', [EmployeelistController::class, 'update'])->name('hr.employeelist.update')->middleware('permission:hr-employeelist-update');
        Route::get('/destroy/{id}', [EmployeelistController::class, 'destroy'])->name('hr.employeelist.destroy')->middleware('permission:hr-employeelist-destory');
    });

    Route::prefix("employeementtimeline")->group(function () {
        Route::get('/', [EmployeementtimelineController::class, 'index'])->name('hr.employeementtimeline.index')->middleware('permission:hr-employeementtimeline-index');
        Route::get('/create', [Employeement::class, 'create'])->name('hr.employeementtimeline.create')->middleware('permission:hr-employeementtimeline-create');
        Route::post('/store', [EmployeementtimelineController::class, 'store'])->name('hr.employeementtimeline.store')->middleware('permission:hr-employeementtimeline-store');
        Route::get('/show/{id}', [EmployeementtimelineController::class, 'show'])->name('hr.employeementtimeline.show')->middleware('permission:hr-employeementtimeline-show');
        Route::get('/edit/{id}', [EmployeementtimelineController::class, 'edit'])->name('hr.employeementtimeline.edit')->middleware('permission:hr-employeementtimeline-edit');
        Route::put('/update/{id}', [EmployeementtimelineController::class, 'update'])->name('hr.employeementtimeline.update')->middleware('permission:hr-employeementtimeline-update');
        Route::get('/destroy/{id}', [EmployeementtimelineController::class, 'destroy'])->name('hr.employeementtimeline.destroy')->middleware('permission:hr-employeementtimeline-destroy');
    });
});
