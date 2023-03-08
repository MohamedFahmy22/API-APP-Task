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
        Schema::create('carousel', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->string('content');
            $table->string('see_more');
            $table->text('media');
            /*$table->foreignId('category_id')->references('id')
                ->on('categoies')->cascadeOnDelete()
                ->cascadeOnUpdate();*/
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel');
    }
};
