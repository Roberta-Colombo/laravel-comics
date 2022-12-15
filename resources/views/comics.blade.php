@extends('layouts.app')
@section('page-title', 'Current DC Series')

@section('content')
<div class="main-bg">
    <div class="container">
        <div class="title">Current Series</div>
        <div class="row">
                @foreach ($comics as $comic)
                <div class="col">
                <div class="img-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                </div>
                <div class="cap">
                    {{$comic['series']}}
                </div>
            </div>  
                @endforeach
        </div>
        <div class="btn">
            <button>Load More</button>
        </div>
    </div>

    <div class="blue-bar">
        <div class="container">
            <ul class="ul-blue-bar d-flex align-items-center">
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    <div>DIGITAL COMICS</div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="Merchandise">
                    <div>DC MERCHANDISE</div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscriptions">
                    <div>SUBSCRIPTION</div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Shop locator">
                    <div>COMIC SHOP LOCATOR</div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="Shop locator">
                    <div>DC POWER VISA</div>
                </li>     
            </ul>
        </div>
    </div>

</div>
@endsection