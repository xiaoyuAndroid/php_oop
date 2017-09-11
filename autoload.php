<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/11
 * Time: 0:07
 */

function myLoad($class) {
    echo 'I want this class,classname is ',$class;
    echo '<br>';
    require('./'.$class.'.php');
    echo '<br>';
    echo '自动加载的类是./'.$class.'.php';
}

// 把 myload函数 注册成自动加载函数
// new 不存在的类，然后来找我
// 文件名和类名一样时，正好找到
spl_autoload_register('myload');

new ATM();