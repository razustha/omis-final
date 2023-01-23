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
$table->string("lesseeName");
$table->string("lesseeAddress");
$table->string("lessorName");
$table->string("lessorContact");
$table->integer("vehicleType_id")->default(0);
$table->string("driverName");
$table->string("driverContact");
$table->string("driverAddress");
$table->string("organizationName");
$table->integer("staff_Id")->default(0);
$table->string("staffName");
$table->string("staffIdentity");
$table->integer("totalPeople")->default(0);
$table->integer("NumerOfDays")->default(0);
$table->string("travelPlaceFrom");
$table->string("travelPlaceTo");
$table->integer("costPerDay")->default(0);
$table->integer("tax")->default(0);
$table->integer("remainingAmount")->default(0);
$table->string("HCIName");
$table->string("HCIAddress");
$table->integer("vehileCompany_id")->default(0);
$table->string("vehileCompanyName");
$table->string("vehicleCompanyAddress");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->string("updatedBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_fleetmanagement");
    }
};