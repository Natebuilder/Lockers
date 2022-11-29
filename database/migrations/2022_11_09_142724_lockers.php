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
        //
        Schema::create('lockers', function (Blueprint $table) {
            $table->id();
            $table->string('lockernumber')->unique();
            $table->enum('size', ['small', 'medium', 'large']);
            $table->timestamp('occupied_at')->nullable(); // '2022-11-16 15:31:22'
            $table->timestamp('released_at')->nullable();
            $table->foreignId('student_id')->nullable()->references('id')->on('students');
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
        //
        Schema::dropIfExists('customers');
    }
};
