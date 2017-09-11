<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/11
 * Time: 0:26
 */
/*
 * 魔术方法
 * __construct()
 * __destruct()
 * __set()
 * __get()
 * __isset()
 * __unset()
 *
 *
 */

/*
 * 魔术方法的本质意义在于： 开发者和调用者对类的“控制权”
 * 如果外部可以随意设置、添加、修改、删除属性，类本身失去了对属性的控制权
 */
class Foo {

}
$foo = new Foo();
$foo->age = 30;// 设置成功了，但是 Foo类 并没有这个属性。
var_dump($foo);//object(Foo)#1 (1) { ["age"]=> int(30) }

class Bar {
    public function __set($per, $value) {
        echo "我知道你想设置 " .$per .'为' . $value;
        echo '<br>';
    }
}

$test = new Bar();
$test2 = new Bar();
$test->age = 20; // 调用 __set 方法，但是没有设置成功
$test2->age = 30;
var_dump($test);//object(Bar)#2 (0) { }
echo '<br>';
var_dump($test2);//object(Bar)#3 (0) { }