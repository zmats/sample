<?php
//ログイン後の画面を開く
namespace App\Http\Controllers;
class TestController extends Controller {
	public function index()
	{
		return view('test');
	}
}

?>
