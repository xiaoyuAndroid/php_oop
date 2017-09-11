<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/10
 * Time: 23:33
 */
/*
 * const
 *  类常量在类内部声明，只在 类内部 起作用
 *  常量的调用，类似于 静态属性和方法 的调用   类名::类常量名
 */

// 声明一个常量
define('PI', 3.1415926);

// Math 类用的是 类内部常量 PI
class Math{
    public function test() {
        echo PI;
    }
    const PI = 3.14;
    public static function area($r) {
        return Math::PI * $r * $r;
    }
}

// Math2 类用的是全局常量 PI
class Math2{
    public function test() {
        echo PI;
    }
    public static function area($r) {
        return PI * $r * $r;
    }
}
echo PI.'<br>';
echo Math::PI.'<br>';
echo Math::area(10).'<br>';

echo Math2::area(10).'<br>';
