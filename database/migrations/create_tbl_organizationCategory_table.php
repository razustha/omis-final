<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_organizationCategory", function (Blueprint $table) {
$table->integer("organizationCategory_id")->autoIncrement();
$table->integer("organizationCategoryParent_id")->default(0);
$table->string("organizationCategoryName");
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
     Schema::dropIfExists("tbl_organizationCategory");
    }
};