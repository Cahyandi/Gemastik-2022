<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function show(Wisata $wisata)
    {
        if (!auth()->check()) {
            return redirect()->back()->withErrors(['loginDulu' => 'Silahkan login terleih dulu untuk melihat konten']);
        }
        return view('user.wisata.show', [
            'wisata' => $wisata,
            'ulasans' => Ulasan::whereWisataId($wisata->id)->get()
        ]);
    }

    public function storeUlasan(Request $request, Wisata $wisata)
    {

        $request->validate([
            'komentar' => 'required',
            'rating' => 'required'
        ]);

        Ulasan::create([
            'user_id' => auth()->user()->id,
            'wisata_id' => $wisata->id,
            'komentar' => $request->komentar,
            'rating' => $request->rating,
        ]);

        return back();
    }
}
