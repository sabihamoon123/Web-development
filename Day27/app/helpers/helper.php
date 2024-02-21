<?php



function view($view, $data = [], $print = true)
{
    $output = "View not found";
    $extension = "views/".$view.".php" ;    //views/home.php
    if (file_exists($extension))
    {
        extract($data) ;
        ob_start() ;
        include $extension ;
        $output = ob_get_clean() ;
    }
    if($print)
    {
        print $output ;
    }
}