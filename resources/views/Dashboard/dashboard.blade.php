@include('navbar')
@extends('main')~
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
            <h5 class="text-center">Featured Games</h5>
            <div class="card m-1" style="width: 14rem;height: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-1" style="width: 14rem;height: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-1" style="width: 14rem;height: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-1" style="width: 14rem;height: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-1" style="width: 14rem;height: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4 justify-content-center">
          <h5 class="text-center">Hot Games</h5>
          <div class="d-flex col-md-11 mb-1" style="height: 4rem">
              <div class="d-flex" style="width: 16rem;height: 4rem;">
                <img src="FreeFire.jpg" alt="" style="width: 100%;height:100%">
              </div>    
              <div class="container">
                <h6 class="text-start">Free Fire</h6>
                <small>Fighting</small>
              </div>
              <div class="container">
                <h6 class="text-end">IDR 159.000</h6>
              </div>
          </div>            
          <div class="d-flex col-md-11 mb-1" style="height: 4rem">
            <div class="d-flex" style="width: 16rem;height: 4rem;">
              <img src="Street.png" alt="" style="width: 100%;height:100%">
            </div>       
              <div class="container">
                <h6 class="text-start">Street Fighter V</h6>
                <small>Fighting</small>
              </div>
              <div class="container">
                <h6 class="text-end">IDR 159.000</h6>
              </div>
          </div>            
          <div class="d-flex col-md-11 mb-1" style="height: 4rem">
            <div class="d-flex" style="width: 16rem;height: 4rem;">
              <img src="Cyberpunk.jpg" alt="" style="width: 100%;height:100%">
            </div>       
              <div class="container">
                <h6 class="text-start">Cyberpunk 2077</h6>
                <small>Shooter</small>
              </div>
              <div class="container">
                <h6 class="text-end">IDR 699.000</h6>
              </div>
          </div>            
        </div>
      
@endsection