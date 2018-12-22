<?php
/**
 * Created by PhpStorm.
 * User: wy
 * Date: 2018/12/17
 * Time: 11:13
 */

namespace app\admin\controller;


use app\admin\model\News;
use think\Controller;
use think\Model;

class Manager extends Controller
{
    public function login(){
        return view();
    }
    public function showNews(){
        $new = new News();
        $new->setTable("007_news");
        $new->insert();
//        $new->where('id > 169');
//        $new->limit(1,2);
//        $new->group("cat");//按类字段分组,报错 ,why
//        $new->field("id,title,hits,author,cat" );
//        $new->order("id","asc");
//        $ss = $new->select();
//        $fields = $new->getTableFields();
//        $first = $ss[0];
//        $result = $new->query("select cat  from (select * from 007_news order by cat) as x");
        $result = $new->query("select id , cat , title , author ,source  , orderby  from 007_news order by id");
//        foreach ($result as $key => $value ){
//            dump($value["source"]);
//        }
//        echo "sss";
//        echo "<html><style style=\"background-color: #008800\"></style> </html>";
        dump($result);
    }

    public function insertPage(){
        $this->assign("key11" , "value1");
//        return $this->view->assign("key11" , "value1");
        return $this->fetch();
//        return view();
    }
    public function insertAction(){
        $new = new News();
        $new->setTable("007_news");
        $arr = array("title"=>$_POST["title"] ,
            "cat"=>$_POST["category"] ,
            "source"=>$_POST["source"],
            "author"=>$_POST["author"],
            "orderby"=>$_POST["orderby"]
        );
        $result = $new->insert($arr);
        dump($result);
    }

    public function ajax(){
//        echo phpinfo();

        return View();
    }

}