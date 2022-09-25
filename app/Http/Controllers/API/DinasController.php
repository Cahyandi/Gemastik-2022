<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Dinas;
use Exception;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinas = Dinas::all();
        if ($dinas) {
            return ApiFormatter::createApi(200, 'Success', $dinas);
        } else {
            return ApiFormatter::createApi(400, 'Failled');
        }
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
        try {
            $validatedData = $request->validate([
                'username' => 'required|unique:dinas',
                'email' => 'required|email',
                'no_telp' => 'required|max:13',
                'password' => 'required',
                'role' => 'required'
            ]);
            $validatedData['password'] = bcrypt($validatedData['password']);
            $dinas = Dinas::create($validatedData);
            $data = Dinas::where('id', $dinas->id)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failled');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failled');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dinas = Dinas::findOrFail($id);
        if ($dinas) {
            return ApiFormatter::createApi(200, 'Success', $dinas);
        } else {
            return ApiFormatter::createApi(400, 'Failled');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
            'username' => 'required|unique:dinas',
            'email' => 'required|email',
            'no_telp' => 'required|max:13',
            'password' => 'required',
            'role' => 'required'
            ]);
            $validatedData['password'] = bcrypt($validatedData['password']);
            $dinas = Dinas::findOrFail($id);
            $dinas->update($validatedData);
            $data = Dinas::where('id', $dinas->id)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failled');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failled');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinas = Dinas::destroy($id);
        if ($dinas) {
            $data = Dinas::all();
            return ApiFormatter::createApi(200, 'Success Deleted at', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
