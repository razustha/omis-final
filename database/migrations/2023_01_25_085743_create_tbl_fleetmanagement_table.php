<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_fleetmanagement", function (Blueprint $table) {
$table->integer("fleetmanagement_id")->autoIncrement();
$table->string("lesseeName")->nullable();
$table->string("lesseeAddress")->nullable();
$table->string("lessorName")->nullable();
$table->string("lessorContact")->nullable();
$table->integer("vehicleType_id")->default(0);
$table->string("driverName")->nullable();
$table->string("driverContact")->nullable();
$table->string("driverAddress")->nullable();
$table->string("organizationName")->nullable();
$table->integer("staff_Id")->default(0);
$table->string("staffName")->nullable();
$table->string("staffIdentity")->nullable();
$table->integer("totalPeople")->default(0);
$table->integer("NumerOfDays")->default(0);
$table->string("travelPlaceFrom")->nullable();
$table->string("travelPlaceTo")->nullable();
$table->integer("costPerDay")->default(0);
$table->integer("tax")->default(0);
$table->integer("remainingAmount")->default(0);
$table->string("HCIName")->nullable();
$table->string("HCIAddress")->nullable();
$table->integer("vehileCompany_id")->default(0);
$table->string("vehileCompanyName")->nullable();
$table->string("vehicleCompanyAddress")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->string("updatedBy")->nullable();
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_fleetmanagement");
    }
};