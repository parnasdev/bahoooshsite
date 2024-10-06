<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable();
            $table->string('title');
            $table->json('icon')->nullable();
            $table->text('href')->nullable();
            $table->boolean('is_link')->nullable()->default(false);
            $table->boolean('mega_menu')->nullable()->default(false);
            $table->nullableMorphs('linktable');
            $table->string('status')->default('hidden');
            $table->string('type');
            $table->integer('order_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_contents');
    }
};
