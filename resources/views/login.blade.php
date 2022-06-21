<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </head>
    <body>    
        <div class="row justify-content-center">
            <div class="column">
                <div class="card mx-auto mb-xl-5 mt-xl-5" style="width:20rem;height:27rem;">
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <div class="row">
                                <div class="col mx-0 mt-1 mb-3">
                                    <h6>Email</h6>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mx-0 mt-2 mb-4">
                                    <h6>Password</h6>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                            </div>
                            @method('POST')
                            @if ($errors->any())
                                <div class="alert alert-danger" style="height: 45px">
                                    @foreach ($errors->all() as $message)
                                        {{ $message }}
                                    @endforeach
                                </div>
                            @endif
                            <div class=" d-flex justify-content-center mb-3 mt-5">
                                <button class="btn btn-lg btn-dark" type="submit" style="width: 7rem; height:2.5rem;">
                                    <h6>Login</h6>
                                </button>
                            </div>
                            
                            <div>
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <small class="d-block text-center mt-3">
                                Don't have any account? <a href="/register">Register Now!</a>
                            </small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

