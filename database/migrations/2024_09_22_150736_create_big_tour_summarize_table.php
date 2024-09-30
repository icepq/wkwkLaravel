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
        Schema::create('big_tour_summarize', function (Blueprint $table) {
            $table->id();
            $table->string('name', 16);         // 作成者
            $table->string('organizer', 32);    // 企画名
            $table->string('summary', 128);     // 概要
            $table->date('day');                // 開催日 (日付入力に変更)
            $table->string('url', 128);         // Xでの告知URL
            $table->boolean('is_visible')->default(true); // 非表示フラグ (デフォルトで表示)
            $table->timestamps();               // 作成日・更新日
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('big_tour_summarize');
    }
};
