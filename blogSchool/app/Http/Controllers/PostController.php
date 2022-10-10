<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Blog;
use App\models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = User::join('blogs', 'users.id', '=', 'blogs.user_id')->get(['users.name', 'blogs.*']);
        return view('dashboard', ['posts' => $posts]);
    }

    public function show()
    {
        $posts = User::join('blogs', 'users.id', '=', 'blogs.user_id')->paginate(5);
        return view('blog', ['posts' => $posts]);
    }

    public function single($slug)
    {
        $post = Blog::where('slug', $slug)->firstOrFail();
        return view('single', ['posts' => $post]);
    }

    public function save(Request $request)
    {
        $post = new Blog($request->all());
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->artikel = $request->input('artikel');
        $post->user_id = Auth::user()->id;
        $post->save();
        return back();
    }

    public function edit(Blog $post)
    {
        return view('partials\_edit', ['post' => $post]);
    }

    public function update(Request $request, Blog $post)
    {
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->artikel = $request->input('artikel');
        $post->update();
        return redirect('dashboard');
    }

    public function destroy(Blog $post)
    {
        $post->delete();
        return redirect("dashboard");
    }
}
