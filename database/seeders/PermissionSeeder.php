<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            //module_id = 1
            'Master' => [
                'absentreason' => [
                    'master.absentreason.index',
                    'master.absentreason.create',
                    'master.absentreason.show',
                    'master.absentreason.store',
                    'master.absentreason.edit ',
                    'master.absentreason.update',
                    'master.absentreason.destory',

                ],
                'attendanceform' => [
                    'master.attendancefrom.index',
                    'master.attendancefrom.create',
                    'master.attendancefrom.show',
                    'master.attendancefrom.store',
                    'master.attendancefrom.edit ',
                    'master.attendancefrom.update',
                    'master.attendancefrom.destory',

                ],
                'city' => [
                    'master.city.index',
                    'master.city.create',
                    'master.city.show',
                    'master.city.store',
                    'master.city.edit ',
                    'master.city.update',
                    'master.city.destory',

                ],
                'country' => [
                    'master.country.index',
                    'master.country.create',
                    'master.country.show',
                    'master.country.store',
                    'master.country.edit ',
                    'master.country.update',
                    'master.country.destory',
                ],
                'departmenttype' => [
                    'master.departmenttype.index',
                    'master.departmenttype.create',
                    'master.departmenttype.show',
                    'master.departmenttype.store',
                    'master.departmenttype.edit ',
                    'master.departmenttype.update',
                    'master.departmenttype.destory',
                ],
                'district' => [
                    'master.district.index',
                    'master.district.create',
                    'master.district.show',
                    'master.district.store',
                    'master.district.edit ',
                    'master.district.update',
                    'master.district.destory',
                ],
                'employmentsizecategory' => [
                    'master.employmentsizecategory.index',
                    'master.employmentsizecategory.create',
                    'master.employmentsizecategory.show',
                    'master.employmentsizecategory.store',
                    'master.employmentsizecategory.edit ',
                    'master.employmentsizecategory.update',
                    'master.employmentsizecategory.destory',
                ],
                'fleet' => [
                    'master.fleet.index',
                    'master.fleet.create',
                    'master.fleet.show',
                    'master.fleet.store',
                    'master.fleet.edit ',
                    'master.fleet.update',
                    'master.fleet.destory',
                ],
                'holidaytypes' => [
                    'master.holidaytypes.index',
                    'master.holidaytypes.create',
                    'master.holidaytypes.show',
                    'master.holidaytypes.store',
                    'master.holidaytypes.edit ',
                    'master.holidaytypes.update',
                    'master.holidaytypes.destory',
                ],
                'jobtitle' => [
                    'master.jobtitle.index',
                    'master.jobtitle.create',
                    'master.jobtitle.show',
                    'master.jobtitle.store',
                    'master.jobtitle.edit ',
                    'master.jobtitle.update',
                    'master.jobtitle.destory',
                ],
                'leavetype' => [
                    'master.leavetype.index',
                    'master.leavetype.create',
                    'master.leavetype.show',
                    'master.leavetype.store',
                    'master.leavetype.edit ',
                    'master.leavetype.update',
                    'master.leavetype.destory',
                ],
                'nationality' => [
                    'master.nationality.index',
                    'master.nationality.create',
                    'master.nationality.show',
                    'master.nationality.store',
                    'master.nationality.edit ',
                    'master.nationality.update',
                    'master.nationality.destory',
                ],
                'orginizationcategory' => [
                    'master.organizationcategory.index',
                    'master.organizationcategory.create',
                    'master.organizationcategory.show',
                    'master.organizationcategory.store',
                    'master.organizationcategory.edit ',
                    'master.organizationcategory.update',
                    'master.organizationcategory.destory',
                ],
                'organizationtype' => [
                    'master.organizationtype.index',
                    'master.organizationtype.create',
                    'master.organizationtype.show',
                    'master.organizationtype.store',
                    'master.organizationtype.edit ',
                    'master.organizationtype.update',
                    'master.organizationtype.destory',
                ],
                'policy' => [
                    'master.policy.index',
                    'master.policy.create',
                    'master.policy.show',
                    'master.policy.store',
                    'master.policy.edit ',
                    'master.policy.update',
                    'master.policy.destory',
                ],
                'state' => [
                    'master.state.index',
                    'master.state.create',
                    'master.state.show',
                    'master.state.store',
                    'master.state.edit ',
                    'master.state.update',
                    'master.state.destory',
                ],
                'traveltype' => [
                    'master.traveltype.index',
                    'master.traveltype.create',
                    'master.traveltype.show',
                    'master.traveltype.store',
                    'master.traveltype.edit ',
                    'master.traveltype.update',
                    'master.traveltype.destory',
                ],


            ],

            'Hr' => [
                'absentreason' => [
                    'hr.absentreason.index',
                    'hr.absentreason.create',
                    'hr.absentreason.show',
                    'hr.absentreason.store',
                    'hr.absentreason.edit ',
                    'hr.absentreason.update',
                    'hr.absentreason.destory',
                ],
                'appreciation' => [
                    'hr.appreciation.index',
                    'hr.appreciation.create',
                    'hr.appreciation.show',
                    'hr.appreciation.store',
                    'hr.appreciation.edit ',
                    'hr.appreciation.update',
                    'hr.appreciation.destory',
                ],
                'attendence' => [
                    'hr.attendence.index',
                    'hr.attendence.create',
                    'hr.attendence.show',
                    'hr.attendence.store',
                    'hr.attendence.edit ',
                    'hr.attendence.update',
                    'hr.attendence.destory',

                ],
                'complaints' => [
                    'hr.complaints.index',
                    'hr.complaints.create',
                    'hr.complaints.show',
                    'hr.complaints.store',
                    'hr.complaints.edit ',
                    'hr.complaints.update',
                    'hr.complaints.destory',

                ],
                'department' => [
                    'hr.department.index',
                    'hr.department.create',
                    'hr.department.show',
                    'hr.department.store',
                    'hr.department.edit ',
                    'hr.department.update',
                    'hr.department.destory',

                ],
                'designation' => [
                    'hr.designation.index',
                    'hr.designation.create',
                    'hr.designation.show',
                    'hr.designation.store',
                    'hr.designation.edit ',
                    'hr.designation.update',
                    'hr.designation.destory',

                ],
                'employee' => [
                    'hr.employee.index',
                    'hr.employee.create',
                    'hr.employee.show',
                    'hr.employee.store',
                    'hr.employee.edit ',
                    'hr.employee.update',
                    'hr.employee.destory',

                ],
                'employeetimeline' => [
                    'hr.employeementtimeline.index',
                    'hr.employeementtimeline.create',
                    'hr.employeementtimeline.show',
                    'hr.employeementtimeline.store',
                    'hr.employeementtimeline.edit ',
                    'hr.employeementtimeline.update',
                    'hr.employeementtimeline.destory',

                ],
                'employeeonboarding' => [
                    'hr.employeeonboarding.index',
                    'hr.employeeonboarding.create',
                    'hr.employeeonboarding.show',
                    'hr.employeeonboarding.store',
                    'hr.employeeonboarding.edit ',
                    'hr.employeeonboarding.update',
                    'hr.employeeonboarding.destory',

                ],
                'latereasons' => [
                    'hr.latereasons.index',
                    'hr.latereasons.create',
                    'hr.latereasons.show',
                    'hr.latereasons.store',
                    'hr.latereasons.edit ',
                    'hr.latereasons.update',
                    'hr.latereasons.destory',

                ],
                'leaveapplication' => [
                    'hr.leaveapplication.index',
                    'hr.leaveapplication.create',
                    'hr.leaveapplication.show',
                    'hr.leaveapplication.store',
                    'hr.leaveapplication.edit ',
                    'hr.leaveapplication.update',
                    'hr.leaveapplication.destory',

                ],
                'manageholiday' => [
                    'hr.mangeholiday.index',
                    'hr.mangeholiday.create',
                    'hr.mangeholiday.show',
                    'hr.mangeholiday.store',
                    'hr.mangeholiday.edit ',
                    'hr.mangeholiday.update',
                    'hr.mangeholiday.destory',

                ],
                'promotiondemotion' => [
                    'hr.promotiondemotion.index',
                    'hr.promotiondemotion.create',
                    'hr.promotiondemotion.show',
                    'hr.promotiondemotion.store',
                    'hr.promotiondemotion.edit ',
                    'hr.promotiondemotion.update',
                    'hr.promotiondemotion.destory',

                ],
                'resignation' => [
                    'hr.resignation.index',
                    'hr.resignation.create',
                    'hr.resignation.show',
                    'hr.resignation.store',
                    'hr.resignation.edit ',
                    'hr.resignation.update',
                    'hr.resignation.destory',

                ],
                'shiftroster' => [
                    'hr.shiftroster.index',
                    'hr.shiftroster.create',
                    'hr.shiftroster.show',
                    'hr.shiftroster.store',
                    'hr.shiftroster.edit ',
                    'hr.shiftroster.update',
                    'hr.shiftroster.destory',

                ],
                'transfer' => [
                    'hr.transfer.index',
                    'hr.transfer.create',
                    'hr.transfer.show',
                    'hr.transfer.store',
                    'hr.transfer.edit ',
                    'hr.transfer.update',
                    'hr.transfer.destory',

                ],
                'warnings' => [
                    'hr.warnings.index',
                    'hr.warnings.create',
                    'hr.warnings.show',
                    'hr.warnings.store',
                    'hr.warnings.edit ',
                    'hr.warnings.update',
                    'hr.warnings.destory',

                ],

            ],
            'crm' => [
                'clients' => [
                    'crm.clients.index',
                    'crm.clients.create',
                    'crm.clients.show',
                    'crm.clients.store',
                    'crm.clients.edit ',
                    'crm.clients.update',
                    'crm.clients.destory',

                ],
                'leads' => [
                    'crm.leads.index',
                    'crm.leads.create',
                    'crm.leads.show',
                    'crm.leads.store',
                    'crm.leads.edit ',
                    'crm.leads.update',
                    'crm.leads.destory',
                ],
            ],

            'timesheet' => [
                'absentreason' => [
                    'timesheet.absentreason.index',
                    'timesheet.absentreason.create',
                    'timesheet.absentreason.show',
                    'timesheet.absentreason.store',
                    'timesheet.absentreason.edit ',
                    'timesheet.absentreason.update',
                ]
            ],

            'work' => [
                'tasks' => [
                    'work.tasks.index',
                    'work.tasks.create',
                    'work.tasks.show',
                    'work.tasks.store',
                    'work.tasks.edit ',
                    'work.tasks.update',
                    'work.tasks.destory',

                ],
                'timelog' => [
                    'work.timelog.index',
                    'work.timelog.create',
                    'work.timelog.show',
                    'work.timelog.store',
                    'work.timelog.edit ',
                    'work.timelog.update',
                    'work.timelog.destory',

                ],
                'workProjects' => [
                    'work.workProjects.index',
                    'work.workProjects.create',
                    'work.workProjects.show',
                    'work.workProjects.store',
                    'work.workProjects.edit ',
                    'work.workProjects.update',
                    'work.workProjects.destory',
                ]
            ],

            'Finance' => [
                'advancerequest' => [
                    'Finance.advancerequest.index',
                    'Finance.advancerequest.create',
                    'Finance.advancerequest.show',
                    'Finance.advancerequest.store',
                    'Finance.advancerequest.edit ',
                    'Finance.advancerequest.update',
                    'Finance.advancerequest.destory',

                ],
                'cashdeposit' => [
                    'Finance.cashdeposite.index',
                    'Finance.cashdeposite.create',
                    'Finance.cashdeposite.show',
                    'Finance.cashdeposite.store',
                    'Finance.cashdeposite.edit ',
                    'Finance.cashdeposite.update',
                    'Finance.cashdeposite.destory',

                ],
                'cashrequest' => [
                    'Finance. cashrequest.index',
                    'Finance. cashrequest.create',
                    'Finance. cashrequest.show',
                    'Finance. cashrequest.store',
                    'Finance. cashrequest.edit ',
                    'Finance. cashrequest.update',
                    'Finance. cashrequest.destory',

                ],
                'creditnotes' => [
                    'Finance. creditnotes.index',
                    'Finance. creditnotes.create',
                    'Finance. creditnotes.show',
                    'Finance. creditnotes.store',
                    'Finance. creditnotes.edit ',
                    'Finance. creditnotes.update',
                    'Finance. creditnotes.destory',

                ],
                'estimates' => [
                    'Finance. estimates.index',
                    'Finance. estimates.create',
                    'Finance. estimates.show',
                    'Finance. estimates.store',
                    'Finance. estimates.edit ',
                    'Finance. estimates.update',
                    'Finance. estimates.destory',

                ],
                'expensesclaim' => [
                    'Finance.expensesclaim.index',
                    'Finance.expensesclaim.create',
                    'Finance.expensesclaim.show',
                    'Finance.expensesclaim.store',
                    'Finance.expensesclaim.edit ',
                    'Finance.expensesclaim.update',
                    'Finance.expensesclaim.destory',

                ],
                'financeExpenses' => [
                    'Finance.financeExpenses.index',
                    'Finance.financeExpenses.create',
                    'Finance.financeExpenses.show',
                    'Finance.financeExpenses.store',
                    'Finance.financeExpenses.edit ',
                    'Finance.financeExpenses.update',
                    'Finance.financeExpenses.destory',

                ],
                'finanacePay' => [
                    'Finance.financePay.index',
                    'Finance.financePay.create',
                    'Finance.financePay.show',
                    'Finance.financePay.store',
                    'Finance.financePay.edit ',
                    'Finance.financePay.update',
                    'Finance.financePay.destory',

                ],
                'invoices' => [
                    'Finance.invoices.index',
                    'Finance.invoices.create',
                    'Finance.invoices.show',
                    'Finance.invoices.store',
                    'Finance.invoices.edit ',
                    'Finance.invoices.update',
                    'Finance.invoices.destory',

                ],
                'proposal' => [
                    'Finance.proposal.index',
                    'Finance.proposal.create',
                    'Finance.proposal.show',
                    'Finance.proposal.store',
                    'Finance.proposal.edit ',
                    'Finance.proposal.update',
                    'Finance.proposal.destory',

                ]
            ],

            'notice' => [
                'announcement' => [
                    'notice.announcement.index',
                    'notice.announcement.create',
                    'notice.announcement.show',
                    'notice.announcement.store',
                    'notice.announcement.edit ',
                    'notice.announcement.update',
                    'notice.announcement.destory',

                ],
                'detailsview' => [
                    'notice.detailsview.index',
                    'notice.detailsview.create',
                    'notice.detailsview.show',
                    'notice.detailsview.store',
                    'notice.detailsview.edit ',
                    'notice.detailsview.update',
                    'notice.detailsview.destory',

                ],
                'equipmentdemand' => [
                    'notice.equipmentdemand.index',
                    'notice.equipmentdemand.create',
                    'notice.equipmentdemand.show',
                    'notice.equipmentdemand.store',
                    'notice.equipmentdemand.edit ',
                    'notice.equipmentdemand.update',
                    'notice.equipmentdemand.destory',

                ],
                'overview' => [
                    'notice.overview.index',
                    'notice.overview.create',
                    'notice.overview.show',
                    'notice.overview.store',
                    'notice.overview.edit ',
                    'notice.overview.update',
                    'notice.overview.destory',
                ]
            ],

            'assets' => [
                'assestCategory' => [
                    'assets.assestCategory.index',
                    'assets.assestCategory.create',
                    'assets.assestCategory.show',
                    'assets.assestCategory.store',
                    'assets.assestCategory.edit ',
                    'assets.assestCategory.update',
                    'assets.assestCategory.destory',
                ],
                'equipmentdemand' => [
                    'assets.equipmentdemand.index',
                    'assets.equipmentdemand.create',
                    'assets.equipmentdemand.show',
                    'assets.equipmentdemand.store',
                    'assets.equipmentdemand.edit ',
                    'assets.equipmentdemand.update',
                    'assets.equipmentdemand.destory',
                ],
                'fixedassets' => [
                    'assets.fixedassets.index',
                    'assets.fixedassets.create',
                    'assets.fixedassets.show',
                    'assets.fixedassets.store',
                    'assets.fixedassets.edit ',
                    'assets.fixedassets.update',
                    'assets.fixedassets.destory',
                ]
            ],

            'payroll' => [
                'newpayment' => [
                    'payroll.newpayment.index',
                    'payroll.newpayment.create',
                    'payroll.newpayment.show',
                    'payroll.newpayment.store',
                    'payroll.newpayment.edit',
                    'payroll.newpayment.update',
                ]
            ],

            'recruit' => [
                'experienceletter' => [
                    'recruit.experienceletter.index',
                    'recruit.experienceletter.create',
                    'recruit.experienceletter.show',
                    'recruit.experienceletter.store',
                    'recruit.experienceletter.edit ',
                    'recruit.experienceletter.update',
                    'recruit.experienceletter.destory',

                ],
                'interviewschedule' => [
                    'recruit.interviewschedule.index',
                    'recruit.interviewschedule.create',
                    'recruit.interviewschedule.show',
                    'recruit.interviewschedule.store',
                    'recruit.interviewschedule.edit ',
                    'recruit.interviewschedule.update',
                    'recruit.interviewschedule.destory',

                ],
                'jobapplication' => [
                    'recruit.jobapplication.index',
                    'recruit.jobapplication.create',
                    'recruit.jobapplication.show',
                    'recruit.jobapplication.store',
                    'recruit.jobapplication.edit ',
                    'recruit.jobapplication.update',
                    'recruit.jobapplication.destory',

                ],
                'jobinterview' => [
                    'recruit.jobinterview.index',
                    'recruit.jobinterview.create',
                    'recruit.jobinterview.show',
                    'recruit.jobinterview.store',
                    'recruit.jobinterview.edit ',
                    'recruit.jobinterview.update',
                    'recruit.jobinterview.destory',

                ],
                'jobpost' => [
                    'recruit.jobpost.index',
                    'recruit.jobpost.create',
                    'recruit.jobpost.show',
                    'recruit.jobpost.store',
                    'recruit.jobpost.edit ',
                    'recruit.jobpost.update',
                    'recruit.jobpost.destory',

                ],
                'offerletter' => [
                    'recruit.offerletter.index',
                    'recruit.offerletter.create',
                    'recruit.offerletter.show',
                    'recruit.offerletter.store',
                    'recruit.offerletter.edit ',
                    'recruit.offerletter.update',
                    'recruit.offerletter.destory',

                ],
                'recuritreports' => [
                    'recruit.recuritreports.index',
                    'recruit.recuritreports.create',
                    'recruit.recuritreports.show',
                    'recruit.recuritreports.store',
                    'recruit.recuritreports.edit ',
                    'recruit.recuritreports.update',
                    'recruit.recuritreports.destory',
                ]

            ],
            'requisition' => [
                'compensatoryLeave' => [
                    'requisition.compensatoryLeave.index',
                    'requisition.compensatoryLeave.create',
                    'requisition.compensatoryLeave.show',
                    'requisition.compensatoryLeave.store',
                    'requisition.compensatoryLeave.edit ',
                    'requisition.compensatoryLeave.update',
                    'requisition.compensatoryLeave.destory',

                ],
                'convinceRequest' => [
                    'requisition.convinceRequest.index',
                    'requisition.convinceRequest.create',
                    'requisition.convinceRequest.show',
                    'requisition.convinceRequest.store',
                    'requisition.convinceRequest.edit ',
                    'requisition.convinceRequest.update',
                    'requisition.convinceRequest.destory',

                ],
                'fleetRequest' => [
                    'requisition.fleetrequest.index',
                    'requisition.fleetrequest.create',
                    'requisition.fleetrequest.show',
                    'requisition.fleetrequest.store',
                    'requisition.fleetrequest.edit ',
                    'requisition.fleetrequest.update',
                    'requisition.fleetrequest.destory',

                ],
                'leaverequest' => [
                    'requisition.leaverequest.index',
                    'requisition.leaverequest.create',
                    'requisition.leaverequest.show',
                    'requisition.leaverequest.store',
                    'requisition.leaverequest.edit ',
                    'requisition.leaverequest.update',
                    'requisition.leaverequest.destory',

                ],
                'requisitiontravel' => [
                    'requisition.requisitiontravel.index',
                    'requisition.requisitiontravel.create',
                    'requisition.requisitiontravel.show',
                    'requisition.requisitiontravel.store',
                    'requisition.requisitiontravel.edit ',
                    'requisition.requisitiontravel.update',
                    'requisition.requisitiontravel.destory',

                ],
                'travel' => [
                    'requisition.travel.index',
                    'requisition.travel.create',
                    'requisition.travel.show',
                    'requisition.travel.store',
                    'requisition.travel.edit ',
                    'requisition.travel.update',
                    'requisition.travel.destory',

                ]

            ],

            'training' => [
                'trainer' => [
                    'training.trainer.index',
                    'training.trainer.create',
                    'training.trainer.show',
                    'training.trainer.store',
                    'training.trainer.edit ',
                    'training.trainer.update',
                    'training.trainer.destory',

                ],
                'traininglist' => [
                    'training.traininglist.index',
                    'training.traininglist.create',
                    'training.traininglist.show',
                    'training.traininglist.store',
                    'training.traininglist.edit ',
                    'training.traininglist.update',
                    'training.traininglist.destory',

                ],
                'trainingtype' => [
                    'training.trainingtype.index',
                    'training.trainingtype.create',
                    'training.trainingtype.show',
                    'training.trainingtype.store',
                    'training.trainingtype.edit ',
                    'training.trainingtype.update',
                    'training.trainingtype.destory',

                ]
            ],

            'travelfleet' => [
                'driverroster' => [
                    'travelfleet.driverroster.index',
                    'travelfleet.driverroster.create',
                    'travelfleet.driverroster.show',
                    'travelfleet.driverroster.store',
                    'travelfleet.driverroster.edit ',
                    'travelfleet.driverroster.update',
                    'travelfleet.driverroster.destory',

                ],
                'fleetmanagement' => [
                    'travelfleet.fleetmanagement.index',
                    'travelfleet.fleetmanagement.create',
                    'travelfleet.fleetmanagement.show',
                    'travelfleet.fleetmanagement.store',
                    'travelfleet.fleetmanagement.edit ',
                    'travelfleet.fleetmanagement.update',
                    'travelfleet.fleetmanagement.destory',

                ],
                'fleetrequest' => [
                    'travelfleet.fleetrequest.index',
                    'travelfleet.fleetrequest.create',
                    'travelfleet.fleetrequest.show',
                    'travelfleet.fleetrequest.store',
                    'travelfleet.fleetrequest.edit ',
                    'travelfleet.fleetrequest.update',
                    'travelfleet.fleetrequest.destory',

                ],
                'fleetroster' => [
                    'travelfleet.fleetroster.index',
                    'travelfleet.fleetroster.create',
                    'travelfleet.fleetroster.show',
                    'travelfleet.fleetroster.store',
                    'travelfleet.fleetroster.edit ',
                    'travelfleet.fleetroster.update',
                    'travelfleet.fleetroster.destory',

                ],
                'maintenancelog' => [
                    'travelfleet.maintenancelog.index',
                    'travelfleet.maintenancelog.create',
                    'travelfleet.maintenancelog.show',
                    'travelfleet.maintenancelog.store',
                    'travelfleet.maintenancelog.edit ',
                    'travelfleet.maintenancelog.update',
                    'travelfleet.maintenancelog.destory',

                ],
                'travelapproval' => [
                    'travelfleet.travelapproval.index',
                    'travelfleet.travelapproval.create',
                    'travelfleet.travelapproval.show',
                    'travelfleet.travelapproval.store',
                    'travelfleet.travelapproval.edit ',
                    'travelfleet.travelapproval.update',
                    'travelfleet.travelapproval.destory',

                ],
                'travelcategory' => [
                    'travelfleet.travelcategory.index',
                    'travelfleet.travelcategory.create',
                    'travelfleet.travelcategory.show',
                    'travelfleet.travelcategory.store',
                    'travelfleet.travelcategory.edit ',
                    'travelfleet.travelcategory.update',
                    'travelfleet.travelcategory.destory',

                ],
                'travelrequest' => [
                    'travelfleet.travelrequest.index',
                    'travelfleet.travelrequest.create',
                    'travelfleet.travelrequest.show',
                    'travelfleet.travelrequest.store',
                    'travelfleet.travelrequest.edit ',
                    'travelfleet.travelrequest.update',
                    'travelfleet.travelrequest.destory',

                ],
                'travelslog' => [
                    'travelfleet.travelslog.index',
                    'travelfleet.travelslog.create',
                    'travelfleet.travelslog.show',
                    'travelfleet.travelslog.store',
                    'travelfleet.travelslog.edit ',
                    'travelfleet.travelslog.update',
                    'travelfleet.travelslog.destory',

                ],
                'vehiclelog' => [
                    'travelfleet.vehiclelog.index',
                    'travelfleet.vehiclelog.create',
                    'travelfleet.vehiclelog.show',
                    'travelfleet.vehiclelog.store',
                    'travelfleet.vehiclelog.edit ',
                    'travelfleet.vehiclelog.update',
                    'travelfleet.vehiclelog.destory',

                ]
            ],

            'officemanagement' => [
                'cashdeposite' => [
                    'officemanagement.cashdeposite.index',
                    'officemanagement.cashdeposite.create',
                    'officemanagement.cashdeposite.show',
                    'officemanagement.cashdeposite.store',
                    'officemanagement.cashdeposite.edit ',
                    'officemanagement.cashdeposite.update',
                    'officemanagement.cashdeposite.destory',

                ],
                'contract' => [
                    'officemanagement.contract.index',
                    'officemanagement.contract.create',
                    'officemanagement.contract.show',
                    'officemanagement.contract.store',
                    'officemanagement.contract.edit ',
                    'officemanagement.contract.update',
                    'officemanagement.contract.destory',

                ],
                'generatorlogbook' => [
                    'officemanagement.generatorlogbook.index',
                    'officemanagement.generatorlogbook.create',
                    'officemanagement.generatorlogbook.show',
                    'officemanagement.generatorlogbook.store',
                    'officemanagement.generatorlogbook.edit ',
                    'officemanagement.generatorlogbook.update',
                    'officemanagement.generatorlogbook.destory',

                ],
                'purchaseservice' => [
                    'officemanagement.purchaseservice.index',
                    'officemanagement.purchaseservice.create',
                    'officemanagement.purchaseservice.show',
                    'officemanagement.purchaseservice.store',
                    'officemanagement.purchaseservice.edit ',
                    'officemanagement.purchaseservice.update',
                    'officemanagement.purchaseservice.destory',

                ]
            ],
            'rostermanagement' => [
                'rostercategory' => [
                    'rostermanagement.rostercategory.index',
                    'rostermanagement.rostercategory.create',
                    'rostermanagement.rostercategory.show',
                    'rostermanagement.rostercategory.store',
                    'rostermanagement.rostercategory.edit ',
                    'rostermanagement.rostercategory.update',
                    'rostermanagement.rostercategory.destory',

                ],
                'rosterentries' => [
                    'rostermanagement.rosterentries.index',
                    'rostermanagement.rosterentries.create',
                    'rostermanagement.rosterentries.show',
                    'rostermanagement.rosterentries.store',
                    'rostermanagement.rosterentries.edit ',
                    'rostermanagement.rosterentries.update',
                    'rostermanagement.rosterentries.destory',

                ]
            ],
            'inventory' => [
                'barcodemanagement' => [
                    'inventory.barcodemanagement.index',
                    'inventory.barcodemanagement.create',
                    'inventory.barcodemanagement.show',
                    'inventory.barcodemanagement.store',
                    'inventory.barcodemanagement.edit ',
                    'inventory.barcodemanagement.update',
                    'inventory.barcodemanagement.destory',
                ],
                'goodreceivedreconcile' => [
                    'inventory.goodreceivedreconcile.index',
                    'inventory.goodreceivedreconcile.create',
                    'inventory.goodreceivedreconcile.show',
                    'inventory.goodreceivedreconcile.store',
                    'inventory.goodreceivedreconcile.edit ',
                    'inventory.goodreceivedreconcile.update',
                    'inventory.goodreceivedreconcile.destory',

                ],
                'product' => [
                    'inventory.product.index',
                    'inventory.product.create',
                    'inventory.product.show',
                    'inventory.product.store',
                    'inventory.product.edit ',
                    'inventory.product.update',
                    'inventory.product.destory',

                ],
                'purchaseentry' => [
                    'inventory.purchaseentry.index',
                    'inventory.purchaseentry.create',
                    'inventory.purchaseentry.show',
                    'inventory.purchaseentry.store',
                    'inventory.purchaseentry.edit ',
                    'inventory.purchaseentry.update',
                    'inventory.purchaseentry.destory',

                ],
                'purchaseorder' => [
                    'inventory.purchaseorder.index',
                    'inventory.purchaseorder.create',
                    'inventory.purchaseorder.show',
                    'inventory.purchaseorder.store',
                    'inventory.purchaseorder.edit ',
                    'inventory.purchaseorder.update',
                    'inventory.purchaseorder.destory',

                ],
                'service' => [
                    'inventory.service.index',
                    'inventory.service.create',
                    'inventory.service.show',
                    'inventory.service.store',
                    'inventory.service.edit ',
                    'inventory.service.update',
                    'inventory.service.destory',

                ],
                'servicelog' => [
                    'inventory.servicelog.index',
                    'inventory.servicelog.create',
                    'inventory.servicelog.show',
                    'inventory.servicelog.store',
                    'inventory.servicelog.edit ',
                    'inventory.servicelog.update',
                    'inventory.servicelog.destory',

                ],
                'stockreconcile' => [
                    'inventory.stockreconcile.index',
                    'inventory.stockreconcile.create',
                    'inventory.stockreconcile.show',
                    'inventory.stockreconcile.store',
                    'inventory.stockreconcile.edit ',
                    'inventory.stockreconcile.update',
                    'inventory.stockreconcile.destory',

                ]
            ],
            'Reports' => [
                'attendancereports' => [
                    'reports.attendancereports.index',
                    'reports.attendancereports.create',
                    'reports.attendancereports.show',
                    'reports.attendancereports.store',
                    'reports.attendancereports.edit ',
                    'reports.attendancereports.update',
                    'reports.attendancereports.destory',

                ],
                'expensesreports' => [
                    'reports.expensesreports.index',
                    'reports.expensesreports.create',
                    'reports.expensesreports.show',
                    'reports.expensesreports.store',
                    'reports.expensesreports.edit ',
                    'reports.expensesreports.update',
                    'reports.expensesreports.destory',

                ],
                'financereports' => [
                    'reports.financereports.index',
                    'reports.financereports.create',
                    'reports.financereports.show',
                    'reports.financereports.store',
                    'reports.financereports.edit ',
                    'reports.financereports.update',
                    'reports.financereports.destory',

                ],
                'leavereports' => [
                    'reports.leavereports.index',
                    'reports.leavereports.create',
                    'reports.leavereports.show',
                    'reports.leavereports.store',
                    'reports.leavereports.edit ',
                    'reports.leavereports.update',
                    'reports.leavereports.destory',

                ],
                'taskreports' => [
                    'reports.taskreports.index',
                    'reports.taskreports.create',
                    'reports.taskreports.show',
                    'reports.taskreports.store',
                    'reports.taskreports.edit ',
                    'reports.taskreports.update',
                    'reports.taskreports.destory',

                ],
                'travelreports' => [
                    'reports.travelreports.index',
                    'reports.travelreports.create',
                    'reports.travelreports.show',
                    'reports.travelreports.store',
                    'reports.travelreports.edit ',
                    'reports.travelreports.update',
                    'reports.travelreports.destory',

                ]
            ],
            'eventsandmeetings' => [
                'event' => [
                    'eventsandmeetings.event.index',
                    'eventsandmeetings.event.create',
                    'eventsandmeetings.event.show',
                    'eventsandmeetings.event.store',
                    'eventsandmeetings.event.edit ',
                    'eventsandmeetings.event.update',
                    'eventsandmeetings.event.destory',
                ],
                'meeting' => [
                    'eventsandmeetings.meeting.index',
                    'eventsandmeetings.meeting.create',
                    'eventsandmeetings.meeting.show',
                    'eventsandmeetings.meeting.store',
                    'eventsandmeetings.meeting.edit ',
                    'eventsandmeetings.meeting.update',
                    'eventsandmeetings.meeting.destory',
                ]
            ],
            'supplier' => [
                'addsupplier' => [
                    'supplier.addsupplier.index',
                    'supplier.addsupplier.create',
                    'supplier.addsupplier.show',
                    'supplier.addsupplier.store',
                    'supplier.addsupplier.edit ',
                    'supplier.addsupplier.update',
                    'supplier.addsupplier.destory',

                ],
                'suppliercategory' => [
                    'supplier.suppliercategory.index',
                    'supplier.suppliercategory.create',
                    'supplier.suppliercategory.show',
                    'supplier.suppliercategory.store',
                    'supplier.suppliercategory.edit ',
                    'supplier.suppliercategory.update',
                    'supplier.suppliercategory.destory',

                ]
            ]




        ];

        $moduleID = 1;
        foreach ($permissions as $mkey => $modules) {
            foreach ($modules as $gkey => $models) {
                foreach ($models as $model) {
                    $slug = slugify($model);
                    $permissionName = ucwords(str_replace(".", " ", "$model"));
                    $pemArr = [
                        'name' => $permissionName,
                        'slug' => $slug,
                        'group_name' => $gkey,
                        'guard_name' => 'web',
                        'module_id' => $moduleID,
                        'createdOn' => now(),
                        'createdBy' => '1',
                        'updatedBy' => '1',
                        'status' => '1',
                    ];
                    $permission = Permission::where('slug', $slug)->first();
                    if ($permission)
                        $permission->update($pemArr);
                    else
                        Permission::create($pemArr);
                }
            }

            $moduleID++;
        }
    }
}
