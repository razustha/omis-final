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
                    <ul class="d-flex"> <li>
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
                <form method="POST" action="{{route('hr.employee.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeType_id","employeeType_id","EmployeeType Id")}}
</div><div class="col-lg-6">{{createText("firstName","firstName","FirstName")}}
</div><div class="col-lg-6">{{createText("middleName","middleName","MiddleName")}}
</div><div class="col-lg-6">{{createText("lastName","lastName","LastName")}}
</div><div class="col-lg-6">{{createText("gender_id","gender_id","Gender Id")}}
</div><div class="col-lg-6">{{createText("dateOfBirth","dateOfBirth","DateOfBirth")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_nationality","nationality_id","nationalityName",'') !!}
</div><div class="col-lg-6">{{createText("password","password","Password")}}
</div><div class="col-lg-6">{{createText("temproryAddress","temproryAddress","TemproryAddress")}}
</div><div class="col-lg-6">{{createText("phoneNumber","phoneNumber","PhoneNumber")}}
</div><div class="col-lg-6">{{createText("alternateNumber","alternateNumber","AlternateNumber")}}
</div><div class="col-lg-6">{{createText("emailAddress","emailAddress","EmailAddress")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_country","country_id","countryName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_city","city_id","cityName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_state","state_id","stateName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_district","district_id","districtName",'') !!}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress")}}
</div><div class="col-lg-6">{{createText("postalCode","postalCode","PostalCode")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_organization","organization_id","organizationName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_department","department_id","departmentName",'') !!}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_designation","designation_id","designationName",'') !!}
</div><div class="col-lg-6">{{createText("panNo","panNo","PanNo")}}
</div><div class="col-lg-6">{!! getSelectForForeignColumn("tbl_document","document_id","documentName",'') !!}
</div><div class="col-lg-6">{{createText("documentName","documentName","DocumentName")}}
</div><div class="col-lg-6">{{createText("documentPath","documentPath","DocumentPath")}}
</div><div class="col-lg-6">{{createText("profilePhoto","profilePhoto","ProfilePhoto")}}
</div><div class="col-lg-6">{{createText("aboutMe","aboutMe","AboutMe")}}
</div><div class="col-lg-6">{{createText("sign","sign","Sign")}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName")}}
</div><div class="col-lg-6">{{createText("motherName","motherName","MotherName")}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName")}}
</div><div class="col-lg-6">{{createText("grandMotherName","grandMotherName","GrandMotherName")}}
</div><div class="col-lg-6">{{createText("spouse","spouse","Spouse")}}
</div><div class="col-lg-6">{{createText("emergencyContact","emergencyContact","EmergencyContact")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection