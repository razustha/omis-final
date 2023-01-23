@extends('omis.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">Employee List</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                                    <li class="breadcrumb-item"><a href="#">Employee Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Employee
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('hr.employee.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('hr.employee.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add Employee</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">employeeType_id</span></th>
<th class="tb-col"><span class="overline-title">firstName</span></th>
<th class="tb-col"><span class="overline-title">middleName</span></th>
<th class="tb-col"><span class="overline-title">lastName</span></th>
<th class="tb-col"><span class="overline-title">gender_id</span></th>
<th class="tb-col"><span class="overline-title">dateOfBirth</span></th>
<th class="tb-col"><span class="overline-title">nationality_id</span></th>
<th class="tb-col"><span class="overline-title">password</span></th>
<th class="tb-col"><span class="overline-title">temproryAddress</span></th>
<th class="tb-col"><span class="overline-title">phoneNumber</span></th>
<th class="tb-col"><span class="overline-title">alternateNumber</span></th>
<th class="tb-col"><span class="overline-title">emailAddress</span></th>
<th class="tb-col"><span class="overline-title">country_id</span></th>
<th class="tb-col"><span class="overline-title">city_id</span></th>
<th class="tb-col"><span class="overline-title">state_id</span></th>
<th class="tb-col"><span class="overline-title">district_id</span></th>
<th class="tb-col"><span class="overline-title">permanentAddress</span></th>
<th class="tb-col"><span class="overline-title">postalCode</span></th>
<th class="tb-col"><span class="overline-title">organization_id</span></th>
<th class="tb-col"><span class="overline-title">department_id</span></th>
<th class="tb-col"><span class="overline-title">designation_id</span></th>
<th class="tb-col"><span class="overline-title">panNo</span></th>
<th class="tb-col"><span class="overline-title">document_id</span></th>
<th class="tb-col"><span class="overline-title">documentName</span></th>
<th class="tb-col"><span class="overline-title">documentPath</span></th>
<th class="tb-col"><span class="overline-title">profilePhoto</span></th>
<th class="tb-col"><span class="overline-title">aboutMe</span></th>
<th class="tb-col"><span class="overline-title">sign</span></th>
<th class="tb-col"><span class="overline-title">fatherName</span></th>
<th class="tb-col"><span class="overline-title">motherName</span></th>
<th class="tb-col"><span class="overline-title">grandFatherName</span></th>
<th class="tb-col"><span class="overline-title">grandMotherName</span></th>
<th class="tb-col"><span class="overline-title">spouse</span></th>
<th class="tb-col"><span class="overline-title">emergencyContact</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                                                                                                class="overline-title">Action</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->employeeType_id }}</td>
<td class="tb-col">{{ $item->firstName }}</td>
<td class="tb-col">{{ $item->middleName }}</td>
<td class="tb-col">{{ $item->lastName }}</td>
<td class="tb-col">{{ $item->gender_id }}</td>
<td class="tb-col">{{ $item->dateOfBirth }}</td>
<td class="tb-col">{{ $item->nationality_id }}</td>
<td class="tb-col">{{ $item->password }}</td>
<td class="tb-col">{{ $item->temproryAddress }}</td>
<td class="tb-col">{{ $item->phoneNumber }}</td>
<td class="tb-col">{{ $item->alternateNumber }}</td>
<td class="tb-col">{{ $item->emailAddress }}</td>
<td class="tb-col">{{ $item->country_id }}</td>
<td class="tb-col">{{ $item->city_id }}</td>
<td class="tb-col">{{ $item->state_id }}</td>
<td class="tb-col">{{ $item->district_id }}</td>
<td class="tb-col">{{ $item->permanentAddress }}</td>
<td class="tb-col">{{ $item->postalCode }}</td>
<td class="tb-col">{{ $item->organization_id }}</td>
<td class="tb-col">{{ $item->department_id }}</td>
<td class="tb-col">{{ $item->designation_id }}</td>
<td class="tb-col">{{ $item->panNo }}</td>
<td class="tb-col">{{ $item->document_id }}</td>
<td class="tb-col">{{ $item->documentName }}</td>
<td class="tb-col">{{ $item->documentPath }}</td>
<td class="tb-col">{{ $item->profilePhoto }}</td>
<td class="tb-col">{{ $item->aboutMe }}</td>
<td class="tb-col">{{ $item->sign }}</td>
<td class="tb-col">{{ $item->fatherName }}</td>
<td class="tb-col">{{ $item->motherName }}</td>
<td class="tb-col">{{ $item->grandFatherName }}</td>
<td class="tb-col">{{ $item->grandMotherName }}</td>
<td class="tb-col">{{ $item->spouse }}</td>
<td class="tb-col">{{ $item->emergencyContact }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('hr.employee.show',[$item->employee_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('hr.employee.edit',[$item->employee_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('hr.employee.destroy',[$item->employee_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        