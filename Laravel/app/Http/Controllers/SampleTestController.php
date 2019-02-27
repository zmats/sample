
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleTest;

class SampleTestController extends Controller
{
  public function SampleTest()
  {
    $name = 'ララベル太郎';
    $text = 'これからもよろしくお願いいたします。';
    $to = 'test@gmail.com';
    Mail::to($to)->send(new SampleTest($name, $text));
  }
}
