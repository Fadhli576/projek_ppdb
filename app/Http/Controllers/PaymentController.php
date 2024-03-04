<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //admin
        $users = User::where('payment_id', '>', '0' )->get();

        return view('dashboard.users', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //student
        $userpayments = User::where('id', '=', Auth::user()->id)->get();
        return view('dashboard.payment', compact('userpayments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //student
         $request->validate([
            'bank'=>'required',
            'pemilik_rekening'=>'required',
            'nominal'=>'required',
            'bukti_foto'=>'required'
        ]);

        $image = $request->file('bukti_foto');

        $imgName = time().rand().'.'.$image->extension();

        if (!file_exists(public_path('/assets/img/pembayaran/'.$image->getClientOriginalName()))) {
            $destinationPath = public_path('/assets/img/pembayaran/');

            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        } else {
            $uploaded = $image->getClientOriginalName();
        }
        
        $payment = Payment::create([
            'bank'=>$request->bank, 
            'pemilik_rekening'=>$request->pemilik_rekening,
            'nominal'=>$request->nominal,
            'bukti_foto'=>$uploaded,
            'user_id'=>Auth::user()->id,
            'status'=>1,
        ]);

        User::where('id','=', Auth::user()->id)->update([
            'payment_id' => $payment->id,
            'status'=> $payment->status
        ]);


        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function tolak($id)
    {

        Payment::where('id', '=', $id)->update([
            'status'=>0
        ]);

        User::where('payment_id', '=', $id)->update([
            'status' =>0
        ]);

        return redirect()->back();
    }

    public function validasi($id)
    {
        Payment::where('id', '=', $id)->update([
            'status'=>2
        ]);

        User::where('payment_id', '=', $id)->update([
            'status' =>2
        ]);

        return redirect()->back();
    }

    public function lihatData($id)
    {
        $datas = User::where('payment_id', '=', $id)->get();
 
        return view('dashboard.user', compact('datas'));
    }

    public function detailData($id)
    {
        $datas = Payment::where('id', '=', $id)->get();

        return view('dashboard.detail', compact('datas'));
    }

    public function dashboardIndex()
    {
        //student
        $users = User::where('id', '=', Auth::user()->id)->get();
        
        return view('dashboard.index', compact('users'));
    }

}
