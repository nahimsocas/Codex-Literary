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
        Schema::create('account_information', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['male', 'female', 'other'])->nullable(true);
            $table->date('birthdate')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->foreignId('users_id')->unique()->nullable(true)->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('account_information');
    }
};
