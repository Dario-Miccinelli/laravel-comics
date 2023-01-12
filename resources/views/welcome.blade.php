@extends('layout.app')

@section('page-title', "DC-COMICS Home")


@section('components.currseries')

<button class="btn-blue btn-position bigger">CURRENT SERIES</button>

@endsection


@section('mainpage-main')
<div id="main">
<section class="main-series">
@foreach ($comics as $elem)
<div>
 
    <img src="{{$elem['thumb']}}" alt="">
    <p>{{$elem['series']}}</p>

</div>
@endforeach
</section>
<div class="button">
<button class="btn-blue">LOAD MORE</button>
</div>
</div>

<div class=" blue3">


    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" class="p-2">
    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" class="p-2">

</div>


@endsection
