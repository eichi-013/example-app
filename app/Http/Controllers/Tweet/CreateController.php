<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use App\Models\Tweet;
use App\Services\TweetService;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request, TweetService $tweetService)
    {
        //つぶやきと画像を同時に保存する処理
        $tweetService->saveTweet(
            $request->userId(),
            $request->tweet(),
            $request->images()
        );

        //以下はつぶやきのみを保存する処理
        // $tweet = new Tweet;
        // $tweet->user_id = $request->userId();  //ここでuserIdを保存している
        // $tweet->content = $request->tweet();
        // $tweet->save();

        return redirect()->route('tweet.index');
    }
}
