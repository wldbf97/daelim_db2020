<?php
namespace Modules\JiYoul;

// 클래스 선언
class Hello{

    //상수선언
    const MYNAME = "jiyoul";

    //클래스의 함수
    //메소드 함.
    public function greeting(){
        echo self::MYNAME . "hello world";
    }

    //생성자
    public function __construct(){
        echo __CLASS__ . "객체를 생성합니다. <br>";
    }
}
