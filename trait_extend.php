<?php 

trait Name{
    function info(){
        echo "imran";
    }
}

trait Age{
    use Name;
    function b(){
        echo "b";
    }
}

class C{ 
   use Age;
}

$c=new C();
$c->b();