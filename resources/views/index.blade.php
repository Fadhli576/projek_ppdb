@extends('layout')

@section('container')
    <div class="container">
        <div class="row">
            <div class="" style="margin-top: 200px;"></div>
            <h1 class="col-12" style="color:aliceblue">PPDB TP 2023-2024</h1>
            <h1 class="col-12" style="color:aliceblue">SMK Wikrama Bogor</h1>
            <h4 class="col-12" style="color:aliceblue">Segeralah daftar ke SMK Wikrama Bogor!</h4>
            <a href="/register" class="col-12 btn btn-primary mt-4" style="width:250px">Daftar Sekarang</a>
        </div>
        <div class="" style="margin-top: 250px"></div>
        <div class="row text-center px-5 justify-content-between" id="perkenalan">
            <div class="col-md-3 col-sm-12 card p-5 shadow">
                <h4>Motto</h4>
                <div class="row">
                    <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 card p-5 shadow">
                <h4>Afirmasi</h4>
                <div class="row">
                    <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 card p-5 shadow">
                <h4>Attitude</h4>
                <div class="row">
                    <p>Aku ada lingkunganku
                        bahagia</p>
                </div>
            </div>
        </div>
        <section id="jurusan" style="margin-top: 200px">
            <h1>Jurusan</h1>
            <div class="swiper" style="user-select: none">
                <div class="swiper-wrapper">
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/PPLG.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Pengembangan Perangkat Lunak dan Gim</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database
                                        Administration.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/TJKT.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Teknik Jaringan Komputer dan Telekomunikasi</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi
                                        internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik
                                        Certified Network Associate).</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/DKV.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Desain Komunikasi Visual</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production
                                        house, radio & televisi, studio foto, percetakan grafis, corporate brand identity,
                                        penerbit majalan/Koran, dll.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/PMN.jpg" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Pemasaran</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi yang mirip dengan
                                        program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat
                                        foto produk, desain, copy writing, dll.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/MPLB.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Manajemen Perkantoran Lembaga Bisnis</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran/Administrasi Perkantoran
                                        memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba
                                        keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I
                                        lomba olimpiade sekretaris tingkat nasional tahun 2017</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/TBG.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Tata Boga</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga seperti restoran,
                                        hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 swiper-slide">
                        <div class="">
                            <div class="card shadow my-4 my-sm-4 my-md-0">
                                <img src="assets/img/jurusan/HTL.JPG" alt="">
                                <div class="card-body">

                                    <h5 class="card-title">Perhotelan</h5>
                                    <strong>Keunggulan</strong>
                                    <p>Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan
                                        kompetensi yang mereka pelajari.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
        </section>
        <section id="about" class="about">
            <div class="card container p-5 shadow" style="margin-top: 200px">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img/geudngg.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>SMK Wikrama Dipilih Menjadi SMK Pusat Keunggulan 2021
                        </h3>
                        <p>1) SMK WIKRAMA merupakan sekolah dengan penyalur tenaga kerja terbanyak di Indonesia tahun 2021
                            dan peringkat ke -1. <br>
                            2) Jumlah Mitra Industri yang dimiliki SMK WIKRAMA lebih dari 400 DUDI <br>
                            3) Memiliki tenaga pengajar/guru – guru professional dan tersertfikasi sesuai dengan kompetensi
                            yang dimiliki. <br>
                            4) Dan fasilitas yang dimiliki SMK WIKRAMA baik Gedung, kelas teori, laboratorium praktik yang
                            digunakan standar industry dan lengkap.</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <div class="" style="margin-top: 200px"></div>
        <h1>Testimoni</h1>
        <div class="row testimoni">
            <div class="col-4">
                <div class="card shadow p-3">
                    <h4 class="card-title text-center">2000</h4>
                    <h3 class="card-title text-center">Akhmad Munito</h3>
                    <p>Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul
                        karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3">
                    <h4 class="card-title text-center">2016</h4>
                    <h3 class="card-title text-center">Kamaludin</h3>
                    <p>Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow p-3">
                    <h4 class="card-title text-center">2011</h4>
                    <h3 class="card-title text-center">Lutfi Hakim</h3>
                    <p>TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa
                        yang dibutuhkan di dunia kerja pada umumnya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5" style="background-color: #243763; color:aliceblue">
        <div class="container p-md-5 p-sm-2">
            <h1 class="te   xt-center my-3">Hubungi Kami</h1>
            <div class="row p-md-5 p-sm-2 my-5">
                <div class="col-md-4 col-sm-12">
                    <h4>Kontak Pendaftaran</h4>
                    <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
                    <p>prohumasi@smkwikrama.net</p>
                    <h5>CS 1 : hubungi kami (klik disini)</h5>
                    <h5>CS 2 : hubungi kami (klik disini)</h5>
                    <button class="btn btn-primary my-4">Daftar Sekarang</button>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <input type="text" name="" id="" class="form-control"
                                placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-6">
                            <input type="text" name="" id="" class="form-control" placeholder="No Telp">
                        </div>
                        <div class="col-6">
                            <input type="text" name="" id="" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 pb-4">
                            <textarea class="form-control" aria-label="With textarea" placeholder="Pesan" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary">Kirim Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
