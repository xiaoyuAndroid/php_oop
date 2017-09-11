<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/3
 * Time: 16:44
 *
 * 类的封装性
 */
header("content-type: text/html; charset=utf-8");
/*
 * 封装：禁止某些方法/属性，不允许外部调用
 * 并开放部分功能，来间接调用
 *
 */
class ATM {
    protected function getPassWord() {
        return '123456';
    }

    public function checkPassWord($password) {
        if ( $password === $this->getPassWord() ) {
            echo '你的密码正确';
        }else {
            echo '你的密码不正确';
        }
    }

}
$atm = new ATM();
//$atm->getPassWord();
//Fatal error: Call to protected method ATM::getPassWord() from context '' in D:\phpStudy\WWW\opp\ATM.php on line 26
$atm->checkPassWord('123456');
