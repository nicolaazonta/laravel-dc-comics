@extends('layouts.app')

@section('content')
    <div class="container w-50 py-5">


        <form action="{{ route('admin.comics.update',$comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="comic title here"
                    aria-describedby="titleHelper" required>
                <small id="titleHelper" class="text-muted">type the title of the comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="textarea" name="description" id="description" class="form-control"
                    placeholder="comic description here" aria-describedby="descriptionHelper" required>
                <small id="descriptionHelper" class="text-muted">type the description of the comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="textarea" name="thumb" id="thumb" class="form-control" placeholder="comic thumb here"
                    aria-describedby="thumbHelper" required>
                <small id="thumbHelper" class="text-muted">type the thumb of the comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="int" name="price" id="price" class="form-control" placeholder="comic price here"
                    aria-describedby="priceHelper" required>
                <small id="priceHelper" class="text-muted">type the price of the comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="int" name="price" id="price" class="form-control" placeholder="comic price here"
                    aria-describedby="priceHelper" required>
                <small id="priceHelper" class="text-muted">type the price of the comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="int" name="series" id="series" class="form-control" placeholder="comic series here"
                    aria-describedby="seriesHelper" required>
                <small id="seriesHelper" class="text-muted">type the series of the comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="int" name="sale_date" id="sale_date" class="form-control" placeholder="comic sale_date here"
                    aria-describedby="sale_dateHelper" required>
                <small id="sale_dateHelper" class="text-muted">type the sale_date of the comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="int" name="type" id="type" class="form-control" placeholder="comic type here"
                    aria-describedby="typeHelper" required>
                <small id="typeHelper" class="text-muted">type the type of the comic</small>
            </div>

            <button type="submit" class="btn btn-primary w-100">update</button>

        </form>







    </div>
@endsection
