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
$table->string("policyName");
$table->string("policyDetail");
$table->datetime("createdOn");
$table->string("createdBy");
$table->integer("updatedBy")->default(0);
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_policy");
    }
};