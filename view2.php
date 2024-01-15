<?php 
include('db.php');

// Retrieve data from the database
$sql = "SELECT * FROM shirt ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> SHIRT DATA  </h1> ";

     echo "<a href='create2.php'>CREATE USER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> ID </th> 
    <th> brand_name </th> 
    <th> size </th> 
    <th> quantity </th> 
    <th> MORE </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['ID'];                

         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["brand_name"]. "</td> 
         <td> " . $row["size"]. "</td> 
         <td>" . $row["quantity"]. "</td>
         <td> " . $row["MORE"]. "</td>";

        echo "<td><a href='update2.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete2.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            background: black;
}
table {
  border: 5px dotted #B36C6C;
}

</style>


