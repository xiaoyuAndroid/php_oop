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
    //
    protected function __construct() {
        // 这里只是为了生成对象时，验证对象的这个属性是否一样; 生成的每一个对象，如果这个属性都一样,那意味着就是 单例模式
        $this->rand = mt_rand(100,200);
    }
    public static function getIns() {
        if( Single::$_ins === null) {
            Single::$_ins = new Single();
        }
        return Single::$_ins;
    }
}

class Test extends Single {
    public function __construct() {

    }
}
$c = new Test();
$d = new Test();
var_dump($c);echo '<br>';
var_dump($d);
var_dump($c===$d);