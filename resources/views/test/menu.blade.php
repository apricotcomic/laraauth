<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <a href="/test/search">照会処理</a><br />
    <a href="/test/update">更新処理</a><br /><br />
    <a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
    </a>
    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
        @csrf
</body>
</html>
