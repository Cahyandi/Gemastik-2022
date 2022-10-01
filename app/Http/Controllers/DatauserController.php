<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.data-user.index', [
            'users' => User::all(),
            'title' => 'Data User'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('back_end.data-user.edit', [
            'title' => 'Edit User',
            'petugas' => user::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'username' => 'required',
            'name' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email'
        ];

        $validatedData =  $request->validate($rules);

        $validatedData['password'] = $request->password_old;
        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        }

        User::where('id', $id)->update($validatedData);

        return redirect('/data-user')->with('success', 'Data Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::destroy($id);

        return redirect('/data-user')->with('success', 'Data berhasil di hapus');
    }
}
