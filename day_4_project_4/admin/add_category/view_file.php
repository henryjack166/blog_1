<?php
echo "<pre>";
print_r($_POST);
print_r($_FILES);
$pic_name=$_FILES['picture']['name'];
$director= 'images/';
$target_file=$director.$pic_name;
$file_type=pathinfo($pic_name,PATHINFO_EXTENSION);

$chack=getimagesize($_FILES['picture']['tmp_name']);
if($chack){
    if(!file_exists($target_file)){
        if($file_type=='jpg' || $file_type=='png'){
        if($_FILES['picture']['size']<1000000){
            move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
            echo "Successfull";
        }else{
            die("Your file size is too large. Thanks!!!");
        }
    }else{
        die("Please use jpg or png image file. Thanks!!");
    }
    }else{
        die("file already exist. thanks!!!");
    }
}else{
    die("please use an image file. Thanks!!!");
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="picture" accept="image/*">
    <input type="submit" name="btn" value="Submit">
</form>