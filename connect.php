<?php
    $FirstName= $_POST['First_Name'];
    $LastName= $_POST['Last_Name'];
    $PhoneNumber= $_POST['Phone_Number'];
    $Type= $_POST['Type'];
    $Quantity= $_POST['Quantity'];
    $StreetAddress= $_POST['Street_Address'];
    $City= $_POST['City'];
    $State= $_POST['State'];
echo $State;
//Database Connection
  $conn = new mysqli('localhost','root','','ccl');
  if($conn->connect_error){
	   die('Connection Failed :'.$conn->connect_error);
  }else{
	   $stmt = $conn->prepare("insert into order_details(First_Name, Last_Name, Phone_Number, Type, Quantity, Street_Address, City, State);
		  values(?, ?, ?, ?, ?, ?, ?, ?)");
	   $stmt->bind_param("ssisisss",$FirstName, $LastName, $PhoneNumber, $Type, $Quantity, $StreetAddress, $City, $State);
	   $stmt->execute();
	   echo "Order Placed Successfully";
	   $stmt->close();
	   $conn->close();

  }

?>