<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('user_id');
            $table->integer('news_id');
            $table->text('comment');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};