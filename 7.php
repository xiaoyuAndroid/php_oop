<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 16:36
 *
 * this是谁？
 */
header("Content-type: text/html; Charset=utf-8");
/*
 *$this 谁调用就是谁
 *$this 伪变量，谁实例化就是谁
 *$this 是一个虚拟变量，专门指‘当前调用的对象’
 *
 */
class Ren {
    public $name = 'lisi';
    public function fly() {
        echo $this->name.'起飞';
    }
}

$xiaoyu = new Ren();

$xiaoyu->name = '小于';
$xiaoyu->fly();