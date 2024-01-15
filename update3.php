<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $brand_name = $_POST['brand_name'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $COLOR = $_POST['COLOR'];

    $sql = "UPDATE women SET brand_name='$brand_name', size='$size', quantity='$quantity', COLOR='$COLOR' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view3.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}



?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<h2>BUYERS UPDATE</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM women WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Brand Name: </h4>
  <input type="text" name="brand_name" value="<?php echo $row['brand_name']?>">
<h4>  SIZE: </h4>
  <input type="text" name="size" value="<?php echo $row['size'] ?>">
<h4>  Quantity: </h4>
  <input type="text" name="quantity" value="<?php echo $row['quantity'] ?>">
<h4>  COLOR: </h4>
  <input type="text" name="COLOR" value="<?php echo $row['COLOR'] ?>">
<?php
 }
}  ?>
 <p> <input type="submit" name="update" value="Update User"></p> 
</form> 
    
<style type="text/css">
  
table {
  border: 5px dotted #B36C6C;
}




</style>


</style>
</body>
</html>