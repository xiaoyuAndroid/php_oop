<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/11
 * Time: 10:48
 */
/*
 * 类前加abstract，则为抽象类（抽象类可以理解为 类的模板）
 *      抽象类不能实例化
 *      抽象类可以被继承，但子类要实现其全部抽象方法；否则子类也是抽象的；
 *      抽象类中可以有已经实现的方法，但只要有 1 个方法为抽象方法，则类是抽象的
 * 方法前加abstract，则为抽象方法
 *      抽象方法没有方法体
 *
 */

abstract class aDb {
    abstract public function foo($a,$b);// 抽象方法，没有方法体
    public function bar() {//已经实现的方法，有方法体

    }
}
