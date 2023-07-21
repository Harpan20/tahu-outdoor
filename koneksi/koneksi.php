<?php
/*
  | Source Code Aplikasi Rental Tahu Outdoor PHP & MySQL
  | 
  | @package   : Rental Perlengkapan Outdoor
  | @file	   : Tahu Outdoor.php 
  | @author    : M Rizki Saepul Rohman
  | 
  | 
  | 
 */ 

 try {
    $user = 'root';
    $pass = '';

    $koneksi = new PDO("mysql:host=127.0.0.1;dbname=rental_tahu_outdooor", $user, $pass);

    global $url;
    $url = "http://127.0.0.1/";

    $sql_web = "SELECT * FROM infoweb WHERE id = 1";
    $row_web = $koneksi->prepare($sql_web);
    $row_web->execute();
    global $info_web;
    $info_web = $row_web->fetch(PDO::FETCH_OBJ);

    error_reporting(0);
 } catch (\Throwable $th) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
 }
    
?>