<?php
include_once '../connection.php';
$ID = $_GET['ID'];

$sql = "DELETE FROM Records WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "<script type='text/javascript'>";
  echo "alert('ลบรายการสำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('ลบรายการไม่สำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
