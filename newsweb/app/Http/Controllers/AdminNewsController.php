<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name' , 'ASC')->get();
        return view('admin.news.create' , compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_news = new News;
        $news_news->title = $request->title;
        $news_news->desc_ka = $request->desc;
        $news_news->cat_id = $request->quality;
        $news_news->upload_date = date('d.F.Y');
        $news_news->upload_date_two = date('Y-m-d H:i:s');
        @header('Content-type: text/html; charset=utf-8');
        $news_news->save();
        $this->storeImage($news_news);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Category::orderBy('name' , 'ASC')->get();
        $news_info = News::where('id' , $id)->first();
        return view('admin.news.edit' , compact('news_info' , 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_update = News::findOrfail($id);
        $news_update->title = $request->title;
        $news_update->desc_ka = $request->desc;
        $news_update->cat_id = $request->quality;
        $news_update->save();
        $this->storeImage($news_update);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News)
    {
        $News->delete();
        return back();
    }

    public function storeImage($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('news', 'public'),
            ]);


        }

        //composer require intervention/image
        //php artisan storage:link
    }
}
