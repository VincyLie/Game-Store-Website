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
                <img src="/assets/{{ $game->thumbnail }}" alt="" style="width: 100%;height:100%">
              </div>       
                <div class="container mt-1">
                  <h6 class="text-start">{{ $game->title }}</h6>
                    @foreach ($categories as $category)
                      @if($category->id == $game->category_id)
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
          {{-- <div class="text-end">
            <button type="button" class="btn btn-dark">
              Checkout
            </button>
          </div>    --}}
        </div>   
    </div>
@endsection