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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title' , 191);
            $table->string('slug' , 191)->nullable();
            $table->text('description')->nullable();
            $table->longText('body')->nullable();
            $table->boolean('pin')->default(false);
            $table->json('options')->nullable();
            $table->dateTime('publish_at')->nullable();
            $table->string('type')->default('post');
            $table->string('status');
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
};
