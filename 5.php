<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/1
 * Time: 22:52
 * 属性不能是表达式？
 */

class MySQL {
    /*
     * public $rand = 1+2;
     * 数学运算，PHP5.6以后，支持
     *
     */
    public $rand;

    // 初始化效果，__construct为构造函数
    public function __construct() {
        $this->rand = mt_rand(10, 100);
    }
}

$test = new MySQL();
echo $test->rand;