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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('website_name');
            $table->string('website_type');
            $table->text('desired_features');
            $table->text('design_reference')->nullable();
            $table->decimal('budget', 15, 2);
            $table->date('deadline');
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->string('additional_file')->nullable();
            $table->text('whatsapp_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
