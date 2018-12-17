<?php

namespace app\dd\controller;
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/12/16
 * Time: 10:34
 */
class Playground{
    /// 访问 规则 http://ddshop.com/index.php?s=/dd/playground/play/game/ssss 或者 http://ddshop.com/index.php/dd/playground/play/game/ssss
    /// 输出 let's play ssss
    public function play($game){
//        echo "let's play  " . $game ;
//        return view();//调用默认自己方法对应的模板
        return view("games/showgames");//调用其它games类的showgames模板
    }
    /// 访问规则 http://ddshop.com/index.php/dd/playground/playgames/game1/dance/game2/sing/game3/run
    /// 输出  let's dance and sing and run
    public function playGames($game1 , $game2 , $game3)
    {
        echo "let's  " . $game1 . " and " . $game2 . " and " . $game3;
    }
    /// 访问规则 http://ddshop.com/index.php/dd/playground/printArray/game1/dance/game2/sing/game3/run
    /// 输出  ["dance","sing","run"]
    public function printArray($game1 , $game2 , $game3)
    {
        $arr = array($game1,$game2,$game3);
        return  json_encode($arr);
    }

    /// 访问 规则 http://ddshop.com/index.php?s=/dd/playground/ppprint   ##省略类名
    /// 输出 ppprint
    public function _empty($xx){
        echo $xx;
    }
    /// 访问规则  http://ddshop.com/index.php/dd/playground/play1
    /// 输出 let's play
    public function play1(){
        echo "let's play" ;
    }

    /// 访问规则  http://ddshop.com/index.php/dd/playground/play1
    /// 输出 let's play
    public function printParameter(){
        $para = $_POST["hello"];
        $returnback = array($para);
        echo  json_encode( $returnback);
    }
}