@extends('layouts.app')

@section('content')

<div class="container py-5 text-center" >
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

        @forelse ($comics as $comic)
            
        <div class="col">
            <div class="card shadow h-100">
                <img class="card-img-top figure-img" src="{{ $comic->thumb }}" alt="">
                <h6>{{ $comic->title }}</h6>
                <a class="btn btn-info m-2" href="{{route('admin.comics.show', $comic->id)}}" title="View">view more</a>
            </div>
        </div>

        @empty
            <h3>sorry, there are no comics to show</h3>
        @endforelse
      
    </div>
</div>
    
@endsection