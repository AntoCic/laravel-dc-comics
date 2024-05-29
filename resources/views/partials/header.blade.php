<header>
    <div class="container">
        <div class="row justify-content-between align-items-center py-2">

            <div class="col">
                <img src="{{ Vite::asset('resources/img/logo.png') }}" width="50">
            </div>
            <div class="col-auto">
                <a class="btn btn-outline-primary ms-2" href="{{ route('home') }}">Home</a>
                <a class="btn btn-outline-primary ms-2" href="{{ route('comics.index') }}">comics</a>
                <a class="btn btn-outline-primary ms-2" href="{{ route('comics.create') }}">ADD</a>
            </div>
        </div>
       
    </div>
</header>