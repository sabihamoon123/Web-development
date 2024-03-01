<?php
namespace App\classes ;
class Blog 
{
    public $blogs = [] ;
      
    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id'              => 1,
                'title'           => 'This is blog title one' ,
                'description_one' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'description_two' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'image'           => 's1.jpg',
            ],
            1 => [
                'id'              => 2,
                'title'           => 'This is blog title two' ,
                'description_one' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'description_two' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'image'           => 's2.jpg',
            ],
            2 => [
                'id'              => 3,
                'title'           => 'This is blog title three' ,
                'description_one' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'description_two' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'image'           => 's3.jpg',
            ],
            3 => [
                'id'              => 4,
                'title'           => 'This is blog title four' ,
                'description_one' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'description_two' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, temporibus!',
                'image'           => 's1.jpg',
            ],
        ] ;
    }

    public function getAllBlog()
    {
        return $this->blogs ;
    }
    public function getAllBlogById($id)
    {
      foreach ($this->blogs as $blog){
        if ($blog['id'] == $id) 
        {
            return $blog ;
        }
      }  
    }
}

