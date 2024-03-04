@extends('dashboard.layout')

@section('content')
    @if (Auth::user()->role == 'user')
        @foreach ($userpayments as $userpayment)
            @if ($userpayment['status'] == 1)
                <div class="container my-3">
                    <div class="alert alert-warning" role="alert">
                        Tunggu verfikasi dari Admin terlebih dahulu.
                    </div>
                </div>
            @elseif ($userpayment['status'] == 2)
                <div class="container my-3">
                    <div class="alert alert-success" role="alert">
                        Pembayaran anda sudah terverifikasi oleh Admin.
                    </div>
                </div>
            @else
                <div class="mx-5 my-3">
                    <h1>Pembayaran</h1>
                    <p>Silahkan upload bukti bayar Anda di form berikut</p>
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Form Pembayaran</h5>
                            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-4 my-4">
                                        <label for="">Nama Bank</label>
                                        <select name="bank" id="" class="form-select">
                                            <option value="" disabled selected>Pilih bank</option>
                                            <option value="bca">BCA</option>
                                            <option value="bri">BRI</option>
                                            <option value="mandiri">Mandiri</option>
                                            <option value="bjb">BJB</option>
                                            <option value="syariah">Syariah</option>
                                        </select>
                                    </div>
                                    <div class="col-4 my-4">
                                        <label for="">Nama Pemilik Rekening</label>
                                        <input type="text" name="pemilik_rekening" id="" class="form-control">
                                    </div>
                                    <div class="col-4 my-4">
                                        <label for="">Nominal</label>
                                        <input type="text" name="nominal" id="rupiah" class="form-control">
                                    </div>
                                    <div class="col-12 my-4">
                                        <input type="file" name="bukti_foto" id="" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    let rupiah = document.getElementById('rupiah');
                    rupiah.addEventListener('keyup', function(e) {
                        // tambahkan 'Rp.' pada saat form di ketik
                        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                        rupiah.value = formatRupiah(this.value, 'Rp. ');
                    });

                    /* Fungsi formatRupiah */
                    function formatRupiah(angka, prefix) {
                        let number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                        // tambahkan titik jika yang di input sudah menjadi angka ribuan
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                    }
                </script>
            @endif
        @endforeach
    @endif
@endsection
