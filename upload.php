<?php

try{
    move_uploaded_file($_FILES["selectImage"]["tmp_name"], 'test.jpg');
    echo 'OK';
} catch (Exception $ex) {
    echo $ex->getMessage();
}