<?php

  $server="";
  $username="";
  $password="";
  $dbname="";

  $conn = phpmyadmin_connect($server,$username,$password,$dbname);

  if(!$conn){
  	die("connection failed:".phpmyadmin_connect_error());

  }
 ?>