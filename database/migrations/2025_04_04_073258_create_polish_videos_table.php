<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('polish_videos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->text('link');
            $table->text('polish_text');
            $table->text('tags');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('polish_videos');
    }
};
