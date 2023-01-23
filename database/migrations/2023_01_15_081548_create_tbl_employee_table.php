<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_employee", function (Blueprint $table) {
$table->integer("employee_id")->default(0);
$table->integer("employeeType_id")->default(0);
$table->string("firstName");
$table->string("middleName");
$table->string("lastName");
$table->integer("gender_id")->default(0);
$table->string("nationality_id");
$table->string("password");
$table->string("temproryAddress");
$table->string("phoneNumber");
$table->string("alternateNumber");
$table->string("emailAddress");
$table->integer("country_id")->default(0);
$table->integer("city_id")->default(0);
$table->integer("state_id")->default(0);
$table->integer("district_id")->default(0);
$table->string("permanentAddress");
$table->integer("postalCode")->default(0);
$table->integer("organization_id")->default(0);
$table->integer("department_id")->default(0);
$table->string("designation_id");
$table->integer("panNo")->default(0);
$table->integer("document_id")->default(0);
$table->string("documentName");
$table->string("documentPath");
$table->string("profilePhoto");
$table->text("aboutMe");
$table->string("sign");
$table->string("fatherName");
$table->string("motherName");
$table->string("grandFatherName");
$table->string("grandMotherName");
$table->string("spouse");
$table->string("emergencyContact");
$table->datetime("createdOn");
$table->string("createdBy");
$table->integer("updatedBy")->default(0);
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_employee");
    }
};