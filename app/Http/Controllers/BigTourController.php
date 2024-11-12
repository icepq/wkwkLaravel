<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BigTourController extends Controller
{
    public function show($id)
    {
        $tour = DB::table('big_tour_summarize')->where('id', $id)->first();

        if (!$tour) {
            abort(404); // レコードが見つからない場合は404エラー
        }

        return view("big_tour.{$id}", compact('tour'));
    }
}
