<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_latereasons", function (Blueprint $table) {
$table->integer("latereasons_id")->autoIncrement();
$table->integer("applicantsName_id")->default(0);
$table->string("dayLate")->nullable();
$table->string("lateDesignation")->nullable();
$table->string("reasonForLate")->nullable();
$table->string("submittedBy")->nullable();
$table->string("checkedBy")->nullable();
$table->string("approvedBy")->nullable();
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
     Schema::dropIfExists("tbl_latereasons");
    }
};