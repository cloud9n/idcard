<?php
include('conn.php');
$id = $_GET['id'];
if($id==""){
    header("location:students.php");
}else{
$fetch = "SELECT * FROM details WHERE id=$id";
$qfetch = mysqli_query($conn, $fetch);
while($row=mysqli_fetch_array($qfetch)){
    $name=$row['name'];
    $matric=$row['matric'];
    $address=$row['addr'];
    $dept=$row['dept'];
    $year=$row['adm_year'];
    $passport=$row['passport'];
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/syle.css">
    <title>ID card - </title>
</head>
<body>
<div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="images/logo.png">
			</div>
			<div class="photo">
				<img src="passport/<?php echo $passport;?>" width="200">
			</div>
			<h2><?php echo $name;?></h2>
			<div class="qr-code">
			<h3><?php echo $dept;?></h3>
			<h3><?php echo $matric;?></h3>

				<img src="images/qr.png">
			</div>
			<h3><b>Year of Graduation: <?php echo $year;?></b></h3>
			<hr>
			<p><strong>Address</strong>No 13 Dorben Polytechnic Rd, Garam<p>
			<p><strong>Website: </strong>www.dorbenpoly.edu.ng</p>
			<p>Ph: 9446062493 | E-mail: info@dorbenpoly.edu</p>

		</div>
        
	</div>
    <button type="submit" onclick="window.print();">Print Id Card</button>
</body>
</html>