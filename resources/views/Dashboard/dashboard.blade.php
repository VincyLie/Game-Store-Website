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
        {{-- @method('POST') --}}
        @if ($errors->any())
            <div class="alert alert-danger" style="height: 45px">
                @foreach ($errors->all() as $message)
                    {{ $message }}
                @endforeach
            </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <h5 class="text-center">Featured Games</h5>
        <div class="container">
            <div class="row">
                @foreach ($featuredGames as $featuredGame)
                    <div class="card m-1 mx-auto" style="width: 14rem; min-height: 26rem; max-height: 30rem;">
                        <a href="/gamedetail/{{ $featuredGame->id }}" class="text-decoration-none text-black">
                            <img src="/assets/{{ $featuredGame->thumbnail }}"
                                    class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> 
                                    {{ $featuredGame->title }}
                                </h5>
                                <p class="card-text" style="max-height: 11rem">
                                    {{\Illuminate\Support\Str::limit($featuredGame->description, 136)}}
                                </p>
                                <h6 class="text-end">{{ $featuredGame->price }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="row mt-4 mb-4 justify-content-center">
        <h5 class="text-center">Hot Games</h5>
        @foreach ($games as $game)
        <a href="/gamedetail/{{ $game->id }}" class="text-decoration-none text-black">
            <div class="d-flex col-md-11 mb-1 mx-auto" style="height: 4rem">
                <div class="d-flex" style="width: 16rem;height: 4rem;">
                    <img src="/assets/{{ $game->thumbnail }}" alt=""
                            style="width: 100%;height:100%">
                </div>
                <div class="container">
                    <h6 class="text-start">
                        {{ $game->title }}
                    </h6>
                    <small>{{ $game->category->name }}</small>
                </div>
                <div class="container">
                    <h6 class="text-end">IDR {{ $game->price }}</h6>
                </div>
            </div>
        </a>
        @endforeach
    </div>

@endsection
