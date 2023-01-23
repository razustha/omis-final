@include("partials.header")
@include("partials.sidebar")
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content ">
                            <h2 class="nk-block-title">Daily Attendance</h2>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <table class="datatable-init table" data-nk-container="table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col"><span class="overline-title">Employee</span></th>
                                    <th class="tb-col"><span class="overline-title">Position</span> </th>
                                    <th class="tb-col"><span class="overline-title">Department</span> </th>
                                    <th class="tb-col"><span class="overline-title">Joined Date</span></th>
                                    <th class="tb-col"><span class="overline-title">Status</span></th>
                                    <th class="tb-col"><span class="overline-title">Clock In</span></th>
                                    <th class="tb-col"><span class="overline-title">Clock Out</span></th>
                                    <th class="tb-col"><span class="overline-title">Date</span></th>
                                    <th class="tb-col"><span class="overline-title">No. of Overtime</span></th>
                                    <th class="tb-col"><span class="overline-title">No. of Leaves</span></th>
                                    <th class="tb-col tb-col-end" data-sortable="false"><span
                                            class="overline-title">Action</span></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tb-col">
                                        <div class="media-text"><a href="user-profile.html" class="title">Florenza
                                                Desporte</a><span class="small text">florenza@gmail.com</span></div>
                    </div>
                    </td>
                    <td class="tb-col">Administrator</td>
                    <td class="tb-col">Department</td>
                    <td class="tb-col">2022/04/25</td>
                    <td class="tb-col"><span class="badge text-bg-danger-soft">Absent</span></td>
                    <td class="tb-col">--</td>
                    <td class="tb-col">--</td>
                    <td class="tb-col">2022/04/25</td>
                    <td class="tb-col"></td>
                    <td class="tb-col"></td>
                    <td class="tb-col tb-col-end">
                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <div class="dropdown-content py-1">
                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                        </li>
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
                                        </li>
                                        <li><a href="user-profile.html"><em class="icon ni ni-eye"></em><span>View
                                                    Details</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                                    <td class="tb-col">
                                        <div class="media-text"><a href="user-profile.html" class="title">Florenza
                                                Desporte</a><span class="small text">florenza@gmail.com</span></div>
                    </div>
                    </td>
                    <td class="tb-col">Administrator</td>
                    <td class="tb-col">Department</td>
                    <td class="tb-col">2022/04/25</td>
                    <td class="tb-col"><span class="badge text-bg-danger-soft">Absent</span></td>
                    <td class="tb-col">--</td>
                    <td class="tb-col">--</td>
                    <td class="tb-col">2022/04/25</td>
                    <td class="tb-col"></td>
                    <td class="tb-col"></td>
                    <td class="tb-col tb-col-end">
                        <div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1"
                                data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <div class="dropdown-content py-1">
                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                        </li>
                                        <li><a href="user-edit.html"><em
                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
                                        </li>
                                        <li><a href="user-profile.html"><em class="icon ni ni-eye"></em><span>View
                                                    Details</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include("partials.footer")