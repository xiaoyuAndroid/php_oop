<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/10
 * Time: 23:47
 */
/*
 * 单例模式
 *  单个实例对象（只能造出一个对象）
 *
 */

class Single {
    protected static $_ins;
    // final 方法不能被子类重写，实现单例模式
    final protected function __construct() {
        // 这里只是为了生成对象时，验证对象的这个属性是否一样; 生成的每一个对象，如果这个属性都一样,那意味着就是 单例模式
        $this->rand = mt_rand(100,200);
    }
    public static function getIns() {
        if( self::$_ins === null) {
            self::$_ins = new Single();
        }
        return self::$_ins;
    }
}

$a = Single::getIns();
$b = Single::getIns();
var_dump($a);echo '<br>';
var_dump($b);echo '<br>';
var_dump($a===$b);