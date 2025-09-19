<?php

namespace App\Http\Controllers;
use App\Models\Articles;

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
}
