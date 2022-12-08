<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\CategoryArticles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles (){
        $article = Articles::with('CategoryArticles')->paginate(1);
        $category = CategoryArticles::get();
        return view('blog',compact(['article','category']));
    }

    public function getArticles ($id){
        $article = Articles::with('CategoryArticles')->where('id',$id)->first();
        return view('detail',compact(['article']));
        // return ([
        //     'data' => $article
        // ]);
    }

    public function getArticlesByCategory ($id){
        $article = Articles::with('CategoryArticles')->where('category',$id)->paginate(1);
        $category = CategoryArticles::get();
        return view('blog',compact(['article','category']));
    }
}
