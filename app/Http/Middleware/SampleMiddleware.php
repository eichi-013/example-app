<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 前に処理を挟みたい場合はこちらに記述する
        // 例　メンテナンスモードの時に全てのアクセスをリダイレクトする、特定のIPアドレスからのみアクセスできるようアクセス制限をする
        return $next($request);
        // 後に処理を挟みたい場合こちらに記述する
        // 例　すべてのHTTPレスポンスに必ず特定のレスポンスヘッダーをつける
    }
}
