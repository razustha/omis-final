<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // edit posts
            $table->string('slug')->unique(); //edit-posts
            $table->string('guard_name')->default('web');
            $table->string('group_name')->nullable();
            $table->string('module_id')->nullable();
            $table->datetime("createdOn")->nullable();;
            $table->integer("createdBy")->nullable();
            $table->string("updatedBy")->nullable();
            $table->integer("status")->default(0);
            $table->text("remarks")->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
};
