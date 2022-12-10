<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\CategoryArticles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles(Request $request)
    {
        $article = Articles::with('CategoryArticles')->paginate(8);
        $category = CategoryArticles::get();
        if ($request->keyword != '') {
            $article = Articles::with('CategoryArticles')->where('title', 'LIKE', '%' . $request->keyword . '%')->paginate(8);
        }
        return view('blog', compact(['article', 'category']));
    }

    public function getArticles($id)
    {
        $article = Articles::with('CategoryArticles')->where('id', $id)->first();
        return view('detail', compact(['article']));
    }


    public function getArticlesByCategory($id, Request $request)
    {
        $article = Articles::with('CategoryArticles')->where('category', $id)->paginate(8);
        $category = CategoryArticles::get();
        if ($request->keyword != '') {
            $article = Articles::with('CategoryArticles')->where('category', $id)->where('title', 'LIKE', '%' . $request->keyword . '%')->paginate(8);
        }
        return view('blog', compact(['article', 'category']));
    }

    public function getArticlesUser($id)
    {
        $article = Articles::with('CategoryArticles')->where('id', $id)->first();
        return view('user.detail-user', compact(['article']));
    }

    public function getAllArticlesUser(Request $request)
    {
        $article = Articles::with('CategoryArticles')->paginate(8);
        $category = CategoryArticles::get();
        if ($request->keyword != '') {
            $article = Articles::with('CategoryArticles')->where('title', 'LIKE', '%' . $request->keyword . '%')->paginate(8);
        }
        return view('user.blog-user', compact(['article', 'category']));
    }
    public function getArticlesByCategoryUser($id, Request $request)
    {
        $article = Articles::with('CategoryArticles')->where('category', $id)->paginate(8);
        $category = CategoryArticles::get();
        if ($request->keyword != '') {
            $article = Articles::with('CategoryArticles')->where('category', $id)->where('title', 'LIKE', '%' . $request->keyword . '%')->paginate(8);
        }
        return view('user.blog-user', compact(['article', 'category']));
    }
}
