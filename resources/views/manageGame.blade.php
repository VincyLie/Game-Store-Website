@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row justify-content-center text-start">
        <div class="container text-center m-3">
            <a href="/game/view-add-game" class="btn btn-dark text-center">Add New Game</a>
        </div>
        <div class="col col-md-11">
            {{-- Card Cart --}}
            @foreach ($games as $game)
                <div class="d-flex mb-1" style="height: 5rem">
                    <div class="d-flex" style="width: 16rem;height: 5rem;">
                        <a href="/gamedetail/{{ $game->id }}"><img src="/assets/{{ $game->thumbnail }}" alt=""
                                style="width: 100%;height:100%"></a>
                    </div>
                    <div class="container mt-1">
                        <h6 class="text-start"><a href="/gamedetail/{{ $game->id }}"
                                class="text-decoration-none text-black">{{ $game->title }}</a></h6>
                        @foreach ($categories as $category)
                            @if ($category->id == $game->category_id)
                                <small>{{ $category->name }}</small>
                            @endif
                        @endforeach
                    </div>
                    <div class="container text-end mt-1">
                        <h6 class="">{{ $game->price }}</h6>
                        <a href="/game/view-update-game/{{ $game->id }}" class="btn btn-dark">Update</a>
                        <a href="/game/delete-game/{{ $game->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            @endforeach
            {{-- Untuk Pagination --}}
            <div class="column d-flex justify-content-end">
                <div class="mx-4">
                    {{ $games->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
