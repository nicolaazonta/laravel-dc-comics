@extends('layouts.app')

@section('content')
    <div class="container w-50 py-5">


        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" id="title"
                    class="form-control
                @error('title') is-invalid                  
                @enderror"
                    placeholder="comic title here" value="{{ old('title') }}" aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">type the title of the comic</small>
            </div>
            @error('title')
                <div class="alert alert-primary" role="alert">
                    <strong>Title, error</strong>{{ $message }}
                </div>
            @enderror

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="comic description here"
                    aria-describedby="descriptionHelper">
                </textarea>
                <small id="descriptionHelper" class="text-muted">type the description of the comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="comic thumb here"
                    aria-describedby="thumbHelper">
                <small id="thumbHelper" class="text-muted">type the thumb of the comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="int" name="price" id="price" class="form-control" placeholder="comic price here"
                    aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">type the price of the comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="int" name="price" id="price" class="form-control" placeholder="comic price here"
                    aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">type the price of the comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="int" name="series" id="series" class="form-control" placeholder="comic series here"
                    aria-describedby="seriesHelper">
                <small id="seriesHelper" class="text-muted">type the series of the comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="int" name="sale_date" id="sale_date" class="form-control"
                    placeholder="comic sale_date here" aria-describedby="sale_dateHelper">
                <small id="sale_dateHelper" class="text-muted">type the sale_date of the comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="int" name="type" id="type" class="form-control" placeholder="comic type here"
                    aria-describedby="typeHelper">
                <small id="typeHelper" class="text-muted">type the type of the comic</small>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>

        </form>







    </div>
@endsection
