<!DOCTYPE html>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="MyFreeTime" description="De website waar je al je vrije tijd kan bijhouden."
    @vite(['resources/css/style.css'])
    <title>@yield('title')</title>
</head>
<body>
<header>
    <div class="head">
        <div class="titelnav">
        </div>
        <div class="navbar">
            <div class="link"><a href="/">Thuispagina</a></div>
            <div id="zoekbalkheader"><input type="text" placeholder="Zoeken.."></div>
            <div class="link"><a href="/nieuws">Nieuws</a></div>
            <div class="link"><a href="/inloggen">Inloggen</a></div>
        </div>
    </div>
</header>
<footer></footer>
</body>


</html>
