<?php

namespace App\Http\Controllers;

use App\Helpers\UserSystemInfoHelper;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $catnames = Category::orderBy('id', 'DESC')->get();
        $last_news = News::orderBy('upload_date_two', 'DESC')->take(6)->get();
        $all_news = News::orderBy('id' , 'DESC')->paginate(5);
        $date = \Carbon\Carbon::today()->subDays(7);
        $rand_news = News::orderby('visitors', 'desc')->where('upload_date_two', '>=', $date)->take(8)->get();
        $second_rand_news = News::inRandomOrder()->take(5)->get();
        return view('index' , compact('all_news', 'last_news', 'catnames', 'rand_news', 'second_rand_news'));
    }
    public function category($id)
    {
        $second_rand_news = News::inRandomOrder()->take(5)->get();
        $catnames = Category::orderBy('id', 'DESC')->get();
        $last_news = News::orderBy('id', 'DESC')->take(10)->get();
        $cat_news = News::where('cat_id' , $id)->orderBy('id', 'desc')->get();
        return view('category' ,  compact('cat_news', 'last_news', 'catnames', 'second_rand_news'));
    }
    public function post($id)
    {
        $getip = UserSystemInfoHelper::get_ip();
        $NewVisitor = new Visitor;
        $NewVisitor->ip = $getip;
        $NewVisitor->news_id = $id;
        $NewVisitor->save();
        $visitor_count = Visitor::where('news_id' , $id)->distinct('ip')->count();
        $news_visitors = News::findOrfail($id);
        $news_visitors->visitors = $visitor_count;
        $news_visitors->save();

        $catnames = Category::orderBy('id', 'DESC')->get();
        $one_news = News::where('id', $id)->first();
        return view('post', compact('catnames', "one_news"));
    }
    public function search(Request $request)
    {
        $second_rand_news = News::inRandomOrder()->take(5)->get();
        $last_news = News::orderBy('id', 'DESC')->take(10)->get();
        $catnames = Category::orderBy('id', 'DESC')->get();
        $search = $request->input('search');
        $searchh = News::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('search', compact('searchh', 'last_news', 'catnames', 'second_rand_news'));

    }
}
