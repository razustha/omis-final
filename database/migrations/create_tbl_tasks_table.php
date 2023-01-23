<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_tasks", function (Blueprint $table) {
$table->integer("tasks_id")->autoIncrement();
$table->integer("department_id")->default(0);
$table->string("tasksAssignedTo");
$table->string("companyName");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->datetime("created_at");
$table->string("updateBy");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_tasks");
    }
};