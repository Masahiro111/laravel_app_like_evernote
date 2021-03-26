<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{

    public function index()
    {
        return view('memo');
    }

    public function add()
    {
        Memo::create([
            'user_id' => Auth::id(),
            'titile' => '新規メモ',
            'content' => '',
        ]);

        return redirect()->route('memo.index');
    }
}
