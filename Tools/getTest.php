<?php
require_once '../ServiceObjects/PictureProcessing.php';
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//BASE PAGE FOR THE DROPPING OF ALL PICTURES; IT IS ALWAYS NEEDED; IMAGES SENT TO BE PRINTED HERE FROM
//THE DATABASE TOGETHER WITH A SPECIFIC ID FROM THE REQUESTING PAGE TO GET THE SPECIFIC ID(the id should be always sent as 
//a GET variable over to this page)
$picUpload= new PictureProcessing();
$picUpload->secondPageImageGet();

/*
 * GENERIC CODE FOR GETTING IMAGE FROM DATABASE AND ECHOING IT
$connection=  mysql_connect("localhost","root","cyberdex");
$dbselection= mysql_select_db("compEngDb",$connection);
$image= mysql_query("SELECT * FROM  imageStore where imageID=25");
$image=mysql_fetch_assoc($image);
$image=$image['image'];
      
header("Content-type: image/jpeg");
      
echo $image;*/

?>
