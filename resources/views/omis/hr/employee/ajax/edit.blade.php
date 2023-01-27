<form action="{{ route('hr.employee.update', [$data->employee_id]) }}" id="updateCustomForm" method="POST">
    @csrf
    @method('PUT')

    <div class="row g-gs">
        <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-9">
            <div class="gap gy-4">
                <div class="gap-col">
                    <div class="card card-gutter-md">
                        <div class="card-body">
                            <div class="row g-gs">
                                <div class="col-6">
                                    <label class="form-label">Employee Id -
                                        11</label>

                                </div>
                                <hr class="border-primary border-2 opacity-85">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <!-- <div class="col-lg-6">
                                                {{ createText('employeeType_id', 'employeeType_id', 'Employee Type Id') }}
                                            </div> -->
                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Personal Details</h2>
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createText('firstName', 'firstName', 'First Name','',$data->firstName) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('middleName', 'middleName', 'Middle Name','',$data->middleName) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('lastName', 'lastName', 'Last Name','',$data->lastName) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ customCreateSelect('gender_id', 'gender_id', '', 'Gender', ['1' => 'Male', '0' => 'Female', '2' => 'Others']) }}

                                            <!-- </div><div class="col-lg-6">{{ createText('gender_id', 'gender_id', 'Gender Id') }} -->
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createDate('dateOfBirth', 'dateOfBirth', 'Date Of Birth','',$data->dateOfBirth) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('nationality_id', 'nationality_id', 'Nationality','',$data->nationality_id) }}
                                        </div>
                                        {{-- <div class="col-lg-4">
                                            {{ createPassword('password', 'password', 'Password') }}
                                        </div> --}}
                                        <div class="col-lg-4">
                                            {{ createText('phoneNumber', 'phoneNumber', 'Phone Number','',$data->phoneNumber) }}
                                        </div>

                                        <div class="col-lg-4">
                                            {{ createEmail('emailAddress', 'emailAddress', 'Email Address','',$data->emailAddress) }}
                                        </div>

                                        <div class="col-lg-12">
                                            <h2 class="mt-3">Address Details</h2>
                                        </div>

                                        <div class="col-lg-3">
                                            {!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '',$data) !!}
                                        </div>

                                        <div class="col-lg-3">
                                            {!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '',$data) !!}
                                        </div>
                                        <div class="col-lg-3">
                                            {!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '',$data) !!}
                                        </div>
                                        <div class="col-lg-3">
                                            {!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '',$data) !!}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('permanentAddress', 'permanentAddress', 'Permanent Address','',$data->permanentAddress) }}
                                        </div>
                                        <div class="col-lg-4">
                                            {{ createText('temproryAddress', 'temproryAddress', 'Temprory Address','',$data->temproryAddress) }}
                                        </div>

                                        <div class="col-lg-4">
                                            {!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '',$data) !!}
                                        </div>
                                        <div class="col-lg-6">
                                            {!! getSelectForForeignColumn('tbl_designation', 'designation_id', 'designationName', '',$data) !!}
                                        </div>


                                        <div class="col-lg-6">
                                            {{ createText('panNo', 'panNo', 'PanNo','',$data->panNo) }}
                                        </div>


                                        <div class="col-lg-12">
                                            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}{{ createTextArea('remarks', 'remarks', 'remarks', '', $data->remarks) }}
                                        </div>
                                        <hr>
                                        <h5 class="mt-3">Add Document/Image Item</h5>
                                        <div id="additernary_edu">
                                            @if (isset($documents) && $documents->isEmpty() == false)
                                                @foreach ($documents as $key => $document)
                                                    <input type="hidden" class="form-control"
                                                        name="checklist_id[{{ $key }}]"
                                                        value={{ $document->document_id }}>
                                                    <div class="form-group row d-flex align-items-end">.
                                                        <div class="col-sm-4">
                                                            <label class="control-label">Document Name</label>
                                                            <input type="text" name="image_name[]"
                                                                class="form-control"
                                                                value="{{ $document->image_name }}" readonly>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <input type="hidden" name="image_path[]"
                                                                class="form-control"
                                                                value="{{ $document->image_path }}" readonly>
                                                            <a href="{{ $document->image_path }}" target="__blank">
                                                                View Uploaded File
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="form-group row d-flex align-items-end">
                                                <div class="col-md-2 mb-2" style="margin-top: 10px;">
                                                    <input id="additemrowedu" type="button"
                                                        class="btn btn-sm btn-primary mr-1" value="Add Document">
                                                </div>

                                            </div>
                                            <input type="hidden" id="tempedu" value="0" name="temp">
                                        </div>




                                    </div>

                                    <!-- end -->
                                </div>




                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-3">
            <div class="card card-gutter-md">
                <div class="card-body">
                    <div class="row g-gs">

                        <div class="col-12">
                            <!--switch -->
                            <!-- <div class="form-check form-switch form-check-lg">
                                    <input class="form-check-input" type="checkbox"
                                        value="" id="flexSwitchSizeLg">
                                    <label class="form-check-label"
                                        for="flexSwitchSizeLg"> Status</label>
                                </div> -->
                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="form-group"><label class="form-label">Thumbnail</label>
                                @if($data->profilePhoto)
                                    <img id="holder" style="margin-top:15px;max-height:300px;" class="img img-fluid" src="{{$data->profilePhoto}}">
                                @endif
                                <div class="form-control-wrap mt-2">
                                    <input id="thumbnail" class="form-control" type="text" name="profilePhoto" value="" readonly>
                                    <a href="javascript: void(0);" id="lfm" data-input="thumbnail" data-preview="holder" class="lfm btn icon-left btn-primary mt-2">
                                        <i class="fa fa-upload"></i> &nbsp;Change
                                    </a>
                                </div>
                                <div class="form-note mt-3">Set the product
                                    thumbnail image. Only *.png, *.jpg and *.jpeg
                                    image files are accepted.</div>
                            </div>
                        </div>




                        <div class="col-12">
                            <div class="form-group"><label class="form-label">Login Allowed</label>
                                <div class="form-control-wrap">
                                    <ul class="g-4">
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="loginAllowedYes"
                                                    value="option1"><label class="form-check-label"
                                                    for="loginAllowedYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="loginAllowedNo"
                                                    value="option2"><label class="form-check-label"
                                                    for="loginAllowedNo">No</label>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group"><label class="form-label">Receive email
                                    notifications?</label>
                                <div class="form-control-wrap">
                                    <ul class="g-4">
                                        <li>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio1"
                                                    value="option3"><label class="form-check-label"
                                                    for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2"
                                                    value="option4"><label class="form-check-label"
                                                    for="inlineRadio2">No</label>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="border-primary border-2 opacity-85">
                        <div class="gap-col">
                            <ul class="d-flex align-items-center gap g-3">
                                <li><button type="submit" class="btn btn-primary">Update</button></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




{{-- <form method="post" action="{{ route("hr.employee.store") }}" >
            @csrf
        <div class="row"><div class="col-lg-6"> {{createText("employeeType_id","employeeType_id","EmployeeType Id")}}
        </div><div class="col-lg-6">{{createText("firstName","firstName","FirstName")}}
        </div><div class="col-lg-6">{{createText("middleName","middleName","MiddleName")}}
        </div><div class="col-lg-6">{{createText("lastName","lastName","LastName")}}
        </div><div class="col-lg-6">{{createText("gender_id","gender_id","Gender Id")}}
        </div><div class="col-lg-6">{{createText("dateOfBirth","dateOfBirth","DateOfBirth")}}
        </div><div class="col-lg-6">{{createText("nationality_id","nationality_id","Nationality Id")}}
        </div><div class="col-lg-6">{{createText("temproryAddress","temproryAddress","TemproryAddress")}}
        </div><div class="col-lg-6">{{createText("phoneNumber","phoneNumber","PhoneNumber")}}
        </div><div class="col-lg-6">{{createText("alternateNumber","alternateNumber","AlternateNumber")}}
        </div><div class="col-lg-6">{{createText("emailAddress","emailAddress","EmailAddress")}}
        </div><div class="col-lg-6">{{createText("country_id","country_id","Country Id")}}
        </div><div class="col-lg-6">{{createText("city_id","city_id","City Id")}}
        </div><div class="col-lg-6">{{createText("state_id","state_id","State Id")}}
        </div><div class="col-lg-6">{{createText("district_id","district_id","District Id")}}
        </div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress")}}
        </div><div class="col-lg-6">{{createText("postalCode","postalCode","PostalCode")}}
        </div><div class="col-lg-6">{{createText("organization_id","organization_id","Organization Id")}}
        </div><div class="col-lg-6">{{createText("department_id","department_id","Department Id")}}
        </div><div class="col-lg-6">{{createText("designation_id","designation_id","Designation Id")}}
        </div><div class="col-lg-6">{{createText("panNo","panNo","PanNo")}}
        </div> <br> <div class="col-md-12"><?php //createButton("btn-primary","","Submit");
        ?>
                </div>
        </form> --}}
