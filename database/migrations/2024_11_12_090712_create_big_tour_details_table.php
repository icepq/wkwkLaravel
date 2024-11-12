<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigTourDetailsTable extends Migration
{
    public function up(): void
    {
        Schema::create('big_tour_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('url')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();

            // 外部キー制約（必要に応じて）
            $table->foreign('tour_id')->references('id')->on('big_tour_summarize')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('big_tour_details');
    }
}
