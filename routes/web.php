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
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Travelfleet\DriverrosterController;
use App\Http\Controllers\Work\TimelogController;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\OrganizationSettings\OrganizationSettings;
use App\Models\User;

// Route::get('/dashboard', function () {    return view('omis\welcome');});
Route::get('/', function () {
    return redirect('/login');
});
Route::get('calander', function () {

    return view('omis.calander.index');
});

Route::get('/user/dashboard', function () {
    return view('employee\dashboard');
})->middleware(['auth'])->name('employee.dashboard');

Route::get('/user/attandance', function () {
    $users = User::where('id', auth()->user()->id)->get();
    return view('employee\attandance\index', compact('users'));
})->name('employee.attandance.index');

Route::get('/user/leaves', function () {
    $data = Leaveapplication::where('status', '<>', -1)->where('employee_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
    return view('employee\leaves\ajax_index', compact('data'));
})->name('employee.leaves.index');

Route::get('/organization/dashboard', function () {
    return view('organization\dashboard');
})->middleware(['auth'])->name('organization.dashboard');



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $employees = Employee::where('status','<>',-1)->orderBy('created_at','desc')->get();
    return view('omis\welcome',compact('employees'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::prefix("form")->group(
        function () {
            Route::get('/', [GeneralFormController::class, 'create'])->name('form.create');
            Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
            Route::get('/make-table-nullable', [GeneralFormController::class, 'getTableNullablecreate'])->name('table.create');
            Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
        }
    );

    /**
     * Start of Master Routing
     */

    Route::prefix("master")->group(
        function () {

            Route::prefix("test")->group(function () {
                Route::get('/', [TestController::class, 'index'])->name('test.test.index');
                Route::get('/create', [TestController::class, 'create'])->name('test.test.create');
                Route::post('/store', [TestController::class, 'store'])->name('test.test.store');
                Route::get('/show/{id}', [TestController::class, 'show'])->name('test.test.show');
                Route::get('/edit/{id}', [TestController::class, 'edit'])->name('test.test.edit');
                Route::put('/update/{id}', [TestController::class, 'update'])->name('test.test.update');
                Route::delete('/destroy/{id}', [TestController::class, 'destroy'])->name('test.test.destroy');
            });


            Route::prefix("country")->group(function () {
                Route::get('/', [CountryController::class, 'index'])->name('master.country.index');
                Route::get('/create', [CountryController::class, 'create'])->name('master.country.create');
                Route::post('/store', [CountryController::class, 'store'])->name('master.country.store');
                Route::get('/show/{id}', [CountryController::class, 'show'])->name('master.country.show');
                Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('master.country.edit');
                Route::put('/update/{id}', [CountryController::class, 'update'])->name('master.country.update');
                Route::delete('/destroy/{id}', [CountryController::class, 'destroy'])->name('master.country.destroy');
            });

            Route::prefix("leavetype")->group(function () {
                Route::get('/', [LeavetypeController::class, 'index'])->name('master.leavetype.index');
                Route::get('/create', [LeavetypeController::class, 'create'])->name('master.leavetype.create');
                Route::post('/store', [LeavetypeController::class, 'store'])->name('master.leavetype.store');
                Route::get('/show/{id}', [LeavetypeController::class, 'show'])->name('master.leavetype.show');
                Route::get('/edit/{id}', [LeavetypeController::class, 'edit'])->name('master.leavetype.edit');
                Route::put('/update/{id}', [LeavetypeController::class, 'update'])->name('master.leavetype.update');
                Route::delete('/destroy/{id}', [LeavetypeController::class, 'destroy'])->name('master.leavetype.destroy');
            });

            Route::prefix("city")->group(
                function () {
                    Route::get('/', [CityController::class, 'index'])->name('master.city.index');
                    Route::get('/create', [CityController::class, 'create'])->name('master.city.create');
                    Route::post('/store', [CityController::class, 'store'])->name('master.city.store');
                    Route::get('/show/{id}', [CityController::class, 'show'])->name('master.city.show');
                    Route::get('/edit/{id}', [CityController::class, 'edit'])->name('master.city.edit');
                    Route::put('/update/{id}', [CityController::class, 'update'])->name('master.city.update');
                    Route::delete('/destroy/{id}', [CityController::class, 'destroy'])->name('master.city.destroy');

                    Route::get('/checkvalidation', [CityController::class, 'checkValidation'])->name('master.city.checkValidation');
                }
            );

            Route::prefix("district")->group(
                function () {
                    Route::get('/', [DistrictController::class, 'index'])->name('master.district.index');
                    Route::get('/create', [DistrictController::class, 'create'])->name('master.district.create');
                    Route::post('/store', [DistrictController::class, 'store'])->name('master.district.store');
                    Route::get('/show/{id}', [DistrictController::class, 'show'])->name('master.district.show');
                    Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('master.district.edit');
                    Route::put('/update/{id}', [DistrictController::class, 'update'])->name('master.district.update');
                    Route::delete('/destroy/{id}', [DistrictController::class, 'destroy'])->name('master.district.destroy');
                }
            );
            Route::prefix("nationality")->group(
                function () {
                    Route::get('/', [NationalityController::class, 'index'])->name('master.nationality.index');
                    Route::get('/create', [NationalityController::class, 'create'])->name('master.nationality.create');
                    Route::post('/store', [NationalityController::class, 'store'])->name('master.nationality.store');
                    Route::get('/show/{id}', [NationalityController::class, 'show'])->name('master.nationality.show');
                    Route::get('/edit/{id}', [NationalityController::class, 'edit'])->name('master.nationality.edit');
                    Route::put('/update/{id}', [NationalityController::class, 'update'])->name('master.nationality.update');
                    Route::delete('/destroy/{id}', [NationalityController::class, 'destroy'])->name('master.nationality.destroy');
                }
            );
            Route::prefix("policy")->group(
                function () {
                    Route::get('/', [PolicyController::class, 'index'])->name('master.policy.index');
                    Route::get('/create', [PolicyController::class, 'create'])->name('master.policy.create');
                    Route::post('/store', [PolicyController::class, 'store'])->name('master.policy.store');
                    Route::get('/show/{id}', [PolicyController::class, 'show'])->name('master.policy.show');
                    Route::get('/edit/{id}', [PolicyController::class, 'edit'])->name('master.policy.edit');
                    Route::put('/update/{id}', [PolicyController::class, 'update'])->name('master.policy.update');
                    Route::delete('/destroy/{id}', [PolicyController::class, 'destroy'])->name('master.policy.destroy');
                }
            );

            Route::prefix("state")->group(
                function () {
                    Route::get('/', [StateController::class, 'index'])->name('master.state.index');
                    Route::get('/create', [StateController::class, 'create'])->name('master.state.create');
                    Route::post('/store', [StateController::class, 'store'])->name('master.state.store');
                    Route::get('/show/{id}', [StateController::class, 'show'])->name('master.state.show');
                    Route::get('/edit/{id}', [StateController::class, 'edit'])->name('master.state.edit');
                    Route::put('/update/{id}', [StateController::class, 'update'])->name('master.state.update');
                    Route::delete('/destroy/{id}', [StateController::class, 'destroy'])->name('master.state.destroy');
                }
            );

            Route::prefix("organizationtype")->group(function () {
                Route::get('/', [OrganizationtypeController::class, 'index'])->name('master.organizationtype.index');
                Route::get('/create', [OrganizationtypeController::class, 'create'])->name('master.organizationtype.create');
                Route::post('/store', [OrganizationtypeController::class, 'store'])->name('master.organizationtype.store');
                Route::get('/show/{id}', [OrganizationtypeController::class, 'show'])->name('master.organizationtype.show');
                Route::get('/edit/{id}', [OrganizationtypeController::class, 'edit'])->name('master.organizationtype.edit');
                Route::put('/update/{id}', [OrganizationtypeController::class, 'update'])->name('master.organizationtype.update');
                Route::delete('/destroy/{id}', [OrganizationtypeController::class, 'destroy'])->name('master.organizationtype.destroy');
            });




            Route::prefix("ownership")->group(
                function () {
                    Route::get('/', [OwnershipController::class, 'index'])->name('master.ownership.index');
                    Route::get('/create', [OwnershipController::class, 'create'])->name('master.ownership.create');
                    Route::post('/store', [OwnershipController::class, 'store'])->name('master.ownership.store');
                    Route::get('/show/{id}', [OwnershipController::class, 'show'])->name('master.ownership.show');
                    Route::get('/edit/{id}', [OwnershipController::class, 'edit'])->name('master.ownership.edit');
                    Route::put('/update/{id}', [OwnershipController::class, 'update'])->name('master.ownership.update');
                    Route::delete('/destroy/{id}', [OwnershipController::class, 'destroy'])->name('master.ownership.destroy');
                }
            );

            Route::prefix("traveltype")->group(function () {
                Route::get('/', [TraveltypeController::class, 'index'])->name('master.traveltype.index');
                Route::get('/create', [TraveltypeController::class, 'create'])->name('master.traveltype.create');
                Route::post('/store', [TraveltypeController::class, 'store'])->name('master.traveltype.store');
                Route::get('/show/{id}', [TraveltypeController::class, 'show'])->name('master.traveltype.show');
                Route::get('/edit/{id}', [TraveltypeController::class, 'edit'])->name('master.traveltype.edit');
                Route::put('/update/{id}', [TraveltypeController::class, 'update'])->name('master.traveltype.update');
                Route::delete('/destroy/{id}', [TraveltypeController::class, 'destroy'])->name('master.traveltype.destroy');
            });

            Route::prefix("employmentSizeCategory")->group(
                function () {
                    Route::get('/', [EmploymentSizeCategoryController::class, 'index'])->name('master.employmentsizecategory.index');
                    Route::get('/create', [EmploymentSizeCategoryController::class, 'create'])->name('master.employmentsizecategory.create');
                    Route::post('/store', [EmploymentSizeCategoryController::class, 'store'])->name('master.employmentsizecategory.store');
                    Route::get('/show/{id}', [EmploymentSizeCategoryController::class, 'show'])->name('master.employmentsizecategory.show');
                    Route::get('/edit/{id}', [EmploymentSizeCategoryController::class, 'edit'])->name('master.employmentsizecategory.edit');
                    Route::put('/update/{id}', [EmploymentSizeCategoryController::class, 'update'])->name('master.employmentsizecategory.update');
                    Route::delete('/destroy/{id}', [EmploymentSizeCategoryController::class, 'destroy'])->name('master.employmentsizecategory.destroy');
                }
            );
            Route::prefix("departmenttype")->group(function () {
                Route::get('/', [DepartmenttypeController::class, 'index'])->name('master.departmenttype.index');
                Route::get('/create', [DepartmenttypeController::class, 'create'])->name('master.departmenttype.create');
                Route::post('/store', [DepartmenttypeController::class, 'store'])->name('master.departmenttype.store');
                Route::get('/show/{id}', [DepartmenttypeController::class, 'show'])->name('master.departmenttype.show');
                Route::get('/edit/{id}', [DepartmenttypeController::class, 'edit'])->name('master.departmenttype.edit');
                Route::put('/update/{id}', [DepartmenttypeController::class, 'update'])->name('master.departmenttype.update');
                Route::delete('/destroy/{id}', [DepartmenttypeController::class, 'destroy'])->name('master.departmenttype.destroy');
            });


            Route::prefix("organizationCategory")->group(
                function () {
                    Route::get('/', [OrganizationCategoryController::class, 'index'])->name('master.organizationcategory.index');
                    Route::get('/create', [OrganizationCategoryController::class, 'create'])->name('master.organizationcategory.create');
                    Route::post('/store', [OrganizationCategoryController::class, 'store'])->name('master.organizationcategory.store');
                    Route::get('/show/{id}', [OrganizationCategoryController::class, 'show'])->name('master.organizationcategory.show');
                    Route::get('/edit/{id}', [OrganizationCategoryController::class, 'edit'])->name('master.organizationcategory.edit');
                    Route::put('/update/{id}', [OrganizationCategoryController::class, 'update'])->name('master.organizationcategory.update');
                    Route::delete('/destroy/{id}', [OrganizationCategoryController::class, 'destroy'])->name('master.organizationcategory.destroy');
                }
            );
            Route::prefix("jobTitle")->group(
                function () {
                    Route::get('/', [JobTitleController::class, 'index'])->name('master.jobtitle.index');
                    Route::get('/create', [JobTitleController::class, 'create'])->name('master.jobtitle.create');
                    Route::post('/store', [JobTitleController::class, 'store'])->name('master.jobtitle.store');
                    Route::get('/show/{id}', [JobTitleController::class, 'show'])->name('master.jobtitle.show');
                    Route::get('/edit/{id}', [JobTitleController::class, 'edit'])->name('master.jobtitle.edit');
                    Route::put('/update/{id}', [JobTitleController::class, 'update'])->name('master.jobtitle.update');
                    Route::delete('/destroy/{id}', [JobTitleController::class, 'destroy'])->name('master.jobtitle.destroy');
                }
            );


            Route::prefix("holidayTypes")->group(
                function () {
                    Route::get('/', [HolidayTypesController::class, 'index'])->name('master.holidaytypes.index');
                    Route::get('/create', [HolidayTypesController::class, 'create'])->name('master.holidaytypes.create');
                    Route::post('/store', [HolidayTypesController::class, 'store'])->name('master.holidaytypes.store');
                    Route::get('/show/{id}', [HolidayTypesController::class, 'show'])->name('master.holidaytypes.show');
                    Route::get('/edit/{id}', [HolidayTypesController::class, 'edit'])->name('master.holidaytypes.edit');
                    Route::put('/update/{id}', [HolidayTypesController::class, 'update'])->name('master.holidaytypes.update');
                    Route::delete('/destroy/{id}', [HolidayTypesController::class, 'destroy'])->name('master.holidaytypes.destroy');
                }
            );

            Route::prefix("fleet")->group(
                function () {
                    Route::get('/', [FleetController::class, 'index'])->name('master.fleet.index');
                    Route::get('/create', [FleetController::class, 'create'])->name('master.fleet.create');
                    Route::post('/store', [FleetController::class, 'store'])->name('master.fleet.store');
                    Route::get('/show/{id}', [FleetController::class, 'show'])->name('master.fleet.show');
                    Route::get('/edit/{id}', [FleetController::class, 'edit'])->name('master.fleet.edit');
                    Route::put('/update/{id}', [FleetController::class, 'update'])->name('master.fleet.update');
                    Route::delete('/destroy/{id}', [FleetController::class, 'destroy'])->name('master.fleet.destroy');
                }
            );

            Route::prefix("department")->group(
                function () {
                    Route::get('/', [MasterDepartmentController::class, 'index'])->name('master.department.index');
                    Route::get('/create', [MasterDepartmentController::class, 'create'])->name('master.department.create');
                    Route::post('/store', [MasterDepartmentController::class, 'store'])->name('master.department.store');
                    Route::get('/show/{id}', [MasterDepartmentController::class, 'show'])->name('master.department.show');
                    Route::get('/edit/{id}', [MasterDepartmentController::class, 'edit'])->name('master.department.edit');
                    Route::put('/update/{id}', [MasterDepartmentController::class, 'update'])->name('master.department.update');
                    Route::delete('/destroy/{id}', [MasterDepartmentController::class, 'destroy'])->name('master.department.destroy');
                }
            );

            Route::prefix("attendanceFrom")->group(
                function () {
                    Route::get('/', [AttendanceFromController::class, 'index'])->name('master.attendancefrom.index');
                    Route::get('/create', [AttendanceFromController::class, 'create'])->name('master.attendancefrom.create');
                    Route::post('/store', [AttendanceFromController::class, 'store'])->name('master.attendancefrom.store');
                    Route::get('/show/{id}', [AttendanceFromController::class, 'show'])->name('master.attendancefrom.show');
                    Route::get('/edit/{id}', [AttendanceFromController::class, 'edit'])->name('master.attendancefrom.edit');
                    Route::put('/update/{id}', [AttendanceFromController::class, 'update'])->name('master.attendancefrom.update');
                    Route::delete('/destroy/{id}', [AttendanceFromController::class, 'destroy'])->name('master.attendancefrom.destroy');
                }
            );


            Route::get('usersettings', [App\Http\Controllers\Settings\UserSettingController::class, 'index'])->name('usersettings.index');
            Route::put('usersettings/update', [App\Http\Controllers\Settings\UserSettingController::class, 'update'])->name('usersettings.update');
        }
    );
    //End of master Routing
    /** settings */

    Route::prefix("settings")->group(
        function () {
            Route::prefix("organization")->group(function () {
                Route::get('/', [OrganizationController::class, 'index'])->name('settings.organization.index');
                Route::get('/create', [OrganizationController::class, 'create'])->name('settings.organization.create');
                Route::post('/store', [OrganizationController::class, 'store'])->name('settings.organization.store');
                Route::get('/show/{id}', [OrganizationController::class, 'show'])->name('settings.organization.show');
                Route::get('/edit/{id}', [OrganizationController::class, 'edit'])->name('settings.organization.edit');
                Route::put('/update/{id}', [OrganizationController::class, 'update'])->name('settings.organization.update');
                Route::delete('/destroy/{id}', [OrganizationController::class, 'destroy'])->name('settings.organization.destroy');
            });

            Route::get('organizationsettings', [OrganizationSettingsController::class, 'index'])->name('settings.organizationsettings.index');
            Route::put('organizationsettings/update', [OrganizationSettingsController::class, 'update'])->name('settings.organizationsettings.update');
            Route::put('notificationsettings/update', [NotificationSettingsController::class, 'update'])->name('settings.notificationsettings.update');
        }
    );

    /**
     * Start of hr routing
     */
    Route::prefix('hr')->group(

        function () {

            Route::prefix("latereasons")->group(function () {
                Route::get('/', [LatereasonsController::class, 'index'])->name('hr.latereasons.index');
                Route::get('/create', [LatereasonsController::class, 'create'])->name('hr.latereasons.create');
                Route::post('/store', [LatereasonsController::class, 'store'])->name('hr.latereasons.store');
                Route::get('/show/{id}', [LatereasonsController::class, 'show'])->name('hr.latereasons.show');
                Route::get('/edit/{id}', [LatereasonsController::class, 'edit'])->name('hr.latereasons.edit');
                Route::put('/update/{id}', [LatereasonsController::class, 'update'])->name('hr.latereasons.update');
                Route::delete('/destroy/{id}', [LatereasonsController::class, 'destroy'])->name('hr.latereasons.destroy');
            });

            Route::prefix("employeeonboarding")->group(function () {
                Route::get('/', [EmployeeonboardingController::class, 'index'])->name('hr.employeeonboarding.index');
                Route::get('/create', [EmployeeonboardingController::class, 'create'])->name('hr.employeeonboarding.create');
                Route::post('/store', [EmployeeonboardingController::class, 'store'])->name('hr.employeeonboarding.store');
                Route::get('/show/{id}', [EmployeeonboardingController::class, 'show'])->name('hr.employeeonboarding.show');
                Route::get('/edit/{id}', [EmployeeonboardingController::class, 'edit'])->name('hr.employeeonboarding.edit');
                Route::put('/update/{id}', [EmployeeonboardingController::class, 'update'])->name('hr.employeeonboarding.update');
                Route::delete('/destroy/{id}', [EmployeeonboardingController::class, 'destroy'])->name('hr.employeeonboarding.destroy');
            });

            Route::prefix("employee")->group(function () {
                Route::get('/', [EmployeeController::class, 'index'])->name('hr.employee.index');
                Route::get('/create', [EmployeeController::class, 'create'])->name('hr.employee.create');
                Route::post('/store', [EmployeeController::class, 'store'])->name('hr.employee.store');
                Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('hr.employee.show');
                Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('hr.employee.edit');
                Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('hr.employee.update');
                Route::delete('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('hr.employee.destroy');
            });


            Route::prefix("resignation")->group(function () {
                Route::get('/', [ResignationController::class, 'index'])->name('hr.resignation.index');
                Route::get('/create', [ResignationController::class, 'create'])->name('hr.resignation.create');
                Route::post('/store', [ResignationController::class, 'store'])->name('hr.resignation.store');
                Route::get('/show/{id}', [ResignationController::class, 'show'])->name('hr.resignation.show');
                Route::get('/edit/{id}', [ResignationController::class, 'edit'])->name('hr.resignation.edit');
                Route::put('/update/{id}', [ResignationController::class, 'update'])->name('hr.resignation.update');
                Route::delete('/destroy/{id}', [ResignationController::class, 'destroy'])->name('hr.resignation.destroy');
            });

            Route::prefix("promotiondemotion")->group(function () {
                Route::get('/', [PromotiondemotionController::class, 'index'])->name('hr.promotiondemotion.index');
                Route::get('/create', [PromotiondemotionController::class, 'create'])->name('hr.promotiondemotion.create');
                Route::post('/store', [PromotiondemotionController::class, 'store'])->name('hr.promotiondemotion.store');
                Route::get('/show/{id}', [PromotiondemotionController::class, 'show'])->name('hr.promotiondemotion.show');
                Route::get('/edit/{id}', [PromotiondemotionController::class, 'edit'])->name('hr.promotiondemotion.edit');
                Route::put('/update/{id}', [PromotiondemotionController::class, 'update'])->name('hr.promotiondemotion.update');
                Route::delete('/destroy/{id}', [PromotiondemotionController::class, 'destroy'])->name('hr.promotiondemotion.destroy');
            });


            Route::prefix("mangeholiday")->group(function () {
                Route::get('/', [MangeholidayController::class, 'index'])->name('hr.mangeholiday.index');
                Route::get('/create', [MangeholidayController::class, 'create'])->name('hr.mangeholiday.create');
                Route::post('/store', [MangeholidayController::class, 'store'])->name('hr.mangeholiday.store');
                Route::get('/show/{id}', [MangeholidayController::class, 'show'])->name('hr.mangeholiday.show');
                Route::get('/edit/{id}', [MangeholidayController::class, 'edit'])->name('hr.mangeholiday.edit');
                Route::put('/update/{id}', [MangeholidayController::class, 'update'])->name('hr.mangeholiday.update');
                Route::delete('/destroy/{id}', [MangeholidayController::class, 'destroy'])->name('hr.mangeholiday.destroy');
            });

            Route::prefix("shiftroster")->group(function () {
                Route::get('/', [ShiftrosterController::class, 'index'])->name('hr.shiftroster.index');
                Route::get('/create', [ShiftrosterController::class, 'create'])->name('hr.shiftroster.create');
                Route::post('/store', [ShiftrosterController::class, 'store'])->name('hr.shiftroster.store');
                Route::get('/show/{id}', [ShiftrosterController::class, 'show'])->name('hr.shiftroster.show');
                Route::get('/edit/{id}', [ShiftrosterController::class, 'edit'])->name('hr.shiftroster.edit');
                Route::put('/update/{id}', [ShiftrosterController::class, 'update'])->name('hr.shiftroster.update');
                Route::delete('/destroy/{id}', [ShiftrosterController::class, 'destroy'])->name('hr.shiftroster.destroy');
            });

            Route::prefix("department")->group(function () {
                Route::get('/', [DepartmentController::class, 'index'])->name('hr.department.index');
                Route::get('/create', [DepartmentController::class, 'create'])->name('hr.department.create');
                Route::post('/store', [DepartmentController::class, 'store'])->name('hr.department.store');
                Route::get('/show/{id}', [DepartmentController::class, 'show'])->name('hr.department.show');
                Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('hr.department.edit');
                Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('hr.department.update');
                Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('hr.department.destroy');
            });


            Route::prefix("department")->group(
                function () {
                    Route::get('/', [DepartmentController::class, 'index'])->name('hr.department.index');
                    Route::get('/create', [DepartmentController::class, 'create'])->name('hr.department.create');
                    Route::post('/store', [DepartmentController::class, 'store'])->name('hr.department.store');
                    Route::get('/show/{id}', [DepartmentController::class, 'show'])->name('hr.department.show');
                    Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('hr.department.edit');
                    Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('hr.department.update');
                    Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('hr.department.destroy');
                }
            );

            Route::prefix("cms")->group(function () {
                Route::get('/', [CmsController::class, 'index'])->name('hr.cms.index');
                Route::get('/create', [CmsController::class, 'create'])->name('hr.cms.create');
                Route::post('/store', [CmsController::class, 'store'])->name('hr.cms.store');
                Route::get('/show/{id}', [CmsController::class, 'show'])->name('hr.cms.show');
                Route::get('/edit/{id}', [CmsController::class, 'edit'])->name('hr.cms.edit');
                Route::put('/update/{id}', [CmsController::class, 'update'])->name('hr.cms.update');
                Route::delete('/destroy/{id}', [CmsController::class, 'destroy'])->name('hr.cms.destroy');
            });


            Route::prefix("designation")->group(function () {
                Route::get('/', [DesignationController::class, 'index'])->name('hr.designation.index');
                Route::get('/create', [DesignationController::class, 'create'])->name('hr.designation.create');
                Route::post('/store', [DesignationController::class, 'store'])->name('hr.designation.store');
                Route::get('/show/{id}', [DesignationController::class, 'show'])->name('hr.designation.show');
                Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('hr.designation.edit');
                Route::put('/update/{id}', [DesignationController::class, 'update'])->name('hr.designation.update');
                Route::delete('/destroy/{id}', [DesignationController::class, 'destroy'])->name('hr.designation.destroy');
            });
            Route::prefix("leaveApplication")->group(function () {
                Route::get('/', [LeaveApplicationController::class, 'index'])->name('hr.leaveapplication.index');
                Route::get('/create', [LeaveApplicationController::class, 'create'])->name('hr.leaveapplication.create');
                Route::post('/store', [LeaveApplicationController::class, 'store'])->name('hr.leaveapplication.store');
                Route::get('/show/{id}', [LeaveApplicationController::class, 'show'])->name('hr.leaveapplication.show');
                Route::get('/edit/{id}', [LeaveApplicationController::class, 'edit'])->name('hr.leaveapplication.edit');
                Route::put('/update/{id}', [LeaveApplicationController::class, 'update'])->name('hr.leaveapplication.update');
                Route::delete('/destroy/{id}', [LeaveApplicationController::class, 'destroy'])->name('hr.leaveapplication.destroy');
                Route::get('tobeapprove', [LeaveApplicationController::class, 'toApprove'])->name('hr.leaveapplication.tobeapprove');
                Route::get('tobereject', [LeaveApplicationController::class, 'toReject'])->name('hr.leaveapplication.tobereject');
            });


            Route::prefix("absentreason")->group(function () {
                Route::get('/', [AbsentreasonController::class, 'index'])->name('hr.absentreason.index');
                Route::get('/create', [AbsentreasonController::class, 'create'])->name('hr.absentreason.create');
                Route::post('/store', [AbsentreasonController::class, 'store'])->name('hr.absentreason.store');
                Route::get('/show/{id}', [AbsentreasonController::class, 'show'])->name('hr.absentreason.show');
                Route::get('/edit/{id}', [AbsentreasonController::class, 'edit'])->name('hr.absentreason.edit');
                Route::put('/update/{id}', [AbsentreasonController::class, 'update'])->name('hr.absentreason.update');
                Route::delete('/destroy/{id}', [AbsentReasonController::class, 'destroy'])->name('hr.absentreason.destroy');
            });




            Route::prefix("appreciation")->group(function () {
                Route::get('/', [AppreciationController::class, 'index'])->name('hr.appreciation.index');
                Route::get('/create', [AppreciationController::class, 'create'])->name('hr.appreciation.create');
                Route::post('/store', [AppreciationController::class, 'store'])->name('hr.appreciation.store');
                Route::get('/show/{id}', [AppreciationController::class, 'show'])->name('hr.appreciation.show');
                Route::get('/edit/{id}', [AppreciationController::class, 'edit'])->name('hr.appreciation.edit');
                Route::put('/update/{id}', [AppreciationController::class, 'update'])->name('hr.appreciation.update');
                Route::delete('/destroy/{id}', [AppreciationController::class, 'destroy'])->name('hr.appreciation.destroy');
            });
            Route::prefix("attendence")->group(function () {
                Route::get('/', [AttendenceController::class, 'index'])->name('hr.attendence.index');
                Route::get('/create', [AttendenceController::class, 'create'])->name('hr.attendence.create');
                Route::post('/store', [AttendenceController::class, 'store'])->name('hr.attendence.store');
                Route::get('/show/{id}', [AttendenceController::class, 'show'])->name('hr.attendence.show');
                Route::get('/edit/{id}', [AttendenceController::class, 'edit'])->name('hr.attendence.edit');
                Route::put('/update/{id}', [AttendenceController::class, 'update'])->name('hr.attendence.update');
                Route::delete('/destroy/{id}', [AttendenceController::class, 'destroy'])->name('hr.attendence.destroy');
                Route::post('/checkIn', [AttendenceController::class, 'checkIn'])->name('hr.attendence.checkIn');
                Route::post('/checkOut/{id}', [AttendenceController::class, 'checkOut'])->name('hr.attendence.checkOut');
            });

            Route::prefix("complaints")->group(function () {
                Route::get('/', [ComplaintsController::class, 'index'])->name('hr.complaints.index');
                Route::get('/create', [ComplaintsController::class, 'create'])->name('hr.complaints.create');
                Route::post('/store', [ComplaintsController::class, 'store'])->name('hr.complaints.store');
                Route::get('/show/{id}', [ComplaintsController::class, 'show'])->name('hr.complaints.show');
                Route::get('/edit/{id}', [ComplaintsController::class, 'edit'])->name('hr.complaints.edit');
                Route::put('/update/{id}', [ComplaintsController::class, 'update'])->name('hr.complaints.update');
                Route::delete('/destroy/{id}', [ComplaintsController::class, 'destroy'])->name('hr.complaints.destroy');
            });


            Route::prefix("warnings")->group(function () {
                Route::get('/', [WarningsController::class, 'index'])->name('hr.warnings.index');
                Route::get('/create', [WarningsController::class, 'create'])->name('hr.warnings.create');
                Route::post('/store', [WarningsController::class, 'store'])->name('hr.warnings.store');
                Route::get('/show/{id}', [WarningsController::class, 'show'])->name('hr.warnings.show');
                Route::get('/edit/{id}', [WarningsController::class, 'edit'])->name('hr.warnings.edit');
                Route::put('/update/{id}', [WarningsController::class, 'update'])->name('hr.warnings.update');
                Route::delete('/destroy/{id}', [WarningsController::class, 'destroy'])->name('hr.warnings.destroy');
            });

            Route::prefix("transfer")->group(function () {
                Route::get('/', [TransferController::class, 'index'])->name('hr.transfer.index');
                Route::get('/create', [TransferController::class, 'create'])->name('hr.transfer.create');
                Route::post('/store', [TransferController::class, 'store'])->name('hr.transfer.store');
                Route::get('/show/{id}', [TransferController::class, 'show'])->name('hr.transfer.show');
                Route::get('/edit/{id}', [TransferController::class, 'edit'])->name('hr.transfer.edit');
                Route::put('/update/{id}', [TransferController::class, 'update'])->name('hr.transfer.update');
                Route::delete('/destroy/{id}', [TransferController::class, 'destroy'])->name('hr.transfer.destroy');
            });


            Route::prefix("attendence")->group(function () {
                Route::get('/', [AttendenceController::class, 'index'])->name('hr.attendence.index');
                Route::get('/create', [AttendenceController::class, 'create'])->name('hr.attendence.create');
                Route::post('/store', [AttendenceController::class, 'store'])->name('hr.attendence.store');
                Route::get('/show/{id}', [AttendenceController::class, 'show'])->name('hr.attendence.show');
                Route::get('/edit/{id}', [AttendenceController::class, 'edit'])->name('hr.attendence.edit');
                Route::put('/update/{id}', [AttendenceController::class, 'update'])->name('hr.attendence.update');
                Route::delete('/destroy/{id}', [AttendenceController::class, 'destroy'])->name('hr.attendence.destroy');
            });
            Route::prefix("employeelist")->group(function () {
                Route::get('/', [EmployeelistController::class, 'index'])->name('hr.employeelist.index');
                Route::get('/create', [EmployeelistController::class, 'create'])->name('hr.employeelist.create');
                Route::post('/store', [EmployeelistController::class, 'store'])->name('hr.employeelist.store');
                Route::get('/show/{id}', [EmployeelistController::class, 'show'])->name('hr.employeelist.show');
                Route::get('/edit/{id}', [EmployeelistController::class, 'edit'])->name('hr.employeelist.edit');
                Route::put('/update/{id}', [EmployeelistController::class, 'update'])->name('hr.employeelist.update');
                Route::delete('/destroy/{id}', [EmployeelistController::class, 'destroy'])->name('hr.employeelist.destroy');
            });

            Route::prefix("employeementtimeline")->group(function () {
                Route::get('/', [EmployeementtimelineController::class, 'index'])->name('hr.employeementtimeline.index');
                Route::get('/create', [EmployeementtimelineController::class, 'create'])->name('hr.employeementtimeline.create');
                Route::post('/store', [EmployeementtimelineController::class, 'store'])->name('hr.employeementtimeline.store');
                Route::get('/show/{id}', [EmployeementtimelineController::class, 'show'])->name('hr.employeementtimeline.show');
                Route::get('/edit/{id}', [EmployeementtimelineController::class, 'edit'])->name('hr.employeementtimeline.edit');
                Route::put('/update/{id}', [EmployeementtimelineController::class, 'update'])->name('hr.employeementtimeline.update');
                Route::delete('/destroy/{id}', [EmployeementtimelineController::class, 'destroy'])->name('hr.employeementtimeline.destroy');
            });
        }
    );
    Route::prefix("supplier")->group(
        function () {
            Route::prefix("suppliercategory")->group(function () {
                Route::get('/', [SuppliercategoryController::class, 'index'])->name('supplier.suppliercategory.index');
                Route::get('/create', [SuppliercategoryController::class, 'create'])->name('supplier.suppliercategory.create');
                Route::post('/store', [SuppliercategoryController::class, 'store'])->name('supplier.suppliercategory.store');
                Route::get('/show/{id}', [SuppliercategoryController::class, 'show'])->name('supplier.suppliercategory.show');
                Route::get('/edit/{id}', [SuppliercategoryController::class, 'edit'])->name('supplier.suppliercategory.edit');
                Route::put('/update/{id}', [SuppliercategoryController::class, 'update'])->name('supplier.suppliercategory.update');
                Route::delete('/destroy/{id}', [SuppliercategoryController::class, 'destroy'])->name('supplier.suppliercategory.destroy');
            });
            Route::prefix("addsupplier")->group(function () {
                Route::get('/', [AddsupplierController::class, 'index'])->name('supplier.addsupplier.index');
                Route::get('/create', [AddsupplierController::class, 'create'])->name('supplier.addsupplier.create');
                Route::post('/store', [AddsupplierController::class, 'store'])->name('supplier.addsupplier.store');
                Route::get('/show/{id}', [AddsupplierController::class, 'show'])->name('supplier.addsupplier.show');
                Route::get('/edit/{id}', [AddsupplierController::class, 'edit'])->name('supplier.addsupplier.edit');
                Route::put('/update/{id}', [AddsupplierController::class, 'update'])->name('supplier.addsupplier.update');
                Route::delete('/destroy/{id}', [AddsupplierController::class, 'destroy'])->name('supplier.addsupplier.destroy');
            });
        }
    );

    Route::prefix("recruit")->group(
        function () {
            Route::prefix("jobinterview")->group(function () {
                Route::get('/', [JobinterviewController::class, 'index'])->name('recruit.jobinterview.index');
                Route::get('/create', [JobinterviewController::class, 'create'])->name('recruit.jobinterview.create');
                Route::post('/store', [JobinterviewController::class, 'store'])->name('recruit.jobinterview.store');
                Route::get('/show/{id}', [JobinterviewController::class, 'show'])->name('recruit.jobinterview.show');
                Route::get('/edit/{id}', [JobinterviewController::class, 'edit'])->name('recruit.jobinterview.edit');
                Route::put('/update/{id}', [JobinterviewController::class, 'update'])->name('recruit.jobinterview.update');
                Route::delete('/destroy/{id}', [JobinterviewController::class, 'destroy'])->name('recruit.jobinterview.destroy');
            });
            Route::prefix("recuritreports")->group(function () {
                Route::get('/', [RecuritreportsController::class, 'index'])->name('recruit.recuritreports.index');
                Route::get('/create', [RecuritreportsController::class, 'create'])->name('recruit.recuritreports.create');
                Route::post('/store', [RecuritreportsController::class, 'store'])->name('recruit.recuritreports.store');
                Route::get('/show/{id}', [RecuritreportsController::class, 'show'])->name('recruit.recuritreports.show');
                Route::get('/edit/{id}', [RecuritreportsController::class, 'edit'])->name('recruit.recuritreports.edit');
                Route::put('/update/{id}', [RecuritreportsController::class, 'update'])->name('recruit.recuritreports.update');
                Route::delete('/destroy/{id}', [RecuritreportsController::class, 'destroy'])->name('recruit.recuritreports.destroy');
            });

            Route::prefix("experienceletter")->group(function () {
                Route::get('/', [ExperienceletterController::class, 'index'])->name('recruit.experienceletter.index');
                Route::get('/create', [ExperienceletterController::class, 'create'])->name('recruit.experienceletter.create');
                Route::post('/store', [ExperienceletterController::class, 'store'])->name('recruit.experienceletter.store');
                Route::get('/show/{id}', [ExperienceletterController::class, 'show'])->name('recruit.experienceletter.show');
                Route::get('/edit/{id}', [ExperienceletterController::class, 'edit'])->name('recruit.experienceletter.edit');
                Route::put('/update/{id}', [ExperienceletterController::class, 'update'])->name('recruit.experienceletter.update');
                Route::delete('/destroy/{id}', [ExperienceletterController::class, 'destroy'])->name('recruit.experienceletter.destroy');
            });

            Route::prefix("offerletter")->group(function () {
                Route::get('/', [OfferletterController::class, 'index'])->name('recruit.offerletter.index');
                Route::get('/create', [OfferletterController::class, 'create'])->name('recruit.offerletter.create');
                Route::post('/store', [OfferletterController::class, 'store'])->name('recruit.offerletter.store');
                Route::get('/show/{id}', [OfferletterController::class, 'show'])->name('recruit.offerletter.show');
                Route::get('/edit/{id}', [OfferletterController::class, 'edit'])->name('recruit.offerletter.edit');
                Route::put('/update/{id}', [OfferletterController::class, 'update'])->name('recruit.offerletter.update');
                Route::delete('/destroy/{id}', [OfferletterController::class, 'destroy'])->name('recruit.offerletter.destroy');
            });

            Route::prefix("jobpost")->group(function () {
                Route::get('/', [JobpostController::class, 'index'])->name('recruit.jobpost.index');
                Route::get('/create', [JobpostController::class, 'create'])->name('recruit.jobpost.create');
                Route::post('/store', [JobpostController::class, 'store'])->name('recruit.jobpost.store');
                Route::get('/show/{id}', [JobpostController::class, 'show'])->name('recruit.jobpost.show');
                Route::get('/edit/{id}', [JobpostController::class, 'edit'])->name('recruit.jobpost.edit');
                Route::put('/update/{id}', [JobpostController::class, 'update'])->name('recruit.jobpost.update');
                Route::delete('/destroy/{id}', [JobpostController::class, 'destroy'])->name('recruit.jobpost.destroy');
            });
            Route::prefix("jobapplication")->group(function () {
                Route::get('/', [JobapplicationController::class, 'index'])->name('recruit.jobapplication.index');
                Route::get('/create', [JobapplicationController::class, 'create'])->name('recruit.jobapplication.create');
                Route::post('/store', [JobapplicationController::class, 'store'])->name('recruit.jobapplication.store');
                Route::get('/show/{id}', [JobapplicationController::class, 'show'])->name('recruit.jobapplication.show');
                Route::get('/edit/{id}', [JobapplicationController::class, 'edit'])->name('recruit.jobapplication.edit');
                Route::put('/update/{id}', [JobapplicationController::class, 'update'])->name('recruit.jobapplication.update');
                Route::delete('/destroy/{id}', [JobapplicationController::class, 'destroy'])->name('recruit.jobapplication.destroy');
            });
            Route::prefix("interviewschedule")->group(function () {
                Route::get('/', [InterviewscheduleController::class, 'index'])->name('recruit.interviewschedule.index');
                Route::get('/create', [InterviewscheduleController::class, 'create'])->name('recruit.interviewschedule.create');
                Route::post('/store', [InterviewscheduleController::class, 'store'])->name('recruit.interviewschedule.store');
                Route::get('/show/{id}', [InterviewscheduleController::class, 'show'])->name('recruit.interviewschedule.show');
                Route::get('/edit/{id}', [InterviewscheduleController::class, 'edit'])->name('recruit.interviewschedule.edit');
                Route::put('/update/{id}', [InterviewscheduleController::class, 'update'])->name('recruit.interviewschedule.update');
                Route::delete('/destroy/{id}', [InterviewscheduleController::class, 'destroy'])->name('recruit.interviewschedule.destroy');
            });
        }
    );

    Route::prefix("inventory")->group(
        function () {


            Route::prefix("product")->group(function () {
                Route::get('/', [ProductController::class, 'index'])->name('inventory.product.index');
                Route::get('/create', [ProductController::class, 'create'])->name('inventory.product.create');
                Route::post('/store', [ProductController::class, 'store'])->name('inventory.product.store');
                Route::get('/show/{id}', [ProductController::class, 'show'])->name('inventory.product.show');
                Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('inventory.product.edit');
                Route::put('/update/{id}', [ProductController::class, 'update'])->name('inventory.product.update');
                Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('inventory.product.destroy');
            });
            Route::prefix("purchaseorder")->group(function () {
                Route::get('/', [PurchaseorderController::class, 'index'])->name('inventory.purchaseorder.index');
                Route::get('/create', [PurchaseorderController::class, 'create'])->name('inventory.purchaseorder.create');
                Route::post('/store', [PurchaseorderController::class, 'store'])->name('inventory.purchaseorder.store');
                Route::get('/show/{id}', [PurchaseorderController::class, 'show'])->name('inventory.purchaseorder.show');
                Route::get('/edit/{id}', [PurchaseorderController::class, 'edit'])->name('inventory.purchaseorder.edit');
                Route::put('/update/{id}', [PurchaseorderController::class, 'update'])->name('inventory.purchaseorder.update');
                Route::delete('/destroy/{id}', [PurchaseorderController::class, 'destroy'])->name('inventory.purchaseorder.destroy');
            });

            Route::prefix("servicelog")->group(function () {
                Route::get('/', [ServicelogController::class, 'index'])->name('inventory.servicelog.index');
                Route::get('/create', [ServicelogController::class, 'create'])->name('inventory.servicelog.create');
                Route::post('/store', [ServicelogController::class, 'store'])->name('inventory.servicelog.store');
                Route::get('/show/{id}', [ServicelogController::class, 'show'])->name('inventory.servicelog.show');
                Route::get('/edit/{id}', [ServicelogController::class, 'edit'])->name('inventory.servicelog.edit');
                Route::put('/update/{id}', [ServicelogController::class, 'update'])->name('inventory.servicelog.update');
                Route::delete('/destroy/{id}', [ServicelogController::class, 'destroy'])->name('inventory.servicelog.destroy');
            });

            Route::prefix("stockreconcile")->group(function () {
                Route::get('/', [StockreconcileController::class, 'index'])->name('inventory.stockreconcile.index');
                Route::get('/create', [StockreconcileController::class, 'create'])->name('inventory.stockreconcile.create');
                Route::post('/store', [StockreconcileController::class, 'store'])->name('inventory.stockreconcile.store');
                Route::get('/show/{id}', [StockreconcileController::class, 'show'])->name('inventory.stockreconcile.show');
                Route::get('/edit/{id}', [StockreconcileController::class, 'edit'])->name('inventory.stockreconcile.edit');
                Route::put('/update/{id}', [StockreconcileController::class, 'update'])->name('inventory.stockreconcile.update');
                Route::delete('/destroy/{id}', [StockreconcileController::class, 'destroy'])->name('inventory.stockreconcile.destroy');
            });
            Route::prefix("purchaseentry")->group(function () {
                Route::get('/', [PurchaseentryController::class, 'index'])->name('inventory.purchaseentry.index');
                Route::get('/create', [PurchaseentryController::class, 'create'])->name('inventory.purchaseentry.create');
                Route::post('/store', [PurchaseentryController::class, 'store'])->name('inventory.purchaseentry.store');
                Route::get('/show/{id}', [PurchaseentryController::class, 'show'])->name('inventory.purchaseentry.show');
                Route::get('/edit/{id}', [PurchaseentryController::class, 'edit'])->name('inventory.purchaseentry.edit');
                Route::put('/update/{id}', [PurchaseentryController::class, 'update'])->name('inventory.purchaseentry.update');
                Route::delete('/destroy/{id}', [PurchaseentryController::class, 'destroy'])->name('inventory.purchaseentry.destroy');
            });

            Route::prefix("service")->group(function () {
                Route::get('/', [ServiceController::class, 'index'])->name('inventory.service.index');
                Route::get('/create', [ServiceController::class, 'create'])->name('inventory.service.create');
                Route::post('/store', [ServiceController::class, 'store'])->name('inventory.service.store');
                Route::get('/show/{id}', [ServiceController::class, 'show'])->name('inventory.service.show');
                Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('inventory.service.edit');
                Route::put('/update/{id}', [ServiceController::class, 'update'])->name('inventory.service.update');
                Route::delete('/destroy/{id}', [ServiceController::class, 'destroy'])->name('inventory.service.destroy');
            });


            Route::prefix("barcodemanagement")->group(function () {
                Route::get('/', [BarcodemanagementController::class, 'index'])->name('inventory.barcodemanagement.index');
                Route::get('/create', [BarcodemanagementController::class, 'create'])->name('inventory.barcodemanagement.create');
                Route::post('/store', [BarcodemanagementController::class, 'store'])->name('inventory.barcodemanagement.store');
                Route::get('/show/{id}', [BarcodemanagementController::class, 'show'])->name('inventory.barcodemanagement.show');
                Route::get('/edit/{id}', [BarcodemanagementController::class, 'edit'])->name('inventory.barcodemanagement.edit');
                Route::put('/update/{id}', [BarcodemanagementController::class, 'update'])->name('inventory.barcodemanagement.update');
                Route::delete('/destroy/{id}', [BarcodemanagementController::class, 'destroy'])->name('inventory.barcodemanagement.destroy');
            });


            Route::prefix("goodreceivedreconcile")->group(function () {
                Route::get('/', [GoodreceivedreconcileController::class, 'index'])->name('inventory.goodreceivedreconcile.index');
                Route::get('/create', [GoodreceivedreconcileController::class, 'create'])->name('inventory.goodreceivedreconcile.create');
                Route::post('/store', [GoodreceivedreconcileController::class, 'store'])->name('inventory.goodreceivedreconcile.store');
                Route::get('/show/{id}', [GoodreceivedreconcileController::class, 'show'])->name('inventory.goodreceivedreconcile.show');
                Route::get('/edit/{id}', [GoodreceivedreconcileController::class, 'edit'])->name('inventory.goodreceivedreconcile.edit');
                Route::put('/update/{id}', [GoodreceivedreconcileController::class, 'update'])->name('inventory.goodreceivedreconcile.update');
                Route::delete('/destroy/{id}', [GoodreceivedreconcileController::class, 'destroy'])->name('inventory.goodreceivedreconcile.destroy');
            });
        }
    );

    Route::prefix("Crm")->group(
        function () {
            Route::prefix("clients")->group(function () {
                Route::get('/', [ClientsController::class, 'index'])->name('crm.clients.index');
                Route::get('/create', [ClientsController::class, 'create'])->name('crm.clients.create');
                Route::post('/store', [ClientsController::class, 'store'])->name('crm.clients.store');
                Route::get('/show/{id}', [ClientsController::class, 'show'])->name('crm.clients.show');
                Route::get('/edit/{id}', [ClientsController::class, 'edit'])->name('crm.clients.edit');
                Route::put('/update/{id}', [ClientsController::class, 'update'])->name('crm.clients.update');
                Route::delete('/destroy/{id}', [ClientsController::class, 'destroy'])->name('crm.clients.destroy');
            });
            Route::prefix("leads")->group(function () {
                Route::get('/', [LeadsController::class, 'index'])->name('crm.leads.index');
                Route::get('/create', [LeadsController::class, 'create'])->name('crm.leads.create');
                Route::post('/store', [LeadsController::class, 'store'])->name('crm.leads.store');
                Route::get('/show/{id}', [LeadsController::class, 'show'])->name('crm.leads.show');
                Route::get('/edit/{id}', [LeadsController::class, 'edit'])->name('crm.leads.edit');
                Route::put('/update/{id}', [LeadsController::class, 'update'])->name('crm.leads.update');
                Route::delete('/destroy/{id}', [LeadsController::class, 'destroy'])->name('crm.leads.destroy');
            });
        }
    );





    Route::prefix("notice")->group(
        function () {
            Route::prefix("announcement")->group(function () {
                Route::get('/', [AnnouncementController::class, 'index'])->name('notice.announcement.index');
                Route::get('/create', [AnnouncementController::class, 'create'])->name('notice.announcement.create');
                Route::post('/store', [AnnouncementController::class, 'store'])->name('notice.announcement.store');
                Route::get('/show/{id}', [AnnouncementController::class, 'show'])->name('notice.announcement.show');
                Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('notice.announcement.edit');
                Route::put('/update/{id}', [AnnouncementController::class, 'update'])->name('notice.announcement.update');
                Route::delete('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('notice.announcement.destroy');
            });
            Route::prefix("overview")->group(function () {
                Route::get('/', [OverviewController::class, 'index'])->name('notice.overview.index');
                Route::get('/create', [OverviewController::class, 'create'])->name('notice.overview.create');
                Route::post('/store', [OverviewController::class, 'store'])->name('notice.overview.store');
                Route::get('/show/{id}', [OverviewController::class, 'show'])->name('notice.overview.show');
                Route::get('/edit/{id}', [OverviewController::class, 'edit'])->name('notice.overview.edit');
                Route::put('/update/{id}', [OverviewController::class, 'update'])->name('notice.overview.update');
                Route::delete('/destroy/{id}', [OverviewController::class, 'destroy'])->name('notice.overview.destroy');
            });

            Route::prefix("detailsview")->group(function () {
                Route::get('/', [DetailsviewController::class, 'index'])->name('notice.detailsview.index');
                Route::get('/create', [DetailsviewController::class, 'create'])->name('notice.detailsview.create');
                Route::post('/store', [DetailsviewController::class, 'store'])->name('notice.detailsview.store');
                Route::get('/show/{id}', [DetailsviewController::class, 'show'])->name('notice.detailsview.show');
                Route::get('/edit/{id}', [DetailsviewController::class, 'edit'])->name('notice.detailsview.edit');
                Route::put('/update/{id}', [DetailsviewController::class, 'update'])->name('notice.detailsview.update');
                Route::delete('/destroy/{id}', [DetailsviewController::class, 'destroy'])->name('notice.detailsview.destroy');
            });
        }
    );




    Route::prefix("assets")->group(
        function () {
            Route::prefix("assestCategory")->group(function () {
                Route::get('/', [AssestCategoryController::class, 'index'])->name('assets.assestcategory.index');
                Route::get('/create', [AssestCategoryController::class, 'create'])->name('assets.assestcategory.create');
                Route::post('/store', [AssestCategoryController::class, 'store'])->name('assets.assestcategory.store');
                Route::get('/show/{id}', [AssestCategoryController::class, 'show'])->name('assets.assestcategory.show');
                Route::get('/edit/{id}', [AssestCategoryController::class, 'edit'])->name('assets.assestcategory.edit');
                Route::put('/update/{id}', [AssestCategoryController::class, 'update'])->name('assets.assestcategory.update');
                Route::delete('/destroy/{id}', [AssestCategoryController::class, 'destroy'])->name('assets.assestcategory.destroy');
            });


            Route::prefix("fixedassets")->group(function () {
                Route::get('/', [FixedassetsController::class, 'index'])->name('assets.fixedassets.index');
                Route::get('/create', [FixedassetsController::class, 'create'])->name('assets.fixedassets.create');
                Route::post('/store', [FixedassetsController::class, 'store'])->name('assets.fixedassets.store');
                Route::get('/show/{id}', [FixedassetsController::class, 'show'])->name('assets.fixedassets.show');
                Route::get('/edit/{id}', [FixedassetsController::class, 'edit'])->name('assets.fixedassets.edit');
                Route::put('/update/{id}', [FixedassetsController::class, 'update'])->name('assets.fixedassets.update');
                Route::delete('/destroy/{id}', [FixedassetsController::class, 'destroy'])->name('assets.fixedassets.destroy');
            });


            Route::prefix("equipmentdemand")->group(function () {
                Route::get('/', [EquipmentdemandController::class, 'index'])->name('assets.equipmentdemand.index');
                Route::get('/create', [EquipmentdemandController::class, 'create'])->name('assets.equipmentdemand.create');
                Route::post('/store', [EquipmentdemandController::class, 'store'])->name('assets.equipmentdemand.store');
                Route::get('/show/{id}', [EquipmentdemandController::class, 'show'])->name('assets.equipmentdemand.show');
                Route::get('/edit/{id}', [EquipmentdemandController::class, 'edit'])->name('assets.equipmentdemand.edit');
                Route::put('/update/{id}', [EquipmentdemandController::class, 'update'])->name('assets.equipmentdemand.update');
                Route::delete('/destroy/{id}', [EquipmentdemandController::class, 'destroy'])->name('assets.equipmentdemand.destroy');
            });
        }
    );

    Route::prefix("dictonary")->group(
        function () {
            Route::get('/', [DictonaryController::class, 'index']);
            Route::get('/add', [DictonaryController::class, 'create']);
            Route::get('/view', [DictonaryController::class, 'view']);
            Route::post('/store', [DictonaryController::class, 'store']);
            Route::get('/edit/{id}', [DictonaryController::class, 'edit']);
            Route::post('/update/{id}', [DictonaryController::class, 'update']);
            Route::delete('/destroy/{id}', [DictonaryController::class, 'destroy']);
        }
    );







    // Route::prefix("department")->group(function () {
    //     Route::get('/', [DepartmentController::class, 'index']);
    //     Route::get('/add', [DepartmentController::class, 'create']);
    //     Route::get('/view', [DepartmentController::class, 'view']);
    //     Route::post('/store', [DepartmentController::class, 'store']);
    //     Route::get('/edit/{id}', [DepartmentController::class, 'edit']);
    //     Route::post('/update/{id}', [DepartmentController::class, 'update']);
    //     Route::delete('/destroy/{id}', [DepartmentController::class, 'destroy']);
    // });


    Route::get('/settings/{name?}', [SettingController::class, 'master'])->where('name', '(.*)');


    // End Settings Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix("requisition")->group(
        function () {
            Route::prefix("leaverequest")->group(function () {
                Route::get('/', [LeaverequestController::class, 'index'])->name('requisition.leaverequest.index');
                Route::get('/create', [LeaverequestController::class, 'create'])->name('requisition.leaverequest.create');
                Route::post('/store', [LeaverequestController::class, 'store'])->name('requisition.leaverequest.store');
                Route::get('/show/{id}', [LeaverequestController::class, 'show'])->name('requisition.leaverequest.show');
                Route::get('/edit/{id}', [LeaverequestController::class, 'edit'])->name('requisition.leaverequest.edit');
                Route::put('/update/{id}', [LeaverequestController::class, 'update'])->name('requisition.leaverequest.update');
                Route::delete('/destroy/{id}', [LeaverequestController::class, 'destroy'])->name('requisition.leaverequest.destroy');
            });

            Route::prefix("travel")->group(function () {
                Route::get('/', [TravelController::class, 'index'])->name('requisition.travel.index');
                Route::get('/create', [TravelController::class, 'create'])->name('requisition.travel.create');
                Route::post('/store', [TravelController::class, 'store'])->name('requisition.travel.store');
                Route::get('/show/{id}', [TravelController::class, 'show'])->name('requisition.travel.show');
                Route::get('/edit/{id}', [TravelController::class, 'edit'])->name('requisition.travel.edit');
                Route::put('/update/{id}', [TravelController::class, 'update'])->name('requisition.travel.update');
                Route::delete('/destroy/{id}', [TravelController::class, 'destroy'])->name('requisition.travel.destroy');
            });

            Route::prefix("requisitiontravel")->group(function () {
                Route::get('/', [RequisitiontravelController::class, 'index'])->name('requisition.requisitiontravel.index');
                Route::get('/create', [RequisitiontravelController::class, 'create'])->name('requisition.requisitiontravel.create');
                Route::post('/store', [RequisitiontravelController::class, 'store'])->name('requisition.requisitiontravel.store');
                Route::get('/show/{id}', [RequisitiontravelController::class, 'show'])->name('requisition.requisitiontravel.show');
                Route::get('/edit/{id}', [RequisitiontravelController::class, 'edit'])->name('requisition.requisitiontravel.edit');
                Route::put('/update/{id}', [RequisitiontravelController::class, 'update'])->name('requisition.requisitiontravel.update');
                Route::delete('/destroy/{id}', [RequisitiontravelController::class, 'destroy'])->name('requisition.requisitiontravel.destroy');
            });
            Route::prefix("convinceRequest")->group(function () {
                Route::get('/', [ConvinceRequestController::class, 'index'])->name('requisition.convincerequest.index');
                Route::get('/create', [ConvinceRequestController::class, 'create'])->name('requisition.convincerequest.create');
                Route::post('/store', [ConvinceRequestController::class, 'store'])->name('requisition.convincerequest.store');
                Route::get('/show/{id}', [ConvinceRequestController::class, 'show'])->name('requisition.convincerequest.show');
                Route::get('/edit/{id}', [ConvinceRequestController::class, 'edit'])->name('requisition.convincerequest.edit');
                Route::put('/update/{id}', [ConvinceRequestController::class, 'update'])->name('requisition.convincerequest.update');
                Route::delete('/destroy/{id}', [ConvinceRequestController::class, 'destroy'])->name('requisition.convincerequest.destroy');
            });

            Route::prefix("compensatoryLeave")->group(function () {
                Route::get('/', [CompensatoryLeaveController::class, 'index'])->name('requisition.compensatoryleave.index');
                Route::get('/create', [CompensatoryLeaveController::class, 'create'])->name('requisition.compensatoryleave.create');
                Route::post('/store', [CompensatoryLeaveController::class, 'store'])->name('requisition.compensatoryleave.store');
                Route::get('/show/{id}', [CompensatoryLeaveController::class, 'show'])->name('requisition.compensatoryleave.show');
                Route::get('/edit/{id}', [CompensatoryLeaveController::class, 'edit'])->name('requisition.compensatoryleave.edit');
                Route::put('/update/{id}', [CompensatoryLeaveController::class, 'update'])->name('requisition.compensatoryleave.update');
                Route::delete('/destroy/{id}', [CompensatoryLeaveController::class, 'destroy'])->name('requisition.compensatoryleave.destroy');
            });

            Route::prefix("barcodeManagement")->group(function () {
                Route::get('/', [BarcodeManagementController::class, 'index'])->name('requisition.barcodemanagement.index');
                Route::get('/create', [BarcodeManagementController::class, 'create'])->name('requisition.barcodemanagement.create');
                Route::post('/store', [BarcodeManagementController::class, 'store'])->name('requisition.barcodemanagement.store');
                Route::get('/show/{id}', [BarcodeManagementController::class, 'show'])->name('requisition.barcodemanagement.show');
                Route::get('/edit/{id}', [BarcodeManagementController::class, 'edit'])->name('requisition.barcodemanagement.edit');
                Route::put('/update/{id}', [BarcodeManagementController::class, 'update'])->name('requisition.barcodemanagement.update');
                Route::delete('/destroy/{id}', [BarcodeManagementController::class, 'destroy'])->name('requisition.barcodemanagement.destroy');
            });
        }
    );
    Route::prefix("officemanagement")->group(
        function () {
            Route::prefix("generatorlogbook")->group(function () {
                Route::get('/', [GeneratorlogbookController::class, 'index'])->name('officemanagement.generatorlogbook.index');
                Route::get('/create', [GeneratorlogbookController::class, 'create'])->name('officemanagement.generatorlogbook.create');
                Route::post('/store', [GeneratorlogbookController::class, 'store'])->name('officemanagement.generatorlogbook.store');
                Route::get('/show/{id}', [GeneratorlogbookController::class, 'show'])->name('officemanagement.generatorlogbook.show');
                Route::get('/edit/{id}', [GeneratorlogbookController::class, 'edit'])->name('officemanagement.generatorlogbook.edit');
                Route::put('/update/{id}', [GeneratorlogbookController::class, 'update'])->name('officemanagement.generatorlogbook.update');
                Route::delete('/destroy/{id}', [GeneratorlogbookController::class, 'destroy'])->name('officemanagement.generatorlogbook.destroy');
            });
            Route::prefix("cashdeposite")->group(function () {
                Route::get('/', [CashdepositeController::class, 'index'])->name('officemanagement.cashdeposite.index');
                Route::get('/create', [CashdepositeController::class, 'create'])->name('officemanagement.cashdeposite.create');
                Route::post('/store', [CashdepositeController::class, 'store'])->name('officemanagement.cashdeposite.store');
                Route::get('/show/{id}', [CashdepositeController::class, 'show'])->name('officemanagement.cashdeposite.show');
                Route::get('/edit/{id}', [CashdepositeController::class, 'edit'])->name('officemanagement.cashdeposite.edit');
                Route::put('/update/{id}', [CashdepositeController::class, 'update'])->name('officemanagement.cashdeposite.update');
                Route::delete('/destroy/{id}', [CashdepositeController::class, 'destroy'])->name('officemanagement.cashdeposite.destroy');
            });

            Route::prefix("contract")->group(function () {
                Route::get('/', [ContractController::class, 'index'])->name('officemanagement.contract.index');
                Route::get('/create', [ContractController::class, 'create'])->name('officemanagement.contract.create');
                Route::post('/store', [ContractController::class, 'store'])->name('officemanagement.contract.store');
                Route::get('/show/{id}', [ContractController::class, 'show'])->name('officemanagement.contract.show');
                Route::get('/edit/{id}', [ContractController::class, 'edit'])->name('officemanagement.contract.edit');
                Route::put('/update/{id}', [ContractController::class, 'update'])->name('officemanagement.contract.update');
                Route::delete('/destroy/{id}', [ContractController::class, 'destroy'])->name('officemanagement.contract.destroy');
            });

            Route::prefix("purchaseservice")->group(function () {
                Route::get('/', [PurchaseserviceController::class, 'index'])->name('officemanagement.purchaseservice.index');
                Route::get('/create', [PurchaseserviceController::class, 'create'])->name('officemanagement.purchaseservice.create');
                Route::post('/store', [PurchaseserviceController::class, 'store'])->name('officemanagement.purchaseservice.store');
                Route::get('/show/{id}', [PurchaseserviceController::class, 'show'])->name('officemanagement.purchaseservice.show');
                Route::get('/edit/{id}', [PurchaseserviceController::class, 'edit'])->name('officemanagement.purchaseservice.edit');
                Route::put('/update/{id}', [PurchaseserviceController::class, 'update'])->name('officemanagement.purchaseservice.update');
                Route::delete('/destroy/{id}', [PurchaseserviceController::class, 'destroy'])->name('officemanagement.purchaseservice.destroy');
            });
        }
    );
    Route::prefix("payroll")->group(
        function () {
            Route::prefix("newpayment")->group(function () {
                Route::get('/', [NewpaymentController::class, 'index'])->name('payroll.newpayment.index');
                Route::get('/create', [NewpaymentController::class, 'create'])->name('payroll.newpayment.create');
                Route::post('/store', [NewpaymentController::class, 'store'])->name('payroll.newpayment.store');
                Route::get('/show/{id}', [NewpaymentController::class, 'show'])->name('payroll.newpayment.show');
                Route::get('/edit/{id}', [NewpaymentController::class, 'edit'])->name('payroll.newpayment.edit');
                Route::put('/update/{id}', [NewpaymentController::class, 'update'])->name('payroll.newpayment.update');
                Route::delete('/destroy/{id}', [NewpaymentController::class, 'destroy'])->name('payroll.newpayment.destroy');
            });
        }
    );
    Route::prefix("Training")->group(
        function () {
            Route::prefix("trainingtype")->group(function () {
                Route::get('/', [TrainingtypeController::class, 'index'])->name('training.trainingtype.index');
                Route::get('/create', [TrainingtypeController::class, 'create'])->name('training.trainingtype.create');
                Route::post('/store', [TrainingtypeController::class, 'store'])->name('training.trainingtype.store');
                Route::get('/show/{id}', [TrainingtypeController::class, 'show'])->name('training.trainingtype.show');
                Route::get('/edit/{id}', [TrainingtypeController::class, 'edit'])->name('training.trainingtype.edit');
                Route::put('/update/{id}', [TrainingtypeController::class, 'update'])->name('training.trainingtype.update');
                Route::delete('/destroy/{id}', [TrainingtypeController::class, 'destroy'])->name('training.trainingtype.destroy');
            });
            Route::prefix("traininglist")->group(function () {
                Route::get('/', [TraininglistController::class, 'index'])->name('training.traininglist.index');
                Route::get('/create', [TraininglistController::class, 'create'])->name('training.traininglist.create');
                Route::post('/store', [TraininglistController::class, 'store'])->name('training.traininglist.store');
                Route::get('/show/{id}', [TraininglistController::class, 'show'])->name('training.traininglist.show');
                Route::get('/edit/{id}', [TraininglistController::class, 'edit'])->name('training.traininglist.edit');
                Route::put('/update/{id}', [TraininglistController::class, 'update'])->name('training.traininglist.update');
                Route::delete('/destroy/{id}', [TraininglistController::class, 'destroy'])->name('training.traininglist.destroy');
            });
            Route::prefix("trainer")->group(function () {
                Route::get('/', [TrainerController::class, 'index'])->name('training.trainer.index');
                Route::get('/create', [TrainerController::class, 'create'])->name('training.trainer.create');
                Route::post('/store', [TrainerController::class, 'store'])->name('training.trainer.store');
                Route::get('/show/{id}', [TrainerController::class, 'show'])->name('training.trainer.show');
                Route::get('/edit/{id}', [TrainerController::class, 'edit'])->name('training.trainer.edit');
                Route::put('/update/{id}', [TrainerController::class, 'update'])->name('training.trainer.update');
                Route::delete('/destroy/{id}', [TrainerController::class, 'destroy'])->name('training.trainer.destroy');
            });
        }
    );
    Route::prefix("travelfleet")->group(
        function () {
            Route::prefix("fleetrequest")->group(function () {
                Route::get('/', [FleetrequestController::class, 'index'])->name('travelfleet.fleetrequest.index');
                Route::get('/create', [FleetrequestController::class, 'create'])->name('travelfleet.fleetrequest.create');
                Route::post('/store', [FleetrequestController::class, 'store'])->name('travelfleet.fleetrequest.store');
                Route::get('/show/{id}', [FleetrequestController::class, 'show'])->name('travelfleet.fleetrequest.show');
                Route::get('/edit/{id}', [FleetrequestController::class, 'edit'])->name('travelfleet.fleetrequest.edit');
                Route::put('/update/{id}', [FleetrequestController::class, 'update'])->name('travelfleet.fleetrequest.update');
                Route::delete('/destroy/{id}', [FleetrequestController::class, 'destroy'])->name('travelfleet.fleetrequest.destroy');
            });

            Route::prefix("fleetroster")->group(function () {
                Route::get('/', [FleetrosterController::class, 'index'])->name('travelfleet.fleetroster.index');
                Route::get('/create', [FleetrosterController::class, 'create'])->name('travelfleet.fleetroster.create');
                Route::post('/store', [FleetrosterController::class, 'store'])->name('travelfleet.fleetroster.store');
                Route::get('/show/{id}', [FleetrosterController::class, 'show'])->name('travelfleet.fleetroster.show');
                Route::get('/edit/{id}', [FleetrosterController::class, 'edit'])->name('travelfleet.fleetroster.edit');
                Route::put('/update/{id}', [FleetrosterController::class, 'update'])->name('travelfleet.fleetroster.update');
                Route::delete('/destroy/{id}', [FleetrosterController::class, 'destroy'])->name('travelfleet.fleetroster.destroy');
            });
            Route::prefix("travelslog")->group(function () {
                Route::get('/', [TravelslogController::class, 'index'])->name('travelfleet.travelslog.index');
                Route::get('/create', [TravelslogController::class, 'create'])->name('travelfleet.travelslog.create');
                Route::post('/store', [TravelslogController::class, 'store'])->name('travelfleet.travelslog.store');
                Route::get('/show/{id}', [TravelslogController::class, 'show'])->name('travelfleet.travelslog.show');
                Route::get('/edit/{id}', [TravelslogController::class, 'edit'])->name('travelfleet.travelslog.edit');
                Route::put('/update/{id}', [TravelslogController::class, 'update'])->name('travelfleet.travelslog.update');
                Route::delete('/destroy/{id}', [TravelslogController::class, 'destroy'])->name('travelfleet.travelslog.destroy');
            });

            Route::prefix("vehiclelog")->group(function () {
                Route::get('/', [VehiclelogController::class, 'index'])->name('travelfleet.vehiclelog.index');
                Route::get('/create', [VehiclelogController::class, 'create'])->name('travelfleet.vehiclelog.create');
                Route::post('/store', [VehiclelogController::class, 'store'])->name('travelfleet.vehiclelog.store');
                Route::get('/show/{id}', [VehiclelogController::class, 'show'])->name('travelfleet.vehiclelog.show');
                Route::get('/edit/{id}', [VehiclelogController::class, 'edit'])->name('travelfleet.vehiclelog.edit');
                Route::put('/update/{id}', [VehiclelogController::class, 'update'])->name('travelfleet.vehiclelog.update');
                Route::delete('/destroy/{id}', [VehiclelogController::class, 'destroy'])->name('travelfleet.vehiclelog.destroy');
            });
            Route::prefix("travelcategory")->group(function () {
                Route::get('/', [TravelcategoryController::class, 'index'])->name('travelfleet.travelcategory.index');
                Route::get('/create', [TravelcategoryController::class, 'create'])->name('travelfleet.travelcategory.create');
                Route::post('/store', [TravelcategoryController::class, 'store'])->name('travelfleet.travelcategory.store');
                Route::get('/show/{id}', [TravelcategoryController::class, 'show'])->name('travelfleet.travelcategory.show');
                Route::get('/edit/{id}', [TravelcategoryController::class, 'edit'])->name('travelfleet.travelcategory.edit');
                Route::put('/update/{id}', [TravelcategoryController::class, 'update'])->name('travelfleet.travelcategory.update');
                Route::delete('/destroy/{id}', [TravelcategoryController::class, 'destroy'])->name('travelfleet.travelcategory.destroy');
            });
            Route::prefix("travelapproval")->group(function () {
                Route::get('/', [TravelapprovalController::class, 'index'])->name('travelfleet.travelapproval.index');
                Route::get('/create', [TravelapprovalController::class, 'create'])->name('travelfleet.travelapproval.create');
                Route::post('/store', [TravelapprovalController::class, 'store'])->name('travelfleet.travelapproval.store');
                Route::get('/show/{id}', [TravelapprovalController::class, 'show'])->name('travelfleet.travelapproval.show');
                Route::get('/edit/{id}', [TravelapprovalController::class, 'edit'])->name('travelfleet.travelapproval.edit');
                Route::put('/update/{id}', [TravelapprovalController::class, 'update'])->name('travelfleet.travelapproval.update');
                Route::delete('/destroy/{id}', [TravelapprovalController::class, 'destroy'])->name('travelfleet.travelapproval.destroy');
            });


            Route::prefix("travelrequest")->group(function () {
                Route::get('/', [TravelrequestController::class, 'index'])->name('travelfleet.travelrequest.index');
                Route::get('/create', [TravelrequestController::class, 'create'])->name('travelfleet.travelrequest.create');
                Route::post('/store', [TravelrequestController::class, 'store'])->name('travelfleet.travelrequest.store');
                Route::get('/show/{id}', [TravelrequestController::class, 'show'])->name('travelfleet.travelrequest.show');
                Route::get('/edit/{id}', [TravelrequestController::class, 'edit'])->name('travelfleet.travelrequest.edit');
                Route::put('/update/{id}', [TravelrequestController::class, 'update'])->name('travelfleet.travelrequest.update');
                Route::delete('/destroy/{id}', [TravelrequestController::class, 'destroy'])->name('travelfleet.travelrequest.destroy');
            });


            Route::prefix("maintenancelog")->group(function () {
                Route::get('/', [MaintenancelogController::class, 'index'])->name('travelfleet.maintenancelog.index');
                Route::get('/create', [MaintenancelogController::class, 'create'])->name('travelfleet.maintenancelog.create');
                Route::post('/store', [MaintenancelogController::class, 'store'])->name('travelfleet.maintenancelog.store');
                Route::get('/show/{id}', [MaintenancelogController::class, 'show'])->name('travelfleet.maintenancelog.show');
                Route::get('/edit/{id}', [MaintenancelogController::class, 'edit'])->name('travelfleet.maintenancelog.edit');
                Route::put('/update/{id}', [MaintenancelogController::class, 'update'])->name('travelfleet.maintenancelog.update');
                Route::delete('/destroy/{id}', [MaintenancelogController::class, 'destroy'])->name('travelfleet.maintenancelog.destroy');
            });

            Route::prefix("fleetmanagement")->group(function () {
                Route::get('/', [FleetmanagementController::class, 'index'])->name('travelfleet.fleetmanagement.index');
                Route::get('/create', [FleetmanagementController::class, 'create'])->name('travelfleet.fleetmanagement.create');
                Route::post('/store', [FleetmanagementController::class, 'store'])->name('travelfleet.fleetmanagement.store');
                Route::get('/show/{id}', [FleetmanagementController::class, 'show'])->name('travelfleet.fleetmanagement.show');
                Route::get('/edit/{id}', [FleetmanagementController::class, 'edit'])->name('travelfleet.fleetmanagement.edit');
                Route::put('/update/{id}', [FleetmanagementController::class, 'update'])->name('travelfleet.fleetmanagement.update');
                Route::delete('/destroy/{id}', [FleetmanagementController::class, 'destroy'])->name('travelfleet.fleetmanagement.destroy');
            });

            Route::prefix("driverroster")->group(function () {
                Route::get('/', [DriverrosterController::class, 'index'])->name('travelfleet.driverroster.index');
                Route::get('/create', [DriverrosterController::class, 'create'])->name('travelfleet.driverroster.create');
                Route::post('/store', [DriverrosterController::class, 'store'])->name('travelfleet.driverroster.store');
                Route::get('/show/{id}', [DriverrosterController::class, 'show'])->name('travelfleet.driverroster.show');
                Route::get('/edit/{id}', [DriverrosterController::class, 'edit'])->name('travelfleet.driverroster.edit');
                Route::put('/update/{id}', [DriverrosterController::class, 'update'])->name('travelfleet.driverroster.update');
                Route::delete('/destroy/{id}', [DriverrosterController::class, 'destroy'])->name('travelfleet.driverroster.destroy');
            });
        }
    );

    Route::prefix("Finance")->group(
        function () {
            Route::prefix("creditNotes")->group(function () {
                Route::get('/', [CreditNotesController::class, 'index'])->name('finance.creditnotes.index');
                Route::get('/create', [CreditNotesController::class, 'create'])->name('finance.creditnotes.create');
                Route::post('/store', [CreditNotesController::class, 'store'])->name('finance.creditnotes.store');
                Route::get('/show/{id}', [CreditNotesController::class, 'show'])->name('finance.creditnotes.show');
                Route::get('/edit/{id}', [CreditNotesController::class, 'edit'])->name('finance.creditnotes.edit');
                Route::put('/update/{id}', [CreditNotesController::class, 'update'])->name('finance.creditnotes.update');
                Route::delete('/destroy/{id}', [CreditNotesController::class, 'destroy'])->name('finance.creditnotes.destroy');
            });
            Route::prefix("invoices")->group(function () {
                Route::get('/', [InvoicesController::class, 'index'])->name('finance.invoices.index');
                Route::get('/create', [InvoicesController::class, 'create'])->name('finance.invoices.create');
                Route::post('/store', [InvoicesController::class, 'store'])->name('finance.invoices.store');
                Route::get('/show/{id}', [InvoicesController::class, 'show'])->name('finance.invoices.show');
                Route::get('/edit/{id}', [InvoicesController::class, 'edit'])->name('finance.invoices.edit');
                Route::put('/update/{id}', [InvoicesController::class, 'update'])->name('finance.invoices.update');
                Route::delete('/destroy/{id}', [InvoicesController::class, 'destroy'])->name('finance.invoices.destroy');
            });

            Route::prefix("estimates")->group(function () {
                Route::get('/', [EstimatesController::class, 'index'])->name('finance.estimates.index');
                Route::get('/create', [EstimatesController::class, 'create'])->name('finance.estimates.create');
                Route::post('/store', [EstimatesController::class, 'store'])->name('finance.estimates.store');
                Route::get('/show/{id}', [EstimatesController::class, 'show'])->name('finance.estimates.show');
                Route::get('/edit/{id}', [EstimatesController::class, 'edit'])->name('finance.estimates.edit');
                Route::put('/update/{id}', [EstimatesController::class, 'update'])->name('finance.estimates.update');
                Route::delete('/destroy/{id}', [EstimatesController::class, 'destroy'])->name('finance.estimates.destroy');
            });



            Route::prefix("proposal")->group(function () {
                Route::get('/', [ProposalController::class, 'index'])->name('finance.proposal.index');
                Route::get('/create', [ProposalController::class, 'create'])->name('finance.proposal.create');
                Route::post('/store', [ProposalController::class, 'store'])->name('finance.proposal.store');
                Route::get('/show/{id}', [ProposalController::class, 'show'])->name('finance.proposal.show');
                Route::get('/edit/{id}', [ProposalController::class, 'edit'])->name('finance.proposal.edit');
                Route::put('/update/{id}', [ProposalController::class, 'update'])->name('finance.proposal.update');
                Route::delete('/destroy/{id}', [ProposalController::class, 'destroy'])->name('finance.proposal.destroy');
            });


            Route::prefix("financeExpenses")->group(function () {
                Route::get('/', [FinanceExpensesController::class, 'index'])->name('finance.financeexpenses.index');
                Route::get('/create', [FinanceExpensesController::class, 'create'])->name('finance.financeexpenses.create');
                Route::post('/store', [FinanceExpensesController::class, 'store'])->name('finance.financeexpenses.store');
                Route::get('/show/{id}', [FinanceExpensesController::class, 'show'])->name('finance.financeexpenses.show');
                Route::get('/edit/{id}', [FinanceExpensesController::class, 'edit'])->name('finance.financeexpenses.edit');
                Route::put('/update/{id}', [FinanceExpensesController::class, 'update'])->name('finance.financeexpenses.update');
                Route::delete('/destroy/{id}', [FinanceExpensesController::class, 'destroy'])->name('finance.financeexpenses.destroy');
            });
            Route::prefix("financePay")->group(function () {
                Route::get('/', [FinancePayController::class, 'index'])->name('finance.financepay.index');
                Route::get('/create', [FinancePayController::class, 'create'])->name('finance.financepay.create');
                Route::post('/store', [FinancePayController::class, 'store'])->name('finance.financepay.store');
                Route::get('/show/{id}', [FinancePayController::class, 'show'])->name('finance.financepay.show');
                Route::get('/edit/{id}', [FinancePayController::class, 'edit'])->name('finance.financepay.edit');
                Route::put('/update/{id}', [FinancePayController::class, 'update'])->name('finance.financepay.update');
                Route::delete('/destroy/{id}', [FinancePayController::class, 'destroy'])->name('finance.financepay.destroy');
            });

            Route::prefix("advancerequest")->group(function () {
                Route::get('/', [AdvancerequestController::class, 'index'])->name('finance.advancerequest.index');
                Route::get('/create', [AdvancerequestController::class, 'create'])->name('finance.advancerequest.create');
                Route::post('/store', [AdvancerequestController::class, 'store'])->name('finance.advancerequest.store');
                Route::get('/show/{id}', [AdvancerequestController::class, 'show'])->name('finance.advancerequest.show');
                Route::get('/edit/{id}', [AdvancerequestController::class, 'edit'])->name('finance.advancerequest.edit');
                Route::put('/update/{id}', [AdvancerequestController::class, 'update'])->name('finance.advancerequest.update');
                Route::delete('/destroy/{id}', [AdvancerequestController::class, 'destroy'])->name('finance.advancerequest.destroy');
            });



            Route::prefix("cashrequest")->group(function () {
                Route::get('/', [CashrequestController::class, 'index'])->name('finance.cashrequest.index');
                Route::get('/create', [CashrequestController::class, 'create'])->name('finance.cashrequest.create');
                Route::post('/store', [CashrequestController::class, 'store'])->name('finance.cashrequest.store');
                Route::get('/show/{id}', [CashrequestController::class, 'show'])->name('finance.cashrequest.show');
                Route::get('/edit/{id}', [CashrequestController::class, 'edit'])->name('finance.cashrequest.edit');
                Route::put('/update/{id}', [CashrequestController::class, 'update'])->name('finance.cashrequest.update');
                Route::delete('/destroy/{id}', [CashrequestController::class, 'destroy'])->name('finance.cashrequest.destroy');
            });
            Route::prefix("expensesclaim")->group(function () {
                Route::get('/', [ExpensesclaimController::class, 'index'])->name('finance.expensesclaim.index');
                Route::get('/create', [ExpensesclaimController::class, 'create'])->name('finance.expensesclaim.create');
                Route::post('/store', [ExpensesclaimController::class, 'store'])->name('finance.expensesclaim.store');
                Route::get('/show/{id}', [ExpensesclaimController::class, 'show'])->name('finance.expensesclaim.show');
                Route::get('/edit/{id}', [ExpensesclaimController::class, 'edit'])->name('finance.expensesclaim.edit');
                Route::put('/update/{id}', [ExpensesclaimController::class, 'update'])->name('finance.expensesclaim.update');
                Route::delete('/destroy/{id}', [ExpensesclaimController::class, 'destroy'])->name('finance.expensesclaim.destroy');
            });
        }



    );
    Route::prefix("work")->group(
        function () {
            Route::prefix("workProjects")->group(
                function () {
                    Route::get('/', [WorkProjectsController::class, 'index'])->name('work.workprojects.index');
                    Route::get('/create', [WorkProjectsController::class, 'create'])->name('work.workprojects.create');
                    Route::post('/store', [WorkProjectsController::class, 'store'])->name('work.workprojects.store');
                    Route::get('/show/{id}', [WorkProjectsController::class, 'show'])->name('work.workprojects.show');
                    Route::get('/edit/{id}', [WorkProjectsController::class, 'edit'])->name('work.workprojects.edit');
                    Route::put('/update/{id}', [WorkProjectsController::class, 'update'])->name('work.workprojects.update');
                    Route::delete('/destroy/{id}', [WorkProjectsController::class, 'destroy'])->name('work.workprojects.destroy');
                }
            );

            Route::prefix("tasks")->group(function () {
                Route::get('/', [TasksController::class, 'index'])->name('work.tasks.index');
                Route::get('/create', [TasksController::class, 'create'])->name('work.tasks.create');
                Route::post('/store', [TasksController::class, 'store'])->name('work.tasks.store');
                Route::get('/show/{id}', [TasksController::class, 'show'])->name('work.tasks.show');
                Route::get('/edit/{id}', [TasksController::class, 'edit'])->name('work.tasks.edit');
                Route::put('/update/{id}', [TasksController::class, 'update'])->name('work.tasks.update');
                Route::delete('/destroy/{id}', [TasksController::class, 'destroy'])->name('work.tasks.destroy');
            });

            Route::prefix("timelog")->group(function () {
                Route::get('/', [TimelogController::class, 'index'])->name('work.timelog.index');
                Route::get('/create', [TimelogController::class, 'create'])->name('work.timelog.create');
                Route::post('/store', [TimelogController::class, 'store'])->name('work.timelog.store');
                Route::get('/show/{id}', [TimelogController::class, 'show'])->name('work.timelog.show');
                Route::get('/edit/{id}', [TimelogController::class, 'edit'])->name('work.timelog.edit');
                Route::put('/update/{id}', [TimelogController::class, 'update'])->name('work.timelog.update');
                Route::delete('/destroy/{id}', [TimelogController::class, 'destroy'])->name('work.timelog.destroy');
            });
        }
    );
    Route::prefix("project")->group(
        function () {
            Route::prefix("workfromhome")->group(function () {
                Route::get('/', [WorkfromhomeController::class, 'index'])->name('project.workfromhome.index');
                Route::get('/create', [WorkfromhomeController::class, 'create'])->name('project.workfromhome.create');
                Route::post('/store', [WorkfromhomeController::class, 'store'])->name('project.workfromhome.store');
                Route::get('/show/{id}', [WorkfromhomeController::class, 'show'])->name('project.workfromhome.show');
                Route::get('/edit/{id}', [WorkfromhomeController::class, 'edit'])->name('project.workfromhome.edit');
                Route::put('/update/{id}', [WorkfromhomeController::class, 'update'])->name('project.workfromhome.update');
                Route::delete('/destroy/{id}', [WorkfromhomeController::class, 'destroy'])->name('project.workfromhome.destroy');
            });
        }
    );

    Route::prefix("rostermanagement")->group(
        function () {
            Route::prefix("rostercategory")->group(function () {
                Route::get('/', [RostercategoryController::class, 'index'])->name('rostermanagement.rostercategory.index');
                Route::get('/create', [RostercategoryController::class, 'create'])->name('rostermanagement.rostercategory.create');
                Route::post('/store', [RostercategoryController::class, 'store'])->name('rostermanagement.rostercategory.store');
                Route::get('/show/{id}', [RostercategoryController::class, 'show'])->name('rostermanagement.rostercategory.show');
                Route::get('/edit/{id}', [RostercategoryController::class, 'edit'])->name('rostermanagement.rostercategory.edit');
                Route::put('/update/{id}', [RostercategoryController::class, 'update'])->name('rostermanagement.rostercategory.update');
                Route::delete('/destroy/{id}', [RostercategoryController::class, 'destroy'])->name('rostermanagement.rostercategory.destroy');
            });

            Route::prefix("rosterentries")->group(function () {
                Route::get('/', [RosterentriesController::class, 'index'])->name('rostermanagement.rosterentries.index');
                Route::get('/create', [RosterentriesController::class, 'create'])->name('rostermanagement.rosterentries.create');
                Route::post('/store', [RosterentriesController::class, 'store'])->name('rostermanagement.rosterentries.store');
                Route::get('/show/{id}', [RosterentriesController::class, 'show'])->name('rostermanagement.rosterentries.show');
                Route::get('/edit/{id}', [RosterentriesController::class, 'edit'])->name('rostermanagement.rosterentries.edit');
                Route::put('/update/{id}', [RosterentriesController::class, 'update'])->name('rostermanagement.rosterentries.update');
                Route::delete('/destroy/{id}', [RosterentriesController::class, 'destroy'])->name('rostermanagement.rosterentries.destroy');
            });
        }
    );



    Route::prefix("eventsandmeetings")->group(
        function () {
            Route::prefix("event")->group(function () {
                Route::get('/', [EventController::class, 'index'])->name('eventsandmeetings.event.index');
                Route::get('/create', [EventController::class, 'create'])->name('eventsandmeetings.event.create');
                Route::post('/store', [EventController::class, 'store'])->name('eventsandmeetings.event.store');
                Route::get('/show/{id}', [EventController::class, 'show'])->name('eventsandmeetings.event.show');
                Route::get('/edit/{id}', [EventController::class, 'edit'])->name('eventsandmeetings.event.edit');
                Route::put('/update/{id}', [EventController::class, 'update'])->name('eventsandmeetings.event.update');
                Route::delete('/destroy/{id}', [EventController::class, 'destroy'])->name('eventsandmeetings.event.destroy');
            });

            Route::prefix("meeting")->group(
                function () {
                    Route::get('/', [MeetingController::class, 'index'])->name('eventsandmeetings.meeting.index');
                    Route::get('/create', [MeetingController::class, 'create'])->name('eventsandmeetings.meeting.create');
                    Route::post('/store', [MeetingController::class, 'store'])->name('eventsandmeetings.meeting.store');
                    Route::get('/show/{id}', [MeetingController::class, 'show'])->name('eventsandmeetings.meeting.show');
                    Route::get('/edit/{id}', [MeetingController::class, 'edit'])->name('eventsandmeetings.meeting.edit');
                    Route::put('/update/{id}', [MeetingController::class, 'update'])->name('eventsandmeetings.meeting.update');
                    Route::delete('/destroy/{id}', [MeetingController::class, 'destroy'])->name('eventsandmeetings.meeting.destroy');
                }
            );
        }
    );



    Route::prefix("reports")->group(
        function () {
            Route::prefix("travelreports")->group(function () {
                Route::get('/', [TravelreportsController::class, 'index'])->name('reports.travelreports.index');
                Route::get('/create', [TravelreportsController::class, 'create'])->name('reports.travelreports.create');
                Route::post('/store', [TravelreportsController::class, 'store'])->name('reports.travelreports.store');
                Route::get('/show/{id}', [TravelreportsController::class, 'show'])->name('reports.travelreports.show');
                Route::get('/edit/{id}', [TravelreportsController::class, 'edit'])->name('reports.travelreports.edit');
                Route::put('/update/{id}', [TravelreportsController::class, 'update'])->name('reports.travelreports.update');
                Route::delete('/destroy/{id}', [TravelreportsController::class, 'destroy'])->name('reports.travelreports.destroy');
            });

            Route::prefix("taskreports")->group(function () {
                Route::get('/', [TaskreportsController::class, 'index'])->name('reports.taskreports.index');
                Route::get('/create', [TaskreportsController::class, 'create'])->name('reports.taskreports.create');
                Route::post('/store', [TaskreportsController::class, 'store'])->name('reports.taskreports.store');
                Route::get('/show/{id}', [TaskreportsController::class, 'show'])->name('reports.taskreports.show');
                Route::get('/edit/{id}', [TaskreportsController::class, 'edit'])->name('reports.taskreports.edit');
                Route::put('/update/{id}', [TaskreportsController::class, 'update'])->name('reports.taskreports.update');
                Route::delete('/destroy/{id}', [TaskreportsController::class, 'destroy'])->name('reports.taskreports.destroy');
            });


            Route::prefix("financereports")->group(function () {
                Route::get('/', [FinancereportsController::class, 'index'])->name('reports.financereports.index');
                Route::get('/create', [FinancereportsController::class, 'create'])->name('reports.financereports.create');
                Route::post('/store', [FinancereportsController::class, 'store'])->name('reports.financereports.store');
                Route::get('/show/{id}', [FinancereportsController::class, 'show'])->name('reports.financereports.show');
                Route::get('/edit/{id}', [FinancereportsController::class, 'edit'])->name('reports.financereports.edit');
                Route::put('/update/{id}', [FinancereportsController::class, 'update'])->name('reports.financereports.update');
                Route::delete('/destroy/{id}', [FinancereportsController::class, 'destroy'])->name('reports.financereports.destroy');
            });

            Route::prefix("leavereports")->group(function () {
                Route::get('/', [LeavereportsController::class, 'index'])->name('reports.leavereports.index');
                Route::get('/create', [LeavereportsController::class, 'create'])->name('reports.leavereports.create');
                Route::post('/store', [LeavereportsController::class, 'store'])->name('reports.leavereports.store');
                Route::get('/show/{id}', [LeavereportsController::class, 'show'])->name('reports.leavereports.show');
                Route::get('/edit/{id}', [LeavereportsController::class, 'edit'])->name('reports.leavereports.edit');
                Route::put('/update/{id}', [LeavereportsController::class, 'update'])->name('reports.leavereports.update');
                Route::delete('/destroy/{id}', [LeavereportsController::class, 'destroy'])->name('reports.leavereports.destroy');
            });

            Route::prefix("expensesreports")->group(function () {
                Route::get('/', [ExpensesreportsController::class, 'index'])->name('reports.expensesreports.index');
                Route::get('/create', [ExpensesreportsController::class, 'create'])->name('reports.expensesreports.create');
                Route::post('/store', [ExpensesreportsController::class, 'store'])->name('reports.expensesreports.store');
                Route::get('/show/{id}', [ExpensesreportsController::class, 'show'])->name('reports.expensesreports.show');
                Route::get('/edit/{id}', [ExpensesreportsController::class, 'edit'])->name('reports.expensesreports.edit');
                Route::put('/update/{id}', [ExpensesreportsController::class, 'update'])->name('reports.expensesreports.update');
                Route::delete('/destroy/{id}', [ExpensesreportsController::class, 'destroy'])->name('reports.expensesreports.destroy');
            });

            Route::prefix("attendancereports")->group(function () {
                Route::get('/', [AttendancereportsController::class, 'index'])->name('reports.attendancereports.index');
                Route::get('/create', [AttendancereportsController::class, 'create'])->name('reports.attendancereports.create');
                Route::post('/store', [AttendancereportsController::class, 'store'])->name('reports.attendancereports.store');
                Route::get('/show/{id}', [AttendancereportsController::class, 'show'])->name('reports.attendancereports.show');
                Route::get('/edit/{id}', [AttendancereportsController::class, 'edit'])->name('reports.attendancereports.edit');
                Route::put('/update/{id}', [AttendancereportsController::class, 'update'])->name('reports.attendancereports.update');
                Route::delete('/destroy/{id}', [AttendancereportsController::class, 'destroy'])->name('reports.attendancereports.destroy');
            });
        }
    );

    Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
});




require __DIR__ . '/auth.php';
require __DIR__ . '/setting.php';
