<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 19:38
 *
 * 封装mysql类
 */
header("content-type: text/html; charset=utf-8");
class MySQL {
    public $link = null;
    public function conn() {
        $cfg = array(
            'host'=>'localhost',
            'user'=>'root',
            'password'=>'root',
            'database'=>'test',
            'charset'=>'utf-8'
        );
        //连接数据库（地址，用户名，密码，选库）
        $this->link = mysqli_connect($cfg['host'],$cfg['user'],$cfg['password'],$cfg['database']);
    }

    //发送sql查询语句
    public function query($sql) {
        return mysqli_query($this->link, $sql);
    }
    //查询所有数据，返回返回数组
    public function getAll($sql) {
        $rs = $this->query($sql);
        $data = array();
        while($row = mysqli_fetch_assoc($rs)){
            $data[] = $row;
        }

        return $data;
    }
}

$db = new MySQL();
$db->conn();
//查询a表所有数据
$a = $db->getAll('select * from a');
var_dump($a);
//查询goods表所有数据
//$goods = $db->getAll('select * from goods');
//var_dump($goods);
