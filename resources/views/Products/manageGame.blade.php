@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row justify-content-center text-start">
        <div class="container text-center m-3">
            <button type="button" class="btn btn-dark text-center">
                Add New Game
            </button>
        </div>  
        <div class="col col-md-11">        
          {{-- Card Cart --}}
          <div class="d-flex bg-primary mb-1" style="height: 5rem">
            <div class="d-flex" style="width: 16rem;height: 5rem;">
              <img src="Street.png" alt="" style="width: 100%;height:100%">
            </div>       
              <div class="container mt-1">
                <h6 class="text-start">Street Fighter V</h6>
                <small>Fighting</small>
              </div>
              <div class="container text-end mt-1">
                <h6 class="">IDR 159.000</h6>
                <button type="button" class="btn btn-dark">
                    Update
                </button>
                <button type="button" class="btn btn-danger">
                    Delete
                </button>
              </div>
          </div>            
          <div class="d-flex bg-primary mb-1" style="height: 5rem">
            <div class="d-flex" style="width: 16rem;height: 5rem;">
              <img src="Street.png" alt="" style="width: 100%;height:100%">
            </div>       
              <div class="container mt-1">
                <h6 class="text-start">Street Fighter V</h6>
                <small>Fighting</small>
              </div>
              <div class="container text-end mt-1">
                <h6 class="">IDR 159.000</h6>
                <button type="button" class="btn btn-dark">
                    Update
                </button>
                <button type="button" class="btn btn-danger">
                    Delete
                </button>
              </div>
          </div> 
          {{-- Untuk Pagination --}}
          {{-- <div class="text-end">
            <button type="button" class="btn btn-dark">
              Checkout
            </button>
          </div>    --}}
        </div>   
        
    </div>
      
@endsection