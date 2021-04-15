<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Models\User;

class TweetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline(),
            // 'tweets' => Tweet::paginate(10, ['*'], 'tweets_page'),
            // 'users' => User::paginate(10, ['*'], 'friends_page')
        ]);
    }

    public function store(){

        $attributes = request()->validate(['body' => 'required|max:280']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']  // protected $guarded = []; @Tweet Model
        ]);

        return redirect('/home');
    }

}
