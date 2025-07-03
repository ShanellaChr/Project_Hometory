<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Show all articles
    public function index()
    {
        $articles = Article::latest()->get();
        return view('article.articlePage', compact('articles'));
    }

    // Show article detail by slug
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.articleDetailPage', compact('article'));
    }

    public function adminIndex()
    {
        $articles = Article::all();
        return view('admin.dashboardAdminPage', compact('articles'));
    }

    public function destroy($id){
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin');
    }
}