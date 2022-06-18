@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row justify-content-center text-start">
        <div class="col col-md-11">
          <h6 class="">Your Cart</h6>           
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
                <button type="button" class="btn btn-danger">
                    Remove
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
                <button type="button" class="btn btn-danger">
                    Remove
                </button>
              </div>
          </div> 

          {{-- Total Harga  --}}
          <div class="d-flex bg-primary mb-1" style="height: 5rem">      
              <div class="container mt-1">
                <h6 class="text-start">Total</h6>
                <small>2 game(s)</small>
              </div>
              <div class="container text-end mt-4">
                <h6 class="">IDR 159.000</h6>
              </div>
          </div> 

          {{-- Button Checkout --}}
          <div class="text-end">
            <button type="button" class="btn btn-dark">
              Checkout
            </button>
          </div>   
        </div>   
        
    </div>
      
@endsection