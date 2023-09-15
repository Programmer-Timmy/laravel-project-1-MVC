@extends('layouts.app')
@section('heading')
    <h3>Klimaat Crishis</h3>
    <h5>Door Angela Huzza</h5>
    @if($uur <12) Goedemorgen!
    @elseif($uur>= 12 | $uur <18) Goedemiddag!
    @elseif($uur>= 18) Goedenavond!
    @else Uur ongeldig!
    @endif
    <br>
    <img src="{{URL::asset('/img/mijnfoto.png')}}" alt="profile pic" width="300">
@endsection
@section('body')
    <p>
    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsa, totam. In repellendus, repudiandae? Adipisci atque fugit laudantium magnam perferendis! Atque aut cupiditate earum iste maxime nam suscipit veniam voluptate!"</p>

@endsection
