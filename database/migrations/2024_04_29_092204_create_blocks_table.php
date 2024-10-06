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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('blocks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->string('component_name');
            $table->string('title');
            $table->boolean('show_desktop')->default(true);
            $table->boolean('show_tablet')->default(true);
            $table->boolean('show_mobile')->default(true);
            $table->boolean('is_livewire')->default(true);
            $table->string('category');
            $table->json('data')->nullable();
            $table->json('padding')->nullable();
            $table->json('margin')->nullable();
            $table->integer('order_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
