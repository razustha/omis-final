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
$table->string("organizationName");
$table->string("organizatoinCategory");
$table->string("ownerName");
$table->string("phoneNumber");
$table->string("landLineNumber");
$table->string("emailAddress");
$table->string("faxAddress");
$table->integer("country_id")->default(0);
$table->integer("state_id")->default(0);
$table->integer("city_id")->default(0);
$table->integer("district_id")->default(0);
$table->string("geoMapLocation");
$table->string("documentType");
$table->string("documentName");
$table->string("documentPath");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->integer("updatedBy")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_organization");
    }
};