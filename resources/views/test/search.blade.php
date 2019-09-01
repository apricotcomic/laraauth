<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>照会画面</h1>
こんにちは！{{ Auth::user()->name }}<br /><br />
何か表示するよ！そのうちね
<br />
{!! Form::open() !!}
<button type="submit" name="action" value="back">{{ __('back') }}</button>
<br />
</body>
</html>
