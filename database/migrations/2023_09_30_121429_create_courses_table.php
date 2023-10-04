<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            // General Information 
            $table->string("title")->nullable();
            $table->string("subtitle")->nullable();
            $table->longText("description")->nullable();
            $table->string("category")->nullable();
            $table->string("subcategory")->nullable();

            // Media 
            $table->string("photo_path")->nullable();
            $table->string("promo_video_path")->nullable();

            // Multiple Input for course objective 
            $table->json("learning_objectives")->nullable();
            $table->json("prerequisites")->nullable();
            $table->json("target_audiences")->nullable();


            // Price 
            $table->decimal("price", 10, 2)->nullable();
            $table->string("currency")->nullable();
            $table->decimal("discounted_price", 10, 2)->nullable();
            // $table->string("is_free")->boolean();
            

            
            $table->text("welcome_message")->nullable();
            $table->text("congratulations_message")->nullable();
            $table->string("status")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
