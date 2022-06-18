@include('navbar')
@extends('main')
@section('container')
    <div class="row justify-content-center text-start">
        <div class="container text-center m-3">
            {{-- <button type="button" class="btn btn-dark text-center">
                Add Category
            </button> --}}
            <a href="{{ route('category.store',) }}" class="btn btn-dark text-center">Add Category</a>
        </div>  
        <div class="col col-md-11">        
          {{-- Card Cart --}}
          @foreach ($categories as $category)
          <div class="d-flex bg-primary mb-1" style="height: 4rem">       
              <div class="container mt-4">
                <h6 class="text-start">$category->name</h6>
              </div>
              
              <div class="container text-end mt-3">
                {{-- <button type="button" class="btn btn-dark"> --}}
                    <a href="{{ route('category.update',$category->id) }}" class="btn btn-dark">UPDATE</a>
                    {{-- Update
                </button> --}}
                <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger">DELETE</a>
                {{-- <button type="button" class="btn btn-danger">
                    Delete
                </button> --}}
              </div>
          </div>            
          @endforeach
          {{-- <div class="d-flex bg-primary mb-1" style="height: 4rem">       
              <div class="container mt-4">
                <h6 class="text-start">Street Fighter V</h6>
              </div>
              <div class="container text-end mt-3">
                <button type="button" class="btn btn-dark">
                    Update
                </button>
                <button type="button" class="btn btn-danger">
                    Delete
                </button>
              </div>
          </div>             --}}
          {{-- <div class="d-flex bg-primary mb-1" style="height: 4rem">       
              <div class="container mt-4">
                <h6 class="text-start">Street Fighter V</h6>
              </div>
              <div class="container text-end mt-3">
                <button type="button" class="btn btn-dark">
                    Update
                </button>
                <button type="button" class="btn btn-danger">
                    Delete
                </button>
              </div>
         </div>             --}}
        </div>   
    </div>
@endsection