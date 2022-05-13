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
        Schema::create('codexes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(false);
            $table->foreignId('genres_id')->unique()->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('literaries_id')->unique()->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('languages_id')->unique()->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('codexes');
    }
};
