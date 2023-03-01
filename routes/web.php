<?php
//Start of Master Controllers
use App\Http\Controllers\Assets\FixedassetsController;
use App\Http\Controllers\Hr\EmployeeonboardingController;
use App\Http\Controllers\LanguageController;
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
use App\Http\Controllers\Hr\MangeholidayController;
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
use App\Http\Controllers\Requisition\TravelController;
use App\Http\Controllers\Requisition\RequisitiontravelController;
use App\Http\Controllers\Requisition\ConvinceRequestController;
use App\Http\Controllers\Requisition\CompensatoryLeaveController;
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
use App\Http\Controllers\Work\WorkProjectsController;

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

// Route::get('/dashboard', function () {    return view('omis\welcome');});
// Route::get('permission', function () {
//     return view('omis.usermanagement.permission.index')->name('usermanagement.permission.index');
// });

Route::get('/usermanagement/permission', function () {
    return view('omis\usermanagement\permission\index');
})->name('usermanagement.index');


Route::get('/', function () {
    return redirect('/login');
});
Route::get('calander', function () {

    return view('omis.calander.index');
});



Route::middleware('auth')->group(function () {
    Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('role:super-super-admin|super-admin');

    //  Event Calendar
    Route::get('/event-calendar', [DashboardController::class, 'eventCalendar'])->name('eventcalendar');
    Route::get('/full-calendar', [DashboardController::class, 'getEvent'])->name('fetchcalendardata');
    Route::post('/calendar/saveRelocateEventStartDate',  [DashboardController::class, 'saveRelocateEventStartDate'])
    ->name('saveRelocateEventStartDate');
    Route::get('/calendar/editDeleteEventsShowData/{id}', [DashboardController::class, 'editDeleteEventsShowData'])
    ->name('editDeleteEventsShowData');
    Route::post('/calendar/updateSelectedEvent/{id}', [DashboardController::class, 'updateSelectedEvent'])
    ->name('updateSelectedEvent');
    Route::get('/calendar/deleteSelectedEvent/{id}', [DashboardController::class, 'deleteSelectedEvent'])
    ->name('deleteSelectedEvent');
    //  Event Calendar

    //  Holiday Calendar
    Route::get('/holiday-calendar', [DashboardController::class, 'holidayCalendar'])->name('holidaycalendar');
    Route::post('/holiday-calendar/saveHoliday',  [DashboardController::class, 'saveHoliday'])
    ->name('saveHoliday');
    Route::get('/holiday-calendar/editHoliday/{id}', [DashboardController::class, 'editHoliday'])
    ->name('editHoliday');
    Route::post('/holiday-calendar/updateHoliday/{id}', [DashboardController::class, 'updateHoliday'])
    ->name('updateHoliday');
    Route::get('/holiday-calendar/deleteHoliday/{id}', [DashboardController::class, 'deleteHoliday'])
    ->name('deleteHoliday');
    //  Holiday Calendar


    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::prefix("form")->group(function () {
        Route::get('/', [GeneralFormController::class, 'create'])->name('form.create');
        Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
        Route::get('/make-table-nullable', [GeneralFormController::class, 'getTableNullablecreate'])->name('table.create');
        Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
    });

    /**
     * Start of Master Routing
     */

    require __DIR__ . '/master.php';
    /**
     * End of Master Routing
     */

    Route::prefix("package")->group(function () {
        Route::get('/', [PackageController::class, 'index'])->name('superadmin.package.index');
        Route::get('/create', [PackageController::class, 'create'])->name('superadmin.package.create');
        Route::post('/store', [PackageController::class, 'store'])->name('superadmin.package.store');
        Route::get('/show/{id}', [PackageController::class, 'show'])->name('superadmin.package.show');
        Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('superadmin.package.edit');
        Route::put('/update/{id}', [PackageController::class, 'update'])->name('superadmin.package.update');
        Route::get('/destroy/{id}', [PackageController::class, 'destroy'])->name('superadmin.package.destroy');
    });



    /** settings */

    Route::prefix("settings")->group(
        function () {
            Route::prefix("organization")->group(function () {
                Route::get('/', [OrganizationController::class, 'index'])->name('settings.organization.index')->middleware('permission:settings-organization-index');
                Route::get('/create', [OrganizationController::class, 'create'])->name('settings.organization.create')->middleware('permission:settings-organization-create');
                Route::post('/store', [OrganizationController::class, 'store'])->name('settings.organization.store')->middleware('permission:settings-organization-store');
                Route::get('/show/{id}', [OrganizationController::class, 'show'])->name('settings.organization.show')->middleware('permission:settings-organization-show');
                Route::get('/edit/{id}', [OrganizationController::class, 'edit'])->name('settings.organization.edit')->middleware('permission:settings-organization-edit');
                Route::put('/update/{id}', [OrganizationController::class, 'update'])->name('settings.organization.update')->middleware('permission:settings-organization-update');
                Route::get('/destroy/{id}', [OrganizationController::class, 'destroy'])->name('settings.organization.destroy')->middleware('permission:settings-organization-destroy');
            });

        Route::get('organizationsettings', [OrganizationSettingsController::class, 'index'])->name('settings.organizationsettings.index')->middleware('permission:settings-organizationsettings-index');
        Route::put('organizationsettings/update', [OrganizationSettingsController::class, 'update'])->name('settings.organizationsettings.update')->middleware('permission:settings-organizationsettings-update');
        Route::put('notificationsettings/update', [NotificationSettingsController::class, 'update'])->name('settings.notificationsettings.update')->middleware('permission:settings-notificationsettings-update');
    });

    /**
     * Start of hr routing
     */
    require __DIR__ . '/hr.php';

    /**
     * End of hr routing
     */

    Route::prefix("supplier")->group(
        function () {
            Route::prefix("suppliercategory")->group(function () {
                Route::get('/', [SuppliercategoryController::class, 'index'])->name('supplier.suppliercategory.index')->middleware('permission:supplier-suppliercategory-index');
                Route::get('/create', [SuppliercategoryController::class, 'create'])->name('supplier.suppliercategory.create')->middleware('permission:supplier-suppliercategory-create');
                Route::post('/store', [SuppliercategoryController::class, 'store'])->name('supplier.suppliercategory.store')->middleware('permission:supplier-suppliercategory-store');
                Route::get('/show/{id}', [SuppliercategoryController::class, 'show'])->name('supplier.suppliercategory.show')->middleware('permission:supplier-suppliercategory-show');
                Route::get('/edit/{id}', [SuppliercategoryController::class, 'edit'])->name('supplier.suppliercategory.edit')->middleware('permission:supplier-suppliercategory-edit');
                Route::put('/update/{id}', [SuppliercategoryController::class, 'update'])->name('supplier.suppliercategory.update')->middleware('permission:supplier-suppliercategory-update');
                Route::get('/destroy/{id}', [SuppliercategoryController::class, 'destroy'])->name('supplier.suppliercategory.destroy')->middleware('permission:supplier-suppliercategory-destroy');
            });
            Route::prefix("addsupplier")->group(function () {
                Route::get('/', [AddsupplierController::class, 'index'])->name('supplier.addsupplier.index')->middleware('permission:supplier-addsupplier-index');
                Route::get('/create', [AddsupplierController::class, 'create'])->name('supplier.addsupplier.create')->middleware('permission:supplier-addsupplier-create');
                Route::post('/store', [AddsupplierController::class, 'store'])->name('supplier.addsupplier.store')->middleware('permission:supplier-addsupplier-store');
                Route::get('/show/{id}', [AddsupplierController::class, 'show'])->name('supplier.addsupplier.show')->middleware('permission:supplier-addsupplier-show');
                Route::get('/edit/{id}', [AddsupplierController::class, 'edit'])->name('supplier.addsupplier.edit')->middleware('permission:supplier-addsupplier-edit');
                Route::put('/update/{id}', [AddsupplierController::class, 'update'])->name('supplier.addsupplier.update')->middleware('permission:supplier-addsupplier-update');
                Route::get('/destroy/{id}', [AddsupplierController::class, 'destroy'])->name('supplier.addsupplier.destroy')->middleware('permission:supplier-addsupplier-destroy');
            });
        }
    );

    Route::prefix("recruit")->group(
        function () {
            Route::prefix("jobinterview")->group(function () {
                Route::get('/', [JobinterviewController::class, 'index'])->name('recruit.jobinterview.index')->middleware('permission:recruit-jobinterview-index');
                Route::get('/create', [JobinterviewController::class, 'create'])->name('recruit.jobinterview.create')->middleware('permission:recruit-jobinterview-create');
                Route::post('/store', [JobinterviewController::class, 'store'])->name('recruit.jobinterview.store')->middleware('permission:recruit-jobinterview-store');
                Route::get('/show/{id}', [JobinterviewController::class, 'show'])->name('recruit.jobinterview.show')->middleware('permission:recruit-jobinterview-show');
                Route::get('/edit/{id}', [JobinterviewController::class, 'edit'])->name('recruit.jobinterview.edit')->middleware('permission:recruit-jobinterview-edit');
                Route::put('/update/{id}', [JobinterviewController::class, 'update'])->name('recruit.jobinterview.update')->middleware('permission:recruit-jobinterview-update');
                Route::get('/destroy/{id}', [JobinterviewController::class, 'destroy'])->name('recruit.jobinterview.destroy')->middleware('permission:recruit-jobinterview-destroy');
            });
            Route::prefix("recuritreports")->group(function () {
                Route::get('/', [RecuritreportsController::class, 'index'])->name('recruit.recuritreports.index')->middleware('permission:recruit-recuritreports-index');
                Route::get('/create', [RecuritreportsController::class, 'create'])->name('recruit.recuritreports.create')->middleware('permission:recruit-recuritreports-create');
                Route::post('/store', [RecuritreportsController::class, 'store'])->name('recruit.recuritreports.store')->middleware('permission:recruit-recuritreports-store');
                Route::get('/show/{id}', [RecuritreportsController::class, 'show'])->name('recruit.recuritreports.show')->middleware('permission:recruit-recuritreports-show');
                Route::get('/edit/{id}', [RecuritreportsController::class, 'edit'])->name('recruit.recuritreports.edit')->middleware('permission:recruit-recuritreports-edit');
                Route::put('/update/{id}', [RecuritreportsController::class, 'update'])->name('recruit.recuritreports.update')->middleware('permission:recruit-recuritreports-update');
                Route::get('/destroy/{id}', [RecuritreportsController::class, 'destroy'])->name('recruit.recuritreports.destroy')->middleware('permission:recruit-recuritreports-destroy');
            });

            Route::prefix("experienceletter")->group(function () {
                Route::get('/', [ExperienceletterController::class, 'index'])->name('recruit.experienceletter.index')->middleware('permission:recruit-experienceletter-index');
                Route::get('/create', [ExperienceletterController::class, 'create'])->name('recruit.experienceletter.create')->middleware('permission:recruit-experienceletter-create');
                Route::post('/store', [ExperienceletterController::class, 'store'])->name('recruit.experienceletter.store')->middleware('permission:recruit-experienceletter-store');
                Route::get('/show/{id}', [ExperienceletterController::class, 'show'])->name('recruit.experienceletter.show')->middleware('permission:recruit-experienceletter-show');
                Route::get('/edit/{id}', [ExperienceletterController::class, 'edit'])->name('recruit.experienceletter.edit')->middleware('permission:recruit-experienceletter-edit');
                Route::put('/update/{id}', [ExperienceletterController::class, 'update'])->name('recruit.experienceletter.update')->middleware('permission:recruit-experienceletter-update');
                Route::get('/destroy/{id}', [ExperienceletterController::class, 'destroy'])->name('recruit.experienceletter.destroy')->middleware('permission:recruit-experienceletter-destroy');
            });

            Route::prefix("offerletter")->group(function () {
                Route::get('/', [OfferletterController::class, 'index'])->name('recruit.offerletter.index')->middleware('permission:recruit-offerletter-index');
                Route::get('/create', [OfferletterController::class, 'create'])->name('recruit.offerletter.create')->middleware('permission:recruit-offerletter-create');
                Route::post('/store', [OfferletterController::class, 'store'])->name('recruit.offerletter.store')->middleware('permission:recruit-offerletter-store');
                Route::get('/show/{id}', [OfferletterController::class, 'show'])->name('recruit.offerletter.show')->middleware('permission:recruit-offerletter-show');
                Route::get('/edit/{id}', [OfferletterController::class, 'edit'])->name('recruit.offerletter.edit')->middleware('permission:recruit-offerletter-edit');
                Route::put('/update/{id}', [OfferletterController::class, 'update'])->name('recruit.offerletter.update')->middleware('permission:recruit-offerletter-update');
                Route::get('/destroy/{id}', [OfferletterController::class, 'destroy'])->name('recruit.offerletter.destroy')->middleware('permission:recruit-offerletter-destroy');
            });

            Route::prefix("jobpost")->group(function () {
                Route::get('/', [JobpostController::class, 'index'])->name('recruit.jobpost.index')->middleware('permission:recruit-jobpost-index');
                Route::get('/create', [JobpostController::class, 'create'])->name('recruit.jobpost.create')->middleware('permission:recruit-jobpost-create');
                Route::post('/store', [JobpostController::class, 'store'])->name('recruit.jobpost.store')->middleware('permission:recruit-jobpost-store');
                Route::get('/show/{id}', [JobpostController::class, 'show'])->name('recruit.jobpost.show')->middleware('permission:recruit-jobpost-show');
                Route::get('/edit/{id}', [JobpostController::class, 'edit'])->name('recruit.jobpost.edit')->middleware('permission:recruit-jobpost-edit');
                Route::put('/update/{id}', [JobpostController::class, 'update'])->name('recruit.jobpost.update')->middleware('permission:recruit-jobpost-update');
                Route::get('/destroy/{id}', [JobpostController::class, 'destroy'])->name('recruit.jobpost.destroy')->middleware('permission:recruit-jobpost-destroy');
            });
            Route::prefix("jobapplication")->group(function () {
                Route::get('/', [JobapplicationController::class, 'index'])->name('recruit.jobapplication.index')->middleware('permission:recruit-jobapplication-index');
                Route::get('/create', [JobapplicationController::class, 'create'])->name('recruit.jobapplication.create')->middleware('permission:recruit-jobapplication-create');
                Route::post('/store', [JobapplicationController::class, 'store'])->name('recruit.jobapplication.store')->middleware('permission:recruit-jobapplication-store');
                Route::get('/show/{id}', [JobapplicationController::class, 'show'])->name('recruit.jobapplication.show')->middleware('permission:recruit-jobapplication-show');
                Route::get('/edit/{id}', [JobapplicationController::class, 'edit'])->name('recruit.jobapplication.edit')->middleware('permission:recruit-jobapplication-edit');
                Route::put('/update/{id}', [JobapplicationController::class, 'update'])->name('recruit.jobapplication.update')->middleware('permission:recruit-jobapplication-update');
                Route::get('/destroy/{id}', [JobapplicationController::class, 'destroy'])->name('recruit.jobapplication.destroy')->middleware('permission:recruit-jobapplication-destroy');
            });
            Route::prefix("interviewschedule")->group(function () {
                Route::get('/', [InterviewscheduleController::class, 'index'])->name('recruit.interviewschedule.index')->middleware('permission:recruit-interviewschedule-index');
                Route::get('/create', [InterviewscheduleController::class, 'create'])->name('recruit.interviewschedule.create')->middleware('permission:recruit-interviewschedule-create');
                Route::post('/store', [InterviewscheduleController::class, 'store'])->name('recruit.interviewschedule.store')->middleware('permission:recruit-interviewschedule-store');
                Route::get('/show/{id}', [InterviewscheduleController::class, 'show'])->name('recruit.interviewschedule.show')->middleware('permission:recruit-interviewschedule-show');
                Route::get('/edit/{id}', [InterviewscheduleController::class, 'edit'])->name('recruit.interviewschedule.edit')->middleware('permission:recruit-interviewschedule-edit');
                Route::put('/update/{id}', [InterviewscheduleController::class, 'update'])->name('recruit.interviewschedule.update')->middleware('permission:recruit-interviewschedule-update');
                Route::get('/destroy/{id}', [InterviewscheduleController::class, 'destroy'])->name('recruit.interviewschedule.destroy')->middleware('permission:recruit-interviewschedule-destroy');
            });
        }
    );

    Route::prefix("inventory")->group(
        function () {
            Route::prefix("product")->group(function () {
                Route::get('/', [ProductController::class, 'index'])->name('inventory.product.index')->middleware('permission:inventory-product-index');
                Route::get('/create', [ProductController::class, 'create'])->name('inventory.product.create')->middleware('permission:inventory-product-create');
                Route::post('/store', [ProductController::class, 'store'])->name('inventory.product.store')->middleware('permission:inventory-product-store');
                Route::get('/show/{id}', [ProductController::class, 'show'])->name('inventory.product.show')->middleware('permission:inventory-product-showy');
                Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('inventory.product.edit')->middleware('permission:inventory-product-edit');
                Route::put('/update/{id}', [ProductController::class, 'update'])->name('inventory.product.update')->middleware('permission:inventory-product-update');
                Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('inventory.product.destroy')->middleware('permission:inventory-product-destroy');
            });


            Route::prefix("purchaseorder")->group(function () {
                Route::get('/', [PurchaseorderController::class, 'index'])->name('inventory.purchaseorder.index')->middleware('permission:inventory-purchaseorder-index');
                Route::get('/create', [PurchaseorderController::class, 'create'])->name('inventory.purchaseorder.create')->middleware('permission:inventory-purchaseorder-create');
                Route::post('/store', [PurchaseorderController::class, 'store'])->name('inventory.purchaseorder.store')->middleware('permission:inventory-purchaseorder-store');
                Route::get('/show/{id}', [PurchaseorderController::class, 'show'])->name('inventory.purchaseorder.show')->middleware('permission:inventory-purchaseorder-show');
                Route::get('/edit/{id}', [PurchaseorderController::class, 'edit'])->name('inventory.purchaseorder.edit')->middleware('permission:inventory-purchaseorder-edit');
                Route::put('/update/{id}', [PurchaseorderController::class, 'update'])->name('inventory.purchaseorder.update')->middleware('permission:inventory-purchaseorder-update');
                Route::get('/destroy/{id}', [PurchaseorderController::class, 'destroy'])->name('inventory.purchaseorder.destroy')->middleware('permission:inventory-purchaseorder-destroy');
            });

            Route::prefix("servicelog")->group(function () {
                Route::get('/', [ServicelogController::class, 'index'])->name('inventory.servicelog.index')->middleware('permission:inventory-servicelog-index');
                Route::get('/create', [ServicelogController::class, 'create'])->name('inventory.servicelog.create')->middleware('permission:inventory-servicelog-create');
                Route::post('/store', [ServicelogController::class, 'store'])->name('inventory.servicelog.store')->middleware('permission:inventory-servicelog-store');
                Route::get('/show/{id}', [ServicelogController::class, 'show'])->name('inventory.servicelog.show')->middleware('permission:inventory-servicelog-show');
                Route::get('/edit/{id}', [ServicelogController::class, 'edit'])->name('inventory.servicelog.edit')->middleware('permission:inventory-servicelog-edit');
                Route::put('/update/{id}', [ServicelogController::class, 'update'])->name('inventory.servicelog.update')->middleware('permission:inventory-servicelog-update');
                Route::get('/destroy/{id}', [ServicelogController::class, 'destroy'])->name('inventory.servicelog.destroy')->middleware('permission:inventory-servicelog-destroy');
            });

            Route::prefix("stockreconcile")->group(function () {
                Route::get('/', [StockreconcileController::class, 'index'])->name('inventory.stockreconcile.index')->middleware('permission:inventory-stockreconcile-index');
                Route::get('/create', [StockreconcileController::class, 'create'])->name('inventory.stockreconcile.create')->middleware('permission:inventory-stockreconcile-create');
                Route::post('/store', [StockreconcileController::class, 'store'])->name('inventory.stockreconcile.store')->middleware('permission:inventory-stockreconcile-store');
                Route::get('/show/{id}', [StockreconcileController::class, 'show'])->name('inventory.stockreconcile.show')->middleware('permission:inventory-stockreconcile-show');
                Route::get('/edit/{id}', [StockreconcileController::class, 'edit'])->name('inventory.stockreconcile.edit')->middleware('permission:inventory-stockreconcile-edit');
                Route::put('/update/{id}', [StockreconcileController::class, 'update'])->name('inventory.stockreconcile.update')->middleware('permission:inventory-stockreconcile-update');
                Route::get('/destroy/{id}', [StockreconcileController::class, 'destroy'])->name('inventory.stockreconcile.destroy')->middleware('permission:inventory-stockreconcile-destroy');
            });
            Route::prefix("purchaseentry")->group(function () {
                Route::get('/', [PurchaseentryController::class, 'index'])->name('inventory.purchaseentry.index')->middleware('permission:inventory-purchaseentry-index');
                Route::get('/create', [PurchaseentryController::class, 'create'])->name('inventory.purchaseentry.create')->middleware('permission:inventory-purchaseentry-create');
                Route::post('/store', [PurchaseentryController::class, 'store'])->name('inventory.purchaseentry.store')->middleware('permission:inventory-purchaseentry-store');
                Route::get('/show/{id}', [PurchaseentryController::class, 'show'])->name('inventory.purchaseentry.show')->middleware('permission:inventory-purchaseentry-show');
                Route::get('/edit/{id}', [PurchaseentryController::class, 'edit'])->name('inventory.purchaseentry.edit')->middleware('permission:inventory-purchaseentry-edit');
                Route::put('/update/{id}', [PurchaseentryController::class, 'update'])->name('inventory.purchaseentry.update')->middleware('permission:inventory-purchaseentry-update');
                Route::get('/destroy/{id}', [PurchaseentryController::class, 'destroy'])->name('inventory.purchaseentry.destroy')->middleware('permission:inventory-purchaseentry-destroy');
            });

            Route::prefix("service")->group(function () {
                Route::get('/', [ServiceController::class, 'index'])->name('inventory.service.index')->middleware('permission:inventory-service-index');
                Route::get('/create', [ServiceController::class, 'create'])->name('inventory.service.create')->middleware('permission:inventory-service-create');
                Route::post('/store', [ServiceController::class, 'store'])->name('inventory.service.store')->middleware('permission:inventory-service-store');
                Route::get('/show/{id}', [ServiceController::class, 'show'])->name('inventory.service.show')->middleware('permission:inventory-service-show');
                Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('inventory.service.edit')->middleware('permission:inventory-service-edit');
                Route::put('/update/{id}', [ServiceController::class, 'update'])->name('inventory.service.update')->middleware('permission:inventory-service-update');
                Route::get('/destroy/{id}', [ServiceController::class, 'destroy'])->name('inventory.service.destroy')->middleware('permission:inventory-service-destroy');
            });


            Route::prefix("barcodemanagement")->group(function () {
                Route::get('/', [BarcodemanagementController::class, 'index'])->name('inventory.barcodemanagement.index')->middleware('permission:inventory-barcodemanagement-index');
                Route::get('/create', [BarcodemanagementController::class, 'create'])->name('inventory.barcodemanagement.create')->middleware('permission:inventory-barcodemanagement-create');
                Route::post('/store', [BarcodemanagementController::class, 'store'])->name('inventory.barcodemanagement.store')->middleware('permission:inventory-barcodemanagement-store');
                Route::get('/show/{id}', [BarcodemanagementController::class, 'show'])->name('inventory.barcodemanagement.show')->middleware('permission:inventory-barcodemanagement-show');
                Route::get('/edit/{id}', [BarcodemanagementController::class, 'edit'])->name('inventory.barcodemanagement.edit')->middleware('permission:inventory-barcodemanagement-edit');
                Route::put('/update/{id}', [BarcodemanagementController::class, 'update'])->name('inventory.barcodemanagement.update')->middleware('permission:inventory-barcodemanagement-update');
                Route::get('/destroy/{id}', [BarcodemanagementController::class, 'destroy'])->name('inventory.barcodemanagement.destroy')->middleware('permission:inventory-barcodemanagement-destroy');
            });


            Route::prefix("goodreceivedreconcile")->group(function () {
                Route::get('/', [GoodreceivedreconcileController::class, 'index'])->name('inventory.goodreceivedreconcile.index')->middleware('permission:inventory-goodreceivedreconcile-index');
                Route::get('/create', [GoodreceivedreconcileController::class, 'create'])->name('inventory.goodreceivedreconcile.create')->middleware('permission:inventory-goodreceivedreconcile-create');
                Route::post('/store', [GoodreceivedreconcileController::class, 'store'])->name('inventory.goodreceivedreconcile.store')->middleware('permission:inventory-goodreceivedreconcile-store');
                Route::get('/show/{id}', [GoodreceivedreconcileController::class, 'show'])->name('inventory.goodreceivedreconcile.show')->middleware('permission:inventory-goodreceivedreconcile-show');
                Route::get('/edit/{id}', [GoodreceivedreconcileController::class, 'edit'])->name('inventory.goodreceivedreconcile.edit')->middleware('permission:inventory-goodreceivedreconcile-edit');
                Route::put('/update/{id}', [GoodreceivedreconcileController::class, 'update'])->name('inventory.goodreceivedreconcile.update')->middleware('permission:inventory-goodreceivedreconcile-update');
                Route::get('/destroy/{id}', [GoodreceivedreconcileController::class, 'destroy'])->name('inventory.goodreceivedreconcile.destroy')->middleware('permission:inventory-goodreceivedreconcile-destroy');
            });
        }
    );

    Route::prefix("Crm")->group(
        function () {
            Route::prefix("clients")->group(function () {
                Route::get('/', [ClientsController::class, 'index'])->name('crm.clients.index')->middleware('permission:crm-clients-index');
                Route::get('/create', [ClientsController::class, 'create'])->name('crm.clients.create')->middleware('permission:crm-clients-create');
                Route::post('/store', [ClientsController::class, 'store'])->name('crm.clients.store')->middleware('permission:crm-clients-store');
                Route::get('/show/{id}', [ClientsController::class, 'show'])->name('crm.clients.show')->middleware('permission:crm-clients-show');
                Route::get('/edit/{id}', [ClientsController::class, 'edit'])->name('crm.clients.edit')->middleware('permission:crm-clients-edit');
                Route::put('/update/{id}', [ClientsController::class, 'update'])->name('crm.clients.update')->middleware('permission:crm-clients-update');
                Route::get('/destroy/{id}', [ClientsController::class, 'destroy'])->name('crm.clients.destroy')->middleware('permission:crm-clients-destroy');
            });
            Route::prefix("leads")->group(function () {
                Route::get('/', [LeadsController::class, 'index'])->name('crm.leads.index')->middleware('permission:crm-leads-index');
                Route::get('/create', [LeadsController::class, 'create'])->name('crm.leads.create')->middleware('permission:crm-leads-create');
                Route::post('/store', [LeadsController::class, 'store'])->name('crm.leads.store')->middleware('permission:crm-leads-store');
                Route::get('/show/{id}', [LeadsController::class, 'show'])->name('crm.leads.show')->middleware('permission:crm-leads-show');
                Route::get('/edit/{id}', [LeadsController::class, 'edit'])->name('crm.leads.edit')->middleware('permission:crm-leads-edit');
                Route::put('/update/{id}', [LeadsController::class, 'update'])->name('crm.leads.update')->middleware('permission:crm-leads-update');
                Route::get('/destroy/{id}', [LeadsController::class, 'destroy'])->name('crm.leads.destroy')->middleware('permission:crm-leads-destroy');
            });
        }
    );





    Route::prefix("notice")->group(
        function () {
            Route::prefix("announcement")->group(function () {
                Route::get('/', [AnnouncementController::class, 'index'])->name('notice.announcement.index')->middleware('permission:notice-announcement-index');
                Route::get('/create', [AnnouncementController::class, 'create'])->name('notice.announcement.create')->middleware('permission:notice-announcement-create');
                Route::post('/store', [AnnouncementController::class, 'store'])->name('notice.announcement.store')->middleware('permission:notice-announcement-store');
                Route::get('/show/{id}', [AnnouncementController::class, 'show'])->name('notice.announcement.show')->middleware('permission:notice-announcement-show');
                Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('notice.announcement.edit')->middleware('permission:notice-announcement-edit');
                Route::put('/update/{id}', [AnnouncementController::class, 'update'])->name('notice.announcement.update')->middleware('permission:notice-announcement-update');
                Route::get('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('notice.announcement.destroy')->middleware('permission:notice-announcement-destroy');
            });


            Route::prefix("overview")->group(function () {
                Route::get('/', [OverviewController::class, 'index'])->name('notice.overview.index')->middleware('permission:notice-overview-index');
                Route::get('/create', [OverviewController::class, 'create'])->name('notice.overview.create')->middleware('permission:notice-overview-create');
                Route::post('/store', [OverviewController::class, 'store'])->name('notice.overview.store')->middleware('permission:notice-overview-store');
                Route::get('/show/{id}', [OverviewController::class, 'show'])->name('notice.overview.show')->middleware('permission:notice-overview-show');
                Route::get('/edit/{id}', [OverviewController::class, 'edit'])->name('notice.overview.edit')->middleware('permission:notice-overview-edit');
                Route::put('/update/{id}', [OverviewController::class, 'update'])->name('notice.overview.update')->middleware('permission:notice-overview-update');
                Route::get('/destroy/{id}', [OverviewController::class, 'destroy'])->name('notice.overview.destroy')->middleware('permission:notice-overview-destroy');
            });


            Route::prefix("detailsview")->group(function () {
                Route::get('/', [DetailsviewController::class, 'index'])->name('notice.detailsview.index')->middleware('permission:notice-detailsview-index');
                Route::get('/create', [DetailsviewController::class, 'create'])->name('notice.detailsview.create')->middleware('permission:notice-detailsview-create');
                Route::post('/store', [DetailsviewController::class, 'store'])->name('notice.detailsview.store')->middleware('permission:notice-detailsview-store');
                Route::get('/show/{id}', [DetailsviewController::class, 'show'])->name('notice.detailsview.show')->middleware('permission:notice-detailsview-show');
                Route::get('/edit/{id}', [DetailsviewController::class, 'edit'])->name('notice.detailsview.edit')->middleware('permission:notice-detailsview-edit');
                Route::put('/update/{id}', [DetailsviewController::class, 'update'])->name('notice.detailsview.update')->middleware('permission:notice-detailsview-update');
                Route::get('/destroy/{id}', [DetailsviewController::class, 'destroy'])->name('notice.detailsview.destroy')->middleware('permission:notice-detailsview-destroy');
            });
        }
    );




    Route::prefix("assets")->group(
        function () {
            Route::prefix("assestCategory")->group(function () {
                Route::get('/', [AssestCategoryController::class, 'index'])->name('assets.assestcategory.index')->middleware('permission:assets-assestcategory-index');
                Route::get('/create', [AssestCategoryController::class, 'create'])->name('assets.assestcategory.create')->middleware('permission:assets-assestcategory-create');
                Route::post('/store', [AssestCategoryController::class, 'store'])->name('assets.assestcategory.store')->middleware('permission:assets-assestcategory-store');
                Route::get('/show/{id}', [AssestCategoryController::class, 'show'])->name('assets.assestcategory.show')->middleware('permission:assets-assestcategory-show');
                Route::get('/edit/{id}', [AssestCategoryController::class, 'edit'])->name('assets.assestcategory.edit')->middleware('permission:assets-assestcategory-edit');
                Route::put('/update/{id}', [AssestCategoryController::class, 'update'])->name('assets.assestcategory.update')->middleware('permission:assets-assestcategory-update');
                Route::get('/destroy/{id}', [AssestCategoryController::class, 'destroy'])->name('assets.assestcategory.destroy')->middleware('permission:assets-assestcategory-destroy');
            });


            Route::prefix("fixedassets")->group(function () {
                Route::get('/', [FixedassetsController::class, 'index'])->name('assets.fixedassets.index')->middleware('permission:assets-fixedassets-index');
                Route::get('/create', [FixedassetsController::class, 'create'])->name('assets.fixedassets.create')->middleware('permission:assets-fixedassets-create');
                Route::post('/store', [FixedassetsController::class, 'store'])->name('assets.fixedassets.store')->middleware('permission:assets-fixedassets-store');
                Route::get('/show/{id}', [FixedassetsController::class, 'show'])->name('assets.fixedassets.show')->middleware('permission:assets-fixedassets-show');
                Route::get('/edit/{id}', [FixedassetsController::class, 'edit'])->name('assets.fixedassets.edit')->middleware('permission:assets-fixedassets-edit');
                Route::put('/update/{id}', [FixedassetsController::class, 'update'])->name('assets.fixedassets.update')->middleware('permission:assets-fixedassets-update');
                Route::get('/destroy/{id}', [FixedassetsController::class, 'destroy'])->name('assets.fixedassets.destroy')->middleware('permission:assets-fixedassets-destroy');
            });


            Route::prefix("equipmentdemand")->group(function () {
                Route::get('/', [EquipmentdemandController::class, 'index'])->name('assets.equipmentdemand.index')->middleware('permission:assets-equipmentdemand-index');
                Route::get('/create', [EquipmentdemandController::class, 'create'])->name('assets.equipmentdemand.create')->middleware('permission:assets-equipmentdemand-create');
                Route::post('/store', [EquipmentdemandController::class, 'store'])->name('assets.equipmentdemand.store')->middleware('permission:assets-equipmentdemand-store');
                Route::get('/show/{id}', [EquipmentdemandController::class, 'show'])->name('assets.equipmentdemand.show')->middleware('permission:assets-equipmentdemand-show');
                Route::get('/edit/{id}', [EquipmentdemandController::class, 'edit'])->name('assets.equipmentdemand.edit')->middleware('permission:assets-equipmentdemand-edit');
                Route::put('/update/{id}', [EquipmentdemandController::class, 'update'])->name('assets.equipmentdemand.update')->middleware('permission:assets-equipmentdemand-update');
                Route::get('/destroy/{id}', [EquipmentdemandController::class, 'destroy'])->name('assets.equipmentdemand.destroy')->middleware('permission:assets-equipmentdemand-destroy');
            });
        }
    );

    Route::prefix("dictonary")->group(
        function () {
            Route::get('/', [DictonaryController::class, 'index'])->middleware('permission:assets-dictonary-index');
            Route::get('/add', [DictonaryController::class, 'create'])->middleware('permission:assets-dictonary-create');
            Route::get('/view', [DictonaryController::class, 'view'])->middleware('permission:assets-dictonary-view');
            Route::post('/store', [DictonaryController::class, 'store'])->middleware('permission:assets-dictonary-store');
            Route::get('/edit/{id}', [DictonaryController::class, 'edit'])->middleware('permission:assets-dictonary-edit');
            Route::post('/update/{id}', [DictonaryController::class, 'update'])->middleware('permission:assets-dictonary-update');
            Route::get('/destroy/{id}', [DictonaryController::class, 'destroy'])->middleware('permission:assets-dictonary-destroy');
        }
    );







    // Route::prefix("department")->group(function () {
    //     Route::get('/', [DepartmentController::class, 'index']);
    //     Route::get('/add', [DepartmentController::class, 'create']);
    //     Route::get('/view', [DepartmentController::class, 'view']);
    //     Route::post('/store', [DepartmentController::class, 'store']);
    //     Route::get('/edit/{id}', [DepartmentController::class, 'edit']);
    //     Route::post('/update/{id}', [DepartmentController::class, 'update']);
    //     Route::get('/destroy/{id}', [DepartmentController::class, 'destroy']);
    // });


    // Route::get('/settings/{name?}', [SettingController::class, 'master'])->where('name', '(.*)');


    // End Settings Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix("requisition")->group(
        function () {
            Route::prefix("leaverequest")->group(function () {
                Route::get('/', [LeaverequestController::class, 'index'])->name('requisition.leaverequest.index')->middleware('permission:requisition-leaverequest-index');
                Route::get('/create', [LeaverequestController::class, 'create'])->name('requisition.leaverequest.create')->middleware('permission:requisition-leaverequest-create');
                Route::post('/store', [LeaverequestController::class, 'store'])->name('requisition.leaverequest.store')->middleware('permission:requisition-leaverequest-store');
                Route::get('/show/{id}', [LeaverequestController::class, 'show'])->name('requisition.leaverequest.show')->middleware('permission:requisition-leaverequest-show');
                Route::get('/edit/{id}', [LeaverequestController::class, 'edit'])->name('requisition.leaverequest.edit')->middleware('permission:requisition-leaverequest-edit');
                Route::put('/update/{id}', [LeaverequestController::class, 'update'])->name('requisition.leaverequest.update')->middleware('permission:requisition-leaverequest-update');
                Route::get('/destroy/{id}', [LeaverequestController::class, 'destroy'])->name('requisition.leaverequest.destroy')->middleware('permission:requisition-leaverequest-destroy');
            });

            Route::prefix("travel")->group(function () {
                Route::get('/', [TravelController::class, 'index'])->name('requisition.travel.index')->middleware('permission:requisition-travel-index');
                Route::get('/create', [TravelController::class, 'create'])->name('requisition.travel.create')->middleware('permission:requisition-travel-create');
                Route::post('/store', [TravelController::class, 'store'])->name('requisition.travel.store')->middleware('permission:requisition-travel-store');
                Route::get('/show/{id}', [TravelController::class, 'show'])->name('requisition.travel.show')->middleware('permission:requisition-travel-show');
                Route::get('/edit/{id}', [TravelController::class, 'edit'])->name('requisition.travel.edit')->middleware('permission:requisition-travel-edit');
                Route::put('/update/{id}', [TravelController::class, 'update'])->name('requisition.travel.update')->middleware('permission:requisition-travel-update');
                Route::get('/destroy/{id}', [TravelController::class, 'destroy'])->name('requisition.travel.destroy')->middleware('permission:requisition-travel-destroy');
            });

            Route::prefix("requisitiontravel")->group(function () {
                Route::get('/', [RequisitiontravelController::class, 'index'])->name('requisition.requisitiontravel.index')->middleware('permission:requisition-requisitiontravel-index');
                Route::get('/create', [RequisitiontravelController::class, 'create'])->name('requisition.requisitiontravel.create')->middleware('permission:requisition-requisitiontravel-create');
                Route::post('/store', [RequisitiontravelController::class, 'store'])->name('requisition.requisitiontravel.store')->middleware('permission:requisition-requisitiontravel-store');
                Route::get('/show/{id}', [RequisitiontravelController::class, 'show'])->name('requisition.requisitiontravel.show')->middleware('permission:requisition-requisitiontravel-show');
                Route::get('/edit/{id}', [RequisitiontravelController::class, 'edit'])->name('requisition.requisitiontravel.edit')->middleware('permission:requisition-requisitiontravel-edit');
                Route::put('/update/{id}', [RequisitiontravelController::class, 'update'])->name('requisition.requisitiontravel.update')->middleware('permission:requisition-requisitiontravel-update');
                Route::get('/destroy/{id}', [RequisitiontravelController::class, 'destroy'])->name('requisition.requisitiontravel.destroy')->middleware('permission:requisition-requisitiontravel-destroy');
            });
            Route::prefix("convinceRequest")->group(function () {
                Route::get('/', [ConvinceRequestController::class, 'index'])->name('requisition.convincerequest.index')->middleware('permission:requisition-convincerequest-index');
                Route::get('/create', [ConvinceRequestController::class, 'create'])->name('requisition.convincerequest.create')->middleware('permission:requisition-convincerequest-create');
                Route::post('/store', [ConvinceRequestController::class, 'store'])->name('requisition.convincerequest.store')->middleware('permission:requisition-convincerequest-store');
                Route::get('/show/{id}', [ConvinceRequestController::class, 'show'])->name('requisition.convincerequest.show')->middleware('permission:requisition-convincerequest-show');
                Route::get('/edit/{id}', [ConvinceRequestController::class, 'edit'])->name('requisition.convincerequest.edit')->middleware('permission:requisition-convincerequest-edit');
                Route::put('/update/{id}', [ConvinceRequestController::class, 'update'])->name('requisition.convincerequest.update')->middleware('permission:requisition-convincerequest-update');
                Route::get('/destroy/{id}', [ConvinceRequestController::class, 'destroy'])->name('requisition.convincerequest.destroy')->middleware('permission:requisition-convincerequest-destroy');
            });

            Route::prefix("compensatoryLeave")->group(function () {
                Route::get('/', [CompensatoryLeaveController::class, 'index'])->name('requisition.compensatoryleave.index')->middleware('permission:requisition-compensatoryleave-index');
                Route::get('/create', [CompensatoryLeaveController::class, 'create'])->name('requisition.compensatoryleave.create')->middleware('permission:requisition-compensatoryleave-create');
                Route::post('/store', [CompensatoryLeaveController::class, 'store'])->name('requisition.compensatoryleave.store')->middleware('permission:requisition-compensatoryleave-store');
                Route::get('/show/{id}', [CompensatoryLeaveController::class, 'show'])->name('requisition.compensatoryleave.show')->middleware('permission:requisition-compensatoryleave-show');
                Route::get('/edit/{id}', [CompensatoryLeaveController::class, 'edit'])->name('requisition.compensatoryleave.edit')->middleware('permission:requisition-compensatoryleave-edit');
                Route::put('/update/{id}', [CompensatoryLeaveController::class, 'update'])->name('requisition.compensatoryleave.update')->middleware('permission:requisition-compensatoryleave-update');
                Route::get('/destroy/{id}', [CompensatoryLeaveController::class, 'destroy'])->name('requisition.compensatoryleave.destroy')->middleware('permission:requisition-compensatoryleave-destroy');
            });

            Route::prefix("barcodeManagement")->group(function () {
                Route::get('/', [BarcodeManagementController::class, 'index'])->name('requisition.barcodemanagement.index')->middleware('permission:requisition-barcodeManagement-index');
                Route::get('/create', [BarcodeManagementController::class, 'create'])->name('requisition.barcodemanagement.create')->middleware('permission:requisition-barcodeManagement-create');
                Route::post('/store', [BarcodeManagementController::class, 'store'])->name('requisition.barcodemanagement.store')->middleware('permission:requisition-barcodeManagement-store');
                Route::get('/show/{id}', [BarcodeManagementController::class, 'show'])->name('requisition.barcodemanagement.show')->middleware('permission:requisition-barcodeManagement-show');
                Route::get('/edit/{id}', [BarcodeManagementController::class, 'edit'])->name('requisition.barcodemanagement.edit')->middleware('permission:requisition-barcodeManagement-edit');
                Route::put('/update/{id}', [BarcodeManagementController::class, 'update'])->name('requisition.barcodemanagement.update')->middleware('permission:requisition-barcodeManagement-update');
                Route::get('/destroy/{id}', [BarcodeManagementController::class, 'destroy'])->name('requisition.barcodemanagement.destroy')->middleware('permission:requisition-barcodeManagement-destroy');
            });
        }
    );
    Route::prefix("officemanagement")->group(
        function () {
            Route::prefix("generatorlogbook")->group(function () {
                Route::get('/', [GeneratorlogbookController::class, 'index'])->name('officemanagement.generatorlogbook.index')->middleware('permission:officemanagement-generatorlogbook-index');
                Route::get('/create', [GeneratorlogbookController::class, 'create'])->name('officemanagement.generatorlogbook.create')->middleware('permission:officemanagement-generatorlogbook-create');
                Route::post('/store', [GeneratorlogbookController::class, 'store'])->name('officemanagement.generatorlogbook.store')->middleware('permission:officemanagement-generatorlogbook-store');
                Route::get('/show/{id}', [GeneratorlogbookController::class, 'show'])->name('officemanagement.generatorlogbook.show')->middleware('permission:officemanagement-generatorlogbook-show');
                Route::get('/edit/{id}', [GeneratorlogbookController::class, 'edit'])->name('officemanagement.generatorlogbook.edit')->middleware('permission:officemanagement-generatorlogbook-edit');
                Route::put('/update/{id}', [GeneratorlogbookController::class, 'update'])->name('officemanagement.generatorlogbook.update')->middleware('permission:officemanagement-generatorlogbook-update');
                Route::get('/destroy/{id}', [GeneratorlogbookController::class, 'destroy'])->name('officemanagement.generatorlogbook.destroy')->middleware('permission:officemanagement-generatorlogbook-destroy');
            });
            Route::prefix("cashdeposite")->group(function () {
                Route::get('/', [CashdepositeController::class, 'index'])->name('officemanagement.cashdeposite.index')->middleware('permission:officemanagement-cashdeposite-index');
                Route::get('/create', [CashdepositeController::class, 'create'])->name('officemanagement.cashdeposite.create')->middleware('permission:officemanagement-cashdeposite-create');
                Route::post('/store', [CashdepositeController::class, 'store'])->name('officemanagement.cashdeposite.store')->middleware('permission:officemanagement-cashdeposite-store');
                Route::get('/show/{id}', [CashdepositeController::class, 'show'])->name('officemanagement.cashdeposite.show')->middleware('permission:officemanagement-cashdeposite-show');
                Route::get('/edit/{id}', [CashdepositeController::class, 'edit'])->name('officemanagement.cashdeposite.edit')->middleware('permission:officemanagement-cashdeposite-edit');
                Route::put('/update/{id}', [CashdepositeController::class, 'update'])->name('officemanagement.cashdeposite.update')->middleware('permission:officemanagement-cashdeposite-update');
                Route::get('/destroy/{id}', [CashdepositeController::class, 'destroy'])->name('officemanagement.cashdeposite.destroy')->middleware('permission:officemanagement-cashdeposite-destroy');
            });

            Route::prefix("contract")->group(function () {
                Route::get('/', [ContractController::class, 'index'])->name('officemanagement.contract.index')->middleware('permission:officemanagement-contract-index');
                Route::get('/create', [ContractController::class, 'create'])->name('officemanagement.contract.create')->middleware('permission:officemanagement-contract-create');
                Route::post('/store', [ContractController::class, 'store'])->name('officemanagement.contract.store')->middleware('permission:officemanagement-contract-stpre');
                Route::get('/show/{id}', [ContractController::class, 'show'])->name('officemanagement.contract.show')->middleware('permission:officemanagement-contract-show');
                Route::get('/edit/{id}', [ContractController::class, 'edit'])->name('officemanagement.contract.edit')->middleware('permission:officemanagement-contract-edit');
                Route::put('/update/{id}', [ContractController::class, 'update'])->name('officemanagement.contract.update')->middleware('permission:officemanagement-contract-update');
                Route::get('/destroy/{id}', [ContractController::class, 'destroy'])->name('officemanagement.contract.destroy')->middleware('permission:officemanagement-contract-destroy');
            });

            Route::prefix("purchaseservice")->group(function () {
                Route::get('/', [PurchaseserviceController::class, 'index'])->name('officemanagement.purchaseservice.index')->middleware('permission:officemanagement-purchaseservice-index');
                Route::get('/create', [PurchaseserviceController::class, 'create'])->name('officemanagement.purchaseservice.create')->middleware('permission:officemanagement-purchaseservice-create');
                Route::post('/store', [PurchaseserviceController::class, 'store'])->name('officemanagement.purchaseservice.store')->middleware('permission:officemanagement-purchaseservice-store');
                Route::get('/show/{id}', [PurchaseserviceController::class, 'show'])->name('officemanagement.purchaseservice.show')->middleware('permission:officemanagement-purchaseservice-show');
                Route::get('/edit/{id}', [PurchaseserviceController::class, 'edit'])->name('officemanagement.purchaseservice.edit')->middleware('permission:officemanagement-purchaseservice-edit');
                Route::put('/update/{id}', [PurchaseserviceController::class, 'update'])->name('officemanagement.purchaseservice.update')->middleware('permission:officemanagement-purchaseservice-update');
                Route::get('/destroy/{id}', [PurchaseserviceController::class, 'destroy'])->name('officemanagement.purchaseservice.destroy')->middleware('permission:officemanagement-purchaseservice-destroy');
            });
        }
    );


    Route::prefix("payroll")->group(
        function () {
            Route::prefix("newpayment")->group(function () {
                Route::get('/', [NewpaymentController::class, 'index'])->name('payroll.newpayment.index')->middleware('permission:payroll-newpayment-index');
                Route::get('/create', [NewpaymentController::class, 'create'])->name('payroll.newpayment.create')->middleware('permission:payroll-newpayment-create');
                Route::post('/store', [NewpaymentController::class, 'store'])->name('payroll.newpayment.store')->middleware('permission:payroll-newpayment-store');
                Route::get('/show/{id}', [NewpaymentController::class, 'show'])->name('payroll.newpayment.show')->middleware('permission:payroll-newpayment-show');
                Route::get('/edit/{id}', [NewpaymentController::class, 'edit'])->name('payroll.newpayment.edit')->middleware('permission:payroll-newpayment-edit');
                Route::put('/update/{id}', [NewpaymentController::class, 'update'])->name('payroll.newpayment.update')->middleware('permission:payroll-newpayment-update');
                Route::get('/destroy/{id}', [NewpaymentController::class, 'destroy'])->name('payroll.newpayment.destroy')->middleware('permission:payroll-newpayment-destroy');
            });
        }
    );



    Route::prefix("Training")->group(
        function () {
            Route::prefix("trainingtype")->group(function () {
                Route::get('/', [TrainingtypeController::class, 'index'])->name('training.trainingtype.index')->middleware('permission:training-trainingtype-index');
                Route::get('/create', [TrainingtypeController::class, 'create'])->name('training.trainingtype.create')->middleware('permission:training-trainingtype-create');
                Route::post('/store', [TrainingtypeController::class, 'store'])->name('training.trainingtype.store')->middleware('permission:training-trainingtype-store');
                Route::get('/show/{id}', [TrainingtypeController::class, 'show'])->name('training.trainingtype.show')->middleware('permission:training-trainingtype-show');
                Route::get('/edit/{id}', [TrainingtypeController::class, 'edit'])->name('training.trainingtype.edit')->middleware('permission:training-trainingtype-edit');
                Route::put('/update/{id}', [TrainingtypeController::class, 'update'])->name('training.trainingtype.update')->middleware('permission:training-trainingtype-update');
                Route::get('/destroy/{id}', [TrainingtypeController::class, 'destroy'])->name('training.trainingtype.destroy')->middleware('permission:training-trainingtype-destroy');
            });


            Route::prefix("traininglist")->group(function () {
                Route::get('/', [TraininglistController::class, 'index'])->name('training.traininglist.index')->middleware('permission:training-traininglist-index');
                Route::get('/create', [TraininglistController::class, 'create'])->name('training.traininglist.create')->middleware('permission:training-traininglist-create');
                Route::post('/store', [TraininglistController::class, 'store'])->name('training.traininglist.store')->middleware('permission:training-traininglist-store');
                Route::get('/show/{id}', [TraininglistController::class, 'show'])->name('training.traininglist.show')->middleware('permission:training-traininglist-show');
                Route::get('/edit/{id}', [TraininglistController::class, 'edit'])->name('training.traininglist.edit')->middleware('permission:training-traininglist-edit');
                Route::put('/update/{id}', [TraininglistController::class, 'update'])->name('training.traininglist.update')->middleware('permission:training-traininglist-update');
                Route::get('/destroy/{id}', [TraininglistController::class, 'destroy'])->name('training.traininglist.destroy')->middleware('permission:training-traininglist-destroy');
            });
            Route::prefix("trainer")->group(function () {
                Route::get('/', [TrainerController::class, 'index'])->name('training.trainer.index')->middleware('permission:training-trainer-index');
                Route::get('/create', [TrainerController::class, 'create'])->name('training.trainer.create')->middleware('permission:training-trainer-create');
                Route::post('/store', [TrainerController::class, 'store'])->name('training.trainer.store')->middleware('permission:training-trainer-store');
                Route::get('/show/{id}', [TrainerController::class, 'show'])->name('training.trainer.show')->middleware('permission:training-trainer-show');
                Route::get('/edit/{id}', [TrainerController::class, 'edit'])->name('training.trainer.edit')->middleware('permission:training-trainer-edit');
                Route::put('/update/{id}', [TrainerController::class, 'update'])->name('training.trainer.update')->middleware('permission:training-trainer-update');
                Route::get('/destroy/{id}', [TrainerController::class, 'destroy'])->name('training.trainer.destroy')->middleware('permission:training-trainer-destroy');
            });
        }
    );
    Route::prefix("travelfleet")->group(
        function () {
            Route::prefix("fleetrequest")->group(function () {
                Route::get('/', [FleetrequestController::class, 'index'])->name('travelfleet.fleetrequest.index')->middleware('permission:travelfleet-fleetrequest-index');
                Route::get('/create', [FleetrequestController::class, 'create'])->name('travelfleet.fleetrequest.create')->middleware('permission:travelfleet-fleetrequest-create');
                Route::post('/store', [FleetrequestController::class, 'store'])->name('travelfleet.fleetrequest.store')->middleware('permission:travelfleet-fleetrequest-store');
                Route::get('/show/{id}', [FleetrequestController::class, 'show'])->name('travelfleet.fleetrequest.show')->middleware('permission:travelfleet-fleetrequest-show');
                Route::get('/edit/{id}', [FleetrequestController::class, 'edit'])->name('travelfleet.fleetrequest.edit')->middleware('permission:travelfleet-fleetrequest-edit');
                Route::put('/update/{id}', [FleetrequestController::class, 'update'])->name('travelfleet.fleetrequest.update')->middleware('permission:travelfleet-fleetrequest-update');
                Route::get('/destroy/{id}', [FleetrequestController::class, 'destroy'])->name('travelfleet.fleetrequest.destroy')->middleware('permission:travelfleet-fleetrequest-destroy');
            });

            Route::prefix("fleetroster")->group(function () {
                Route::get('/', [FleetrosterController::class, 'index'])->name('travelfleet.fleetroster.index')->middleware('permission:travelfleet-fleetroster-index');
                Route::get('/create', [FleetrosterController::class, 'create'])->name('travelfleet.fleetroster.create')->middleware('permission:travelfleet-fleetroster-create');
                Route::post('/store', [FleetrosterController::class, 'store'])->name('travelfleet.fleetroster.store')->middleware('permission:travelfleet-fleetroster-store');
                Route::get('/show/{id}', [FleetrosterController::class, 'show'])->name('travelfleet.fleetroster.show')->middleware('permission:travelfleet-fleetroster-show');
                Route::get('/edit/{id}', [FleetrosterController::class, 'edit'])->name('travelfleet.fleetroster.edit')->middleware('permission:travelfleet-fleetroster-edit');
                Route::put('/update/{id}', [FleetrosterController::class, 'update'])->name('travelfleet.fleetroster.update')->middleware('permission:travelfleet-fleetroster-update');
                Route::get('/destroy/{id}', [FleetrosterController::class, 'destroy'])->name('travelfleet.fleetroster.destroy')->middleware('permission:travelfleet-fleetroster-destroy');
            });


            Route::prefix("travelslog")->group(function () {
                Route::get('/', [TravelslogController::class, 'index'])->name('travelfleet.travelslog.index')->middleware('permission:travelfleet-travelslog-index');
                Route::get('/create', [TravelslogController::class, 'create'])->name('travelfleet.travelslog.create')->middleware('permission:travelfleet-travelslog-create');
                Route::post('/store', [TravelslogController::class, 'store'])->name('travelfleet.travelslog.store')->middleware('permission:travelfleet-travelslog-store');
                Route::get('/show/{id}', [TravelslogController::class, 'show'])->name('travelfleet.travelslog.show')->middleware('permission:travelfleet-travelslog-show');
                Route::get('/edit/{id}', [TravelslogController::class, 'edit'])->name('travelfleet.travelslog.edit')->middleware('permission:travelfleet-travelslog-edit');
                Route::put('/update/{id}', [TravelslogController::class, 'update'])->name('travelfleet.travelslog.update')->middleware('permission:travelfleet-travelslog-update');
                Route::get('/destroy/{id}', [TravelslogController::class, 'destroy'])->name('travelfleet.travelslog.destroy')->middleware('permission:travelfleet-travelslog-destroy');
            });

            Route::prefix("vehiclelog")->group(function () {
                Route::get('/', [VehiclelogController::class, 'index'])->name('travelfleet.vehiclelog.index')->middleware('permission:travelfleet-vehiclelog-index');
                Route::get('/create', [VehiclelogController::class, 'create'])->name('travelfleet.vehiclelog.create')->middleware('permission:travelfleet-vehiclelog-create');
                Route::post('/store', [VehiclelogController::class, 'store'])->name('travelfleet.vehiclelog.store')->middleware('permission:travelfleet-vehiclelog-store');
                Route::get('/show/{id}', [VehiclelogController::class, 'show'])->name('travelfleet.vehiclelog.show')->middleware('permission:travelfleet-vehiclelog-show');
                Route::get('/edit/{id}', [VehiclelogController::class, 'edit'])->name('travelfleet.vehiclelog.edit')->middleware('permission:travelfleet-vehiclelog-edit');
                Route::put('/update/{id}', [VehiclelogController::class, 'update'])->name('travelfleet.vehiclelog.update')->middleware('permission:travelfleet-vehiclelog-update');
                Route::get('/destroy/{id}', [VehiclelogController::class, 'destroy'])->name('travelfleet.vehiclelog.destroy')->middleware('permission:travelfleet-vehiclelog-destroy');
            });
            Route::prefix("travelcategory")->group(function () {
                Route::get('/', [TravelcategoryController::class, 'index'])->name('travelfleet.travelcategory.index')->middleware('permission:travelfleet-travelcategory-index');
                Route::get('/create', [TravelcategoryController::class, 'create'])->name('travelfleet.travelcategory.create')->middleware('permission:travelfleet-travelcategory-create');
                Route::post('/store', [TravelcategoryController::class, 'store'])->name('travelfleet.travelcategory.store')->middleware('permission:travelfleet-travelcategory-store');
                Route::get('/show/{id}', [TravelcategoryController::class, 'show'])->name('travelfleet.travelcategory.show')->middleware('permission:travelfleet-travelcategory-show');
                Route::get('/edit/{id}', [TravelcategoryController::class, 'edit'])->name('travelfleet.travelcategory.edit')->middleware('permission:travelfleet-travelcategory-edit');
                Route::put('/update/{id}', [TravelcategoryController::class, 'update'])->name('travelfleet.travelcategory.update')->middleware('permission:travelfleet-travelcategory-update');
                Route::get('/destroy/{id}', [TravelcategoryController::class, 'destroy'])->name('travelfleet.travelcategory.destroy')->middleware('permission:travelfleet-travelcategory-destroy');
            });
            Route::prefix("travelapproval")->group(function () {
                Route::get('/', [TravelapprovalController::class, 'index'])->name('travelfleet.travelapproval.index')->middleware('permission:travelfleet-travelapproval-index');
                Route::get('/create', [TravelapprovalController::class, 'create'])->name('travelfleet.travelapproval.create')->middleware('permission:travelfleet-travelapproval-create');
                Route::post('/store', [TravelapprovalController::class, 'store'])->name('travelfleet.travelapproval.store')->middleware('permission:travelfleet-travelapproval-store');
                Route::get('/show/{id}', [TravelapprovalController::class, 'show'])->name('travelfleet.travelapproval.show')->middleware('permission:travelfleet-travelapproval-show');
                Route::get('/edit/{id}', [TravelapprovalController::class, 'edit'])->name('travelfleet.travelapproval.edit')->middleware('permission:travelfleet-travelapproval-edit');
                Route::put('/update/{id}', [TravelapprovalController::class, 'update'])->name('travelfleet.travelapproval.update')->middleware('permission:travelfleet-travelapproval-update');
                Route::get('/destroy/{id}', [TravelapprovalController::class, 'destroy'])->name('travelfleet.travelapproval.destroy')->middleware('permission:travelfleet-travelapproval-destroy');
            });


            Route::prefix("travelrequest")->group(function () {
                Route::get('/', [TravelrequestController::class, 'index'])->name('travelfleet.travelrequest.index')->middleware('permission:travelfleet-travelrequest-index');
                Route::get('/create', [TravelrequestController::class, 'create'])->name('travelfleet.travelrequest.create')->middleware('permission:travelfleet-travelrequest-create');
                Route::post('/store', [TravelrequestController::class, 'store'])->name('travelfleet.travelrequest.store')->middleware('permission:travelfleet-travelrequest-store');
                Route::get('/show/{id}', [TravelrequestController::class, 'show'])->name('travelfleet.travelrequest.show')->middleware('permission:travelfleet-travelrequest-show');
                Route::get('/edit/{id}', [TravelrequestController::class, 'edit'])->name('travelfleet.travelrequest.edit')->middleware('permission:travelfleet-travelrequest-edit');
                Route::put('/update/{id}', [TravelrequestController::class, 'update'])->name('travelfleet.travelrequest.update')->middleware('permission:travelfleet-travelrequest-update');
                Route::get('/destroy/{id}', [TravelrequestController::class, 'destroy'])->name('travelfleet.travelrequest.destroy')->middleware('permission:travelfleet-travelrequest-destroy');
            });


            Route::prefix("maintenancelog")->group(function () {
                Route::get('/', [MaintenancelogController::class, 'index'])->name('travelfleet.maintenancelog.index')->middleware('permission:travelfleet-maintenancelog-index');
                Route::get('/create', [MaintenancelogController::class, 'create'])->name('travelfleet.maintenancelog.create')->middleware('permission:travelfleet-maintenancelog-create');
                Route::post('/store', [MaintenancelogController::class, 'store'])->name('travelfleet.maintenancelog.store')->middleware('permission:travelfleet-maintenancelog-store');
                Route::get('/show/{id}', [MaintenancelogController::class, 'show'])->name('travelfleet.maintenancelog.show')->middleware('permission:travelfleet-maintenancelog-show');
                Route::get('/edit/{id}', [MaintenancelogController::class, 'edit'])->name('travelfleet.maintenancelog.edit')->middleware('permission:travelfleet-maintenancelog-edit');
                Route::put('/update/{id}', [MaintenancelogController::class, 'update'])->name('travelfleet.maintenancelog.update')->middleware('permission:travelfleet-maintenancelog-update');
                Route::get('/destroy/{id}', [MaintenancelogController::class, 'destroy'])->name('travelfleet.maintenancelog.destroy')->middleware('permission:travelfleet-maintenancelog-destroy');
            });

            Route::prefix("fleetmanagement")->group(function () {
                Route::get('/', [FleetmanagementController::class, 'index'])->name('travelfleet.fleetmanagement.index')->middleware('permission:travelfleet-fleetmanagement-index');
                Route::get('/create', [FleetmanagementController::class, 'create'])->name('travelfleet.fleetmanagement.create')->middleware('permission:travelfleet-fleetmanagement-create');
                Route::post('/store', [FleetmanagementController::class, 'store'])->name('travelfleet.fleetmanagement.store')->middleware('permission:travelfleet-fleetmanagement-store');
                Route::get('/show/{id}', [FleetmanagementController::class, 'show'])->name('travelfleet.fleetmanagement.show')->middleware('permission:travelfleet-fleetmanagement-show');
                Route::get('/edit/{id}', [FleetmanagementController::class, 'edit'])->name('travelfleet.fleetmanagement.edit')->middleware('permission:travelfleet-fleetmanagement-edit');
                Route::put('/update/{id}', [FleetmanagementController::class, 'update'])->name('travelfleet.fleetmanagement.update')->middleware('permission:travelfleet-fleetmanagement-update');
                Route::get('/destroy/{id}', [FleetmanagementController::class, 'destroy'])->name('travelfleet.fleetmanagement.destroy')->middleware('permission:travelfleet-fleetmanagement-destroy');
            });

            Route::prefix("driverroster")->group(function () {
                Route::get('/', [DriverrosterController::class, 'index'])->name('travelfleet.driverroster.index')->middleware('permission:travelfleet-driverroster-index');
                Route::get('/create', [DriverrosterController::class, 'create'])->name('travelfleet.driverroster.create')->middleware('permission:travelfleet-driverroster-create');
                Route::post('/store', [DriverrosterController::class, 'store'])->name('travelfleet.driverroster.store')->middleware('permission:travelfleet-driverroster-store');
                Route::get('/show/{id}', [DriverrosterController::class, 'show'])->name('travelfleet.driverroster.show')->middleware('permission:travelfleet-driverroster-show');
                Route::get('/edit/{id}', [DriverrosterController::class, 'edit'])->name('travelfleet.driverroster.edit')->middleware('permission:travelfleet-driverroster-edit');
                Route::put('/update/{id}', [DriverrosterController::class, 'update'])->name('travelfleet.driverroster.update')->middleware('permission:travelfleet-driverroster-update');
                Route::get('/destroy/{id}', [DriverrosterController::class, 'destroy'])->name('travelfleet.driverroster.destroy')->middleware('permission:travelfleet-driverroster-destroy');
            });
        }
    );

    Route::prefix("Finance")->group(
        function () {
            Route::prefix("creditNotes")->group(function () {
                Route::get('/', [CreditNotesController::class, 'index'])->name('finance.creditnotes.index')->middleware('permission:finance-creditnotes-index');
                Route::get('/create', [CreditNotesController::class, 'create'])->name('finance.creditnotes.create')->middleware('permission:finance-creditnotes-create');
                Route::post('/store', [CreditNotesController::class, 'store'])->name('finance.creditnotes.store')->middleware('permission:finance-creditnotes-store');
                Route::get('/show/{id}', [CreditNotesController::class, 'show'])->name('finance.creditnotes.show')->middleware('permission:finance-creditnotes-show');
                Route::get('/edit/{id}', [CreditNotesController::class, 'edit'])->name('finance.creditnotes.edit')->middleware('permission:finance-creditnotes-edit');
                Route::put('/update/{id}', [CreditNotesController::class, 'update'])->name('finance.creditnotes.update')->middleware('permission:finance-creditnotes-update');
                Route::get('/destroy/{id}', [CreditNotesController::class, 'destroy'])->name('finance.creditnotes.destroy')->middleware('permission:finance-creditnotes-destroy');
            });


            Route::prefix("invoices")->group(function () {
                Route::get('/', [InvoicesController::class, 'index'])->name('finance.invoices.index')->middleware('permission:finance-invoices-index');
                Route::get('/create', [InvoicesController::class, 'create'])->name('finance.invoices.create')->middleware('permission:finance-invoices-create');
                Route::post('/store', [InvoicesController::class, 'store'])->name('finance.invoices.store')->middleware('permission:finance-invoices-store');
                Route::get('/show/{id}', [InvoicesController::class, 'show'])->name('finance.invoices.show')->middleware('permission:finance-invoices-show');
                Route::get('/edit/{id}', [InvoicesController::class, 'edit'])->name('finance.invoices.edit')->middleware('permission:finance-invoices-edit');
                Route::put('/update/{id}', [InvoicesController::class, 'update'])->name('finance.invoices.update')->middleware('permission:finance-invoices-update');
                Route::get('/destroy/{id}', [InvoicesController::class, 'destroy'])->name('finance.invoices.destroy')->middleware('permission:finance-invoices-destroy');
            });

            Route::prefix("estimates")->group(function () {
                Route::get('/', [EstimatesController::class, 'index'])->name('finance.estimates.index')->middleware('permission:finance-estimates-index');
                Route::get('/create', [EstimatesController::class, 'create'])->name('finance.estimates.create')->middleware('permission:finance-estimates-create');
                Route::post('/store', [EstimatesController::class, 'store'])->name('finance.estimates.store')->middleware('permission:finance-estimates-store');
                Route::get('/show/{id}', [EstimatesController::class, 'show'])->name('finance.estimates.show')->middleware('permission:finance-estimates-show');
                Route::get('/edit/{id}', [EstimatesController::class, 'edit'])->name('finance.estimates.edit')->middleware('permission:finance-estimates-edit');
                Route::put('/update/{id}', [EstimatesController::class, 'update'])->name('finance.estimates.update')->middleware('permission:finance-estimates-update');
                Route::get('/destroy/{id}', [EstimatesController::class, 'destroy'])->name('finance.estimates.destroy')->middleware('permission:finance-estimates-destroy');
            });



            Route::prefix("proposal")->group(function () {
                Route::get('/', [ProposalController::class, 'index'])->name('finance.proposal.index')->middleware('permission:finance-proposal-index');
                Route::get('/create', [ProposalController::class, 'create'])->name('finance.proposal.create')->middleware('permission:finance-proposal-create');
                Route::post('/store', [ProposalController::class, 'store'])->name('finance.proposal.store')->middleware('permission:finance-proposal-store');
                Route::get('/show/{id}', [ProposalController::class, 'show'])->name('finance.proposal.show')->middleware('permission:finance-proposal-show');
                Route::get('/edit/{id}', [ProposalController::class, 'edit'])->name('finance.proposal.edit')->middleware('permission:finance-proposal-edit');
                Route::put('/update/{id}', [ProposalController::class, 'update'])->name('finance.proposal.update')->middleware('permission:finance-proposal-update');
                Route::get('/destroy/{id}', [ProposalController::class, 'destroy'])->name('finance.proposal.destroy')->middleware('permission:finance-proposal-destroy');
            });


            Route::prefix("financeExpenses")->group(function () {
                Route::get('/', [FinanceExpensesController::class, 'index'])->name('finance.financeexpenses.index')->middleware('permission:finance-financeexpenses-index');
                Route::get('/create', [FinanceExpensesController::class, 'create'])->name('finance.financeexpenses.create')->middleware('permission:finance-financeexpenses-create');
                Route::post('/store', [FinanceExpensesController::class, 'store'])->name('finance.financeexpenses.store')->middleware('permission:finance-financeexpenses-store');
                Route::get('/show/{id}', [FinanceExpensesController::class, 'show'])->name('finance.financeexpenses.show')->middleware('permission:finance-financeexpenses-show');
                Route::get('/edit/{id}', [FinanceExpensesController::class, 'edit'])->name('finance.financeexpenses.edit')->middleware('permission:finance-financeexpenses-edit');
                Route::put('/update/{id}', [FinanceExpensesController::class, 'update'])->name('finance.financeexpenses.update')->middleware('permission:finance-financeexpenses-update');
                Route::get('/destroy/{id}', [FinanceExpensesController::class, 'destroy'])->name('finance.financeexpenses.destroy')->middleware('permission:finance-financeexpenses-destroy');
            });


            Route::prefix("financePay")->group(function () {
                Route::get('/', [FinancePayController::class, 'index'])->name('finance.financepay.index')->middleware('permission:finance-financepay-index');
                Route::get('/create', [FinancePayController::class, 'create'])->name('finance.financepay.create')->middleware('permission:finance-financepay-create');
                Route::post('/store', [FinancePayController::class, 'store'])->name('finance.financepay.store')->middleware('permission:finance-financepay-store');
                Route::get('/show/{id}', [FinancePayController::class, 'show'])->name('finance.financepay.show')->middleware('permission:finance-financepay-show');
                Route::get('/edit/{id}', [FinancePayController::class, 'edit'])->name('finance.financepay.edit')->middleware('permission:finance-financepay-edit');
                Route::put('/update/{id}', [FinancePayController::class, 'update'])->name('finance.financepay.update')->middleware('permission:finance-financepay-update');
                Route::get('/destroy/{id}', [FinancePayController::class, 'destroy'])->name('finance.financepay.destroy')->middleware('permission:finance-financepay-destroy');
            });


            Route::prefix("advancerequest")->group(function () {
                Route::get('/', [AdvancerequestController::class, 'index'])->name('finance.advancerequest.index')->middleware('permission:finance-advancerequest-index');
                Route::get('/create', [AdvancerequestController::class, 'create'])->name('finance.advancerequest.create')->middleware('permission:finance-advancerequest-create');
                Route::post('/store', [AdvancerequestController::class, 'store'])->name('finance.advancerequest.store')->middleware('permission:finance-advancerequest-store');
                Route::get('/show/{id}', [AdvancerequestController::class, 'show'])->name('finance.advancerequest.show')->middleware('permission:finance-advancerequest-show');
                Route::get('/edit/{id}', [AdvancerequestController::class, 'edit'])->name('finance.advancerequest.edit')->middleware('permission:finance-advancerequest-edit');
                Route::put('/update/{id}', [AdvancerequestController::class, 'update'])->name('finance.advancerequest.update')->middleware('permission:finance-advancerequest-update');
                Route::get('/destroy/{id}', [AdvancerequestController::class, 'destroy'])->name('finance.advancerequest.destroy')->middleware('permission:finance-advancerequest-destroy');
            });



            Route::prefix("cashrequest")->group(function () {
                Route::get('/', [CashrequestController::class, 'index'])->name('finance.cashrequest.index')->middleware('permission:finance-cashrequest-index');
                Route::get('/create', [CashrequestController::class, 'create'])->name('finance.cashrequest.create')->middleware('permission:finance-cashrequest-create');
                Route::post('/store', [CashrequestController::class, 'store'])->name('finance.cashrequest.store')->middleware('permission:finance-cashrequest-store');
                Route::get('/show/{id}', [CashrequestController::class, 'show'])->name('finance.cashrequest.show')->middleware('permission:finance-cashrequest-show');
                Route::get('/edit/{id}', [CashrequestController::class, 'edit'])->name('finance.cashrequest.edit')->middleware('permission:finance-cashrequest-edit');
                Route::put('/update/{id}', [CashrequestController::class, 'update'])->name('finance.cashrequest.update')->middleware('permission:finance-cashrequest-update');
                Route::get('/destroy/{id}', [CashrequestController::class, 'destroy'])->name('finance.cashrequest.destroy')->middleware('permission:finance-cashrequest-destroy');
            });


            Route::prefix("expensesclaim")->group(function () {
                Route::get('/', [ExpensesclaimController::class, 'index'])->name('finance.expensesclaim.index')->middleware('permission:finance-expensesclaim-index');
                Route::get('/create', [ExpensesclaimController::class, 'create'])->name('finance.expensesclaim.create')->middleware('permission:finance-expensesclaim-create');
                Route::post('/store', [ExpensesclaimController::class, 'store'])->name('finance.expensesclaim.store')->middleware('permission:finance-expensesclaim-store');
                Route::get('/show/{id}', [ExpensesclaimController::class, 'show'])->name('finance.expensesclaim.show')->middleware('permission:finance-expensesclaim-show');
                Route::get('/edit/{id}', [ExpensesclaimController::class, 'edit'])->name('finance.expensesclaim.edit')->middleware('permission:finance-expensesclaim-edit');
                Route::put('/update/{id}', [ExpensesclaimController::class, 'update'])->name('finance.expensesclaim.update')->middleware('permission:finance-expensesclaim-update');
                Route::get('/destroy/{id}', [ExpensesclaimController::class, 'destroy'])->name('finance.expensesclaim.destroy')->middleware('permission:finance-expensesclaim-destroy');
            });
        }



    );
    Route::prefix("work")->group(
        function () {
            Route::prefix("workProjects")->group(
                function () {
                    Route::get('/', [WorkProjectsController::class, 'index'])->name('work.workprojects.index'); // ->middleware('permission:work-workProjects-index');
                    Route::get('/create', [WorkProjectsController::class, 'create'])->name('work.workprojects.create'); //->middleware('permission:work-workProjects-create');
                    Route::post('/store', [WorkProjectsController::class, 'store'])->name('work.workprojects.store'); //->middleware('permission:work-workProjects-store');
                    Route::get('/show/{id}', [WorkProjectsController::class, 'show'])->name('work.workprojects.show'); //->middleware('permission:work-workProjects-show');
                    Route::get('/edit/{id}', [WorkProjectsController::class, 'edit'])->name('work.workprojects.edit'); //->middleware('permission:work-workProjects-edit');
                    Route::put('/update/{id}', [WorkProjectsController::class, 'update'])->name('work.workprojects.update'); //->middleware('permission:work-workProjects-update');
                    Route::get('/destroy/{id}', [WorkProjectsController::class, 'destroy'])->name('work.workprojects.destroy'); //->middleware('permission:work-workProjects-destroy');
                    Route::get('/destroy/ProjectEmployee/{id}', [WorkProjectsController::class, 'destroyProjectEmployee'])->name('work.workprojects.destroyProjectEmployee'); //->middleware('permission:work-workProjects-destroy');
                    Route::get('get-department-employee', [WorkProjectsController::class, 'getDepartmentEmployee'])->name('work.workprojects.getDepartmentEmployee');
                    Route::get('/updateworkprojectStatus', [WorkProjectsController::class, 'updateProjectStatus'])->name('work.workprojects.updateProjectStatus'); //->middleware('permission:work-timelog-store');

                }
            );

            Route::prefix("tasks")->group(function () {
                Route::get('/', [TasksController::class, 'index'])->name('work.tasks.index'); //->middleware('permission:work-tasks-index');
                Route::get('/create', [TasksController::class, 'create'])->name('work.tasks.create'); //->middleware('permission:work-tasks-create');
                Route::post('/store', [TasksController::class, 'store'])->name('work.tasks.store'); //->middleware('permission:work-tasks-store');
                Route::get('/show/{id}', [TasksController::class, 'show'])->name('work.tasks.show'); //->middleware('permission:work-tasks-show');
                Route::get('/edit/{id}', [TasksController::class, 'edit'])->name('work.tasks.edit'); //->middleware('permission:work-tasks-edit');
                Route::put('/update/{id}', [TasksController::class, 'update'])->name('work.tasks.update');
                Route::get('/destroy/{id}', [TasksController::class, 'destroy'])->name('work.tasks.destroy'); //->middleware('permission:work-tasks-destroy');
                Route::get('get-assigned-employee', [TasksController::class, 'getAssignedEmployee'])->name('work.tasks.getAssignedEmployee');
                Route::get('/updateTaskStatus', [TasksController::class, 'updateTaskStatus'])->name('work.tasks.updateTaskStatus'); //->middleware('permission:work-timelog-store');
                Route::get('/all-task-lists', [TasksController::class, 'allTaskList'])->name('work.tasks.allTaskList'); //->middleware('permission:work-timelog-store');

            });

            Route::prefix("timelog")->group(function () {
                Route::get('/', [TimelogController::class, 'index'])->name('work.timelog.index'); //->middleware('permission:work-timelog-index');
                Route::get('/create', [TimelogController::class, 'create'])->name('work.timelog.create'); //->middleware('permission:work-timelog-create');
                Route::post('/store', [TimelogController::class, 'store'])->name('work.timelog.store'); //->middleware('permission:work-timelog-store');
                Route::get('/show/{id}', [TimelogController::class, 'show'])->name('work.timelog.show'); //->middleware('permission:work-timelog-show');
                Route::get('/edit/{id}', [TimelogController::class, 'edit'])->name('work.timelog.edit'); //->middleware('permission:work-timelog-edit');
                Route::put('/update/{id}', [TimelogController::class, 'update'])->name('work.timelog.update'); //->middleware('permission:work-timelog-update');
                Route::get('/destroy/{id}', [TimelogController::class, 'destroy'])->name('work.timelog.destroy'); //->middleware('permission:work-tasks-destroy');
                Route::get('/startTimeLog', [TimelogController::class, 'startTimeLog'])->name('work.timelog.startTimeLog'); //->middleware('permission:work-timelog-store');
                Route::get('/stopTimeLog', [TimelogController::class, 'stopTimeLog'])->name('work.timelog.stopTimeLog'); //->middleware('permission:work-timelog-store');

            });
        }
    );
    Route::prefix("project")->group(
        function () {
            Route::prefix("workfromhome")->group(function () {
                Route::get('/', [WorkfromhomeController::class, 'index'])->name('project.workfromhome.index')->middleware('permission:project-workfromhome-index');
                Route::get('/create', [WorkfromhomeController::class, 'create'])->name('project.workfromhome.create')->middleware('permission:project-workfromhome-create');
                Route::post('/store', [WorkfromhomeController::class, 'store'])->name('project.workfromhome.store')->middleware('permission:project-workfromhome-store');
                Route::get('/show/{id}', [WorkfromhomeController::class, 'show'])->name('project.workfromhome.show')->middleware('permission:project-workfromhome-show');
                Route::get('/edit/{id}', [WorkfromhomeController::class, 'edit'])->name('project.workfromhome.edit')->middleware('permission:project-workfromhome-edit');
                Route::put('/update/{id}', [WorkfromhomeController::class, 'update'])->name('project.workfromhome.update')->middleware('permission:project-workfromhome-update');
                Route::get('/destroy/{id}', [WorkfromhomeController::class, 'destroy'])->name('project.workfromhome.destroy')->middleware('permission:project-workfromhome-destroy');
            });
        }
    );

    Route::prefix("rostermanagement")->group(
        function () {
            Route::prefix("rostercategory")->group(function () {
                Route::get('/', [RostercategoryController::class, 'index'])->name('rostermanagement.rostercategory.index')->middleware('permission:rostermanagement-rostercategory-index');
                Route::get('/create', [RostercategoryController::class, 'create'])->name('rostermanagement.rostercategory.create')->middleware('permission:rostermanagement-rostercategory-create');
                Route::post('/store', [RostercategoryController::class, 'store'])->name('rostermanagement.rostercategory.store')->middleware('permission:rostermanagement-rostercategory-store');
                Route::get('/show/{id}', [RostercategoryController::class, 'show'])->name('rostermanagement.rostercategory.show')->middleware('permission:rostermanagement-rostercategory-show');
                Route::get('/edit/{id}', [RostercategoryController::class, 'edit'])->name('rostermanagement.rostercategory.edit')->middleware('permission:rostermanagement-rostercategory-edit');
                Route::put('/update/{id}', [RostercategoryController::class, 'update'])->name('rostermanagement.rostercategory.update')->middleware('permission:rostermanagement-rostercategory-update');
                Route::get('/destroy/{id}', [RostercategoryController::class, 'destroy'])->name('rostermanagement.rostercategory.destroy')->middleware('permission:rostermanagement-rostercategory-destroy');
            });

            Route::prefix("rosterentries")->group(function () {
                Route::get('/', [RosterentriesController::class, 'index'])->name('rostermanagement.rosterentries.index')->middleware('permission:rostermanagement-rosterentries-index');
                Route::get('/create', [RosterentriesController::class, 'create'])->name('rostermanagement.rosterentries.create')->middleware('permission:rostermanagement-rosterentries-create');
                Route::post('/store', [RosterentriesController::class, 'store'])->name('rostermanagement.rosterentries.store')->middleware('permission:rostermanagement-rosterentries-store');
                Route::get('/show/{id}', [RosterentriesController::class, 'show'])->name('rostermanagement.rosterentries.show')->middleware('permission:rostermanagement-rosterentries-show');
                Route::get('/edit/{id}', [RosterentriesController::class, 'edit'])->name('rostermanagement.rosterentries.edit')->middleware('permission:rostermanagement-rosterentries-edit');
                Route::put('/update/{id}', [RosterentriesController::class, 'update'])->name('rostermanagement.rosterentries.update')->middleware('permission:rostermanagement-rosterentries-update');
                Route::get('/destroy/{id}', [RosterentriesController::class, 'destroy'])->name('rostermanagement.rosterentries.destroy')->middleware('permission:rostermanagement-rosterentries-destroy');
            });
        }
    );



    Route::prefix("eventsandmeetings")->group(
        function () {
            Route::prefix("event")->group(function () {
                Route::get('/', [EventController::class, 'index'])->name('eventsandmeetings.event.index')->middleware('permission:eventsandmeetings-event-index');
                Route::get('/create', [EventController::class, 'create'])->name('eventsandmeetings.event.create')->middleware('permission:eventsandmeetings-event-create');
                Route::post('/store', [EventController::class, 'store'])->name('eventsandmeetings.event.store')->middleware('permission:eventsandmeetings-event-store');
                Route::get('/show/{id}', [EventController::class, 'show'])->name('eventsandmeetings.event.show')->middleware('permission:eventsandmeetings-event-show');
                Route::get('/edit/{id}', [EventController::class, 'edit'])->name('eventsandmeetings.event.edit')->middleware('permission:eventsandmeetings-event-edit');
                Route::put('/update/{id}', [EventController::class, 'update'])->name('eventsandmeetings.event.update')->middleware('permission:eventsandmeetings-event-update');
                Route::get('/destroy/{id}', [EventController::class, 'destroy'])->name('eventsandmeetings.event.destroy')->middleware('permission:eventsandmeetings-event-destroy');
            });

            Route::prefix("meeting")->group(
                function () {
                    Route::get('/', [MeetingController::class, 'index'])->name('eventsandmeetings.meeting.index')->middleware('permission:eventsandmeetings-meeting-index');
                    Route::get('/create', [MeetingController::class, 'create'])->name('eventsandmeetings.meeting.create')->middleware('permission:eventsandmeetings-meeting-create');
                    Route::post('/store', [MeetingController::class, 'store'])->name('eventsandmeetings.meeting.store')->middleware('permission:eventsandmeetings-meeting-store');
                    Route::get('/show/{id}', [MeetingController::class, 'show'])->name('eventsandmeetings.meeting.show')->middleware('permission:eventsandmeetings-meeting-show');
                    Route::get('/edit/{id}', [MeetingController::class, 'edit'])->name('eventsandmeetings.meeting.edit')->middleware('permission:eventsandmeetings-meeting-edit');
                    Route::put('/update/{id}', [MeetingController::class, 'update'])->name('eventsandmeetings.meeting.update')->middleware('permission:eventsandmeetings-meeting-update');
                    Route::get('/destroy/{id}', [MeetingController::class, 'destroy'])->name('eventsandmeetings.meeting.destroy')->middleware('permission:eventsandmeetings-meeting-destroy');
                }
            );
        }
    );



    Route::prefix("reports")->group(
        function () {
            Route::prefix("travelreports")->group(function () {
                Route::get('/', [TravelreportsController::class, 'index'])->name('reports.travelreports.index')->middleware('permission:reports-travelreports-index');
                Route::get('/create', [TravelreportsController::class, 'create'])->name('reports.travelreports.create')->middleware('permission:reports-travelreports-create');
                Route::post('/store', [TravelreportsController::class, 'store'])->name('reports.travelreports.store')->middleware('permission:reports-travelreports-store');
                Route::get('/show/{id}', [TravelreportsController::class, 'show'])->name('reports.travelreports.show')->middleware('permission:reports-travelreports-show');
                Route::get('/edit/{id}', [TravelreportsController::class, 'edit'])->name('reports.travelreports.edit')->middleware('permission:reports-travelreports-edit');
                Route::put('/update/{id}', [TravelreportsController::class, 'update'])->name('reports.travelreports.update')->middleware('permission:reports-travelreports-update');
                Route::get('/destroy/{id}', [TravelreportsController::class, 'destroy'])->name('reports.travelreports.destroy')->middleware('permission:reports-travelreports-destroy');
            });

            Route::prefix("taskreports")->group(function () {
                Route::get('/', [TaskreportsController::class, 'index'])->name('reports.taskreports.index')->middleware('permission:reports-taskreports-index');
                Route::get('/create', [TaskreportsController::class, 'create'])->name('reports.taskreports.create')->middleware('permission:reports-taskreports-create');
                Route::post('/store', [TaskreportsController::class, 'store'])->name('reports.taskreports.store')->middleware('permission:reports-taskreports-store');
                Route::get('/show/{id}', [TaskreportsController::class, 'show'])->name('reports.taskreports.show')->middleware('permission:reports-taskreports-show');
                Route::get('/edit/{id}', [TaskreportsController::class, 'edit'])->name('reports.taskreports.edit')->middleware('permission:reports-taskreports-edit');
                Route::put('/update/{id}', [TaskreportsController::class, 'update'])->name('reports.taskreports.update')->middleware('permission:reports-taskreports-update');
                Route::get('/destroy/{id}', [TaskreportsController::class, 'destroy'])->name('reports.taskreports.destroy')->middleware('permission:reports-taskreports-destroy');
            });


            Route::prefix("financereports")->group(function () {
                Route::get('/', [FinancereportsController::class, 'index'])->name('reports.financereports.index')->middleware('permission:reports-financereports-index');
                Route::get('/create', [FinancereportsController::class, 'create'])->name('reports.financereports.create')->middleware('permission:reports-financereports-create');
                Route::post('/store', [FinancereportsController::class, 'store'])->name('reports.financereports.store')->middleware('permission:reports-financereports-store');
                Route::get('/show/{id}', [FinancereportsController::class, 'show'])->name('reports.financereports.show')->middleware('permission:reports-financereports-show');
                Route::get('/edit/{id}', [FinancereportsController::class, 'edit'])->name('reports.financereports.edit')->middleware('permission:reports-financereports-edit');
                Route::put('/update/{id}', [FinancereportsController::class, 'update'])->name('reports.financereports.update')->middleware('permission:reports-financereports-update');
                Route::get('/destroy/{id}', [FinancereportsController::class, 'destroy'])->name('reports.financereports.destroy')->middleware('permission:reports-financereports-destroy');
            });

            Route::prefix("leavereports")->group(function () {
                Route::get('/', [LeavereportsController::class, 'index'])->name('reports.leavereports.index')->middleware('permission:reports-leavereports-index');
                Route::get('/create', [LeavereportsController::class, 'create'])->name('reports.leavereports.create')->middleware('permission:reports-leavereports-create');
                Route::post('/store', [LeavereportsController::class, 'store'])->name('reports.leavereports.store')->middleware('permission:reports-leavereports-store');
                Route::get('/show/{id}', [LeavereportsController::class, 'show'])->name('reports.leavereports.show')->middleware('permission:reports-leavereports-show');
                Route::get('/edit/{id}', [LeavereportsController::class, 'edit'])->name('reports.leavereports.edit')->middleware('permission:reports-leavereports-edit');
                Route::put('/update/{id}', [LeavereportsController::class, 'update'])->name('reports.leavereports.update')->middleware('permission:reports-leavereports-update');
                Route::get('/destroy/{id}', [LeavereportsController::class, 'destroy'])->name('reports.leavereports.destroy')->middleware('permission:reports-leavereports-destroy');
            });

            Route::prefix("expensesreports")->group(function () {
                Route::get('/', [ExpensesreportsController::class, 'index'])->name('reports.expensesreports.index')->middleware('permission:reports-expensesreports-index');
                Route::get('/create', [ExpensesreportsController::class, 'create'])->name('reports.expensesreports.create')->middleware('permission:reports-expensesreports-create');
                Route::post('/store', [ExpensesreportsController::class, 'store'])->name('reports.expensesreports.store')->middleware('permission:reports-expensesreports-store');
                Route::get('/show/{id}', [ExpensesreportsController::class, 'show'])->name('reports.expensesreports.show')->middleware('permission:reports-expensesreports-show');
                Route::get('/edit/{id}', [ExpensesreportsController::class, 'edit'])->name('reports.expensesreports.edit')->middleware('permission:reports-expensesreports-edit');
                Route::put('/update/{id}', [ExpensesreportsController::class, 'update'])->name('reports.expensesreports.update')->middleware('permission:reports-expensesreports-update');
                Route::get('/destroy/{id}', [ExpensesreportsController::class, 'destroy'])->name('reports.expensesreports.destroy')->middleware('permission:reports-expensesreports-destroy');
            });

            Route::prefix("attendancereports")->group(function () {
                Route::get('/', [AttendancereportsController::class, 'index'])->name('reports.attendancereports.index')->middleware('permission:reports-attendancereports-index');
                Route::get('/create', [AttendancereportsController::class, 'create'])->name('reports.attendancereports.create')->middleware('permission:reports-attendancereports-create');
                Route::post('/store', [AttendancereportsController::class, 'store'])->name('reports.attendancereports.store')->middleware('permission:reports-attendancereports-store');
                Route::get('/show/{id}', [AttendancereportsController::class, 'show'])->name('reports.attendancereports.show')->middleware('permission:reports-attendancereports-show');
                Route::get('/edit/{id}', [AttendancereportsController::class, 'edit'])->name('reports.attendancereports.edit')->middleware('permission:reports-attendancereports-edit');
                Route::put('/update/{id}', [AttendancereportsController::class, 'update'])->name('reports.attendancereports.update')->middleware('permission:reports-attendancereports-update');
                Route::get('/destroy/{id}', [AttendancereportsController::class, 'destroy'])->name('reports.attendancereports.destroy')->middleware('permission:reports-attendancereports-destroy');
            });
        }
    );

    Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
});




require __DIR__ . '/auth.php';
require __DIR__ . '/setting.php';
