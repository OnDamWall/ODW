<?php
    require_once("../db/db.php");
    session_start();

    switch($_GET['mode']){
        case 'write':
            if(!$_SESSION['userid']){
                errMsg("로그인 해주세요");
            }

            $id = $_POST['id'];
            $userid = $_POST['userid'];
            $name = $_POST['name'];
            $title = $_POST['title'];
            $story = $_POST['story'];


             if($_FILES['image']['name']){
               $imageFullName = strtolower($_FILES['image']['name']);
               $imageNameSlice = explode(".",$imageFullName);
               $imageName = $imageNameSlice[0];
               $imageType = $imageNameSlice[1];
               $image_ext = array('jpg','jpeg','gif','png');
               if(array_search($imageType,$image_ext) === false){
                   errMsg('jpg, jpeg, gif, png 확장자만 가능합니다.');
               }
               $dates = date("mdhis",time());
               $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
               $dir = "image/";
               move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);
               chmod($dir.$newImage,0777);
            }

            $sql = $db -> prepare("INSERT INTO review
            (id, userid, name, title, story, redate,image)
            VALUE
            (:id, :userid, :name, :title, :story, now(),:image)");

            $sql -> bindParam("id", $id);
            $sql -> bindParam("userid",$userid);
            $sql -> bindParam("name",$name);
            $sql -> bindParam("title",$title);
            $sql -> bindParam("story",$story);
            $sql -> bindParam("image",$newImage);

            $sql -> execute();
            header("location:review.php");
        break;

        case 'update':
            $no = $_POST['no'];
            $newTitle = $_POST['title'];
            $newStory = $_POST['story'];

            $sql = $db -> prepare("UPDATE review SET title=:title, story=:story WHERE no=:no ");
            $sql -> bindParam("title",$newTitle);
            $sql -> bindParam("story",$newStory);
            $sql -> bindParam("no",$no);
            $sql -> execute();
            header("location:review.php");
        break;

        case 'delete':
            $no = $_GET['no'];

            $sql = $db -> prepare("DELETE FROM review WHERE no=:no");
            $sql -> bindParam("no",$no);
            $sql -> execute();

            header("location:review.php");
        break;
    }
?>