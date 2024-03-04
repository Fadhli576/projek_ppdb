@extends('dashboard.layout')

@section('content')
    @foreach ($datas as $data)
        <div class="container m-2">
            <div class="card row p-4 m-5 shadow">
                <div class="col-12"><strong>NISN : </strong>{{ $data->nisn }}</div>
                <div class="col-12"><strong>Nama Siswa : </strong>{{ $data->name }}</div>
                <div class="col-12"><strong>Sekolah : </strong>{{ $data->asal_sekolah }}</div>
                <div class="col-12"><strong>Email : </strong>{{ $data->email }}</div>
                <div class="col-12"><strong>No HP : </strong>{{ $data->no_hp }}</div>
                <div class="col-12"><strong>No Ayah : </strong>{{ $data->no_hp_ayah }}</div>
                <div class="col-12"><strong>No Ibu : </strong>{{ $data->no_hp_ibu }}</div>
                <div class="col-12"><a href="/dashboard/pembayarann" class="btn btn-primary mt-3"><i class="fa-solid fa-arrow-left"></i> Back</a></div>
            </div>
        </div>
    @endforeach
@endsection
