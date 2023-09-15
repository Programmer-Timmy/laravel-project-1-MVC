<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlanetNieuws</title>
</head>
<body>
    <div id="logo">
        <img src="{{URL::asset('img/logo.png')}}" alt="profile Pic" width="20%">
    </div>
    <div class="text-center container mt-5">
        <h2>&#x1f30f;PlanetNieuws</h2>
        @yield('heading')
        @yield('body')
    </div>
</body>
</html>
