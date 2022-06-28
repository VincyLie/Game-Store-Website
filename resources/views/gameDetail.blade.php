@extends('Dashboard.main')
@include('Navbar.navbar')
<div class="bg-light d-flex align-items-center container-fluid flex-column">
    <div class="container-fluid d-flex justify-content-center">
        <div class="row" style="margin-top: 20px">
            <div class="col-4">
                <div class="card bg-white p-0 rounded h-100">
                    <img src="/assets/{{ $game->thumbnail }}" alt="" class="img-fluid rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->title }}</h2>
                            <p class="card-text">{{ $game->description }}</p>
                            <h6 class="card-title">IDR {{ $game->price }}</h3>
                            <a href="" class="btn btn-dark">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-8 bg-white rounded border">
                <div class="card"> 
                     <div class="carousel slide" id="carouselGame" data-bs-ride="carousel">
                        <div class="carousel-inner"> 
                            {{-- logic buat print semua slide --}}
                            @foreach ($slides as $slide)
                                <div class="carousel-item active">
                                    <img src="/assets/{{ $slide->name }}" class="w-100" alt="..." style="height: 500px;width: 300px;">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGame"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselGame"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <h6>More Like This</h6>
    @foreach ($relatedGames as $relatedGame)
        <div class="d-flex flex-column align-items-center w-100" style="height: 10rem">
            <img src="/assets/{{ $relatedGame->thumbnail }}" alt="" class="h-100">
            <h6>IDR {{ $relatedGame->price }}</h6>
        </div>
    @endforeach
    <div href="" class="bg-white container-fluid d-flex flex-column gap-2 rounded" style="margin: 30px 0; padding: 10px"> 
    <form action="/add/review/{{ $game->id }}/{{ $name }}" method="post" enctype="multipart/form-data">   
        @csrf
            <h6>Leave a review!</h6>
            <div class="d-flex gap-1">
                <input type="checkbox" id="recommended" value="Recommended" name="recommended">
                <label for="recommended">Recommended</label><br>
                <input type="checkbox" id="recommended" value="Not Recommended" name="recommended">
                <label for="not-recommended">Not Recommended</label><br>
            </div>
            <input type="text" name="description" id="description" class="w-100" style="height:10rem">
            <button type="submit" class="btn btn-dark w-25">Submit</button>
    </form>
    </div>
    <div class="container-fluid" style="margin-bottom:30px">
        <div class="row">
            @foreach ($reviews as $review)
                <div class="col bg-white border p-2">
                        <h6>{{ $review->username }}</h6>
                        {{ $review->recommended }}
                        {{-- @if($review->recommended=='1')
                            <p>recommended</p>
                        @else
                            <p>not recommended</p>
                        @endif --}}
                        <p>{{ $review->description }}</p>
                </div>
            @endforeach       
        </div>
    </div>
</div>
