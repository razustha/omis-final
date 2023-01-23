
                <form >
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("employeeType_id","employeeType_id","EmployeeType Id",'',$data->employeeType_id)}}
</div><div class="col-lg-6">{{createText("firstName","firstName","FirstName",'',$data->firstName)}}
</div><div class="col-lg-6">{{createText("middleName","middleName","MiddleName",'',$data->middleName)}}
</div><div class="col-lg-6">{{createText("lastName","lastName","LastName",'',$data->lastName)}}
</div><div class="col-lg-6">{{createText("gender_id","gender_id","Gender Id",'',$data->gender_id)}}
</div><div class="col-lg-6">{{createText("dateOfBirth","dateOfBirth","DateOfBirth",'',$data->dateOfBirth)}}
</div><div class="col-lg-6">{{createText("nationality_id","nationality_id","Nationality Id",'',$data->nationality_id)}}
</div><div class="col-lg-6">{{createText("password","password","Password",'',$data->password)}}
</div><div class="col-lg-6">{{createText("temproryAddress","temproryAddress","TemproryAddress",'',$data->temproryAddress)}}
</div><div class="col-lg-6">{{createText("phoneNumber","phoneNumber","PhoneNumber",'',$data->phoneNumber)}}
</div><div class="col-lg-6">{{createText("alternateNumber","alternateNumber","AlternateNumber",'',$data->alternateNumber)}}
</div><div class="col-lg-6">{{createText("emailAddress","emailAddress","EmailAddress",'',$data->emailAddress)}}
</div><div class="col-lg-6">{{createText("country_id","country_id","Country Id",'',$data->country_id)}}
</div><div class="col-lg-6">{{createText("city_id","city_id","City Id",'',$data->city_id)}}
</div><div class="col-lg-6">{{createText("state_id","state_id","State Id",'',$data->state_id)}}
</div><div class="col-lg-6">{{createText("district_id","district_id","District Id",'',$data->district_id)}}
</div><div class="col-lg-6">{{createText("permanentAddress","permanentAddress","PermanentAddress",'',$data->permanentAddress)}}
</div><div class="col-lg-6">{{createText("postalCode","postalCode","PostalCode",'',$data->postalCode)}}
</div><div class="col-lg-6">{{createText("organization_id","organization_id","Organization Id",'',$data->organization_id)}}
</div><div class="col-lg-6">{{createText("department_id","department_id","Department Id",'',$data->department_id)}}
</div><div class="col-lg-6">{{createText("designation_id","designation_id","Designation Id",'',$data->designation_id)}}
</div><div class="col-lg-6">{{createText("panNo","panNo","PanNo",'',$data->panNo)}}
</div><div class="col-lg-6">{{createText("document_id","document_id","Document Id",'',$data->document_id)}}
</div><div class="col-lg-6">{{createText("documentName","documentName","DocumentName",'',$data->documentName)}}
</div><div class="col-lg-6">{{createText("documentPath","documentPath","DocumentPath",'',$data->documentPath)}}
</div><div class="col-lg-6">{{createText("profilePhoto","profilePhoto","ProfilePhoto",'',$data->profilePhoto)}}
</div><div class="col-lg-6">{{createText("aboutMe","aboutMe","AboutMe",'',$data->aboutMe)}}
</div><div class="col-lg-6">{{createText("sign","sign","Sign",'',$data->sign)}}
</div><div class="col-lg-6">{{createText("fatherName","fatherName","FatherName",'',$data->fatherName)}}
</div><div class="col-lg-6">{{createText("motherName","motherName","MotherName",'',$data->motherName)}}
</div><div class="col-lg-6">{{createText("grandFatherName","grandFatherName","GrandFatherName",'',$data->grandFatherName)}}
</div><div class="col-lg-6">{{createText("grandMotherName","grandMotherName","GrandMotherName",'',$data->grandMotherName)}}
</div><div class="col-lg-6">{{createText("spouse","spouse","Spouse",'',$data->spouse)}}
</div><div class="col-lg-6">{{createText("emergencyContact","emergencyContact","EmergencyContact",'',$data->emergencyContact)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>