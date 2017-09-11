<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/1
 * Time: 22:03
 *
 */
// 第一个类
//类的声明
/*
 * public     公有   （外部 子类中 本类中）
 * protected  受保护 （     子类中 本类中）
 * private    私有   （            本类中）
 *
 *
 */
class Test {
    //类中的方法
    function cry() {
        echo '555';
    }
    function laugh() {
        echo 'haha';
    }
}
//实例化对象
$test = new Test();
//调用类中的方法
$test->laugh();
$test->cry();
