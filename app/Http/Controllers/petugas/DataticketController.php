<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use App\Models\Dinas;
use App\Models\Ticket;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DataticketController extends Controller
{
    public function index(Dinas $dinas)
    {
        $wisata = Wisata::where('dinas_id', $dinas->id)->first();
        return view('back_end.petugas-tiket.index', [
            'title' => 'Data Ticket',
            'wisatas' => $wisata,
        ]);
    }

    public function show(Ticket $ticket)
    {
        return view('back_end.petugas-tiket.detail', [
            'title' => 'Detail Data Ticket',
            'ticket' => $ticket,
        ]);
    }

    public function edit(Ticket $ticket)
    {
        return view('back_end.petugas-tiket.edit', [
            'title' => 'Edit Data Ticket',
            'ticket' => $ticket,
        ]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validatedData = $request->validate([
            'status' => 'required'
        ]);

        Ticket::where('id', $ticket->id)->update($validatedData);
        return redirect('/data-ticket/show/'.$ticket->no_ticket)->with('success', 'data berhasil diupdated');
    }
}
