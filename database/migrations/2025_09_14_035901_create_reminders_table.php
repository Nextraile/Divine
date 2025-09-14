<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vision_id')->constrained()->onDelete('cascade');
            $table->timestamp('remind_at');
            $table->enum('type', ['email', 'browser'])->default('browser');
            $table->boolean('is_sent')->default(false);
            $table->text('message')->nullable();
            $table->timestamps();

            // composite indexes for better performance
            $table->index(['remind_at', 'is_sent']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
