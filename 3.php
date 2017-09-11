
<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/1
 * Time: 22:25
 */
//属性和方法
header("Content-type: text/html; charset=utf-8");
class Stu {
    public $sn = '0111';
    public $name = 'lisi';
    public function ks() {
        echo '我叫lisi，我来考试';
    }
}
$stu = new Stu();
//获取属性值
echo $stu->name;
//调用对象中的方法
$stu->ks();