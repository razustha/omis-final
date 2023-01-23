<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_employee", function (Blueprint $table) {
$table->integer("employee_id")->autoIncrement();
$table->integer("employeeType_id")->default(0);
$table->string("firstName")->nullable();
$table->string("middleName")->nullable();
$table->string("lastName")->nullable();
$table->integer("gender_id")->default(0);
$table->string("nationality_id")->nullable();
$table->string("password")->nullable();
$table->string("temproryAddress")->nullable();
$table->string("phoneNumber")->nullable();
$table->string("alternateNumber")->nullable();
$table->string("emailAddress")->nullable();
$table->integer("country_id")->default(0);
$table->integer("city_id")->default(0);
$table->integer("state_id")->default(0);
$table->integer("district_id")->default(0);
$table->string("permanentAddress")->nullable();
$table->integer("postalCode")->default(0);
$table->integer("organization_id")->default(0);
$table->integer("department_id")->default(0);
$table->string("designation_id")->nullable();
$table->integer("panNo")->default(0);
$table->integer("document_id")->default(0);
$table->string("documentName")->nullable();
$table->string("documentPath")->nullable();
$table->string("profilePhoto")->nullable();
$table->text("aboutMe")->nullable();;
$table->string("sign")->nullable();
$table->string("fatherName")->nullable();
$table->string("motherName")->nullable();
$table->string("grandFatherName")->nullable();
$table->string("grandMotherName")->nullable();
$table->string("spouse")->nullable();
$table->string("emergencyContact")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_employee");
    }
};