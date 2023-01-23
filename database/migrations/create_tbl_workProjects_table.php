<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_workprojects", function (Blueprint $table) {
$table->integer("workProject_id")->default(0);
$table->string("projectTitle");
$table->string("projectStartClient");
$table->string("projectPriority");
$table->integer("companyName_id")->default(0);
$table->string("assignedEmployees");
$table->string("projectDescription");
$table->datetime("createdOn");
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->string("alias");
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_workprojects");
    }
};