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
$table->string("projectTitle")->nullable();
$table->string("projectStartClient")->nullable();
$table->string("projectPriority")->nullable();
$table->integer("companyName_id")->default(0);
$table->string("assignedEmployees")->nullable();
$table->string("projectDescription")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->string("alias")->nullable();
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_workprojects");
    }
};