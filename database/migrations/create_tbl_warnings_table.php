<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_warnings", function (Blueprint $table) {
$table->integer("company_id")->default(0);
$table->string("warningTo");
$table->string("warningSubject");
$table->integer("warningType_id")->default(0);
$table->string("warningDescription");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_warnings");
    }
};