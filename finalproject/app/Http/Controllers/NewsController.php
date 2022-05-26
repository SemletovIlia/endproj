<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function all(){
        return News::all();
    }
    public function add(Request $request) {
        $news = new News;
        $news->title = $request->title;
        $news->save();
    }
    public function delete($id){
        News::destroy($id);
    }
    public function changeTitle($id, $title) {
        $news = News::where('id',$id)->first();
        $news->title = $title;
        $news->save();
    }

}
