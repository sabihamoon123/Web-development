<?php
namespace app\classes ;
class HelloWorld
{
    public $message, $x, $y, $z ;
    public function __construct()
    {
        $this->message = "Hello World" ;
        $this->x = 10 ;
        $this->y = 20 ;
        $this->z = 30 ;
    }
    public function index()
    {
        $this->x = false ;
        echo $this->x ;


        // echo '<br/>' ;
        // echo ($this->x > $this->y) || ($this->y > $this->z) ;
        // echo '<br/>' ;
        // echo ($this->x < $this->y) || ($this->y > $this->z) ;
        // echo '<br/>' ;
        // echo ($this->x > $this->y) || ($this->y < $this->z) ;
        // echo '<br/>' ;
        // echo ($this->x < $this->y) || ($this->y < $this->z) ;


        // echo $this->x !== $this->y ;


        // echo '<br/>' ;
        // echo $this->x += $this->y ;
        // echo '<br/>' ;
        // echo $this->x -= $this->y ;
        // echo '<br/>' ;
        // echo $this->x *= $this->y ;
        // echo '<br/>' ;
        // echo $this->x /= $this->y ;
        // echo '<br/>' ;
        // echo $this->x %= $this->y ;
        // echo '<br/>' ;
        // echo $this->x-- ;
        // echo '<br/>' ;
        // echo $this->x ;
        // echo '<br/>' ;
        // echo $this->x ;
        // echo '<br/>' ;
        // echo $this->x ;
        // echo '<br/>' ;
        // echo $this->x ;
        // $this->x = 10 ;
        // $this->x = 5 ;
        // echo $this->x ;
        // echo '<br/>' ;
        // echo $this->x + $this->y ;
        // echo '<br/>' ;
        // echo $this->x - $this->y ;
        // echo '<br/>' ;
        // echo $this->x * $this->y ;
        // echo '<br/>' ;
        // echo $this->x / $this->y ;
        // echo '<br/>' ;
        // echo $this->x % $this->y ;
    }
}
?>