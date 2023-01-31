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

                'country' => [
                    'master.country.index',
                    'master.country.create',
                    'master.country.show',
                    'master.country.store',
                    'master.country.edit',
                    'master.country.update',
                    'master.country.destory',
                ],
                'state' => [
                    'master.state.index',
                    'master.state.create',
                    'master.state.show',
                    'master.state.store',
                    'master.state.edit',
                    'master.state.update',
                    'master.state.destory',
                ],
                'district' => [
                    'master.district.index',
                    'master.district.create',
                    'master.district.show',
                    'master.district.store',
                    'master.district.edit',
                    'master.district.update',
                    'master.district.destory',
                ],
                'employmentsizecategory' => [
                    'master.employmentsizecategory.index',
                    'master.employmentsizecategory.create',
                    'master.employmentsizecategory.show',
                    'master.employmentsizecategory.store',
                    'master.employmentsizecategory.edit',
                    'master.employmentsizecategory.update',
                    'master.employmentsizecategory.destory',
                ]
            ],

            'Hr' => [
                'absentreason'=>[
                    'hr.absentreason.index',	
                    'hr.absentreason.create',	
                    'hr.absentreason.show',	
                    'hr.absentreason.store',	
                    'hr.absentreason.edit ',	
                    'hr.absentreason.update',	
                    'hr.absentreason.destory',
                ],
                'appreciation'=>[
                    'hr.appreciation.index',	'hr.appreciation.create',	'hr.appreciation.show',	'hr.appreciation.store',	'hr.appreciation.edit ',	'hr.appreciation.update',	'hr.appreciation.destory',
                ],
            'attendence'=>[
                'hr.attendence.index',	'hr.attendence.create',	'hr.attendence.show',	'hr.attendence.store',	'hr.attendence.edit ',	'hr.attendence.update',	'hr.attendence.destory',

            ],
            'complaints'=>[
                'hr.complaints.index',	'hr.complaints.create',	'hr.complaints.show',	'hr.complaints.store',	'hr.complaints.edit ',	'hr.complaints.update',	'hr.complaints.destory',

            ],
            'department'=>[
                'hr.department.index',	'hr.department.create',	'hr.department.show',	'hr.department.store',	'hr.department.edit ',	'hr.department.update',	'hr.department.destory',

            ],
            'designation'=>[
                'hr.designation.index',	'hr.designation.create',	'hr.designation.show',	'hr.designation.store',	'hr.designation.edit ',	'hr.designation.update',	'hr.designation.destory',

            ],
            'employee'=>[
                'hr.employee.index',	'hr.employee.create',	'hr.employee.show',	'hr.employee.store',	'hr.employee.edit ',	'hr.employee.update',	'hr.employee.destory',

            ],
            'employeetimeline'=>[
                'hr.employeementtimeline.index',	'hr.employeementtimeline.create',	'hr.employeementtimeline.show',	'hr.employeementtimeline.store',	'hr.employeementtimeline.edit ',	'hr.employeementtimeline.update',	'hr.employeementtimeline.destory',

            ],
            'employeeonboarding'=>[
                'hr.employeeonboarding.index',	'hr.employeeonboarding.create',	'hr.employeeonboarding.show',	'hr.employeeonboarding.store',	'hr.employeeonboarding.edit ',	'hr.employeeonboarding.update',	'hr.employeeonboarding.destory',

            ],
            'latereasons'=>[
                'hr.latereasons.index',	'hr.latereasons.create',	'hr.latereasons.show',	'hr.latereasons.store',	'hr.latereasons.edit ',	'hr.latereasons.update',	'hr.latereasons.destory',

            ],
            'leaveapplication'=>[
                'hr.leaveapplication.index',	'hr.leaveapplication.create',	'hr.leaveapplication.show',	'hr.leaveapplication.store',	'hr.leaveapplication.edit ',	'hr.leaveapplication.update',	'hr.leaveapplication.destory',

            ],
            'manageholiday'=>[
                'hr.mangeholiday.index',	'hr.mangeholiday.create',	'hr.mangeholiday.show',	'hr.mangeholiday.store',	'hr.mangeholiday.edit ',	'hr.mangeholiday.update',	'hr.mangeholiday.destory',

            ],
            'promotiondemotion'=>[
                'hr.promotiondemotion.index',	'hr.promotiondemotion.create',	'hr.promotiondemotion.show',	'hr.promotiondemotion.store',	'hr.promotiondemotion.edit ',	'hr.promotiondemotion.update',	'hr.promotiondemotion.destory',

            ],
            'resignation'=>[
                'hr.resignation.index',	'hr.resignation.create',	'hr.resignation.show',	'hr.resignation.store',	'hr.resignation.edit ',	'hr.resignation.update',	'hr.resignation.destory',

            ],
            'shiftroster'=>[
                'hr.shiftroster.index',	'hr.shiftroster.create',	'hr.shiftroster.show',	'hr.shiftroster.store',	'hr.shiftroster.edit ',	'hr.shiftroster.update',	'hr.shiftroster.destory',

            ],
            'transfer'=>[
                'hr.transfer.index',	'hr.transfer.create',	'hr.transfer.show',	'hr.transfer.store',	'hr.transfer.edit ',	'hr.transfer.update',	'hr.transfer.destory',

            ],
            'warnings'=>[
                'hr.warnings.index',	'hr.warnings.create',	'hr.warnings.show',	'hr.warnings.store',	'hr.warnings.edit ',	'hr.warnings.update',	'hr.warnings.destory',

            ],

        ],
        'crm' => [
            'clients' => [
                'crm.clients.index',	'crm.clients.create',	'crm.clients.show',	'crm.clients.store',	'crm.clients.edit ',	'crm.clients.update',	'crm.clients.destory',

            ],
            'leads' => [
                'crm.leads.index',	'crm.leads.create',	'crm.leads.show',	'crm.leads.store',	'crm.leads.edit ',	'crm.leads.update',	'crm.leads.destory',
            ],
        ],

        'timesheet' => [
            'absentreason' => [
                'timesheet.absentreason.index',    'timesheet.absentreason.create',    'timesheet.absentreason.show',    'timesheet.absentreason.store',    'timesheet.absentreason.edit ',    'timesheet.absentreason.update',
            ]
        ],

        'work' => [
            'tasks' => [
                'work.tasks.index',	'work.tasks.create',	'work.tasks.show',	'work.tasks.store',	'work.tasks.edit ',	'work.tasks.update',	'work.tasks.destory',

            ],
            'timelog' => [
                'work.timelog.index',	'work.timelog.create',	'work.timelog.show',	'work.timelog.store',	'work.timelog.edit ',	'work.timelog.update',	'work.timelog.destory',

            ],
            'workProjects' => [
                'work.workProjects.index',	'work.workProjects.create',	'work.workProjects.show',	'work.workProjects.store',	'work.workProjects.edit ',	'work.workProjects.update',	'work.workProjects.destory',
            ]
            ],

            'Finance' => [
                'advancerequest' => [
                    'Finance.advancerequest.index',	'Finance.advancerequest.create',	'Finance.advancerequest.show',	'Finance.advancerequest.store',	'Finance.advancerequest.edit ',	'Finance.advancerequest.update',	'Finance.advancerequest.destory',

                ],
                'cashdeposit' => [
                    'Finance.cashdeposite.index',	'Finance.cashdeposite.create',	'Finance.cashdeposite.show',	'Finance.cashdeposite.store',	'Finance.cashdeposite.edit ',	'Finance.cashdeposite.update',	'Finance.cashdeposite.destory',

                ],
                'cashrequest'=> [
                    'Finance. cashrequest.index',	'Finance. cashrequest.create',	'Finance. cashrequest.show',	'Finance. cashrequest.store',	'Finance. cashrequest.edit ',	'Finance. cashrequest.update',	'Finance. cashrequest.destory',

                ],
                'creditnotes'=>[
                    'Finance. creditnotes.index',	'Finance. creditnotes.create',	'Finance. creditnotes.show',	'Finance. creditnotes.store',	'Finance. creditnotes.edit ',	'Finance. creditnotes.update',	'Finance. creditnotes.destory',

                ],
                'estimates'=>[
                    'Finance. estimates.index',	'Finance. estimates.create',	'Finance. estimates.show',	'Finance. estimates.store',	'Finance. estimates.edit ',	'Finance. estimates.update',	'Finance. estimates.destory',

                ],
                'expensesclaim'=>[
                    'Finance.expensesclaim.index',	'Finance.expensesclaim.create',	'Finance.expensesclaim.show',	'Finance.expensesclaim.store',	'Finance.expensesclaim.edit ',	'Finance.expensesclaim.update',	'Finance.expensesclaim.destory',

                ],
                'financeExpenses'=>[
                    'Finance.financeExpenses.index',	'Finance.financeExpenses.create',	'Finance.financeExpenses.show',	'Finance.financeExpenses.store',	'Finance.financeExpenses.edit ',	'Finance.financeExpenses.update',	'Finance.financeExpenses.destory',

                ],
                'finanacePay'=>[
                    'Finance.financePay.index',	'Finance.financePay.create',	'Finance.financePay.show',	'Finance.financePay.store',	'Finance.financePay.edit ',	'Finance.financePay.update',	'Finance.financePay.destory',

                ],
                'invoices'=>[
                    'Finance.invoices.index',	'Finance.invoices.create',	'Finance.invoices.show',	'Finance.invoices.store',	'Finance.invoices.edit ',	'Finance.invoices.update',	'Finance.invoices.destory',

                ],
                'proposal'=>[
                    'Finance.proposal.index',	'Finance.proposal.create',	'Finance.proposal.show',	'Finance.proposal.store',	'Finance.proposal.edit ',	'Finance.proposal.update',	'Finance.proposal.destory',

                ]
            ],

            'notice' => [
                'announcement' => [
                    'notice.announcement.index',	'notice.announcement.create',	'notice.announcement.show',	'notice.announcement.store',	'notice.announcement.edit ',	'notice.announcement.update',	'notice.announcement.destory',

                ],
                'detailsview'=>[
                    'notice.detailsview.index',	'notice.detailsview.create',	'notice.detailsview.show',	'notice.detailsview.store',	'notice.detailsview.edit ',	'notice.detailsview.update',	'notice.detailsview.destory',

                ],
                'equipmentdemand'=>[
                    'notice.equipmentdemand.index',	'notice.equipmentdemand.create',	'notice.equipmentdemand.show',	'notice.equipmentdemand.store',	'notice.equipmentdemand.edit ',	'notice.equipmentdemand.update',	'notice.equipmentdemand.destory',

                ],
                'overview'=>[
                    'notice.overview.index',	'notice.overview.create',	'notice.overview.show',	'notice.overview.store',	'notice.overview.edit ',	'notice.overview.update',	'notice.overview.destory',
                ]
                ],

                'assets' => [
                    'assestCategory'=>[
                        'assets.assestCategory.index',	'assets.assestCategory.create',	'assets.assestCategory.show',	'assets.assestCategory.store',	'assets.assestCategory.edit ',	'assets.assestCategory.update',	'assets.assestCategory.destory',
                    ],
                    'equipmentdemand'=>[
                        'assets.equipmentdemand.index',	'assets.equipmentdemand.create',	'assets.equipmentdemand.show',	'assets.equipmentdemand.store',	'assets.equipmentdemand.edit ',	'assets.equipmentdemand.update',	'assets.equipmentdemand.destory',
                    ],
                    'fixedassets'=>[
                        'assets.fixedassets.index',	'assets.fixedassets.create',	'assets.fixedassets.show',	'assets.fixedassets.store',	'assets.fixedassets.edit ',	'assets.fixedassets.update',	'assets.fixedassets.destory',
                    ]
                    ],

                    'payroll' => [
                        'newpayment' => [
                            'payroll.newpayment.index',    'payroll.newpayment.create',    'payroll.newpayment.show',    'payroll.newpayment.store',    'payroll.newpayment.edit',    'payroll.newpayment.update',
                        ]
                        ],

                       'recruit' => [
                        'experienceletter'=>[
                            'recruit.experienceletter.index',	'recruit.experienceletter.create',	'recruit.experienceletter.show',	'recruit.experienceletter.store',	'recruit.experienceletter.edit ',	'recruit.experienceletter.update',	'recruit.experienceletter.destory',

                        ],
                        'interviewschedule'=>[
                        'recruit.interviewschedule.index',	'recruit.interviewschedule.create',	'recruit.interviewschedule.show',	'recruit.interviewschedule.store',	'recruit.interviewschedule.edit ',	'recruit.interviewschedule.update',	'recruit.interviewschedule.destory',

                        ],
                        'jobapplication'=>[
                            'recruit.jobapplication.index',	'recruit.jobapplication.create',	'recruit.jobapplication.show',	'recruit.jobapplication.store',	'recruit.jobapplication.edit ',	'recruit.jobapplication.update',	'recruit.jobapplication.destory',

                        ],
                        'jobinterview'=>[
                            'recruit.jobinterview.index',	'recruit.jobinterview.create',	'recruit.jobinterview.show',	'recruit.jobinterview.store',	'recruit.jobinterview.edit ',	'recruit.jobinterview.update',	'recruit.jobinterview.destory',

                        ],
                        'jobpost'=>[
                            'recruit.jobpost.index',	'recruit.jobpost.create',	'recruit.jobpost.show',	'recruit.jobpost.store',	'recruit.jobpost.edit ',	'recruit.jobpost.update',	'recruit.jobpost.destory',

                        ],
                        'offerletter'=>[
                            'recruit.offerletter.index',	'recruit.offerletter.create',	'recruit.offerletter.show',	'recruit.offerletter.store',	'recruit.offerletter.edit ',	'recruit.offerletter.update',	'recruit.offerletter.destory',

                        ],
                        'recuritreports'=>[
                            'recruit.recuritreports.index',	'recruit.recuritreports.create',	'recruit.recuritreports.show',	'recruit.recuritreports.store',	'recruit.recuritreports.edit ',	'recruit.recuritreports.update',	'recruit.recuritreports.destory',
                        ]

                        ],
                        'requisition'=>[
                            'compensatoryLeave' => [
                                'requisition.compensatoryLeave.index',	'requisition.compensatoryLeave.create',	'requisition.compensatoryLeave.show',	'requisition.compensatoryLeave.store',	'requisition.compensatoryLeave.edit ',	'requisition.compensatoryLeave.update',	'requisition.compensatoryLeave.destory',

                            ],
                                'convinceRequest' => [
                                    'requisition.convinceRequest.index',	'requisition.convinceRequest.create',	'requisition.convinceRequest.show',	'requisition.convinceRequest.store',	'requisition.convinceRequest.edit ',	'requisition.convinceRequest.update',	'requisition.convinceRequest.destory',

                                ],
                                'fleetRequest' => [
                                    'requisition.fleetrequest.index',	'requisition.fleetrequest.create',	'requisition.fleetrequest.show',	'requisition.fleetrequest.store',	'requisition.fleetrequest.edit ',	'requisition.fleetrequest.update',	'requisition.fleetrequest.destory',

                                ],
                                'leaverequest'=>[
                                    'requisition.leaverequest.index',	'requisition.leaverequest.create',	'requisition.leaverequest.show',	'requisition.leaverequest.store',	'requisition.leaverequest.edit ',	'requisition.leaverequest.update',	'requisition.leaverequest.destory',

                                ],
                                'requisitiontravel'=>[
                                    'requisition.requisitiontravel.index',	'requisition.requisitiontravel.create',	'requisition.requisitiontravel.show',	'requisition.requisitiontravel.store',	'requisition.requisitiontravel.edit ',	'requisition.requisitiontravel.update',	'requisition.requisitiontravel.destory',

                                ],
                                'travel'=>[
                                    'requisition.travel.index',	'requisition.travel.create',	'requisition.travel.show',	'requisition.travel.store',	'requisition.travel.edit ',	'requisition.travel.update',	'requisition.travel.destory',	

                                ]
                        
                                ],

                                'training' => [
                                    'trainer' => [
                                        'training.trainer.index',	'training.trainer.create',	'training.trainer.show',	'training.trainer.store',	'training.trainer.edit ',	'training.trainer.update',	'training.trainer.destory',

                                    ],
                                    'traininglist'=>[
                                        'training.traininglist.index',	'training.traininglist.create',	'training.traininglist.show',	'training.traininglist.store',	'training.traininglist.edit ',	'training.traininglist.update',	'training.traininglist.destory',

                                    ],
                                    'trainingtype'=>[
                                        'training.trainingtype.index',	'training.trainingtype.create',	'training.trainingtype.show',	'training.trainingtype.store',	'training.trainingtype.edit ',	'training.trainingtype.update',	'training.trainingtype.destory',

                                    ]
                                    ],

                                    


        

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
