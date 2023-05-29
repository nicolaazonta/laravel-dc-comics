@extends('layouts.app')

@section('content')

<div class="container py-5 text-center" >
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-2">

        @forelse ($comics as $comic)
            
        <div class="col">
            <div class="card shadow">
                <h1>{{ $comic->title }}</h1>
            </div>
        </div>

        @empty
            <h3>sorry, there are no comics to show</h3>
        @endforelse
      
    </div>
</div>
    
@endsection