<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table -> id();
            $table -> string('name');
            $table -> bigInteger('faculty_id',$autoIncrement = false, $unsigned = false);
            $table -> string('gender');
            $table -> string('phone',10);
            $table -> string('email');
            $table -> string('address');
            $table -> string('nationality');
            $table -> date('DOB');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
