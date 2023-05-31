
<header>


  {{--   <header>
        <div class="container d-flex justify-content-center align-items-center py-3">
            
            <ul class="d-flex align-items-center text-uppercase list-style-none">
                
                
                
            </ul>
        </div>
    </header> --}}
    
    
    <nav class="container d-flex justify-content-center align-items-center py-5">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <div class="d-flex">
            <a class=" btn btn-primary mx-2 p-1 {{ Route::currentRouteName() === 'home' ? 'bg-info text-dark' : '' }}" href="{{ route('welcome') }}" aria-current="page"><h6>Home</h6></a>
            <a class=" btn btn-primary mx-2 p-1 {{ Route::currentRouteName() === 'comics' ? 'bg-info text-dark' : '' }}" href="{{ route('admin.comics.index') }}" aria-current="page"><h6>comics</h6></a>
            
            <a href="{{route('admin.comics.create')}}" class=" btn btn-secondary mx-2 p-1"><h6>add</h6></a>    
            
        </div>
    </nav>

</header>