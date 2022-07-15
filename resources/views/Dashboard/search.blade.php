@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row mt-4 mb-4 justify-content-center">
        <div class="col-md-10">
            <form action=/dashboard/search class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="title">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($games as $game)
            <div class="card m-1 mx-auto" style="width: 14rem; min-height: 26rem; max-height: 30rem;">
                <a href="/gamedetail/{{ $game->id }}" class="text-decoration-none text-black">
                    <img src="/assets/{{ $game->thumbnail }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $game->title }}
                        </h5>
                        <p class="card-text" style="max-height: 11rem">
                            {{ \Illuminate\Support\Str::limit($game->description, 136) }}
                        </p>
                        <h6 class="text-end">{{ $game->price }}</h6>
                    </div>
                </a>
            </div>
        @endforeach
        <div class="column d-flex justify-content-end">
            <div class="mx-4">
                {{ $games->links() }}
            </div>
        </div>
    </div>
@endsection
