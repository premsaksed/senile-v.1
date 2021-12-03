<?php 
include_once '../connection.php';

$ID = $_POST['ID'];
$Username = $_POST['Username'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];



$sql = "UPDATE `user` SET `Username`='$Username',
`Firstname`='$Firstname',`Lastname`='$Lastname'
 WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรายการสำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรายการไม่สำเร็จ');";
  echo"window.location = 'table-datatable.php'; " . $sql;
  echo"</script>";
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>