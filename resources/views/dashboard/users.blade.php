@extends('dashboard.layout')

@section('content')
    @if (Auth::user()->role == 'admin')
        <div class="p-5">
            <table class="table text-center align-center border">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nomor Registrasi</th>
                    <th>Nama</th>
                    <th>Bukti Pendaftaran</th>
                    <th>Detail Pendaftaran</th>
                    <th style="width: 300px">Aksi</th>
                </thead>

                <tr>
                    @foreach ($users as $user)
                <tr>
                    <td></td>
                    <td>{{ $user->payment_id }}</td>
                    <td> {{ $user->name }} </td>
                    <td>
                        <form action="{{ route('lihatData', $user->payment_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn dashboard">
                                Lihat
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('detailData', $user->payment_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn dashboard">
                                Detail
                            </button>
                        </form>
                    </td>
                    <td>
                        @if ($user['status'] == 1)
                            <form action="{{ route('payment.validate', $user->payment_id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <i class="fa-solid fa-check"></i> Verifikasi
                                </button>
                            </form>
                            <form action="{{ route('payment.tolak', $user->payment_id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger my-2">
                                    <i class="fa-solid fa-x"></i> Tolak
                                </button>
                            </form>
                        @elseif ($user['status'] == 2)
                            Sudah diverifikasi
                        @elseif ($user['status'] == 0)
                            Sudah ditolak
                        @endif
                    </td>
                </tr>
    @endforeach
    </table>
    </div>
    @endif
@endsection
