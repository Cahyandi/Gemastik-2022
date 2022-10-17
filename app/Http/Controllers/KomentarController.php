<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        Komentar::create([
            'user_id' => auth()->user()->id,
            'post_id' => $id,
            'komentar' => $request->komentar
        ]);
        return redirect()->back();
    }
}
