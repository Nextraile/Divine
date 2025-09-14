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
        Schema::create('visions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('visions')->onDelete('cascade'); //nested-vision
            $table->string('title')->index();
            $table->text('description')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium');
            $table->enum('status', ['not_started', 'in_progress', 'on_hold', 'completed'])->default('not_started');
            $table->softDeletes();
            $table->timestamps();
            
            //composite indexes for better performance
            $table->index(['user_id', 'due_date']);
            $table->index(['user_id', 'priority']);
            $table->index(['user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visions');
    }
};
