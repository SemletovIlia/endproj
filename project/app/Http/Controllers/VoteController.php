<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{

    public function showAll() {
        $votes = DB::table('votes')->paginate(5);

        return view('index', ['votes' => $votes]);
    }

    public function showOne($id) {
        $vote = Vote::where('id', $id)->first();

        return view('show_vote', ['vote' => $vote]);
    }

    public function create(Request $request) {
        $vote = new Vote;
        $vote->title = $request->title;
        $vote->text = $request->text;
        $vote->positive = 0;
        $vote->negtive = 0;
        $vote->save();

        return redirect('/');
    }

    public function increasePositive($id) {
        $vote = Vote::where('id', $id)->first();
        $vote->positive++;
        $vote->save();

        return back();
    }

    public function increaseNegtive($id) {
        $vote = Vote::where('id', $id)->first();
        $vote->negtive++;
        $vote->save();

        return back();
    }
    
}
