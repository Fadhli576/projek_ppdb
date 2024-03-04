@extends('auth.layout')

@section('content')
    <div class="container d-flex justify-content-center p-5" style="border-radius: 5px">
        <div class="card p-5" style="width: 500px">
            <form action="/register" method="POST">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <h2 class="text-center">Form Registration</h2>
                <p class="text-center">SMK Wikrama Bogor TP. 2023-2024</p>
                <div class="row">
                    <div class="col-6">
                        <label for="">NISN</label>
                        <input type="number" name="nisn" class="form-control" placeholder="NISN" required>
                    </div>
                    <div class="col-6">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-select" required>
                            <option value="Jenis Kelamin">Jenis Kelamin</option>
                            <option value="perempuan">Perempuan</option>
                            <option value="laki-laki">Laki-laki</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="col-12 my-3">
                        <label for="">Asal Sekolah</label>
                        <select name="asal_sekolah" id="" class="select2 form-select"
                            onchange='checkvalue(this.value)' required>
                            <option value="">Asal Sekolah</option>
                            @foreach ($datas as $data)
                                <option value="{{ $data }}">{{ $data }}</option>
                            @endforeach
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3" id="lainnya"></div>
                    <div class="col-12">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12 my-3">
                        <label for="">Nomor Handphone</label>
                        <input type="number" name="no_hp" class="form-control" placeholder="Nomor Handphone" required>
                    </div>
                    <div class="col-6">
                        <label for="">Nomor HP Ibu</label>
                        <input type="number" name="no_hp_ibu" class="form-control" placeholder="Nomor HP Ibu" required>
                    </div>
                    <div class="col-6">
                        <label for="">Nomor HP Ayah</label>
                        <input type="number" name="no_hp_ayah" class="form-control" placeholder="Nomor HP Ayah" required>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="">Pilih Referensi</label>
                        <select name="referensi" id="" class="form-select" onchange="checkvalue(this.value)">
                            <option value="pegawai">Guru/Staf/Laboran/Pegawai Wikrama</option>
                            <option value="siswa">Siswa SMK Wikrama</option>
                            <option value="alumni">Alumni SMK Wikrama</option>
                            <option value="guru_smp">Guru SMP</option>
                            <option value="calon_siswa">Calon Siswa SMK Wikrama</option>
                            <option value="sosial_media">Sosial Media</option>
                            <option value="referensi_langsung">Referensi Langsung</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @include('footer')
@endsection
