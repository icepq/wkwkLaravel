<?php

namespace App\Http\Controllers;

use App\Models\BigTourSummarize;
use Illuminate\Http\Request;

class BigTourSummarizeController extends Controller
{
    public function create()
    {
        return view('manageFile.pass');
    }

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

    public function index()
    {
        $tours = BigTourSummarize::where('is_visible', true)->get();
        return view('index', compact('tours'));
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:16',
            'organizer' => 'required|string|max:32',
            'summary' => 'required|string|max:128',
            'day' => 'required|date',
            'url' => 'nullable|url|max:128',
        ]);

        // データの保存
        BigTourSummarize::create($request->all());

        return redirect()->route('big_tour.create')->with('success', '募集が完了しました！');
    }

    public function manage()
    {
        $tours = BigTourSummarize::where('is_visible', true)->get();
        return view('manageFile.pass', compact('tours'));
    }

    public function hide(Request $request)
    {
        $tour = BigTourSummarize::where('organizer', $request->get('organizer'))->first();
        if ($tour) {
            $tour->is_visible = false;
            $tour->save();
        }
        return redirect()->route('big_tour.hide')->with('success', '缶');
    }

    public function showAll()
    {
        // すべてのデータを取得（is_visible に関わらず）
        $tours = BigTourSummarize::all();
        return view('save', compact('tours'));
    }


}