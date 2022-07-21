@extends('Dashboard.main')
@section('container')
<div class="row justify-content-center">
  <div class="column">
      <div class="card mx-auto mb-xl-5 mt-xl-5" style="width:20rem;height:35rem;">
          <div class="card-body">
              <form action="/register" method="post">
                  @csrf
                  <div class="row">
                      <div class="col mx-0 mt-1 mb-3">
                          <h6>Name</h6>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                      
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-3">
                          <h6>Email</h6>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-3">
                          <h6>Password</h6>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col mx-0 mt-0 mb-3">
                          <h6>Confirm Password</h6>
                          <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Password" required>
                      </div>
                  </div>
                        @method('POST')
                            @if ($errors->any())
                                <div class="alert alert-danger" style="height: 65px;margin-bottom:10px;">
                                    @foreach ($errors->all() as $message)
                                        {{ $message }}
                                    @endforeach
                                </div>
                            @endif
                    <div class=" d-flex justify-content-center mb-3">
                        <button class="btn btn-lg btn-dark mt-5" type="submit" style="width: 7rem; height:2.5rem;">
                            <h6>Register</h6>
                        </button>
                    </div>
                    <small class="d-block text-center mt-4 text-decoration-none">
                        <a href="/login">Already Registered?</a>
                    </small>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection