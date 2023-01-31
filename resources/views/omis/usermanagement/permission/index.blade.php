@extends('omis.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content w-100">
                            <div class="card">
                                <div class="row p-3 g-5">
                                    <!-- Row-starts -->

                                    <div class="col-12">
                                        <h2>Permissions</h2>
                                    </div>
                                    <div class="col-12 row pb-5">
                                        <div class="col-10 row pt-4">
                                            <div class="col-3">
                                                {{createCheck("","","View")}}
                                            </div>
                                            <div class="col-3">
                                                {{createCheck("","","Create")}}
                                            </div>
                                            <div class="col-3">
                                                {{createCheck("","","Update")}}
                                            </div>
                                            <div class="col-3">
                                                {{createCheck("","","Delete")}}
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            {{createButton('','btn btn-primary','Submit')}}
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <div class="nk-menu-item has-sub"><a href="#"
                                                class="nk-menu-link nk-menu-toggle"><span
                                                    class="nk-menu-text"><h5>HR</h5></span></a>
                                            <ul class="nk-menu-sub">
                                                <li>{{createCheck("","","Employee")}}</li>
                                                <li>{{createCheck("","","Department")}}</li>
                                                <li>{{createCheck("","","Designation")}}</li>
                                                <li>{{createCheck("","","Leaves")}}</li>
                                                <li>{{createCheck("","","Shift Roster")}}</li>
                                                <li>{{createCheck("","","Promotion & Demotion")}}</li>
                                                <li>{{createCheck("","","Employement Timeline")}}</li>
                                                <li>{{createCheck("","","Employee On Boarding")}}</li>
                                                <li>{{createCheck("","","Resignation")}}</li>
                                                <li>{{createCheck("","","Manage Holiday")}}</li>
                                                <li>{{createCheck("","","Appreciation")}}</li>
                                                <li>{{createCheck("","","Complaints")}}</li>
                                                <li>{{createCheck("","","Transfer")}}</li>
                                                <li>{{createCheck("","","Warnings")}}</li>
                                            </ul>
                                        </div>






                                    </div>

                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>CRM</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Clients")}}</li>
                                            <li>{{createCheck("","","Leads")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                   
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Timesheet</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Create Attendance")}}</li>
                                            <li>{{createCheck("","","Absent Reason")}}</li>
                                            <li>{{createCheck("","","Late Reason")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Work</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Projects")}}</li>
                                            <li>{{createCheck("","","Tasks")}}</li>
                                            <li>{{createCheck("","","Timelog")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Finance</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Proposal")}}</li>
                                            <li>{{createCheck("","","Estimates")}}</li>
                                            <li>{{createCheck("","","Payments")}}</li>
                                            <li>{{createCheck("","","Credit Notes")}}</li>
                                            <li>{{createCheck("","","Expenses")}}</li>
                                            <li>{{createCheck("","","Advance Request")}}</li>
                                            <li>{{createCheck("","","Cash Request")}}</li>
                                            <li>{{createCheck("","","Expenses Claim")}}</li>
                                            <li>{{createCheck("","","Invoices")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Notice</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Announcement")}}</li>
                                            <li>{{createCheck("","","Details")}}</li>
                                            <li>{{createCheck("","","Overview")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Assets</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Assets Category")}}</li>
                                            <li>{{createCheck("","","Equipment Demand")}}</li>
                                            <li>{{createCheck("","","Fixed Assets")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Payroll</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","New Payment")}}</li>
                                            
                                         
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Recruit</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Job Interview")}}</li>
                                            <li>{{createCheck("","","Job Post")}}</li>
                                            <li>{{createCheck("","","Job Application")}}</li>
                                            <li>{{createCheck("","","Interview Schedule")}}</li>
                                            <li>{{createCheck("","","Offer Letter")}}</li>
                                            <li>{{createCheck("","","Experience Letter")}}</li>
                                            <li>{{createCheck("","","Reports")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Requisition</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Travel List")}}</li>
                                            <li>{{createCheck("","","Requisition Travel")}}</li>
                                            <li>{{createCheck("","","Compensatory Leave")}}</li>
                                            <li>{{createCheck("","","Convince Request")}}</li>
                                            <li>{{createCheck("","","Leave Request")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Training</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Training Type")}}</li>
                                            <li>{{createCheck("","","Training List")}}</li>
                                            <li>{{createCheck("","","Trainer")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Travel Fleet</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Driver Roster")}}</li>
                                            <li>{{createCheck("","","Maintenance Log")}}</li>
                                            <li>{{createCheck("","","Fleet Roster")}}</li>
                                            <li>{{createCheck("","","Fleet Management")}}</li>
                                            <li>{{createCheck("","","Service Log")}}</li>
                                            <li>{{createCheck("","","Vehicle Log")}}</li>
                                            <li>{{createCheck("","","Travel Request")}}</li>
                                            <li>{{createCheck("","","Travel Category")}}</li>
                                            <li>{{createCheck("","","Travel Approval")}}</li>
                                            <li>{{createCheck("","","Fleet Request")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Ofice Management</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Generator Logbook")}}</li>
                                            <li>{{createCheck("","","Contract")}}</li>
                                            <li>{{createCheck("","","Purchase Service")}}</li>
                                            <li>{{createCheck("","","Cash Deposit")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Roster Management</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Roster Categories")}}</li>
                                            <li>{{createCheck("","","Roster Entries")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Inventory</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Barcode Management")}}</li>
                                            <li>{{createCheck("","","Product")}}</li>
                                            <li>{{createCheck("","","Goods Received Reconcile")}}</li>
                                            <li>{{createCheck("","","Purchase Order")}}</li>
                                            <li>{{createCheck("","","Service Log")}}</li>
                                            <li>{{createCheck("","","Purchase Entry")}}</li>
                                            <li>{{createCheck("","","Service Reconcile")}}</li>
                                            <li>{{createCheck("","","Service")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Reports</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Task Report")}}</li>
                                            <li>{{createCheck("","","Finance Report")}}</li>
                                            <li>{{createCheck("","","Leave Report")}}</li>
                                            <li>{{createCheck("","","Expense Report")}}</li>
                                            <li>{{createCheck("","","Attendance Report")}}</li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Events And Meetings</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Meetings")}}</li>
                                            <li>{{createCheck("","","Events")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="nk-menu-item has-sub"><a href="#"
                                            class="nk-menu-link nk-menu-toggle"><span
                                                class="nk-menu-text"><h5>Supplier</h5></span></a>
                                        <ul class="nk-menu-sub">
                                            <li>{{createCheck("","","Category")}}</li>
                                            <li>{{createCheck("","","Add Supplier")}}</li>
                                            
                                        </ul>
                                    </div>

                                    </div>
                                    <!-- Row Ends -->
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection