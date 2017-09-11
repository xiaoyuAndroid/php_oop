<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 20:08
 *
 * 类的继承性
 */

//PHP是单继承的：子类只能继承一个父类
//C#、C++多继承，子类可以继承多个父类

header("content-type: text/html; charset=utf-8");
class MySQL {
    public $bb = 33;
    public function conn() {
        echo '自动帮你连接','<br>';
    }

    public function getError() {
        return '哈哈,错了！';
    }
    public function getLine() {
        return array('a','b','c');
    }
}
class MyMySQL extends MySQL {
    public function getError() {

        return '这是MyMySQL继承MySQL类之后,重写的getError方法!父类的getError方法被重写了。';
    }
    public function getRow() {
        return $this->getLine();
    }
}

$test = new MyMySQL();
echo $test->bb;
echo '<br>';
var_dump($test->getError());
echo '<br>';
var_dump($test->getLine());
echo '<br>';
var_dump($test->getRow());


