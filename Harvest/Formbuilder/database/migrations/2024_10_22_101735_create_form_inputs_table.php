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
        Schema::create('form_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('form_inputs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('form_id')->constrained()->cascadeOnDelete();
            $table->string('component_name');
            $table->tinyInteger('component_type');
            $table->json('data')->nullable();
            $table->string('input_label')->nullable();
            $table->string('input_name')->nullable();
            $table->text('input_class')->nullable();
            $table->tinyInteger('data_type')->nullable();
            $table->json('data_options')->nullable();
            $table->boolean('required')->nullable();
            $table->boolean('unique')->nullable();
            $table->json('extra_rule')->nullable();
            $table->tinyInteger('order_item')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_inputs');
    }
};
