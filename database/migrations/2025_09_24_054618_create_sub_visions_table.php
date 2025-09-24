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
        Schema::create('sub_visions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vision_id')->constrained()->onDelete('cascade');
            $table->string('title')->index();
            $table->text('description')->nullable();
            $table->boolean('completed')->default(false);
            $table->timestamp('completed_at')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();

            // composite indexes for better performance
            $table->index(['vision_id', 'completed']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_visions');
    }
};
