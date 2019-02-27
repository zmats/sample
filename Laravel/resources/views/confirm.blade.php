<!DOCTYPE html>
<html lang="ja">
<div class="container">
    {!! Form::open(['url' => 'complete', 'method' => 'post']) !!}
      <div class="form-group">
            {!! Form::label('name', '名前: '. $data["name"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス: '. $data["email"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
</div>
</html>
