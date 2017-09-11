<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/10
 * Time: 23:59
 */

/*
 *  $this   代表  本对象
 *  self    代表  本类
 *  parent  代表  父类
 *
 */

class Par {
    public function __construct() {
        echo mt_rand(100,200);
        echo '<br>';
    }
}

class Son extends Par {
    public function __construct() {
        // 在用框架时，一般在子类中先调用父类的 __construct( ) 因为父类中可能封装了一些操作、初始化
        parent::__construct();
        echo 'Son类自己的构造方法生成的数字: '.mt_rand(100,200);
        echo '<br>';

    }
}

$a = new Par();
$b = new Son();
$c = new Son();