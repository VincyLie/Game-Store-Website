@extends('Dashboard.main')
@section('container')
<div class="row justify-content-center">
  <div class="column" style="height: 40rem">
      <div class="card mx-auto mb-xl-5 mt-xl-5" style="width:30rem;height:10rem;">
            <h6 class="text-center">Update Category</h6>
            <div class="card-body">
              <form action="/category/update/{{ $id }}" method="post">
                  @csrf
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
                  <div class="row">
                      <div class="col mx-0 mt-1 mb-3">
                          <input type="text" name="name" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="Category" autofocus required value="{{ old('category') }}">
                      </div>
                  </div>
                  <div class=" d-flex justify-content-lg-start">
                    <button type="submit" class="btn btn-dark">
                        Update Category
                    </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection