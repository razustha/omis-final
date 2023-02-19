@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add Employee</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('hr.employee.index') }}" class="btn btn-md d-md-none btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>View Cities</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('hr.employee.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{ createText('employeeType_id', 'employeeType_id', 'EmployeeType Id') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('firstName', 'firstName', 'FirstName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('middleName', 'middleName', 'MiddleName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('lastName', 'lastName', 'LastName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('gender_id', 'gender_id', 'Gender Id') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('dateOfBirth', 'dateOfBirth', 'DateOfBirth') }}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_nationality', 'nationality_id', 'nationalityName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{{ createText('password', 'password', 'Password') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('temproryAddress', 'temproryAddress', 'TemproryAddress') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('phoneNumber', 'phoneNumber', 'PhoneNumber') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('alternateNumber', 'alternateNumber', 'AlternateNumber') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('emailAddress', 'emailAddress', 'EmailAddress') }}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_city', 'city_id', 'cityName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_district', 'district_id', 'districtName', '') !!}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('permanentAddress', 'permanentAddress', 'PermanentAddress') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('postalCode', 'postalCode', 'PostalCode') }}
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_department', 'department_id', 'departmentName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_designation', 'designation_id', 'designationName', '') !!}
                                        </div>
                                        <div class="col-lg-6">{{ createText('panNo', 'panNo', 'PanNo') }}
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('documentName', 'documentName', 'DocumentName') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('documentPath', 'documentPath', 'DocumentPath') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('profilePhoto', 'profilePhoto', 'ProfilePhoto') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('aboutMe', 'aboutMe', 'AboutMe') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('sign', 'sign', 'Sign') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('fatherName', 'fatherName', 'FatherName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('motherName', 'motherName', 'MotherName') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('grandFatherName', 'grandFatherName', 'GrandFatherName') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('grandMotherName', 'grandMotherName', 'GrandMotherName') }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('spouse', 'spouse', 'Spouse') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('emergencyContact', 'emergencyContact', 'EmergencyContact') }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks') }}
                                        </div> <br>

                                        <hr>
                                        <h5 class="mt-3">Add Document Item</h5>
                                        <div id="additernary_edu">
                                            @if (isset($document_checklist->checklists) && $document_checklist->checklists->isEmpty() == false)
                                                @foreach ($document_checklist->checklists as $key => $checklist)
                                                    <input type="hidden" class="form-control"
                                                        name="checklist_id[{{ $key }}]"
                                                        value={{ $checklist->id }}>
                                                    <div class="form-group row d-flex align-items-end">.
                                                        <div class="col-sm-4">
                                                            <label class="control-label">Document Name</label>
                                                            <input type="text" name="document_name[]"
                                                                class="form-control"
                                                                value="{{ $checklist->document_name }}" readonly>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <input type="hidden" name="document_sample[]"
                                                                class="form-control"
                                                                value="{{ $checklist->document_sample }}" readonly>
                                                            <a href="{{ $checklist->document_sample }}" target="__blank">
                                                                View Uploaded File
                                                            </a>
                                                        </div>


                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="form-group row d-flex align-items-end">.
                                                <div class="col-sm-3 mb-2">
                                                    {{-- {{createText('document_name[]', '', 'Document Name', 'form-control', '', '')}} --}}
                                                    <label class="control-label">Document Name</label>
                                                    <input type="text" name="document_name[]" class="form-control">
                                                </div>

                                                <div class="col-sm-6 mb-2">
                                                    <label class="control-label">Document Name</label>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <input id="thumbnail1" class="form-control" type="text"
                                                            name="document_sample[]" readonly>
                                                        <button id="lfm1" data-input="thumbnail1"
                                                            data-preview="holder1"
                                                            class="lfm1 btn btn-icon icon-left btn-primary ml-2 d-flex">
                                                            <i class="fa fa-upload"></i> &nbsp;Choose
                                                        </button>

                                                    </div>
                                                </div>

                                                <div class="col-md-2 mb-2" style="margin-top: 45px;">
                                                    <input id="additemrowedu" type="button"
                                                        class="btn btn-sm btn-primary mr-1" value="Add Row">
                                                </div>

                                            </div>
                                            <input type="hidden" id="tempedu" value="0" name="temp">
                                        </div>
                                        <div class="col-md-12"><?php createButton('btn-primary', '', 'Submit'); ?>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
    <script type="text/javascript">
        var append = 2;
        $(document).on('click', '#additemrowedu', function() {
            var b = parseFloat($("#tempedu").val());
            b = b + 1;
            $("#tempedu").val(b);
            var temp = $("#tempedu").val();
            var tst = `<div class="form-group row d-flex align-items-end appended-row-edu">

                    <div class="col-sm-3 mb-2">
                        <label class="control-label">Document Name</label>
                        <input type="text" name="document_name[]" class="form-control">
                    </div>

                    <div class="col-sm-6">
                        <label class="control-label">Document Name</label>
                        <div class="d-flex gap-3">
                            <input id="thumbnail` + append + `" class="form-control" type="text" name="document_sample[]" readonly>
                            <button id="lfm` + append + `" data-input="thumbnail` + append + `" data-preview="holder` +
                append + `" class="lfm` + append + ` btn btn-icon icon-left btn-primary ml-2 d-flex">
                                <i class="fa fa-upload"></i> &nbsp;Choose
                            </button>
                        </div>
                    </div>


                    <div class="col-md-2" style="margin-top: 45px;">
                        <input class="removeitemrowedu btn btn-sm btn-danger mr-1" type="button" value="Remove row">
                    </div>

                </div>`
            $('#additernary_edu').append(tst);
            $('.lfm' + append).filemanager('file');
            append++;
            selectRefresh();
        });

        $(document).on('click', '.removeitemrowedu', function() {
            $(this).closest('.appended-row-edu').remove();
        })

        function remove_product(o) {
            var p = o.parentNode.parentNode;
            p.parentNode.removeChild(p);
        }

        function remove_productforedit(o) {
            var p = o.parentNode.parentNode;
            p.parentNode.removeChild(p);
        }

        $('.lfm').filemanager('file');
        $('.lfm1').filemanager('file');
    </script>
@endsection
