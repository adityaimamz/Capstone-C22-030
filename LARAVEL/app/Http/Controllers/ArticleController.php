<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use App\Models\CategoryArticles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles (Request $request){
        $article = Articles::with('CategoryArticles')->paginate(6);
        $category = CategoryArticles::get();
        if($request->keyword != ''){
            $article = Articles::with('CategoryArticles')->where('title','LIKE','%'.$request->keyword.'%')->paginate(6);
        }
        return view('blog',compact(['article','category']));
    }

    public function getArticles ($id){
        $article = Articles::with('CategoryArticles')->where('id',$id)->first();
        return view('detail',compact(['article']));
        // return ([
        //     'data' => $article
        // ]);
    }


    public function getArticlesByCategory ($id, Request $request){
        $article = Articles::with('CategoryArticles')->where('category',$id)->paginate(6);
        $category = CategoryArticles::get();
        if($request->keyword != ''){
            $article = Articles::with('CategoryArticles')->where('category',$id)->where('title','LIKE','%'.$request->keyword.'%')->paginate(6);
        }
        return view('blog',compact(['article','category']));
    }
}
