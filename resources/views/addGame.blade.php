@extends('Dashboard.main')
@section('container')
<div class="row justify-content-center">
  <div class="column">
    <h6 class="text-center">Add Game</h6>
      <div class="card mx-auto mb-xl-5 mt-xl-5" style="width:30rem;height:29rem;">
          <div class="card-body">
              <form action="/game/add-game" method="post" enctype="multipart/form-data">
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
                      <div class="col mx-0 mt-1 mb-2">
                          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" autofocus required value="{{ old('title') }}">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-1 mb-2">
                            <select class="form-control" id="category"name="category">
                                <option hidden>Select Category...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="container bg-light mt-1 text-center" style="width: 5rem; height: 38px">
                            <small class="text-center">IDR</small>
                      </div>
                      <div class="col mx-0 mt-1 mb-2">
                          <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" autofocus required value="{{ old('price') }}">
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-2">
                          <small>Thumbnail</small>
                          <input type="file" name="thumbnail" class="form-control" id="thumbnail" placeholder="thumbnail" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-3">
                          <small>Slider</small>
                          <input multiple type="file" name="slides[]" class="form-control" placeholder="slides" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-2">
                          <textarea required="required" id="description" name="description" rows="3" cols="58" style="text-transform: uppercase"></textarea>
                      </div>
                  </div>
                  <div class=" d-flex justify-content-lg-start">
                    <button type="submit" class="btn btn-dark">
                        Add Game
                    </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection