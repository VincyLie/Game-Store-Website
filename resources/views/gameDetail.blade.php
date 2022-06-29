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
                            <div class="carousel-item active">
                                <img src="/assets/{{ $slides[0]->name }}" class="w-100" alt="..."
                                    style="height: 500px;width: 300px;">
                            </div>
                            @for ($i = 1; $i < count($slides); $i++)
                                <div class="carousel-item">
                                    <img src="/assets/{{ $slides[$i]->name }}" class="w-100" alt="..."
                                        style="height: 500px;width: 300px;">
                                </div>
                            @endfor
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
    <div class="d-flex flex-row justify-content-lg-start" style="">
        <div class="d-flex flex-column mx-5 my-3" style="width:300px;">
            <p>Genre</p>
            <h6>{{ $category->name }}</h6>
        </div>
        <div class="d-flex flex-column mx-5 my-3" style="width:300px;">
            <p>Release Date</p>
            <h6>{{ $release_date }}</h6>
        </div>
        <div class="d-flex flex-column mx-5 my-3" style="width:300px;">
            <p>All Reviews</p>
            @if ($recommended!=0)
                <h6>{{ $recommended }} Recommended</h6>
            @endif
            @if ($not_recommended!=0)
                <h6>{{ $not_recommended }} Not Recommended</h6>
            @endif
        </div>
    </div>
    <h6>More Like This</h6>
    <div class="d-flex flex-row">
        @foreach ($relatedGames as $relatedGame)
            @if($relatedGame->id!=$game->id)
            <div class="d-flex flex-column align-items-center w-100 m-3" style="height: 10rem">
                <img src="/assets/{{ $relatedGame->thumbnail }}" alt="" style="width:200px; height:150px;">
                <h6>IDR {{ $relatedGame->price }}</h6>
            </div>
            @endif
        @endforeach
    </div>
    <div href="" class="bg-white container-fluid d-flex flex-column gap-2 rounded"
        style="margin: 30px 0; padding: 10px">
        <form action="/add/review/{{ $game->id }}/{{ $name }}" method="post" enctype="multipart/form-data">
            @csrf
            <h6>Leave a review!</h6>
            @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="d-flex gap-1">
                <input type="radio" id="recommended" value="Recommended" name="recommended">
                Recommended<br>
                <input type="radio" id="recommended" value="Not Recommended" name="recommended">
                Not Recommended<br>
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
                    <p>{{ $review->recommended }}</p>
                    <p>{{ $review->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
