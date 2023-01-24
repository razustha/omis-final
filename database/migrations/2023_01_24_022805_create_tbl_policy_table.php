<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_policy", function (Blueprint $table) {
$table->integer("policy_id")->autoIncrement();
$table->string("policyName")->nullable();
$table->string("policyDetail")->nullable();
$table->datetime("createdOn")->nullable();;
$table->string("createdBy")->nullable();
$table->integer("updatedBy")->default(0);
$table->integer("status")->default(0);
$table->string("alias")->nullable();
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_policy");
    }
};