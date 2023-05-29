
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
            <a class="mx-4 nav-item nav-link badge text-bg-secondary {{ Route::currentRouteName() === 'home' ? 'bg-info text-dark' : '' }}" href="{{ route('home') }}" aria-current="page"><h5>Home</h5></a>
            <a class="mx-4 nav-item nav-link badge text-bg-secondary {{ Route::currentRouteName() === 'comics' ? 'bg-info text-dark' : '' }}" href="{{ route('comics') }}" aria-current="page"><h5>comics</h5></a>
                
            
        </div>
    </nav>

</header>