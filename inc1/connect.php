<?php 
$servername = "localhost";
$username = "root" ;
$pass = "";
$dbname = "sdlc";

$conn = mysqli_connect($servername , $username , $pass , $dbname);

if( !$conn ){
	die( "ket noi bi loi: " . mysqli_connect_error());
} 

