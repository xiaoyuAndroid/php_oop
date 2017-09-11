<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/10
 * Time: 23:27
 */

// 静态方法，通过 类名::方法名 来调用


class Math {
    // 静态属性
    public static $version = '1.03';
    // 静态方法
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }
    public static function sub($num1, $num2) {
        return $num1 - $num2;
    }
}

$m1 = new Math();
$m2 = new Math();

// 静态属性和方法，不依赖于对象调用，而是用 类 来调用
echo Math::$version,'<br>';
echo Math::add(3,4);
