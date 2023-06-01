<header>


    <section class="header_top">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark text-uppercase">
                <div class="container">
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav ms-auto p-0 m-0">

                            <li class="nav-item">
                                <a class="nav-link mx-3" href="#">dc power visa</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown ">
                                    <span type="button" aria-haspopup="true" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown" id="triggerId" aria-expanded="false">additional dc
                                        sites</span>
                                    {{-- <button class="btn btn-secondary ">
                                        Dropdown
                                    </button> --}}
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="#">site 1</a>

                                        <a class="dropdown-item" href="#">site 2</a>
                                    </div>
                            </li>
                    </div>
                    </ul>
                </div>
        </div>
        </nav>

        </div>

    </section>


    <nav class="navbar navbar-expand-md navbar-light bg-light text-uppercase text_bolder  ">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img width="50px" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}" aria-current="page"><span
                                class="{{ Route::currentRouteName() === 'home' ? 'color_blue' : '' }}">home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('admin.comics.index') }}" aria-current="page"><span
                                class="{{ Route::currentRouteName() === 'admin.comics.index' ? 'color_blue' : '' }}">comics</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('admin.comics.create') }}" aria-current="page"><span
                                class="{{ Route::currentRouteName() === 'admin.comics.create' ? 'color_blue' : '' }}">add</span></a>
                    </li>
                    <li class="nav-item dropdown">{{-- dropdown --}}
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex  my-2 my-lg-0">{{-- searchbox --}}
                    <input class="form-control ms-5" type="text" placeholder="">
                    <button class="btn my-2 ms-0 my-sm-0 color_blue text_bolder text-uppercase"
                        type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>




</header>
