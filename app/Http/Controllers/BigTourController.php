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

        $details = DB::table('big_tour_details')->where('tour_id', $id)->get();

        return view("big_tour.{$id}", compact('tour', 'details'));
    }
    
    public function storeDetail(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'title' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'time' => 'nullable|string|max:255',
            'url' => 'nullable|url',
            'comment' => 'nullable|string',
        ]);
        
        DB::table('big_tour_details')->insert([
            'tour_id' => $id,
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'url' => $request->input('url'),
            'comment' => $request->input('comment'),
        ]);
        
        return redirect()->route('big_tour.show', ['id' => $id])
        ->with('success', 'Details added successfully!');
    }
}    