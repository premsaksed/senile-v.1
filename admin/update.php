<?php 
include_once '../connection.php';

$ID = $_POST['ID'];
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


$sql = "UPDATE `Records` SET `prefix`='$prefix',
`fname`='$fname',`gender`='$gender',`age`='$age',`address`='$address',
`province`='$province',`amperes`='$amperes',`district`='$district',
`phone`='$phone',`congenital`='$congenital',`blood_pressure`='$blood_pressure',
`result_blood_pressure`='$result_blood_pressure',`heart`='$heart',`result_heart`='$result_heart',
`weight`='$weight',`height`='$height',`BMI`='$BMI',`result_BMI`='$result_BMI'
,`waistline`='$waistline',`result_waistline`='$result_waistline',`walk`='$walk',
`result_walk`='$result_walk',`Stepinplace`='$Stepinplace',`result_Stepinplace`='$result_Stepinplace',
`Chair_stand`='$Chair_stand',`result_Chair_stand`='$result_Chair_stand',`Arm`='$Arm',
`result_Arm`='$result_Arm',`Sit`='$Sit',`result_Sit`='$result_Sit',`Back_scratch`='$Back_scratch',
`result_Back_scratch`='$result_Back_scratch',`up_and_go`='$up_and_go',`result_up_and_go`='$result_up_and_go'
,`NO`='$NO',`datesave`='$datesave',inspector='$inspector' WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรายการสำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
} else {
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรายการไม่สำเร็จ');";
  echo"window.location = 'table-datatable.php'; ";
  echo"</script>";
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>