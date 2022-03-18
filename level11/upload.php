<!DOCTYPE html>
<head>
    <meta charset="UTF-8"> 
    <title>上传图片文件</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" id="上传">
</form>
</body>
</html>
<?php
$allowedExs=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["file"]["name"]);
$extension=end($temp);
if (($_FILES["file"]["type"])=="image/gif"
    ||($_FILES["file"]["type"])=="image/jpeg"
    ||($_FILES["file"]["type"])=="image/jpg"
    ||($_FILES["file"]["type"])=="image/pjpeg"
    ||($_FILES["file"]["type"])=="image/x-png"
    ||($_FILES["file"]["type"])=="image/png"
    &&($_FILES["file"]["size"])<204800
    &&in_array($extension,$allowedExs)){
    if($_FILES["file"]["error"]>0){
        echo "错误：".$_FILES["file"]["error"]."<br/>";
    }
    else{
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        echo "文件储存在"."upload/".$_FILES["file"]["name"];
        }
    }
else{
    echo "mybe hack?";
}
  