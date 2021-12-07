<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permission');
            $table->bigInteger('section_id')->unsigned();
            $table->foreign('section_id')
                  ->references('id')
                  ->on('sections')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
         
        });

        Schema::create('user_part_permissions', function (Blueprint $table){
            $table->bigInteger('user_part_id')->unsigned();
            $table->bigInteger('permission_id')->unsigned();

            $table->foreign('user_part_id')
                  ->references('id')
                  ->on('user_parts')->onDelete('cascade');
            $table->foreign('permission_id')
                  ->references('id')
                  ->on('permissions')->onDelete('cascade');
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
}
