<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.pesanan.index', [
            'title' => 'Pesan Tiket',
            'wisatas' => Wisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cek = Ticket::latest()->where('wisata_id', $id)->get();
        // ddd(count($cek));
        if (count($cek)) {
            return view('back_end.pesanan.form', [
            'title' => 'Form Tiket',
            'wisata' => Wisata::where('id', $id)->first(),
            'tiket' => $cek[0]->no_ticket
            ]);
        } else {
            $tiket = '0001';
            
            return view('back_end.pesanan.form', [
                'title' => 'Form Tiket',
                'wisata' => Wisata::where('id', $id)->first(),
                'tiket' => $tiket
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'wisata_id' => 'required',
            'nama_pemesan' => 'required',
            'jumlah_tiket' => 'required',
            'total_harga' => 'required',
            'no_ticket' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['status'] = 'belum';
        Ticket::create($validatedData);
        return redirect('/ticket')->with('success', 'Pengaduan Berhasil Di ajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'bukti_pembayaran' => 'required|image',
            'status' => 'required',
        ];
        $username = auth()->user()->username;
        $validatedData = $request->validate($rules);

        // ddd($validatedData);

        $validatedData['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('validasi_tickets');
        Ticket::where('id', $id)->update($validatedData);
        return redirect("/riwayat-ticket/$username")->with('success', 'Post Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function riwayat_tiket(User $user)
    {
        return view('back_end.riwayat-tiket.index', [
            'title' => 'Riwayat Tiket',
            'user' => $user,
            'tikets' => Ticket::with(['user', 'wisata'])->where('user_id', $user->id)->get()
        ]);
    }

    public function validasi_pembayaran(Ticket $ticket)
    {
        return view('back_end.riwayat-tiket.validate', [
            'title' => 'Validasi Pembayaran',
            'ticket' => $ticket
        ]);
    }
}
