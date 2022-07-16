<?php
/*
Test file

Tested for links:

http://localhost/index.php
http://localhost/
http://localhost/index.php/
http://localhost/url/index.php    
http://localhost/url/index.php/  
http://localhost/url/ab
http://localhost/url/ab/c
*/

include ('./Config.php');

class Home
{
    use URL;
}

$h = new Home();

?>

<a href="<?=$h->get['base_url'].'/integrador/consulta.php'?>">Base</a>