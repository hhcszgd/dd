<?php
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/12/17
 * Time: 10:29
 */

namespace app\admin\controller;


use think\Cache;
use think\Controller;

class Index extends Controller
{
    public function index(){
        return view();
//        echo "xxxx";
    }
    public function left(){
        Cache::clear("1ec0d9fc41115b7b0296467a3e80d1cd");
        return view();
    }
    public function right(){
        return view();
    }
    public function head(){
        return view();
    }
}