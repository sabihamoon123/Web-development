<?php

require_once 'vendor\autoload.php' ;
use App\classes\Home ;
$home = new Home() ;
if ($_GET['page'] == 'home')
{
    $home->index() ;
}
elseif($_GET['page'] == 'about')
{
    $home->about() ;
}
elseif($_GET['page'] =='contact')
{
    $home->contact() ;
}
elseif($_GET['page'] =='detail')
{
    $home->detail($_GET['id']) ;
}