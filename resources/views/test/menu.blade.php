<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    こんにちは！{{ Auth::user()->name }}<br /><br />
    <a href="/test/search">照会処理</a><br />
    @can('admin')
        <a href="/test/update">更新処理</a><br /><br />
    @endcan
    <a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
    </a>
    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
