<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  //入力画面
  public function index()
  {
    return view('index');
  }
/*
  //バリデーション
  public function receiveData(Request $request)
  {
    $request->validate([
      'name' => "required|string|max255",
      'email' => "required|string|max255"
    ]);
    return view('sample_vali', ['status' => true]);
  }
*/
  //確認
  public function confirm(Request $request)
  {
    $data = $request->all();
    $request->session()->put($data);

    return view('confirm', compact("data"));
  }

  //完了画面
  public function complete()
  {
    $data = session()->all();
    DB::table('login')->insert([
      'name' => $data["name"],
      'email'=>$data["email"]
    ]);
    return view('complete');
  }
}
