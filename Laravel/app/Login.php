<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //id, create_at 以外のカラムを更新可能とする
    protected fillable = [
      'name',
      'email',
    ];
}
