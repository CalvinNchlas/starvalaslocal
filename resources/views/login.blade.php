@extends('cms.layout')

@section('content')
    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="auth-header">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" alt="img" height="60">
                </div>
                <div class="card my-5">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li class="list-unstyled">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between align-items-end mb-4">
                                <h3 class="mb-0"><b>Login</b></h3>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ \App\Models\Admin::first()->email }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" value="password" required>
                            </div>
                            <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" name="remember" value="1">
                                    <label class="form-check-label text-muted" for="customCheckc1">Keep me signed in</label>
                                </div>
                                {{-- <a href="{{ route('password.request') }}" class="text-secondary f-w-400">Forgot Password?</a> --}}
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary py-2">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="auth-footer row">
                    <!-- <div class=""> -->
                    <div class="col my-1">
                        <p class="m-0">Copyright © <a href="#">Monarch Inti Teknologi</a> 2025. All rights reserved.</p>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
