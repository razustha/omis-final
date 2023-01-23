<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_travel", function (Blueprint $table) {
$table->integer("companyName_id")->default(0);
$table->integer("employeeName_id")->default(0);
$table->integer("arrangementType_id")->default(0);
$table->string("purposeOfVisit");
$table->string("destination");
$table->string("travelMode");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->integer("remarks")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_travel");
    }
};