<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>更新処理</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
入力してね！本当は何も更新しないけど<br />
@if(session('adminmsg'))
    {{ Session('adminmsg') }}<br />
@endif

{!! Form::open() !!}
<input type="text" name="inputdata">
<br /><br />
<button type="submit" name="action" value="update">{{__('update')}}</button>
<button type="submit" name="action" value="back">{{ __('back') }}</button>
<br />
</body>
</html>
