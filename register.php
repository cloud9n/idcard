<?php
include('conn.php');

if(isset($_POST["submit"])){
    
$target_dir = "passport/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file); 
    $name= $_POST['name'];
    $matric = $_POST['matric'];
    $address= $_POST['address'];
    $dept = $_POST['department'];
    $ad_year = $_POST['adm_year'];
    $passport =$_FILES['file']['name'];
 
    $insert = "INSERT INTO details(name, matric, addr, dept, adm_year, passport) values('$name', '$matric', '$address', '$dept', '$ad_year', ' $passport')";
        $qinsert = mysqli_query($conn, $insert);
        if($qinsert){
            echo "<script>alert('Registration was Successful') </script>";
        } else{
            echo "<script>alert('Registration was not successful') </script>";
    }  

} 
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ID Card System</title>
    <link rel="stylesheet" href="css/style2.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="#">IDPS</a>
        </div>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Register</a></li>
       
         
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="form-body">
    <div class="center">
        <div class="form-body">

            <form action="register.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="name" placeholder="Enter Your Full Name"/><br>
                <input type="text" name="matric" id="matric" placeholder="Matric Number"/><br>
                <input type="text" name="address" id="address" placeholder="Address"/><br>
                <input type="text" name="department" id="department" placeholder="Department "/><br>
                <input type="text" name="adm_year" id="adm_year" placeholder="Admission year"/><br>
                <input type="file" name="file" id="file" /><br>
                <button type="submit" name="submit">Sumit Details</button>
            </div>
    </div>
   
  </body>
</html>
