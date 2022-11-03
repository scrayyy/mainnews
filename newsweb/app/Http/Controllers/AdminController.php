<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::orderBy('id' , 'DESC')->get();
        return view('admin.news.index' , compact('news'));
    }
}
