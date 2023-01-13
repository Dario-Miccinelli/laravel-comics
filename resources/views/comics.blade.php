@extends('layout.app')

@section('page-title', 'COMICS INFO')



@section('components.currseries')

    <div class="blue blue2"></div>
    <img class="img-position" src="{{ $comicsbook['thumb'] }}" alt="">



@endsection




@section('mainpage-main')

    <section class="main-comics d-flex w-75 m-auto mb-5">
        <section class="fs-5 m-auto d-flex flex-wrap m-auto">

            <div class="w-100">
                <h2 class="mt-5  ms-5">{{ $comicsbook['title'] }}</h2>
            </div>


            {{-- green boxes --}}
            <div class="d-flex ms-5 mt-3">

                <div class="green">U.S PRICE {{ $comicsbook['price'] }} AVAIBLE</div>
                <div class="green">Check Availability</div>

            </div>

            {{-- green boxes end --}}

            <p class="paragraph">
                {{ $comicsbook['description'] }}
            </p>

        </section>

        <section class="mt-5">
            <div class="mt-3">
                <div class="text-right text-secondary fs-5">ADVERTISEMENT
                    <img src="{{ asset('images/comics.jpg') }}" alt="" class="p-1 ms-2">
                </div>
        </section>


    </section>

    <section class="comics-info  m-auto d-flex ">
        <div class="w-75 d-flex m-auto mt-5">

            <div class="flex-column width-45 me-4">
                <h4 class="font-color mb-4">Talent</h4>
                <div class="d-flex d-row border-top">
                    <h5 class="w-100 font-color mt-2">Art by:</h5>

                    <p class="bold mt-2">
                        @foreach ($comicsbook['artists'] as $artist)
                            {{ $artist }},
                        @endforeach
                    </p>
                </div>

                <div class="d-flex d-row border-top">
                    <h5 class="w-100 font-color mt-2 ">Written by:</h5>

                    <p class="bold ms-4 mt-2">
                        @foreach ($comicsbook['writers'] as $writers)
                            {{ $writers }},
                        @endforeach
                    </p>
                </div>

            </div>

            <div class="flex-column width-45 ms-5">
                <h4 class="font-color mb-4">Specs</h4>



                <div class="d-flex d-row border-top">
                    <h5 class="w-100 font-color mt-2">Series:</h5>

                    <p class="bold mt-2 w-100 text-uppercase">
                        {{ $comicsbook['series'] }}
                    </p>
                </div>

                <div class="d-flex d-row border-top">
                    <h5 class="w-100 font-color mt-2">U.S. Price:</h5>

                    <p class="bold mt-2 w-100">
                        {{ $comicsbook['price'] }}
                    </p>
                </div>

                <div class="d-flex d-row border-top border-bottom">
                    <h5 class="w-100 font-color mt-2">On Sale Date:</h5>

                    <p class="bold mt-2 w-100">
                        {{ $comicsbook['sale_date'] }}
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class=" m-auto comics-info-above d-flex">

        <div class="w-75 d-flex m-auto border">
        <div class="border w-25  ">
            <span class="fs-5 w-25 bold-2">DIGITAL COMICS</span>
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" class="p-2 pic">
        </div>


        <div class="border w-25 bold-2">
            <span class="fs-5">SHOP DC</span>
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" class="p-2 pic">
        </div>

        <div class="border w-25 bold-2">
            <span class="fs-5">COMIC SHOP LOCATOR</span>
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" class="p-2 pic">
        </div>

        <div class="border w-25 bold-2">
            <span class="fs-5">SUBSCRIPTION</span>
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" class="p-2 pic">
        </div>
    </div>

    </section>









@endsection
