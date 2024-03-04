<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class RegisterController extends Controller
{
    public function index()
    {
        // $response = Http::get('https://akmalweb.my.id/api/daftar_smp.php');
        $datas = ['SMP Negeri 1 Ciawi', 'SMP Negeri 2 Ciawi', 'SMP Negeri 3 Ciawi'];
        return view('auth.register', compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
            'referensi' => 'required'
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'referensi' => $request->referensi,
            'password' => Hash::make($request->nisn),
            'role'=>'user',
        ]);
        return view('pdf', compact('users'));
    }

}
