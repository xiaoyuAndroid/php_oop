<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/11
 * Time: 10:53
 */

/*
 * 接口本身就是抽象的，方法前不用加 abstract
 * 接口里的方法，只能是 public
 * 一个类可以同时实现多个接口
 *
 * 抽象类可以理解为“类的模板”，相当于一类事物的规范
 * 接口则是“方法的模板”，组成事物的零件的规范
 *
 *
 */

interface flyer {
    public function fly($soil, $height);
}
interface runer{
    public function run($cicle,$dir);
}
interface water {
    public function swim($dir);
}

// 一个类可以同时实现多个接口，接口中的方法都要实现；否则自己就变为抽象类
class Super implements flyer,runer,water {
    public function fly($soil, $height){
        echo 'I am flying';
        echo '<br>';
    }
    public function run($cicle,$dir){
        echo 'I am running';
        echo '<br>';
    }
    public function swim($dir){
        echo 'I am swimming';
        echo '<br>';
    }
}

$s = new Super();
$s->fly(100,200);




