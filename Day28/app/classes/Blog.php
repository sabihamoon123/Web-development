<?php

namespace App\classes ;

class Blog 
{
    public $blogs = [] ;
    public function __construct()
    {
        $this->blogs =[
            0 => [
                'id'               => 1,
                'title'            => 'This is blog title one',
                'descripytion_one' => 'Lorem ipsum dolor sit amet consectetur ',
                'descripytion_two' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, fugiat!',
                'image'            => 's1.jpg' ,
            ] ,
            1 => [
                'id'               => 2,
                'title'            => 'This is blog title one',
                'descripytion_one' => 'Lorem ipsum dolor sit amet consectetur ',
                'descripytion_two' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, fugiat!',
                'image'            => 's2.jpg' ,
            ] ,
            2 => [
                'id'               => 3,
                'title'            => 'This is blog title one',
                'descripytion_one' => 'Lorem ipsum dolor sit amet consectetur ',
                'descripytion_two' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, fugiat!',
                'image'            => 's3.jpg' ,
            ] ,
            3 => [
                'id'               => 4,
                'title'            => 'This is blog title one',
                'descripytion_one' => 'Lorem ipsum dolor sit amet consectetur ',
                'descripytion_two' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, fugiat!',
                'image'            => 's3.jpg' ,
            ] ,
        ] ;
    }

    public function getAllBlog()
    {
        return $this->blogs ;
    }
}