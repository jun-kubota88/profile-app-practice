<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * プロフィールページを表示する
     * 
     * 高級レストランの比喩で言えば、厨房リーダー（コントローラー）が
     * 料理の材料（データ）を準備して、盛り付け担当（ビュー）に渡す役割です。
     */
    public function index()
    {
        // 表示するデータを準備（今回はDBを使わず固定値）
        $data = [
            'name' => '山田太郎',
            'age' => 25,
            'hobbies' => ['プログラミング', '読書', '旅行'],
        ];
        
        // ビューにデータを渡して表示
        return view('profile', $data);
    }
}