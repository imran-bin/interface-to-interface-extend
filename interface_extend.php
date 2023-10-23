<?php


interface A
{
    public function sound();
}

interface B extends A
{
    function  eat();
}


class C implements B
{

    function sound()
    {
        echo "TEST sound";
    }

    function  eat()
    {
        echo "TEST eat";
    }
}

$cc=new C();

$cc->eat();
