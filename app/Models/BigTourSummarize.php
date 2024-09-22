<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BigTourSummarize extends Model
{
    // 使用するテーブル名を指定
    protected $table = 'big_tour_summarize'; 

    // フィールドの一括代入を許可
    protected $fillable = ['name', 'organizer', 'summary', 'day', 'url', 'is_visible'];
}
