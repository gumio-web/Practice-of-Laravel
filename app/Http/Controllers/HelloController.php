<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest; //P142
use Validator;  //P144追記

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $menus = ['HTML', 'CSS', 'PHP', 'JavaScript'];
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }
        return view('hello.index', ['menus' => $menus, 'msg' => $msg]);
    }

    public function post(Request $request)
    {
        $menus = ['HTML', 'CSS', 'PHP', 'JavaScript'];
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg' => '「' . $msg . '」をクッキーに保存しました。', 'menus' => $menus]);
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
