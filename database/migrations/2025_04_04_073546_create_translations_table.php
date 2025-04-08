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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('video_id');
            $table->text('english_translation'); // Traduction en anglais
            $table->text('french_translation');  // Traduction en français
            $table->timestamps();
        
            // Clé étrangère vers la table polish_videos
            $table->foreign('video_id')->references('id')->on('polish_videos')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
