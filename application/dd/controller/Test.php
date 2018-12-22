<?php
namespace app\dd\controller;
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/12/17
 * Time: 14:52
 */
class Test
{
    public  function test(){
        echo $_POST["keyOfPara1"] . $_POST["keyOfPara2"] . $_POST["keyOfPara3"] ;
    }
}