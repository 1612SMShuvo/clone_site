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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('sure_name');
            $table->string('name');
            $table->string('tracking_id')->unique();
            $table->date('dob');
            $table->string('progress');
            $table->string('birth_place');
            $table->string('birth_id')->unique();
            $table->string('passport_no');
            $table->date('passport_issue_date');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('solicitor_name');
            $table->string('purpose');
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
        Schema::dropIfExists('records');
    }
};
