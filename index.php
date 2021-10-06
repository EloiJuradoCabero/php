<?php
session_start();


$posts = array(
    "username" => array("hector","pepe"),
    "subjects" => array(),
    "body" => array()

);

$_SESSION["llistaPosts"]=$posts;

var_dump($_SESSION["llistaPosts"]);

?>