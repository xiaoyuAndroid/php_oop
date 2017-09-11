<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 16:55
 *
 * 构造方法与析构方法
 */
header("content-type: text/html; charset=utf-8");

class Human {
    public $name = 'xiaoyu';

    //类一旦被实例化，就会调用 __construct()
    public function __construct() {
        echo '小孩出生了', '<br>';
    }
    //在对象销毁时，自动触发
    /*
     * 对象什么时候被销毁？
     * 1、存储对象的变量被赋值伪其他值
     * 2、变量被unset
     * 3、页面结束时
     */
    public function __destruct() {
        echo '析构方法执行了' ,'<br>';
    }
}

$baby = new Human();
//$baby = 3;
//unset($baby);

class Student {
    public $name;
    public $age;
    public function __construct($newName, $newAge) {
        $this->name = $newName;
        $this->age = $newAge;
    }
    public function introduce() {
        echo '我叫'.$this->name.' 今年'.$this->age,'<br>';
    }
}
$student1 = new Student('xiaoyu', 25);
$student1->introduce();
$student2 = new Student('zhoujing', 26);
$student2->introduce();
