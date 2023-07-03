<?php
include('conn.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student ID card</title>
</head>
<body>
    <table>
    <tr>
        <th>S/N</th>
    <th>Name </th>
    <th>Reg. No.</th>
    <th>Department</th>
    <th>Year Admitted</th>
    <th>Passport</th>
    <th>Action</th>
  </tr>
  <?php
  $id = 1;
  
$fetch = "SELECT * FROM details ";
$qfetch = mysqli_query($conn, $fetch);
while($row=mysqli_fetch_array($qfetch)){
   
    ?>
  <tr>
    <th><?php echo $id++; ?></th>
    <th><?php echo $row['name']?></th>
    <th><?php echo $row['matric']?></th>
    <th><?php echo $row['dept']?></th>
    <th><?php echo $row['adm_year']?></th>
    <th><img src="passport/<?php echo $row['passport']?>" width="50"/></th>
    <th><a href="idcard.php?id=<?php echo $row['id'];?>"><button>View</button></a> <a href="delete.php?id=<?php echo $row['id'];?>"><button>delete</button></th>
    
  </tr>
    </table>
<?php } ?>
    </form>
</body>
</html>