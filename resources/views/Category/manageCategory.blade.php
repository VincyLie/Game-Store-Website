@include('Navbar.navbar')
@extends('Dashboard.main')
@section('container')
    <div class="row justify-content-center text-start">
        <div class="container text-center m-3">
            <a href="/category/create" class="btn btn-dark text-center">Add Category</a>
        </div>  
        <div class="col col-md-11">        
          {{-- Card Cart --}}
          @foreach ($categories as $category)
          <div class="d-flex mb-1" style="height: 4rem">       
              <div class="container mt-4">
                <h6 class="text-start">{{ $category->name }}</h6>
              </div>
              
              <div class="container text-end mt-3">
                    <a href="/category/view-update/{{ $category->id }}" class="btn btn-dark">UPDATE</a>
              
                <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger">DELETE</a>
              </div>
          </div>            
          @endforeach
        </div>   
    </div>
@endsection