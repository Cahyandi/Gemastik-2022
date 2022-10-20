<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class ChangeStatusPariwisata extends Controller
{
    public function __invoke(Request $request, $id)
    {
        Wisata::find($id)->update([
            'status' => $request->status
        ]);
        return redirect()->back();
    }
}
