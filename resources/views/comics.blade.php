@extends('layout.app')

@section('page-title', "COMICS INFO")



@section('components.currseries')

<div class="blue blue2"></div>
<img class="img-position" src="{{$comicsbook['thumb']}}" alt="">



@endsection




@section('mainpage-main')

<section class="comicspage m-auto d-flex flex-wrap m-auto">
<h2 class="mt-5  ms-5">{{$comicsbook['title']}}</h2>



<div class="boxes-green d-flex flex-row ms-5">

<div class="green">U.S PRICE {{$comicsbook['price']}} AVAIBLE</div>
<div class="green">Check Availability</div>

</div>

<p class="paragraph  ms-5 me-5">
    {{$comicsbook['description']}}

   
</p>
<div class="ms-5">
    <div class="text-right">ADVERTISEMENT</div>
    <img src="{{ asset('images/comics.jpg') }}" alt="" class="ms-5 pb-2">
</div>
</section>








@endsection