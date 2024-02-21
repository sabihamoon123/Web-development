<?php
namespace App\classes ;

class HelloWorld 
{
    public $message, $x, $y, $z, $i, $data = [] ;
    public function __construct()
    {
        $this->message = "Hello World" ;
        $this->x = 10 ;
        $this->y = 10 ;

        // $this->data = [10, 20, 30, '+789654122', 'info@example.com', true, 100.20] ;
    }

    public function index()

    {

        $this->data = [ 
            0 => [
            'name'   => 'moon' ,
            'email'  =>  'sabihamoon7@gmail.com',
            'mobile' => '123456'
            ],
            1 => [
                'name'   => 'kkl' ,
                'email'  =>  'sauimoon7@gmail.com',
                'mobile' => '1236786'
            ],
            2 => [
                    'name'   => 'wahaj' ,
                    'email'  =>  'wahajali7@gmail.com',
                    'mobile' => '1234900'
            ],
            ] ;
            echo $this->data[0]['name'] ;
        // echo $this->data['city'] ;



    //    foreach($this->data as $key => $item)
    //    {
    //     echo '<br/>'.$key ;
    //    }

        // do{
        //     echo '<br/>'.$this->i ;
        //     $this->i++ ;
        // }while($this->i < 20) ;


        // while($this->i < 20){
        //     echo '<br/>'.$this->i ;
        //     $this->i++ ;
        // }



        // for($this->i = 30; $this->i >= 20 ; $this->i-- )
        // {
        //     echo '<br>'.$this->i ;
        // }
        



        // $this->z = $this->x + $this->y ;
        // switch ($this->z)
        // {
        //         case 10 :
        //             echo 'Hello World' ;
        //             break ;
        //         case 20 :
        //             echo 'Hello Bangladesh' ;
        //             break ;  
        //         case 30 :
        //             echo 'Hello BITM' ;
        //             break ;
        //         default :
        //             echo 'Hello Basis' ;
                            
        // }



        // if($this->z > 50){
        //     echo $this->z ;
        // }
        // elseif($this->y < $this->z){
        //     echo "HELLO BITM" ;
        // }
        // elseif ($this->z > $this->x)
        // {
        //    echo "HELLO BASIS" ;
        // }
        // else
        // {
        //       echo "hello php" ;
        // }
       
    }
}
?>
