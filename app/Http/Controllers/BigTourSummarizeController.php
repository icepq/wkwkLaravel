<?php

namespace App\Http\Controllers;

use App\Models\BigTourSummarize;
use Illuminate\Http\Request;

class BigTourSummarizeController extends Controller
{

    // 一覧表示
    // public function index(Request $request)
    // {
    //     // 並び替えの処理
    //     $sort = $request->get('sort', 'created_at');
    //     $order = $request->get('order', 'asc');
        
    //     $tours = BigTourSummarize::where('is_visible', true)
    //             ->orderBy($sort, $order)
    //             ->get();
        
    //     return view('big_tour', compact('tours'));
    // }
    public function save(Request $request)
    {
        // 並び替えの処理
        $sort = $request->get('sort', 'created_at');
        $order = $request->get('order', 'asc');
        
        $tours = BigTourSummarize::where('is_visible', true)
                ->orderBy($sort, $order)
                ->get();
        
        return view('save', compact('tours'));
    }

    // public function save()
    // {
    //     $tours = BigTourSummarize::where('is_visible', true)->get();
    //     return view('save', compact('tours'));
    // }


    // 新規作成の保存
    public function store(Request $request)
    {
            // バリデーション
        $request->validate([
            'name' => 'required|string|max:16',
            'organizer' => 'required|string|max:32',
            'summary' => 'required|string|max:128',
            'day' => 'required|string|max:132',
            'url' => 'required|url|max:128',
        ]);

        // フォームのデータを保存
        BigTourSummarize::create($request->all());

        // return redirect()->route('big_tour.index')->with('success', 'Big Tourが正常に保存されました。');
        return redirect()->route('save')->with('success', 'Big Tourが正常に保存されました。');
    }  

    // 非表示にする
    public function hide(Request $request)
    {
        $tour = BigTourSummarize::where('organizer', $request->get('organizer'))->first();
        if ($tour) {
            $tour->is_visible = false;
            $tour->save();
        }
        return redirect()->route('big_tour.index');
    }
}
