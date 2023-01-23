@include("partials.header")
@include("partials.sidebar")

<div class="nk-content">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title">Driver List</h1>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User Manage</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users
                        </li>
                    </ol>
                </nav>
        </div>
        <div class="nk-block-head-content">
            <ul class="d-flex">
                <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addUserModal"><em class="icon ni ni-plus"></em><span>Add</span></a></li>
                <li><a href="#" class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
                        data-bs-target="#addUserModal"><em class="icon ni ni-plus"></em><span>Add Driver</span></a></li>
            </ul>
            <div class="modal fade" id="addUserModal" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="scrollableLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    
                <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollableLabel">Modal title</h5> <button type="button"
                                class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                        
                        <label for="driverName"class="form-label">Driver Name</label>
                        <?php createInput("text","eventTime","eventTime","","","","Driver Name");?>
                     

                        <label for="driverPhone"class="form-label">Driver Phone</label>
                        <?php createInput("text","driverPhone","driverPhone","","","","Driver Phone");?>
                      
                        
                        <label for="driverVehicle"class="form-label">Driver Vehicle</label>
                        <?php createSelect('driverVehicle','driverVehicle','','',['Jeep','Bus'])?>

                        <label for="driverPhone"class="form-label">Vehicle Number</label>
                        <?php createInput("number","vehicleNumber","vehicleNumber","","","","Vehicle Number");?>




                        <div class="modal-footer"> <button type="button" class="btn btn-sm btn-secondary"
                                data-bs-dismiss="modal">Close</button> <button type="button"
                                class="btn btn-sm btn-primary">Save changes</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nk-block">
    <div class="card">
        <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
                <tr>
                    <th class="tb-col"><span class="overline-title">Driver Name</span></th>
                    <th class="tb-col"><span class="overline-title">Phone</span>
                    </th>
                    <th class="tb-col"><span class="overline-title">Vehicle</span></th>
                    <th class="tb-col tb-col-xl"><span class="overline-title">Vehicle Number</span></th>

                    <th class="tb-col tb-col-end" data-sortable="false"><span class="overline-title">Action</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tb-col">
                        <div class="media-group">

                            <div class="media-text"><a href="user-profile.html" class="title">Florenza Desporte</a><span
                                    class="small text">florenza@gmail.com</span></div>
                        </div>
                    </td>
                    <td class="tb-col">Administrator</td>
                    <td class="tb-col">Basic</td>
                    <td class="tb-col tb-col-xl">Auto Debit</td>


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




</div>
</div>
</div>
</div>
</div>
</div>

@include("partials.footer")