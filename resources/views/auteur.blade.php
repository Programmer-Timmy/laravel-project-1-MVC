<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hallo, ik ben {{$naam}}</h2>
    @if($uur < 12) <h3>Goedemorgen!</h3>
    @elseif($uur > 12 | $uur <18)<h3>Goedemidag!</h3>
    @elseif($uur > 18)<h3>Goedeavond!</h3>
    @else uur ongeldig!
    @endif
    <img src="{{URL::asset('/img/mijnfoto.png')}}" alt="foto"
         width="200">

    <div class="gegevens">
        <p>ik schrijf voor planetnieuws over de klimaat crisis</p>
        <p>&#x0040; angela@planetnieuws.com</p>
        <button>
            <h2><a href="/meerartiekels">mijn artiekels</a> </h2>
        </button>
    </div>
</body>
</html>
