<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RILL WEBSITE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        @if ($errors->has('login_error'))
                        <div class="alert alert-danger">
                            {{ $errors->first('login_error')}}
                        </div>
                        @endif
                        <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                            <a href="index.html" class="">

                            </a>
                            <h3>Masuk</h3>
                            <a href="/" class="">
                                <i class="fa fa-home" style="font-size: 30px;"></i>
                            </a>

                        </div>
                        <form action="{{route('siswa.submit')}}" method="post">
                            @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nisn" id="floatingInput" placeholder="nisn" value="{{old('nisn')}}">
                            <label for="floatingInput">nisn</label>
                            <div class="text-danger">
                                @error('nisn')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="Password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <div class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>