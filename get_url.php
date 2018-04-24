<?php
$host="localhost";
$username="root";
$password="";
$databasename="urldemo";

$connect=mysqli_connect($host,$username,$password,$databasename);
//$db=mysqli_select_db($connect,$databasename);
if(isset($_POST['original_url']))
{
 echo $url=$_POST["short_url_value"];
 echo $short_url=substr($url,25);
echo $sql = "select long_url from short_urls where short_url='$short_url'";
 $select=mysqli_query($connect,$sql);
  
 while($row=mysqli_fetch_array($select))
 {
  echo $row['long_url'];	  
 }
}
?>