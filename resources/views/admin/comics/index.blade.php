@extends('layouts.app')

@section('content')




<div class="container py-5 text-center">
    @if (session('message'))
        
    <div class="alert alert-primary" role="alert">
        <strong>{{session('message')}}</strong>
    </div>
    @endif
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card shadow h-100">
                        <img class="card-img-top figure-img" src="{{ $comic->thumb }}" alt="">
                        <h6>{{ $comic->title }}</h6>
                        <a class="btn btn-info m-1" href="{{ route('admin.comics.show', $comic->id) }}" title="View">view
                            more</a>
                        <a class="btn btn-secondary m-1" href="{{ route('admin.comics.edit', $comic->id) }}"
                            title="Delete">edit</a>

                        
                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalId">
                            delete
                        </button>
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">

                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">Delete comic</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        are you sure to delete {{ $comic->title }}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">confirm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('{{ $comic->id }}'), options)
                        </script>
                    </div>
                </div>

            @empty
                <h3>sorry, there are no comics to show</h3>
            @endforelse

        </div>
    </div>
@endsection
