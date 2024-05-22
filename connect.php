<?php 
$connect = mysqli_connect('localhost','root','','gg');

if (!$connect){
        die ('Error connect  to DataBase');
}