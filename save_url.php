

<?php

$host="localhost";
$username="root";
$password="";
$databasename="urldemo";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['short_url']))
{
 $url=$_POST["url_value"];
 $short_url=substr(md5($url.mt_rand()),0,8);
 mysql_query("insert into short_urls values('','$url','$short_url')");
 echo "Your New URL Is : http://xyz.com/url.php?u=".$short_url."";
}

?>