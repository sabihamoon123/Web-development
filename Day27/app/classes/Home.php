<?php
namespace App\classes ;
class Home 
{
    public $students = [] ;
    public function __construct()
    {
        $this->students = [
            0 => [
                'id'    => 1 ,
                'name'  => 'moon' ,
                'email' => 'sabihamoon7@gmail.com' ,
                'mobile'=> [
                    'personal'   => '12345677' ,
                    'parent'     => '4679209849'
                ],
                'image' => '1.jpg'
            ],
            1 => [
                'id'    => 2 ,
                'name'  => 'wahaj' ,
                'email' => 'wahajali7@gmail.com' ,
                'mobile'=> [
                    'personal'   => '12356565' ,
                    'parent'     => '467967749'
                ],
                'image' => '1.jpg'
            ],
            2 => [
                'id'    => 3 ,
                'name'  => 'sabiha' ,
                'email' => 'sabihamoon7@gmail.com' ,
                'mobile'=> [
                    'personal'   => '12346787' ,
                    'parent'     => '46792099'
                ],
                'image' => '1.jpg'
            ],
        ] ;
    }

    public function index()
    {

        return view('home', ['students' => $this->students]) ;

        //echo '<pre>';
       // var_dump($this->students) ;



        // foreach ($this->students as  $student)
        // {
        //     foreach ($student as  $item)
        //     {
        //         if(is_array($item)){
        //             foreach($item as $value)
        //             {
        //                 echo $value. ' ' ;
        //             }
        //         }
        //         else{
        //             echo $item. ' ';
        //         }
               
        //     }
        //     echo '<br/>' ;
        //    // echo $student['name'].' '.$student['email'].' '.$student['mobile'] ;
        // }
       // echo $this->students[2]['name'] ;
    }
}
?>