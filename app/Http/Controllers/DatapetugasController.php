<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\DinasController;
use App\Models\dinas;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DatapetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.data-petugas.index', [
            'dinas' => Dinas::where('role', 'petugas')->get(),
            'title' => 'Data Dinas'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.data-petugas.create', [
            'title' => 'Tambah Petugas'
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
        $validatedData = $request->validate([
            'username' => 'required|unique:dinas',
            'email' => 'required|email',
            'no_telp' => 'required|max:13',
            'password' => 'required',
            'role' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        dinas::create($validatedData);

        return redirect('/data-petugas')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function show(dinas $dinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back_end.data-petugas.edit', [
            'title' => 'Edit Petugas',
            'petugas' => dinas::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules  = [
            'username' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = $request->password_old;
        // ddd($validatedData);
        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        }

        dinas::where('id', $id)->update($validatedData);
        return redirect('/data-petugas')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(dinas $dinas)
    {
        dinas::destroy($dinas->id);
        return redirect('/data-petugas')->with('success', 'data berhasil dihapus');
    }
}
