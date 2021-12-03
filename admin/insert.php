<?php 
include_once '../connection.php';

$prefix = $_POST['prefix'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$province = $_POST['province_id'];
$amperes = $_POST['amphure_id'];
$district = $_POST['district_id'];
$phone = $_POST['phone'];
$congenital = $_POST['congenital'];
$blood_pressure = $_POST['blood_pressure'];
$result_blood_pressure = $_POST['result_blood_pressure'];
$heart = $_POST['heart'];
$result_heart = $_POST['result_heart'];
$height = $_POST['height'];
$BMI = $_POST['BMI'];
$result_BMI = $_POST['result_BMI'];
$waistline = $_POST['waistline'];
$result_waistline = $_POST['result_waistline'];
$walk = $_POST['walk'];
$result_walk = $_POST['result_walk'];
$Stepinplace = $_POST['Stepinplace'];
$result_Stepinplace = $_POST['result_Stepinplace'];
$Chair_stand = $_POST['Chair_stand'];
$result_Chair_stand = $_POST['result_Chair_stand'];
$Arm = $_POST['Arm'];
$weight = $_POST['weight'];
$result_Arm = $_POST['result_Arm'];
$Sit = $_POST['Sit'];
$result_Sit = $_POST['result_Sit'];
$Back_scratch = $_POST['Back_scratch'];
$result_Back_scratch = $_POST['result_Back_scratch'];
$up_and_go = $_POST['up_and_go'];
$result_up_and_go = $_POST['result_up_and_go'];
$NO = $_POST['NO'];
$inspector = $_POST['inspector'];
$datesave = date("Y/m/d");


$sql = "INSERT INTO `Records`(`prefix`, `fname`, `gender`, `age`, `address`, `province`, 
`amperes`, `district`, `phone`, `congenital`, `blood_pressure`, `result_blood_pressure`, `heart`, 
`result_heart`, `weight`, `height`, `BMI`, `result_BMI`, `waistline`, `result_waistline`, `walk`, 
`result_walk`, `Stepinplace`, `result_Stepinplace`, `Chair_stand`, `result_Chair_stand`, `Arm`, 
`result_Arm`, `Sit`, `result_Sit`, `Back_scratch`, `result_Back_scratch`, `up_and_go`, 
`result_up_and_go`, `NO`,datesave,inspector) 
VALUES 
('$prefix', '$fname', '$gender', '$age', '$address', '$province', 
'$amperes', '$district', '$phone', '$congenital', '$blood_pressure', '$result_blood_pressure', '$heart', 
'$result_heart', '$weight', '$height', '$BMI', '$result_BMI', '$waistline', '$result_waistline', '$walk', 
'$result_walk', '$Stepinplace', '$result_Stepinplace', '$Chair_stand', '$result_Chair_stand', '$Arm', 
'$result_Arm', '$Sit', '$result_Sit', '$Back_scratch', '$result_Back_scratch', '$up_and_go', 
'$result_up_and_go', '$NO','$datesave','$inspector')";

if ($con->query($sql) === TRUE) {
  echo "<script type='text/javascript'>";
  echo "alert('เพิ่มรายการสำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('เพิ่มรายการไม่สำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>