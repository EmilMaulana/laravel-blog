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
                                <h4>Register A New Member</h4>
                            </div>

                            <div class="card-body">
                                <form action="/register" method="POST">
                                    @csrf
                                    <div class="form-floating mb-2">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                        @error('name')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-floating mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                                        @error('email')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control  rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                        @error('password')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                                </form>
                                <a href="/" class=" w-100 btn btn-danger mt-2 text-decoration-none"><i class="fas fa-backward"></i> Back to home</a>
                                <small class="d-block text-center mt-4">Already Registered ? <a href="/login">Login</a></small>
                            </div>
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

{{-- <form action="/register" method="POST">
                @csrf
                <div class="form-floating ">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                    
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control  rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form> --}}