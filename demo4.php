<?php

class A
{
    public function __construct()
    {
        echo 1111;
    }
}

class B extends A
{
//    public function __construct()
//    {
//        parent::__construct();
//        echo 22222;
//    }

}

class C extends B
{

}

$b = new C();