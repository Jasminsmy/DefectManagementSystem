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
        Schema::create('defectfiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('location');
            $table->string('area');
            $table->string('defect');
            $table->string('status')->default('pending');
            $table->string('contractor')->default('pending');
            $table->string('comment');
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
        Schema::dropIfExists('defectfiles');
    }
};
