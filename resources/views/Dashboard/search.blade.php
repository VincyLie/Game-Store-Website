@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
<div class="row mt-4 mb-4 justify-content-center">
    <div class="col-md-10">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
    </div>
</div>
<div class="row justify-content-center">
    @foreach($games as $game)
    <div class="col-md-2 m-1 mb-2">
        <div class="card" style="width:12.5rem;">
            <img src="/assets/{{ $game->thumbnail }}" class="card-img-top" alt="...">
            <div class="card-body p-0">
              <h6 class="card-title m-0">{{ $game->title }}</h6>
              <div class="card-text text-small">{{ $game->description }}</div>
              <h6 class="text-end">{{ $game->price }}</h6>
            </div>
        </div>
    </div>
    @endforeach
    <div class="column d-flex justify-content-end">
        <div class="mx-4">
            {{$games->links()}}
        </div>
    </div>
</div>
@endsection