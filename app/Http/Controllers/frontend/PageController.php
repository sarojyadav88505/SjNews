<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    //home page
    public function home()
    {
        // Top 4 articles for homepage section 1
        $latestPost = Article::orderBy('created_at','desc')->limit(10)->get();


        return view('Frontend.home',compact('latestPost'));
    }

    //category page
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();;
        $articles = $category->article()->paginate(16);
        // return $articles;
        return view('Frontend.categories', compact('articles','category'));
    }

    // articles page
    public function article($id)
    {
        $article = Article::find($id);
        $article->increment('views');
        return View('Frontend.article', compact('article'));
    }
}
