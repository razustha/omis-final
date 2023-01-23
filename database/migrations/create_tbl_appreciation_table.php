<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_appreciation", function (Blueprint $table) {
$table->integer("appreciation_id")->autoIncrement();
$table->string("appreciationTitle");
$table->string("appreciationType");
$table->string("appreciatedBy");
$table->string("recievedBy");
$table->datetime("appreciationRecievedOn");
$table->datetime("appreciatioanApprovedOn");
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
     Schema::dropIfExists("tbl_appreciation");
    }
};