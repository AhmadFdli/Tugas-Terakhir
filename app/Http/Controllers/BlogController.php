<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $blog = Blog::latest()->paginate(5);
        return view('blog.index', compact('blog'));
    }

    public function home(): View
    {
        $blog = Blog::latest()->paginate(5);
        return view('resto.index', compact('blog'));
    }
    public function create(): View
    {
        return view('blog.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/blog', $image->hashName());

        Blog::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);

        //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id)
    {
        $blog = Blog::findOrfail($id);

        return view('blog.show', compact('blog'));
    }

    public function destroy($id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);

        Storage::delete('public/blog/' . $blog->image);

        $blog->delete();
        return redirect()->route('blog.index')->with(['succes' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $id): View
    {
        $blog = Blog::findOrFail($id);

        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/blog', $image->hashName());

            Storage::delete('public/blog/' . $blog->image);

            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function resto(): view
    {
        $blog = Blog::latest()->pagination(5);
        return view('resto.index');
    }
    public function user(): View
    {
        $blog = Blog::latest()->paginate(5);
        return view('user', compact('blog'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $blog = DB::table('blogs')
            ->where('title', 'like', "%" . $search . "%")
            ->paginate();
        return view('blog', compact('blog'));
    }
}
