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
        Schema::create('newschools', function (Blueprint $table) {
            $table->id();
            $table->string('schoolname', 255);
            $table->string('schoolnpsn', 20)->unique();
            $table->string('schooladdr', 255);
            $table->string('schoolkel', 200)->nullable();
            $table->string('schoolkec', 200)->nullable();
            $table->string('schoolprov', 200)->nullable();
            $table->string('schoolstatus', 40)->nullable();
            $table->string('schooljenjang', 5)->nullable();
            $table->string('contactname', 200);
            $table->string('contactwa', 25);
            $table->string('contactjabatan', 200)->nullable();
            $table->string('contactphone', 25)->nullable();
            $table->string('username', 200)->unique();
            $table->string('userlogin', 200)->unique();
            $table->string('userpwd', 200);
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
        Schema::dropIfExists('newschools');
    }
};
