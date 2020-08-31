<?php
    include 'Database.php';
    //從資料庫取得圖片
    $conn=new DB();        
    
    
                    
    $sql=sprintf("select * from test where id=21");
            
    $result=$conn->select($sql);        
    //var_dump($result[0]['img']);
    // header("Content-type: image/jpeg");
    // print $result[0]['img'];
    //顯示圖片
    // if($row=mysql_fetch_assoc($result)){    
    //     header("Content-type: image/jpeg");     
    //     print $row['image'];
    // }
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<img src = <?="data:image/jpeg;base64,".base64_encode($result[0]['img'])?>>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
function showPreviewImage(src, fileName) {
    let image = new Image(250) // 設定寬250px
    image.name = fileName
    image.src = src // <img>中src屬性除了接url外也可以直接接Base64字串
    $("#previewDiv").append(image).append(`<p>File: ${image.name}`)
}
</script>
</body>
</html>