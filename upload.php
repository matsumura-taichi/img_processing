<?php

try{
    if(!move_uploaded_file($_FILES["selectImage"]["tmp_name"], "./images/" . date('YmdGi', $_SERVER["REQUEST_TIME"]) . " .jpg")){
        throw new Exception('画像ファイルアップロードエラー！');
    }
    
    echo 'OK';
} catch (Exception $ex) {
    echo $ex->getMessage();
}