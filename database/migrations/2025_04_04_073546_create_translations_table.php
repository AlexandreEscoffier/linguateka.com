<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('video_name'); // clé étrangère vers polish_videos.name
            $table->text('english_translation');
            $table->text('french_translation');
            $table->timestamps();

            $table->foreign('video_name')
                ->references('name')
                ->on('polish_videos')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};

