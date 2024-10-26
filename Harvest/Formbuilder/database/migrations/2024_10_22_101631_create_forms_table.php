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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->boolean('is_payable')->default(false);
            $table->json('config')->nullable();
            $table->json('fields')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('inbox_count' , 50)->default('0');
            $table->decimal('price', 12, 0)->default(0);
            $table->decimal('sell_price', 12, 0)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
