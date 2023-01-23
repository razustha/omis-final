<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_organization", function (Blueprint $table) {
$table->integer("organization_id")->autoIncrement();
$table->string("organizationName")->nullable();
$table->string("organizatoinCategory")->nullable();
$table->string("ownerName")->nullable();
$table->string("phoneNumber")->nullable();
$table->string("landLineNumber")->nullable();
$table->string("emailAddress")->nullable();
$table->string("faxAddress")->nullable();
$table->integer("country_id")->default(0);
$table->integer("state_id")->default(0);
$table->integer("city_id")->default(0);
$table->integer("district_id")->default(0);
$table->string("geoMapLocation")->nullable();
$table->string("documentType")->nullable();
$table->string("documentName")->nullable();
$table->string("documentPath")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->string("alias")->nullable();
$table->integer("status")->default(0);
$table->text("remarks")->nullable();;
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_organization");
    }
};