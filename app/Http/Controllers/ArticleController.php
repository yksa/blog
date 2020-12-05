<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Article::latest()->paginate(5);
        return view('articles.index', [
            'articles' => $data
        ]);
    }
    public function detail($id)
    {
        $data = Article::find($id);
        return view('articles.detail', [
            'article' => $data
        ]);
    }
    public function add() 
    {
        $data = [
            [ "id" => 1, "name" => "News"],
            [ "id" => 2, "name" => "Tech"],
        ];
        return view('articles.add', [
            'categories' => $data
        ]);
    }
}
