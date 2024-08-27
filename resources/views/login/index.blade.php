@extends('layouts.login')


@section('container')
    
        <section class="section">
            <div class="container mt-5">
                <div class="row">

                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('LoginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('LoginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Admin</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" name="email" tabindex="1" required autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            {{-- <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div> --}}
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            tabindex="2" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                </form>
                                <a href="/" class=" w-100 btn btn-danger mt-2 text-decoration-none"><i class="fas fa-backward"></i> Back to home</a>
                                <small class="d-block text-center mt-4">Not Registered ? <a href="/register">Register now</a></small>
                            </div>
                        </div>
                        <div class="simple-footer">
                            {{-- Copyright &copy; SuheriCode {{ date('Y') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="page-footer bg-image mt-5" style="background-image: url(../assets/img/world_pattern.svg);">
            <div class="container ">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-3 py-3">
                <h3>Teknik Rekayasa</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

                <div class="social-media-button">
                    <a href="#"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#"><span class="mai-logo-twitter"></span></a>
                    <a href="#"><span class="mai-logo-github"></span></a>
                    <a href="#"><span class="mai-logo-instagram"></span></a>
                    <a href="#"><span class="mai-logo-youtube"></span></a>
                </div>
                </div>
                
                <div class="col-lg-3 py-3">
                <h5>Contact Us</h5>
                <p>46273 Dayeuhluhur. Jatinagara, Ciamis, Jawa Barat</p>
                {{-- <a href="#" class="footer-link">+00 1122 3344 5566</a> --}}
                <a href="#" class="footer-link">halo@teknikrekayasa.com</a>
                </div>
                <div class="col-lg-3 py-3">
                <h5>Newsletter</h5>
                <p>Get updates, news or events on your mail.</p>
                <form action="#">
                    <input type="text" class="form-control" placeholder="Enter your email..">
                    <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
                </form>
                </div>
            </div>

            <p class="text-center" id="copyright">Copyright &copy; 2021. developed by <a href="https://instagram.com/emilmaul_" target="_blank">Emil Maulana</a></p>
            </div>
        </footer>
    
@endsection

    
