
<header>


  {{--   <header>
        <div class="container d-flex justify-content-center align-items-center py-3">
            
            <ul class="d-flex align-items-center text-uppercase list-style-none">
                
                
                
            </ul>
        </div>
    </header> --}}
    
    
  {{--   <nav class="container d-flex justify-content-center align-items-center py-5">
        
        <div class="d-flex">
            <a class=" btn btn-primary mx-2 p-1 {{ Route::currentRouteName() === 'home' ? 'bg-info text-dark' : '' }}" href="{{ route('welcome') }}" aria-current="page"><h6>Home</h6></a>
            <a class=" btn btn-primary mx-2 p-1 {{ Route::currentRouteName() === 'comics' ? 'bg-info text-dark' : '' }}" href="{{ route('admin.comics.index') }}" aria-current="page"><h6>comics</h6></a>
            
            <a href="{{route('admin.comics.create')}}" class=" btn btn-secondary mx-2 p-1"><h6>add</h6></a>    
            
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-md navbar-light bg-light text-uppercase text_bolder">
          <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
            <img width="50px" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'color_blue' : '' }}" href="{{ route('welcome') }}" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'color_blue' : '' }}" href="{{ route('admin.comics.index') }}" aria-current="page">comics</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.comics.create')}}" class="nav-link">add</a>
                    </li>                    
                    <li class="nav-item dropdown">{{-- dropdown --}}
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn my-2 my-sm-0 color_blue text_bolder text-uppercase" type="submit">Search</button>
                </form>
            </div>
      </div>
    </nav>

   
    

</header>