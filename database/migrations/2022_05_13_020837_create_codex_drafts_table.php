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
        Schema::create('codex_drafts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false)->default('Chapter.');
            $table->longText('text')->nullable(false);
            $table->text('thoughts')->nullable(true);
            $table->foreignId('codexes_id')->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('authors_id')->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('codex_drafts');
    }
};
