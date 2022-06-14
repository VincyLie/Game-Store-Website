@extends('main')
@section('container')
<div class="row justify-content-center">
  <div class="column" style="height: 40rem">
      <div class="card mx-auto mb-xl-5 mt-xl-5" style="width:30rem;height:10rem;">
            <h6 class="text-center">Add Category</h6>
            <div class="card-body">
              <form action="/login" method="post">
                  @csrf
                  <div class="row">
                      <div class="col mx-0 mt-1 mb-3">
                          <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="Category" autofocus required value="{{ old('category') }}">
                      </div>
                  </div>
                  <div class=" d-flex justify-content-lg-start">
                    <button type="button" class="btn btn-dark">
                        Add Category
                    </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection