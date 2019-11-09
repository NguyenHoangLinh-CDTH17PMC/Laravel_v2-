@section('login')
@extends('home')
<div class="card-body p-4">
    <div class="text-center w-75 m-auto">
        <a href="index.html">
            <span><img src="assets/images/logo-dark.png" alt="" height="26"></span>
        </a>
        <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
    </div>

    <h5 class="auth-title">Sign In</h5>

    <form action="{{route('xu_ly_dang_nhap')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="emailaddress">Email address</label>
            <input class="form-control" type="text" name="ten_dang_nhap" id="emailaddress" required="" placeholder="Enter your email">
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="mat_khau" required="" id="password" placeholder="Enter your password">
        </div>

        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox checkbox-info">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>

        <div class="form-group mb-0 text-center">
            <button class="btn btn-danger btn-block" type="submit"> Log In </button>
        </div>

    </form>

    <div class="text-center">
        <h5 class="mt-3 text-muted">Sign in with</h5>
        <ul class="social-list list-inline mt-3 mb-0">
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
            </li>
        </ul>
    </div>

</div>
@endsection