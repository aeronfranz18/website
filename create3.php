<?php include('db.php');

// Insert data into the database
if (isset($_POST['submit'])) {
    $brand_name = $_POST['brand_name'];
    $size = $_POST['size']; 
    $quantity = $_POST['quantity'];
    $COLOR = $_POST['COLOR'];
    
    $sql = "INSERT INTO women (brand_name, size, quantity, COLOR) VALUES ('$brand_name', '$size', '$quantity', '$COLOR')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view3.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style/style.css">
    <title></title>

</head>
<body>


   <center><h2> WOMEN SHIRT</h2></center>
    <center><form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Brand Name:<br>
      <input type="text" name="brand_name"><br>
      SIZE:<br>
      <input type="text" name="size"><br>
      Quantity:<br>
      <input type="text" name="quantity"><br>
      COLOR:<br>
      <input type="text" name="COLOR"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view3.php">BACK </a></center> 
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  background: skyblue;
}  

</body>
</html>
