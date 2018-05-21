<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Page;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('blog.category', [
          'category' => $category,
          'articles' => $category->articles()->where('published', 1)->paginate(12)
        ]);
    }

    public function article($slug)
    {
        return view('blog.article', [
          'article' => Article::where('slug', $slug)->first()
        ]);
    }

    public function page($slug)
    {
        return view('blog.page', [
          'page' => Page::where('slug', $slug)->first()
        ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $article = Article::where('published', 1)->search($search)->paginate(12);
        return view('blog.search', [
          'search' => $search,
          'articles' => $article
        ]);
    }
}
