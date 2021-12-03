

<?php 
include_once '../connection.php';

$ID = $_POST['ID'];
$Pass = $_POST['Password'];
$Password = md5($Pass);




$sql = "UPDATE `user` SET `Password`='$Password'
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