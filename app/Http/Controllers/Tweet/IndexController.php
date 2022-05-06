<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
// use App\Models\Tweet;
use App\Services\TweetService;  //TweetServiceのインポート
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // $tweetService = new TweetService(); //TweetServiceのインスタンスを作成 ↑引数として$tweetServiceを渡せばこの文は不要になる
        $tweets = $tweetService->getTweets();  //つぶやきの一覧を取得
        // $tweets = Tweet::orderBy('created_at','DESC')->get();  //SQL実行時にソートして取得（こちらのほうが高速）
        //$tweets = Tweet::all()->sortbyDesc('created_at')   //こちらでも同じだが、allメソッドで取得してからphp側で並び替え処理
     
        return view('tweet.index')
            ->with('tweets', $tweets);
        
    }
}
