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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0-yapılmadı 1-yapılıyor -2 ertelendi 3-iptal oldu');
            $table->dateTime('deadLine')->nullable();
            $table->softDeletes();
            $table->timestamps();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
