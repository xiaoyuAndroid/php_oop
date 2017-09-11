<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/1
 * Time: 22:52
 * 类的语法
 */

header("Content-type: text/html; charset=utf-8");

//类名，不区分大小写
class Stu {
    //属性名，调用时不加$
    public $sn = '0001';
    public $name = 'lisi';
    //方法名
    public function ks() {
        echo '我叫lisi,我来考试';
    }
}
//类名，在实例化时不区分大小写
//但是我们要人为的认为区分大小写，保持良好的编码风格
$stu = new stu();
echo $stu->sn , '<br >';
$stu->ks();