<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>更新完了画面</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
{!! Form::open() !!}
    これを入力したよね？<br />
    {{ $inputdata }}<br /><br />
    <button type="submit" name="action" value="back">{{ __('back') }}</button>
</body>
</html>
