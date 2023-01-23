<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_announcement", function (Blueprint $table) {
$table->integer("announcement_id")->autoIncrement();
$table->string("announcementTitle");
$table->integer("company_id")->default(0);
// $table->string("announcementSummary");
$table->string("announcementDepartment");
// $table->string("announcementDescription");
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
     Schema::dropIfExists("tbl_announcement");
    }
};