@extends('dashboard.layout')

@section('content')
    @foreach ($datas as $data)
        <div class="container m-2">
            <div class="card row p-4 m-5 shadow">
                <div class="col-12"> : <img src="{{ asset('/assets/img/pembayaran/' . $data['bukti_foto']) }}"
                    class="img-fluid m-auto"></div>
                <div class="col-12"><strong>Bank : </strong>{{ $data->bank }}</div>
                <div class="col-12"><strong>Pemilik rekening : </strong>{{ $data->pemilik_rekening }}</div>
                <div class="col-12"><strong>Nominal : </strong>{{ $data->nominal }}</div>
                <div class="col-12"><a href="/dashboard/pembayarann" class="btn btn-primary mt-3"><i
                            class="fa-solid fa-arrow-left"></i> Back</a></div>
            </div>
        </div>
    @endforeach
@endsection
