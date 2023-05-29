@extends('layouts.app')

@section('content')
    <div class="container w-50 py-5 text-center">


        <div class="card shadow h-100">
            <img class="card-img-top figure-img" src="{{ $comic->thumb }}" alt="">
            <h6>{{ $comic->title }}</h6>
        </div>


    </div>
@endsection
