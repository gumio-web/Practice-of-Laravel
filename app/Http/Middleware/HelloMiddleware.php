<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    //P115〜 コントローラの後処理のミドルウェア
    public function handle($request, Closure $next)
    {
        /**
         * 独習PHP182, 183, 189ページ参照
         * 正規表現を使うために他意のないタグを作りそこに文字を入れる。
         */
        $response = $next($request);
        $content = $response->content();
        //echo $content;
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        //$pattern = '@<middleware>(.*)</middleware>@i';
        //$pattern = '|<middleware>(.*)</middleware>|i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);
        return $response;
    }
}
