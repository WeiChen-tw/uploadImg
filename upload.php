<?php
include 'Database.php';
//取得上傳檔案資訊
// header('Content-Type: application/json; charset=UTF-8');
// if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];
    $filesize = $_FILES['image']['size'];
    $file = NULL;

    if (isset($_FILES['image']['error'])) {
        if ($_FILES['image']['error'] == 0) {
            $instr = fopen($tmpname, "rb");
            $file = addslashes(fread($instr, filesize($tmpname)));
        }
    }
    $conn=new DB(); 
    $sql = sprintf("insert into test(img)values(%s)", "'" . $file . "'");
    $conn->insert($sql);
    var_dump($_FILES['image']);
//}
    // header('Content-Type: application/json; charset=UTF-8');
    // if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
    //     @$file = $_POST["image"];
    //     if($file!=null){
    //         $conn=new DB();  
    //         $sql=sprintf("insert into test(img)values(%s)","'".$file."'");
    //         $conn->insert($sql);            
    //     }
    // }
    //新增圖片到資料庫
