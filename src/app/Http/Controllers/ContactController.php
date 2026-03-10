<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('index', ['contacts' => $contacts]);
    }

    public function confirm(Request $request)
{
    // フォームの入力値を取得
    $contact = $request->only(['name', 'email', 'tel', 'content']);

    // 確認画面（confirm.blade.php）を表示
    return view('confirm', compact('contact'));
}

public function store(Request $request)
{
    // ここでデータベース保存などの処理を行います（今回は一旦表示のみ）
    // $contact = $request->all();

    // サンクスページ（thanks.blade.php）を表示
    return view('thanks');
}

}


