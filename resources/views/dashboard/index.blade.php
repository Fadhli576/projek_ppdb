@extends('dashboard.layout')

@section('content')
    <div class="container my-3">
        @if (Auth::user()->role == 'user')
            <h2>Selamat datang, {{ Auth::user()->name }}!</h2>
            @foreach ($users as $user)
                @if ($user['status'] == 1)
                    <div class="container my-3">
                        <div class="alert alert-warning" role="alert">
                            Tunggu verfikasi dari Admin terlebih dahulu.
                        </div>
                    </div>
                @elseif ($user['status'] == 2)
                    <div class="container my-3">
                        <div class="alert alert-success" role="alert">
                            Pembayaran anda sudah terverifikasi oleh Admin.
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
        @if (Auth::user()->role == 'admin')
            <h2>Selamat datang, Admin!</h2>
            <div class="    ">
                <div class="alert alert-secondary" role="alert">
                    Ada pembayaran yang belum dicek
                </div>
            </div>
        @endif
    </div>
@endsection
