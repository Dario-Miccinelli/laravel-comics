@extends('layout.app')

@section('page-title', "COMICS INFO")



@section('components.currseries')

<div class="blue blue2"></div>
<img class="img-position" src="{{$comicsbook['thumb']}}" alt="">



@endsection




@section('mainpage-main')

<section class="comicspage">
<h2>{{$comicsbook['title']}}</h2>



<div class="boxes-green">

<div class="green">U.S PRICE {{$comicsbook['price']}} AVAIBLE</div>
<div class="green">Check Availability</div>

</div>

<p>
    {{$comicsbook['description']}}
</p>

</section>



@endsection