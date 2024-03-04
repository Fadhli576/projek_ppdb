@extends('auth.layout')

@section('content')
    <div class="" style="width: 100%">
        <div class="row">
            <div class="col-6">
                <img src="/assets/img/hero2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-6">
                <div class="container mt-5  p-5">
                    <h1>Login</h1>
                    <p>Masuk ke akun PPDB mu!</p>
                    <form action="{{ route('login.auth') }}" method="POST">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        @csrf
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-12">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            <div class="col-12 mt-4">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="col-12 my-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
