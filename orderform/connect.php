<?php
    $FirstName= $_POST['First_Name'];
    $LastName= $_POST['Last_Name'];
    $PhoneNumber= $_POST['Phone_Number'];
    $Type= $_POST['Type'];
    $Quantity= $_POST['Quantity'];
    $StreetAddress= $_POST['Street_Address'];
    $City= $_POST['City'];
    $State= $_POST['State'];
//Database Connection
    
    

  $conn = new mysqli('localhost','root','','ccl');


  if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO order_details (First_Name, Last_Name, Phone_Number, Type, Quantity, Street_Address, City, State) VALUES ('".$FirstName."','". $LastName."','". $PhoneNumber."','". $Type."','". $Quantity."','". $StreetAddress."','". $City."','". $State."')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);


?>