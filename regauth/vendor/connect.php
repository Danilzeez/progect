<?php
    $connect =  mysqli_connect('localhost', 'root', '', 'reagauth');

    if (!$connect){
        die ('Error connect to Database');
    }