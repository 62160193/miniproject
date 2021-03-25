<center><h4>เพิ่มเมนูสำเร็จ</h4>
<h2><form method="post" action="main.html">
        <input type="submit" value="กลับหน้าหลัก">
    </form><h2></center></h2>
<?php
    // connect database 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "project";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");
    
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {

    }
    
    if(isset($_POST['upload']))
{
    $menu = $_POST['menu'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $picture = $_FILES['images']['name'];
    $target = "picture/".basename($picture);
    $sql = mysqli_query($mysqli,"INSERT INTO rest VALUES ('$menu', '$price' , '$detail  ' , '$picture' )");
    if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
    }
}

     

    

         
   

