<?php
//Start of Master Controllers
use App\Http\Controllers\Assets\FixedassetsController;
use App\Http\Controllers\Hr\EmployeeonboardingController;
use App\Http\Controllers\Master\CityController;
use App\Http\Controllers\Master\CountryController;
use App\Http\Controllers\Master\DepartmentController as MasterDepartmentController;
use App\Http\Controllers\Master\DistrictController;
use App\Http\Controllers\Master\FleetController;
use App\Http\Controllers\Master\HolidaytypesController;
use App\Http\Controllers\Master\NationalityController;
use App\Http\Controllers\Master\OrganizationcategoryController;
use App\Http\Controllers\Master\EmploymentsizecategoryController;
use App\Http\Controllers\Master\JobTitleController;
use App\Http\Controllers\Master\OrganizationtypeController;
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

Route::prefix("master")->group(
    function () {
        Route::prefix("module")->group(function () {
            Route::get('/', [ModuleController::class, 'index'])->name('master.module.index')->middleware('permission:master-module-index');
            Route::get('/create', [ModuleController::class, 'create'])->name('master.module.create')->middleware('permission:master-module-create');
            Route::post('/store', [ModuleController::class, 'store'])->name('master.module.store')->middleware('permission:master-module-store');
            Route::get('/show/{id}', [ModuleController::class, 'show'])->name('master.module.show')->middleware('permission:master-module-show');
            Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('master.module.edit')->middleware('permission:master-module-edit');
            Route::put('/update/{id}', [ModuleController::class, 'update'])->name('master.module.update')->middleware('permission:master-module-update');
            Route::get('/destroy/{id}', [ModuleController::class, 'destroy'])->name('master.module.destroy')->middleware('permission:master-module-destroy');
        });

        Route::prefix("country")->group(function () {
            Route::get('/', [CountryController::class, 'index'])->name('master.country.index')->middleware('permission:master-country-index');
            Route::get('/create', [CountryController::class, 'create'])->name('master.country.create')->middleware('permission:master-country-create');
            Route::post('/store', [CountryController::class, 'store'])->name('master.country.store')->middleware('permission:master-country-store');
            Route::get('/show/{id}', [CountryController::class, 'show'])->name('master.country.show')->middleware('permission:master-country-show');
            Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('master.country.edit')->middleware('permission:master-country-edit');
            Route::put('/update/{id}', [CountryController::class, 'update'])->name('master.country.update')->middleware('permission:master-country-update');
            Route::get('/destroy/{id}', [CountryController::class, 'destroy'])->name('master.country.destroy')->middleware('permission:master-country-destroy');
        });

        Route::prefix("state")->group(
            function () {
                Route::get('/', [StateController::class, 'index'])->name('master.state.index')->middleware('permission:master-state-index');
                Route::get('/create', [StateController::class, 'create'])->name('master.state.create')->middleware('permission:master-state-create');
                Route::post('/store', [StateController::class, 'store'])->name('master.state.store')->middleware('permission:master-state-store');
                Route::get('/show/{id}', [StateController::class, 'show'])->name('master.state.show')->middleware('permission:master-state-show');
                Route::get('/edit/{id}', [StateController::class, 'edit'])->name('master.state.edit')->middleware('permission:master-state-edit');
                Route::put('/update/{id}', [StateController::class, 'update'])->name('master.state.update')->middleware('permission:master-state-update');
                Route::get('/destroy/{id}', [StateController::class, 'destroy'])->name('master.state.destroy')->middleware('permission:master-state-destroy');
                Route::get('get-states', [StateController::class, 'getState'])->name('master.state.getState');//->middleware('permission:master-state-getstate');
            }
        );

        Route::prefix("district")->group(
            function () {
                Route::get('/', [DistrictController::class, 'index'])->name('master.district.index')->middleware('permission:master-district-index');
                Route::get('/create', [DistrictController::class, 'create'])->name('master.district.create')->middleware('permission:master-district-create');
                Route::post('/store', [DistrictController::class, 'store'])->name('master.district.store')->middleware('permission:master-district-store');
                Route::get('/show/{id}', [DistrictController::class, 'show'])->name('master.district.show')->middleware('permission:master-district-store');
                Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('master.district.edit')->middleware('permission:master-district-edit');
                Route::put('/update/{id}', [DistrictController::class, 'update'])->name('master.district.update')->middleware('permission:master-district-update');
                Route::get('/destroy/{id}', [DistrictController::class, 'destroy'])->name('master.district.destroy')->middleware('permission:master-district-destroy');
                Route::get('get-districts', [DistrictController::class, 'getDistrict'])->name('master.state.getDistrict');//->middleware('permission:master-district-getdistrict');
            }
        );

        Route::prefix("city")->group(
            function () {
                Route::get('/', [CityController::class, 'index'])->name('master.city.index')->middleware('permission:master-city-index');
                Route::get('/create', [CityController::class, 'create'])->name('master.city.create')->middleware('permission:master-city-create');
                Route::post('/store', [CityController::class, 'store'])->name('master.city.store')->middleware('permission:master-city-store');
                Route::get('/show/{id}', [CityController::class, 'show'])->name('master.city.show')->middleware('permission:master-city-show');
                Route::get('/edit/{id}', [CityController::class, 'edit'])->name('master.city.edit')->middleware('permission:master-city-edit');
                Route::put('/update/{id}', [CityController::class, 'update'])->name('master.city.update')->middleware('permission:master-city-update');
                Route::get('/destroy/{id}', [CityController::class, 'destroy'])->name('master.city.destroy')->middleware('permission:master-city-destroy');

                Route::get('/checkvalidation', [CityController::class, 'checkValidation'])->name('master.city.checkValidation')->middleware('permission:master-city-checkValidation');

                Route::get('get-city', [CityController::class, 'getCity'])->name('master.state.getCity');//->middleware('permission:master-city-getCity');
            }
        );

        Route::prefix("leavetype")->group(function () {
            Route::get('/', [LeavetypeController::class, 'index'])->name('master.leavetype.index')->middleware('permission:master-leavetype-index');
            Route::get('/create', [LeavetypeController::class, 'create'])->name('master.leavetype.create')->middleware('permission:master-leavetype-create');
            Route::post('/store', [LeavetypeController::class, 'store'])->name('master.leavetype.store')->middleware('permission:master-leavetype-store');
            Route::get('/show/{id}', [LeavetypeController::class, 'show'])->name('master.leavetype.show')->middleware('permission:master-leavetype-show');
            Route::get('/edit/{id}', [LeavetypeController::class, 'edit'])->name('master.leavetype.edit')->middleware('permission:master-leavetype-edit');
            Route::put('/update/{id}', [LeavetypeController::class, 'update'])->name('master.leavetype.update')->middleware('permission:master-leavetype-update');
            Route::get('/destroy/{id}', [LeavetypeController::class, 'destroy'])->name('master.leavetype.destroy')->middleware('permission:master-leavetype-destroy');
            Route::post('/paidleave', [LeavetypeController::class, 'addPaidLeave'])->name('master.leavetype.addPaidLeave');
        });



        Route::prefix("nationality")->group(
            function () {
                Route::get('/', [NationalityController::class, 'index'])->name('master.nationality.index')->middleware('permission:master-nationality-index');
                Route::get('/create', [NationalityController::class, 'create'])->name('master.nationality.create')->middleware('permission:master-nationality-create');
                Route::post('/store', [NationalityController::class, 'store'])->name('master.nationality.store')->middleware('permission:master-nationality-store');
                Route::get('/show/{id}', [NationalityController::class, 'show'])->name('master.nationality.show')->middleware('permission:master-nationality-store');
                Route::get('/edit/{id}', [NationalityController::class, 'edit'])->name('master.nationality.edit')->middleware('permission:master-nationality-edit');
                Route::put('/update/{id}', [NationalityController::class, 'update'])->name('master.nationality.update')->middleware('permission:master-nationality-update');
                Route::get('/destroy/{id}', [NationalityController::class, 'destroy'])->name('master.nationality.destroy')->middleware('permission:master-nationality-destroy');
            }
        );
        Route::prefix("policy")->group(
            function () {
                Route::get('/', [PolicyController::class, 'index'])->name('master.policy.index')->middleware('permission:master-policy-index');
                Route::get('/create', [PolicyController::class, 'create'])->name('master.policy.create')->middleware('permission:master-policy-create');
                Route::post('/store', [PolicyController::class, 'store'])->name('master.policy.store')->middleware('permission:master-policy-store');
                Route::get('/show/{id}', [PolicyController::class, 'show'])->name('master.policy.show')->middleware('permission:master-policy-store');
                Route::get('/edit/{id}', [PolicyController::class, 'edit'])->name('master.policy.edit')->middleware('permission:master-policy-edit');
                Route::put('/update/{id}', [PolicyController::class, 'update'])->name('master.policy.update')->middleware('permission:master-policy-update');
                Route::get('/destroy/{id}', [PolicyController::class, 'destroy'])->name('master.policy.destroy')->middleware('permission:master-policy-destroy');
            }
        );


        Route::prefix("organizationtype")->group(function () {
            Route::get('/', [OrganizationtypeController::class, 'index'])->name('master.organizationtype.index')->middleware('permission:master-organizationtype-index');
            Route::get('/create', [OrganizationtypeController::class, 'create'])->name('master.organizationtype.create')->middleware('permission:master-organizationtype-create');
            Route::post('/store', [OrganizationtypeController::class, 'store'])->name('master.organizationtype.store')->middleware('permission:master-organizationtype-store');
            Route::get('/show/{id}', [OrganizationtypeController::class, 'show'])->name('master.organizationtype.show')->middleware('permission:master-organizationtype-show');
            Route::get('/edit/{id}', [OrganizationtypeController::class, 'edit'])->name('master.organizationtype.edit')->middleware('permission:master-organizationtype-edit');
            Route::put('/update/{id}', [OrganizationtypeController::class, 'update'])->name('master.organizationtype.update')->middleware('permission:master-organizationtype-update');
            Route::get('/destroy/{id}', [OrganizationtypeController::class, 'destroy'])->name('master.organizationtype.destroy')->middleware('permission:master-organizationtype-destory');
        });


        Route::prefix("ownership")->group(
            function () {
                Route::get('/', [OwnershipController::class, 'index'])->name('master.ownership.index')->middleware('permission:master-ownership-index');
                Route::get('/create', [OwnershipController::class, 'create'])->name('master.ownership.create')->middleware('permission:master-ownership-create');
                Route::post('/store', [OwnershipController::class, 'store'])->name('master.ownership.store')->middleware('permission:master-ownership-store');
                Route::get('/show/{id}', [OwnershipController::class, 'show'])->name('master.ownership.show')->middleware('permission:master-ownership-show');
                Route::get('/edit/{id}', [OwnershipController::class, 'edit'])->name('master.ownership.edit')->middleware('permission:master-ownership-edit');
                Route::put('/update/{id}', [OwnershipController::class, 'update'])->name('master.ownership.update')->middleware('permission:master-ownership-update');
                Route::get('/destroy/{id}', [OwnershipController::class, 'destroy'])->name('master.ownership.destroy')->middleware('permission:master-ownership-destroy');
            }
        );

        Route::prefix("traveltype")->group(function () {
            Route::get('/', [TraveltypeController::class, 'index'])->name('master.traveltype.index')->middleware('permission:master-traveltype-index');
            Route::get('/create', [TraveltypeController::class, 'create'])->name('master.traveltype.create')->middleware('permission:master-traveltype-create');
            Route::post('/store', [TraveltypeController::class, 'store'])->name('master.traveltype.store')->middleware('permission:master-traveltype-store');
            Route::get('/show/{id}', [TraveltypeController::class, 'show'])->name('master.traveltype.show')->middleware('permission:master-traveltype-show');
            Route::get('/edit/{id}', [TraveltypeController::class, 'edit'])->name('master.traveltype.edit')->middleware('permission:master-traveltype-edit');
            Route::put('/update/{id}', [TraveltypeController::class, 'update'])->name('master.traveltype.update')->middleware('permission:master-traveltype-update');
            Route::get('/destroy/{id}', [TraveltypeController::class, 'destroy'])->name('master.traveltype.destroy')->middleware('permission:master-traveltype-destroy');
        });

        Route::prefix("employmentSizeCategory")->group(
            function () {
                Route::get('/', [EmploymentSizeCategoryController::class, 'index'])->name('master.employmentsizecategory.index')->middleware('permission:master-employmentsizecategory-index');
                Route::get('/create', [EmploymentSizeCategoryController::class, 'create'])->name('master.employmentsizecategory.create')->middleware('permission:master-employmentsizecategory-create');
                Route::post('/store', [EmploymentSizeCategoryController::class, 'store'])->name('master.employmentsizecategory.store')->middleware('permission:master-employmentsizecategory-store');
                Route::get('/show/{id}', [EmploymentSizeCategoryController::class, 'show'])->name('master.employmentsizecategory.show')->middleware('permission:master-employmentsizecategory-show');
                Route::get('/edit/{id}', [EmploymentSizeCategoryController::class, 'edit'])->name('master.employmentsizecategory.edit')->middleware('permission:master-employmentsizecategory-edit');
                Route::put('/update/{id}', [EmploymentSizeCategoryController::class, 'update'])->name('master.employmentsizecategory.update')->middleware('permission:master-employmentsizecategory-update');
                Route::get('/destroy/{id}', [EmploymentSizeCategoryController::class, 'destroy'])->name('master.employmentsizecategory.destroy')->middleware('permission:master-employmentsizecategory-destroy');
            });
        Route::prefix("departmenttype")->group(function () {
            Route::get('/', [DepartmenttypeController::class, 'index'])->name('master.departmenttype.index')->middleware('permission:master-departmenttype-index');
            Route::get('/create', [DepartmenttypeController::class, 'create'])->name('master.departmenttype.create')->middleware('permission:master-departmenttype-create');
            Route::post('/store', [DepartmenttypeController::class, 'store'])->name('master.departmenttype.store')->middleware('permission:master-departmenttype-store');
            Route::get('/show/{id}', [DepartmenttypeController::class, 'show'])->name('master.departmenttype.show')->middleware('permission:master-departmenttype-show');
            Route::get('/edit/{id}', [DepartmenttypeController::class, 'edit'])->name('master.departmenttype.edit')->middleware('permission:master-departmenttype-edit');
            Route::put('/update/{id}', [DepartmenttypeController::class, 'update'])->name('master.departmenttype.update')->middleware('permission:master-departmenttype-update');
            Route::get('/destroy/{id}', [DepartmenttypeController::class, 'destroy'])->name('master.departmenttype.destroy')->middleware('permission:master-departmenttype-destroy');
        });


        Route::prefix("organizationCategory")->group(
            function () {
                Route::get('/', [OrganizationCategoryController::class, 'index'])->name('master.organizationcategory.index')->middleware('permission:master-departmenttype-index');
                Route::get('/create', [OrganizationCategoryController::class, 'create'])->name('master.organizationcategory.create')->middleware('permission:master-departmenttype-create');
                Route::post('/store', [OrganizationCategoryController::class, 'store'])->name('master.organizationcategory.store')->middleware('permission:master-departmenttype-store');
                Route::get('/show/{id}', [OrganizationCategoryController::class, 'show'])->name('master.organizationcategory.show')->middleware('permission:master-departmenttype-show');
                Route::get('/edit/{id}', [OrganizationCategoryController::class, 'edit'])->name('master.organizationcategory.edit')->middleware('permission:master-departmenttype-edit');
                Route::put('/update/{id}', [OrganizationCategoryController::class, 'update'])->name('master.organizationcategory.update')->middleware('permission:master-departmenttype-update');
                Route::get('/destroy/{id}', [OrganizationCategoryController::class, 'destroy'])->name('master.organizationcategory.destroy')->middleware('permission:master-departmenttype-destroy');
            });

        Route::prefix("jobTitle")->group(
            function () {
                Route::get('/', [JobTitleController::class, 'index'])->name('master.jobtitle.index')->middleware('permission:master-jobtitle-index');
                Route::get('/create', [JobTitleController::class, 'create'])->name('master.jobtitle.create')->middleware('permission:master-jobtitle-create');
                Route::post('/store', [JobTitleController::class, 'store'])->name('master.jobtitle.store')->middleware('permission:master-jobtitle-store');
                Route::get('/show/{id}', [JobTitleController::class, 'show'])->name('master.jobtitle.show')->middleware('permission:master-jobtitle-show');
                Route::get('/edit/{id}', [JobTitleController::class, 'edit'])->name('master.jobtitle.edit')->middleware('permission:master-jobtitle-edit');
                Route::put('/update/{id}', [JobTitleController::class, 'update'])->name('master.jobtitle.update')->middleware('permission:master-jobtitle-update');
                Route::get('/destroy/{id}', [JobTitleController::class, 'destroy'])->name('master.jobtitle.destroy')->middleware('permission:master-jobtitle-destroy');
            });


        Route::prefix("holidayTypes")->group(
            function () {
                Route::get('/', [HolidayTypesController::class, 'index'])->name('master.holidaytypes.index')->middleware('permission:master-holidaytypes-index');
                Route::get('/create', [HolidayTypesController::class, 'create'])->name('master.holidaytypes.create')->middleware('permission:master-holidaytypes-create');
                Route::post('/store', [HolidayTypesController::class, 'store'])->name('master.holidaytypes.store')->middleware('permission:master-holidaytypes-store');
                Route::get('/show/{id}', [HolidayTypesController::class, 'show'])->name('master.holidaytypes.show')->middleware('permission:master-holidaytypes-show');
                Route::get('/edit/{id}', [HolidayTypesController::class, 'edit'])->name('master.holidaytypes.edit')->middleware('permission:master-holidaytypes-edit');
                Route::put('/update/{id}', [HolidayTypesController::class, 'update'])->name('master.holidaytypes.update')->middleware('permission:master-holidaytypes-update');
                Route::get('/destroy/{id}', [HolidayTypesController::class, 'destroy'])->name('master.holidaytypes.destroy')->middleware('permission:master-holidaytypes-destroy');
            });

        Route::prefix("fleet")->group(
            function () {
                Route::get('/', [FleetController::class, 'index'])->name('master.fleet.index')->middleware('permission:master-fleet-index');
                Route::get('/create', [FleetController::class, 'create'])->name('master.fleet.create')->middleware('permission:master-fleet-create');
                Route::post('/store', [FleetController::class, 'store'])->name('master.fleet.store')->middleware('permission:master-fleet-store');
                Route::get('/show/{id}', [FleetController::class, 'show'])->name('master.fleet.show')->middleware('permission:master-fleet-show');
                Route::get('/edit/{id}', [FleetController::class, 'edit'])->name('master.fleet.edit')->middleware('permission:master-fleet-edit');
                Route::put('/update/{id}', [FleetController::class, 'update'])->name('master.fleet.update')->middleware('permission:master-fleet-update');
                Route::get('/destroy/{id}', [FleetController::class, 'destroy'])->name('master.fleet.destroy')->middleware('permission:master-fleet-destroy');
            });

        Route::prefix("department")->group(
            function () {
                Route::get('/', [MasterDepartmentController::class, 'index'])->name('master.department.index')->middleware('permission:master-department-indedx');
                Route::get('/create', [MasterDepartmentController::class, 'create'])->name('master.department.create')->middleware('permission:master-department-create');
                Route::post('/store', [MasterDepartmentController::class, 'store'])->name('master.department.store')->middleware('permission:master-department-store');
                Route::get('/show/{id}', [MasterDepartmentController::class, 'show'])->name('master.department.show')->middleware('permission:master-department-show');
                Route::get('/edit/{id}', [MasterDepartmentController::class, 'edit'])->name('master.department.edit')->middleware('permission:master-department-edit');
                Route::put('/update/{id}', [MasterDepartmentController::class, 'update'])->name('master.department.update')->middleware('permission:master-department-update');
                Route::get('/destroy/{id}', [MasterDepartmentController::class, 'destroy'])->name('master.department.destroy')->middleware('permission:master-department-destroy');
            }
        );

        Route::prefix("attendanceFrom")->group(
            function () {
                Route::get('/', [AttendanceFromController::class, 'index'])->name('master.attendancefrom.index')->middleware('permission:master-attendancefrom-index');
                Route::get('/create', [AttendanceFromController::class, 'create'])->name('master.attendancefrom.create')->middleware('permission:master-attendancefrom-create');
                Route::post('/store', [AttendanceFromController::class, 'store'])->name('master.attendancefrom.store')->middleware('permission:master-attendancefrom-store');
                Route::get('/show/{id}', [AttendanceFromController::class, 'show'])->name('master.attendancefrom.show')->middleware('permission:master-attendancefrom-show');
                Route::get('/edit/{id}', [AttendanceFromController::class, 'edit'])->name('master.attendancefrom.edit')->middleware('permission:master-attendancefrom-edit');
                Route::put('/update/{id}', [AttendanceFromController::class, 'update'])->name('master.attendancefrom.update')->middleware('permission:master-attendancefrom-update');
                Route::get('/destroy/{id}', [AttendanceFromController::class, 'destroy'])->name('master.attendancefrom.destroy')->middleware('permission:master-attendancefrom-destroy');
            }
        );


        Route::get('usersettings', [App\Http\Controllers\Settings\UserSettingController::class, 'index'])->name('usersettings.index')->middleware('permission:master-usersettings-index');
        Route::put('usersettings/update', [App\Http\Controllers\Settings\UserSettingController::class, 'update'])->name('usersettings.update')->middleware('permission:master-usersettings-update');
    }
);
//End of master Routing
