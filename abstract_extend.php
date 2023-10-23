<?php

abstract class A{
   abstract function display();
           
}

abstract class B extends A{
    abstract function show();
            
 }

 class Test extends B{
      function show()
      {
        echo "show";
      } 
      function display()
      {
          echo "display";
      } 
        
      
 }

 $t= new Test();
 $t->display();