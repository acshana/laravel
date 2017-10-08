<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/5
 * Time: 9:54
 */


namespace App\Http\Controllers;


use App\mymodel;

class UserController extends Controller
{
    /**
     * 显示指定用户的个人数据。
     *
     * @param  int $id
     * @return Response
     */
    public function show()
    {
        return mymodel::getname();
//        return view('myviews/myview1', [
//                'weibo' => 'ac.one',
//                'url' => 'https://weibo.com/u/1837057410'
//            ]
//        );
//        return view('/myviews/arroy');
    }
}