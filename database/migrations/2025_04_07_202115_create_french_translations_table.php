<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('french_translations', function (Blueprint $table) {
            $table->id();
            $table->string('video_name'); // clé étrangère vers polish_videos.name
            $table->text('english_translation');
            $table->text('polish_translation');
            $table->timestamps();

            $table->foreign('video_name')
                ->references('name')
                ->on('french_videos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('french_translations');
    }
};
