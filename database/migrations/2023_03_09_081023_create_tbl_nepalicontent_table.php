<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;

        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_nepalicontent", function (Blueprint $table) {
$table->integer("nepalicontent_id")->autoIncrement();
$table->string("english_string")->nullable();
$table->string("nepali_string")->nullable();
$table->datetime("createdOn")->nullable();;
$table->integer("createdBy")->default(0);
$table->integer("updatedBy")->default(0);
$table->text("remarks")->nullable();;
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_nepalicontent");
    }
};