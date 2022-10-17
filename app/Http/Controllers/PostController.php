<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Komentar;
use App\Models\Post;
use App\Models\Wisata;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);
        $komentars = Komentar::wherePostId($id)->get();
        return view('user.post.show', compact('post', 'komentars'));
    }

    public function create()
    {
        return view('user.post.create', [
            'wisatas' => Wisata::all()
        ]);
    }

    public function store(PostRequest $request)
    {
        Post::create([
            'user_id' => auth()->user()->id,
            'wisata_id' => $request->wisata_id,
            'img' => $request->file('img')->store('posts'),
            'caption' => $request->caption,
        ]);

        return redirect()->back();
    }
}
