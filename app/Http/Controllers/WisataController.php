<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.wisata.index', [
            'wisataApprove' => Wisata::whereStatus('approve')->get(),
            'wisataReject' => Wisata::whereStatus('reject')->get(),
            'wisataPending' => Wisata::whereStatus('pending')->get(),
            'petugasWisata' => Wisata::where('dinas_id', auth('dinas')->user()->id)->first(),
            'title' => 'Daftar Wisata'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.wisata.create', [
            'title' => 'Daftar Wisata'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $store = $request->validate([
            'dinas_id' => 'required',
            'nama_wisata' => 'required',
            'img_wisata' => 'required|image|file|max:2048',
            'alamat' => 'required',
            'harga_tiket' => 'required',
            'deskripsi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $store['img_wisata'] = $request->file('img_wisata')->store('wisata');
        $store['status'] = 'pending';
        $store['total-rating'] = 0;

        wisata::create($store);

        return redirect('/dinas/wisata')->with('success', 'Pengaduan Berhasil Di ajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('back_end.wisata.detail', [
            'title' => 'Detail Wisata',
            'wisata' => wisata::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back_end.wisata.edit', [
            'title' => 'Wisata Update',
            'wisata' => wisata::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'dinas_id' => 'required',
            'nama_wisata' => 'required',
            'alamat' => 'required',
            'harga_tiket' => 'required',
            'deskripsi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ];

        $validatedData = $request->validate([
            'dinas_id' => 'required',
            'nama_wisata' => 'required',
            'alamat' => 'required',
            'harga_tiket' => 'required',
            'deskripsi' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);
        $validatedData['img_wisata'] = $request->old_image;
        // ddd($request);

        if ($request->file('img_wisata')) {
            Storage::delete($request->old_image);
            $validatedData['img_wisata'] = $request->file('img_wisata')->store('wisata');
        }

        wisata::where('id', $id)->update($validatedData);
        return redirect('/dinas/wisata')->with('success', 'Post Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = wisata::where('id', $id)->first();

        wisata::destroy($id);
        Storage::delete($image->img_wisata);

        return redirect('/wisata')->with('success', 'Data Berhasil dihapus');
    }
}
