<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 20:21
 *
 * final类和final方法
 */
/*
 * final类不能被继承
 * final方法不能被子类重写
 */

header('content-type:text/html; charset=utf-8');
//final class TJ {
//
//}
//class XYJ extends TJ {
//
//}
//Fatal error: Class XYJ may not inherit from final class (TJ) in D:\phpStudy\WWW\opp\final.php on line 16

class Human {
    final public function think() {
        echo '人类在痛苦思考';
    }
    public function eat() {
        echo '人要吃饭';
    }
}
class Stu extends Human {
//    public function think() {
//        echo '学生要勤于思考';
//    }
    public function eat() {
        echo '学生要吃好的';
    }
}
$stu = new Stu();
//$stu->think();
//Fatal error: Cannot override final method Human::think() in D:\phpStudy\WWW\opp\final.php on line 28
$stu->eat();