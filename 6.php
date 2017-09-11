<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/1
 * Time: 23:25
 * 类与对象的关系
 */

header("Content-type: text/html;charset=utf-8");
class A {
    public $name = 'lisi';
    public function hi() {
        echo '我的名字是'. $this->name;
    }
}
//new一个对象时，内存中会开辟一块空间，存放属性，属性值，方法名；没有方法体
$test1 = new A();
$test2 = new A();

echo $test1 -> name , "<br>";
echo $test1->hi() , "<br>";

echo $test2 -> name , "<br>";
echo $test2->hi() , "<br>";

$test1->name = 'wangwu';
//给$test1中的属性值重新赋值，类中的属性值不变，改变的是新开辟空间的属性
echo $test1 -> name , "<br>";
echo $test1->hi() , "<br>";

echo $test2 -> name , "<br>";
echo $test2->hi() , "<br>";
//方法调用，执行的是类中的方法，但是PHP内部会记录是哪个对象在调用方法
