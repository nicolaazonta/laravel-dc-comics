@extends('layouts.app')

@section('content')
    <div class="container w-50 py-5">


        <form action="{{ route('admin.comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">{{-- title input --}}
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="comic title here" aria-describedby="titleHelper"
                    value="{{ old('title', $comic->title) }}">
                <small id="titleHelper" class="text-muted">type the title of the comic</small>
                @error('title')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">{{-- description section --}}
                <label for="description" class="form-label">description</label>
                <textarea type="textarea" name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" placeholder="comic description here"
                    aria-describedby="descriptionHelper">
                    {{ old('description', $comic->description) }} 
                </textarea>
                <small id="titleHelper" class="text-muted">type the description of the comic</small>

                @error('description')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">{{-- thumb section --}}
                <label for="thumb" class="form-label">thumb</label>
                <textarea type="text" name="thumb" id="thumb" class="form-control" placeholder="comic thumb here"
                    aria-describedby="thumbHelper">{{ old('thumb' ,$comic->thumb) }}
                </textarea>
                <small id="thumbHelper" class="text-muted">type the thumb of the comic</small>
                @error('thumb')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong>{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">{{-- price section --}}
                <label for="price" class="form-label">price</label>
                <input type="int" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="comic price here"
                    aria-describedby="priceHelper" value="{{ old('price', $comic->price) }}">
                <small id="priceHelper" class="text-muted">type the price of the comic</small>
                @error('price')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong>{{$message}}
                    </div>                    
                @enderror
            </div>
            <div class="mb-3">{{-- series section --}}
                <label for="series" class="form-label">series</label>
                <input type="int" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="comic series here"
                    aria-describedby="seriesHelper" value="{{ old('series', $comic->series) }}">
                <small id="seriesHelper" class="text-muted">type the series of the comic</small>
                @error('series')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong> {{$message}}
                    </div>                    
                @enderror
            </div>
            <div class="mb-3">{{-- sale date section --}}
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="int" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror"
                    placeholder="comic sale_date here" aria-describedby="sale_dateHelper"
                    value="{{ old('sale_date', $comic->sale_date) }}">
                <small id="sale_dateHelper" class="text-muted">type the sale_date of the comic</small>
                @error('sale_date')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR </strong> {{$message}}
                    </div>                    
                @enderror
            </div>
            <div class="mb-3">{{-- type section --}}
                <label for="type" class="form-label">type</label>
                <input type="int" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="comic type here"
                    aria-describedby="typeHelper" value="{{ old('type', $comic->type) }}">
                <small id="typeHelper" class="text-muted">type the type of the comic</small>
                @error('type')
                    <div class="alert alert-primary" role="alert">
                        <strong>ERROR</strong> {{$message}}
                    </div>                    
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">update</button>

        </form>







    </div>
@endsection
