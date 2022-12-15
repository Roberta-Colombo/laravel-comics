@extends('layouts.app')

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
    </div>
</div>
@endsection