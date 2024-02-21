<?php

namespace  App\class ;
 class HelloWorld 
 {
    public $message, $x, $y, $z ;
    public function __construct()
    {
       $this->message = "Hello World" ;
       $this->x = 10 ;
       $this->y = 20 ;
    }
    public function index()
    {
         echo '<br/>' ;
         $this->x + $this->y ;
         echo '<br/>' ;
         $this->x - $this->y ;
         echo '<br/>' ;
         $this->x * $this->y ;
         echo '<br/>' ;
         $this->x / $this->y ;
         echo '<br/>' ;
         $this->x % $this->y ;
       // echo $this->mesage ;
    }
 }
 ?>