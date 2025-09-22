<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Support\Facades\Storage; // Přidat pro práci s uložištěm

use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function show($id)
    {
        $article = Articles::where('link', 'article/'.$id)->first();

        if (!$article) {
            abort(404);
        }

        return view('article.show', ['article' => $article]);
    }

    public function index()
    {
        $articles = Articles::where('published', 1)->where('top', 1)->orderBy('date', 'desc')->get();
        return view('index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|unique:articles,link',
            'text' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published' => 'nullable|boolean',
            'top' => 'nullable|boolean',
            'date' => 'required|date',
        ]);

        $article = new Articles();
        $article->title = $request->input('title');
        $article->link = $request->input('link');
        $article->text = $request->input('text');

        // Save the photo to the 'sigma' folder
        if ($request->hasFile('photo')) {
            // Use the 'store' method to save the file to storage/app/public/sigma
            $path = $request->file('photo')->store('public/sigma');

            // The path returned by store() includes 'public/'. We only need the file name for the database.
            $article->photo = basename($path);
        } else {
            $article->photo = ''; // Set to an empty string if no photo is uploaded
        }

        $article->published = $request->has('published');
        $article->top = $request->has('top');
        $article->date = strtotime($request->input('date'));
        $article->save();
        $article->link = 'article/'.$article->id.'-'.$article->link;
        $article->save();

        return redirect()->route('article.list');
    }

    public function edit($id)
    {
        $article = Articles::where('id', $id)->first();

        if (!$article) {
            abort(404);
        }

        $article->link = str_replace('article/'.$id.'-', '', $article->link);

        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $article = Articles::where('id', $id)->first();

        if (!$article) {
            abort(404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'link' => 'required|string|unique:articles,link,'.$article->id,
            'published' => 'nullable|boolean',
            'top' => 'nullable|boolean',
            'date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo')) {
            // Use the 'store' method to save the file to storage/app/public/sigma
            $path = $request->file('photo')->store('public/sigma');

            // The path returned by store() includes 'public/'. We only need the file name for the database.
            $article->photo = basename($path);
        }

        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->link = 'article/'.$id.'-'.$request->input('link');
        $article->published = $request->has('published') ? $request->input('published') : 0;
        $article->top = $request->has('top') ? $request->input('top') : 0;
        $article->date = $request->input('date') ? $request->input('date') : $article->date;
        $article->date = strtotime($article->date);
        $article->save();

        return redirect()->route('article.list');
    }

    public function destroy($id)
    {
        $article = Articles::where('id', $id)->first();

        if (!$article) {
            abort(404);
        }

        $article->delete();

        return redirect()->route('article.list');
    }

    public function list()
    {
        $articles = Articles::orderBy('date', 'desc')->get();
        return view('article.list', ['articles' => $articles]);
    }
}
