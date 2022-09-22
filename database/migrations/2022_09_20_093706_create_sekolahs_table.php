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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_name');
            $table->string('school_NPSN')->unique();
            $table->string('school_grade');
            $table->longText('school_address')->nullable();
            $table->string('school_city')->nullable();
            $table->string('school_kab')->nullable();
            $table->string('school_kel')->nullable();
            $table->string('school_prop')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_pic')->nullable();
            $table->string('school_admin_wa')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_token')->nullable();
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'fk_sekolah_user')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolahs');
    }
};
