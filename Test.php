<?php

namespace sugao2013\composer_test;
use sugao2013\composer_test\src\ClassTest;
class Test {

    public function test() {
        echo 'test';
    }

    public function class_test(){
        $obj=new ClassTest();
        $obj->class_test();
    }
}
