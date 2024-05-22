<?php
    $connect =  mysqli_connect('reg', 'root', '', 'users');

    if (!$connect){
        die ('Error connect to Database');
    }