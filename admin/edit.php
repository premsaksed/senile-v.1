<?php include_once 'head.php'; ?>

<?php
include_once '../connection.php';

$ID = $_GET['ID'];
$sql = "SELECT * FROM Records where ID = $ID";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

?>

<script language="javascript">
    //ความดัน ทดสอบแล้ว
    function fncCal1() {

        var blood_pressure = parseInt(document.form1.blood_pressure.value)
        if (blood_pressure < 120) {
            // document.getElementById("blood_pressure").innerHTML = 'ต่ำกว่าเกณณ์'
            document.form1.result_blood_pressure.value = "1"
        } else if (blood_pressure > 119 && blood_pressure < 130) {
            // document.getElementById("blood_pressure").innerHTML = 'ค่าปกติ'
            document.form1.result_blood_pressure.value = "2"
        } else {
            // document.getElementById("blood_pressure").innerHTML = 'สูงกว่าเกณฑ์'
            document.form1.result_blood_pressure.value = "3"
        }

    }
    //การเต้นหัวใจ ทดสอบแล้ว
    function fncCal2() {

        var heart = parseInt(document.form1.heart.value)

        if (heart >= 60 && heart <= 100) {

            // document.getElementById("heart").innerHTML = 'ปกติ'
            document.form1.result_heart.value = "1"
        } else {
            // document.getElementById("heart").innerHTML = 'เสี่ยง'
            document.form1.result_heart.value = "2"
        }

    }
    //ค่า BMI ทดสอบแล้ว
    function fncCal3() {

        var bmi = parseInt(document.form1.weight.value) / ((parseInt(document.form1.height.value) / 100) * (parseInt(document.form1.height.value) / 100))
        var bmi=bmi.toFixed(2);
        document.form1.BMI.value = bmi
        
        if (bmi >= 18.5 && bmi <= 22.9) {

            // document.getElementById("bmi").innerHTML = 'ปกติ'
            document.form1.result_BMI.value = "2"
        } else if (bmi < 18.5) {

            // document.getElementById("bmi").innerHTML = 'ต่ำ'
            document.form1.result_BMI.value = "1"
        } else {
            // document.getElementById("bmi").innerHTML = 'เสี่ยง'
            document.form1.result_BMI.value = "3"
        }

    }
    //รอบเอว ทดสอบแล้ว
    function fncCal4() {

        var gender = parseInt(document.form1.gender.value)
        var waistline = parseInt(document.form1.waistline.value)
        if (gender == 1) {
            if (waistline <= 90) {

                // document.getElementById("waistline").innerHTML = 'ปกติ'
                document.form1.result_waistline.value = "1"
            } else {
                // document.getElementById("waistline").innerHTML = 'เสี่ยง'
                document.form1.result_waistline.value = "2"
            }
        }
        if (gender == 2) {
            if (waistline <= 80) {

                // document.getElementById("waistline").innerHTML = 'ปกติ'
                document.form1.result_waistline.value = "1"
            } else {
                // document.getElementById("waistline").innerHTML = 'เสี่ยง'
                document.form1.result_waistline.value = "2"
            }
        }


    }
    // เดิน6นาที ทดสอบแล้ว
    function fncCal5() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var walk = parseInt(document.form1.walk.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (walk < 612) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 612 && walk <= 736) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (walk < 562) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 562 && walk <= 700) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (walk < 544) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 544 && walk <= 680) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (walk < 471) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 471 && walk <= 639) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (walk < 444) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 444 && walk <= 604) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (walk < 382) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 382 && walk <= 572) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (walk < 304) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 304 && walk <= 502) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (walk < 547) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 547 && walk <= 659) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (walk < 500) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 500 && walk <= 636) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (walk < 482) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 482 && walk <= 614) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (walk < 433) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 433 && walk <= 585) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (walk < 384) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 384 && walk <= 540) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (walk < 340) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 340 && walk <= 512) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (walk < 273) {
                    // document.getElementById("walk").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_walk.value = "1"
                } else if (walk >= 273 && walk <= 441) {
                    // document.getElementById("walk").innerHTML = 'ปกติ'
                    document.form1.result_walk.value = "2"
                } else {
                    // document.getElementById("walk").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_walk.value = "3"
                }
            }

        }

    }
    // ลุกยืนจากเก้าอี้ 30 วินาที ทดสอบแล้ว
    function fncCal6() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var Chair_stand = parseInt(document.form1.Chair_stand.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (Chair_stand < 14) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 14 && Chair_stand <= 19) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Chair_stand < 12) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 12 && Chair_stand <= 18) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Chair_stand < 12) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 12 && Chair_stand <= 17) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Chair_stand < 11) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 11 && Chair_stand <= 17) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Chair_stand < 10) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 10 && Chair_stand <= 15) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Chair_stand < 8) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 8 && Chair_stand <= 14) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Chair_stand < 7) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 7 && Chair_stand <= 12) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (Chair_stand < 12) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 12 && Chair_stand <= 17) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Chair_stand < 11) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 11 && Chair_stand <= 16) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Chair_stand < 10) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 10 && Chair_stand <= 15) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Chair_stand < 10) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 10 && Chair_stand <= 15) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Chair_stand < 9) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 9 && Chair_stand <= 14) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Chair_stand < 8) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 8 && Chair_stand <= 13) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Chair_stand < 4) {
                    // document.getElementById("Chair_stand").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "1"
                } else if (Chair_stand >= 4 && Chair_stand <= 11) {
                    // document.getElementById("Chair_stand").innerHTML = 'ปกติ'
                    document.form1.result_Chair_stand.value = "2"
                } else {
                    // document.getElementById("Chair_stand").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Chair_stand.value = "3"
                }
            }

        }

    }
    //งอแขนพับศอก ทดสอบแล้ว
    function fncCal7() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var Arm = parseInt(document.form1.Arm.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (Arm < 16) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 16 && Arm <= 22) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Arm < 15) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 15 && Arm <= 21) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Arm < 12) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 14 && Arm <= 21) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Arm < 13) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 13 && Arm <= 19) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Arm < 13) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 13 && Arm <= 19) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Arm < 11) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 11 && Arm <= 17) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Arm < 10) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 10 && Arm <= 14) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (Arm < 13) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 13 && Arm <= 19) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Arm < 12) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 12 && Arm <= 18) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Arm < 12) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 12 && Arm <= 17) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Arm < 11) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 11 && Arm <= 17) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Arm < 10) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 10 && Arm <= 16) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Arm < 10) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 10 && Arm <= 16) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Arm < 8) {
                    // document.getElementById("Arm").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Arm.value = "1"
                } else if (Arm >= 8 && Arm <= 13) {
                    // document.getElementById("Arm").innerHTML = 'ปกติ'
                    document.form1.result_Arm.value = "2"
                } else {
                    // document.getElementById("Arm").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Arm.value = "3"
                }
            }

        }

    }
    //นั่งเก้าอี้ยื่นแขนแตะปลายเท้า ทดสอบแล้ว
    function fncCal8() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var Sit = parseInt(document.form1.Sit.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (Sit < -2.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -2.5 && Sit <= 4) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Sit < -3.0) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -3.0 && Sit <= 3) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Sit < -3.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -3.5 && Sit <= 2.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Sit < -4.0) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -4.0 && Sit <= 2) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Sit < -5.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -5.5 && Sit <= 1.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Sit < -5.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -5.5 && Sit <= 0.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Sit < -6.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -6.5 && Sit <= 0.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (Sit < -0.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -0.5 && Sit <= 5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Sit < -0.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -0.5 && Sit <= 4.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Sit < -1) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -1.0 && Sit <= 4.0) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Sit < -1.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -1.5 && Sit <= 3.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Sit < -2.0) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -2.0 && Sit <= 3.0) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Sit < -2.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -2.5 && Sit <= 2.5) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Sit < -4.5) {
                    // document.getElementById("Sit").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Sit.value = "1"
                } else if (Sit >= -4.5 && Sit <= 1) {
                    // document.getElementById("Sit").innerHTML = 'ปกติ'
                    document.form1.result_Sit.value = "2"
                } else {
                    // document.getElementById("Sit").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Sit.value = "3"
                }
            }

        }

    }
    //การเอื้อมแขนแตะมือด้านหลัง ทดสอบแล้ว
    function fncCal9() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var Back_scratch = parseInt(document.form1.Back_scratch.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (Back_scratch < -6.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -6.5 && Back_scratch <= 0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Back_scratch < -7.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -7.5 && Back_scratch <= 1.0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Back_scratch < -8) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -8 && Back_scratch <= 1.0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Back_scratch < -9) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -9 && Back_scratch <= 2) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Back_scratch < -9.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -9.5 && Back_scratch <= 2) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Back_scratch < -10) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -10 && Back_scratch <= 3) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Back_scratch < -10.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -10.5 && Back_scratch <= 4) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (Back_scratch < -3.0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -3.0 && Back_scratch <= 1.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (Back_scratch < -3.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -3.5 && Back_scratch <= 1.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (Back_scratch < -4) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -4.0 && Back_scratch <= 1.0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (Back_scratch < -5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -5 && Back_scratch <= 0.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (Back_scratch < -5.5) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -5.5 && Back_scratch <= 0) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (Back_scratch < -7) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -7 && Back_scratch <= -1) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (Back_scratch < -8) {
                    // document.getElementById("Back_scratch").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "1"
                } else if (Back_scratch >= -8 && Back_scratch <= -1) {
                    // document.getElementById("Back_scratch").innerHTML = 'ปกติ'
                    document.form1.result_Back_scratch.value = "2"
                } else {
                    // document.getElementById("Back_scratch").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_Back_scratch.value = "3"
                }
            }

        }

    }
    //การลุกเดินจากเก้าอี้ไปและกลับ ทดสอบแล้ว
    function fncCal10() {
        var gender = parseInt(document.form1.gender.value)
        var age = parseInt(document.form1.age.value)
        var up_and_go = parseInt(document.form1.up_and_go.value)
        if (gender == 1) {
            if (age >= 60 && age <= 64) {
                if (up_and_go > 5.6) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 5.6 && up_and_go >= 3.8) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (up_and_go > 7.5) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 7.5 && up_and_go >= 4.3) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (up_and_go > 5.7) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= -8 && up_and_go >= 4.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (up_and_go > 6) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 6 && up_and_go >= 4.6) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (up_and_go > 7.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 7.2 && up_and_go >= 5.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (up_and_go > 8.9) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 8.9 && up_and_go >= 5.3) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (up_and_go > 10) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 10 && up_and_go >= 6.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }

        }

        if (gender == 2) {
            if (age >= 60 && age <= 64) {
                if (up_and_go > 6) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 6&& up_and_go >= 4.4) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 65 && age <= 69) {
                if (up_and_go > 6.4) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 6.4 && up_and_go >= 4.8) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 70 && age <= 74) {
                if (up_and_go > 7.1) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 7.1 && up_and_go >= 4.9) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 75 && age <= 79) {
                if (up_and_go > 7.4) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 7.4 && up_and_go >= 5.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 80 && age <= 84) {
                if (up_and_go > 8.7) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 8.7 && up_and_go >= 5.7) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 85 && age <= 89) {
                if (up_and_go > 9.6) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 9.6 && up_and_go >= 6.2) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else {
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }
            if (age >= 90 && age <= 94) {
                if (up_and_go > 11.5) {
                    // document.getElementById("up_and_go").innerHTML = 'ต่ำกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "1"
                } else if (up_and_go <= 11.5 && up_and_go >= 7.3) {
                    // document.getElementById("up_and_go").innerHTML = 'ปกติ'
                    document.form1.result_up_and_go.value = "2"
                } else if (up_and_go < 7.3){
                    // document.getElementById("up_and_go").innerHTML = 'สูงกว่าเกณฑ์'
                    document.form1.result_up_and_go.value = "3"
                }
            }

        }
    }
    //เดินย่ำเท้า 2 นาที ทดสอบแล้ว
        function fncCal11() {
            var gender = parseInt(document.form1.gender.value)
            var age = parseInt(document.form1.age.value)
            var Stepinplace = parseInt(document.form1.Stepinplace.value)
            if (gender == 1) {
                if (age >= 60 && age <= 64) {
                    if (Stepinplace < 87) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 87 && Stepinplace <= 116) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 65 && age <= 69) {
                    if (Stepinplace < 86) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 86 && Stepinplace <= 115) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 70 && age <= 74) {
                    if (Stepinplace < 80) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 80 && Stepinplace <= 110) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 75 && age <= 79) {
                    if (Stepinplace < 73) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 73 && Stepinplace <= 109) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 80 && age <= 84) {
                    if (Stepinplace < 71) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 71 && Stepinplace <= 103) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 85 && age <= 89) {
                    if (Stepinplace < 59) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 59 && Stepinplace <= 91) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 90 && age <= 94) {
                    if (Stepinplace < 52) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 52 && Stepinplace <= 86) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }

            }

            if (gender == 2) {
                if (age >= 60 && age <= 64) {
                    if (Stepinplace < 75) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 75 && Stepinplace <= 107) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 65 && age <= 69) {
                    if (Stepinplace < 73) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 73 && Stepinplace <= 107) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 70 && age <= 74) {
                    if (Stepinplace < 68) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 68 && Stepinplace <= 101) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 75 && age <= 79) {
                    if (Stepinplace < 68) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 68 && Stepinplace <= 100) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 80 && age <= 84) {
                    if (Stepinplace < 60) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 60 && Stepinplace <= 91) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 85 && age <= 89) {
                    if (Stepinplace < 55) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 55 && Stepinplace <= 85) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }
                if (age >= 90 && age <= 94) {
                    if (Stepinplace < 44) {
                        // document.getElementById("Stepinplace").innerHTML = 'ต่ำกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "1"
                    } else if (Stepinplace >= 44 && Stepinplace <= 72) {
                        // document.getElementById("Stepinplace").innerHTML = 'ปกติ'
                        document.form1.result_Stepinplace.value = "2"
                    } else {
                        // document.getElementById("Stepinplace").innerHTML = 'สูงกว่าเกณฑ์'
                        document.form1.result_Stepinplace.value = "3"
                    }
                }

            }

        }
</script>


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>แบบบันทึก</h3>
                <p class="text-subtitle text-muted">การประเมินสมรรถภาพการทำหน้าที่ทางกายผู้สูงอายุ</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form action="update.php" name="form1" method="post" class="form">
                                <input type="hidden" name="ID" value="<?php echo $row['ID'];  ?>"> <div class="row">
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">คำนำหน้า</label>
                                            <fieldset class="form-group">
                                                        <input type="hidden" name="ID" value="<?php echo $row['ID'];  ?>">
                                                        <select name="prefix" class="form-select" id="basicSelect">
                                                            <option value="<?php echo $row['prefix'];  ?>" selected ><?php if ($row['prefix'] == 1) {
                                                                                                                                        echo 'นาย';
                                                                                                                                    }
                                                                                                                                    if ($row['prefix'] == 2) {
                                                                                                                                        echo 'นาง';
                                                                                                                                    } if ($row['prefix'] == 3)  {
                                                                                                                                        echo 'นางสาว';
                                                                                                                                    }  ?></option>
                                                                                                                                    
                                                            <option value="1">นาย</option>
                                                            <option value="2">นาง</option>
                                                            <option value="3">นางสาว</option>
                                                        </select>
                                                    </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">ชื่อ - นามสกุล</label>
                                            <input type="text" id="last-name-column" value="<?php echo $row['fname']; ?>" name="fname" class="form-control" placeholder="ชื่อ - นามสกุล" name="lname-column">
                                         </div>
                                    </div>
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="city-column">เพศ</label>
                                            <div class="form-check">
                                            <input class="form-check-input" <?php if ($row['gender'] == 1) {
                                                                                            echo 'checked';
                                                                                        } else {
                                                                                        } ?> type="radio" value="1" name="gender" id="gender">
                                                        <label for="city-column">ชาย</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="city-column"></label>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" <?php if ($row['gender'] == 2) {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                        } ?> value="2" name="gender" id="gender">
                                                       <label for="city-column">หญิง</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">อายุ(เต็ม)</label>
                                            <input type="text" id="country-floating" class="form-control" value="<?php echo $row['age']; ?>" name="age" placeholder="อายุ(เต็ม)">
                                                                                                    </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">ที่อยู่</label>
                                            <input type="text" id="company-column" class="form-control" value="<?php echo $row['address']; ?>" name="address" placeholder="บ้านเลขที่">

                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 col-12">
                                        <label for="province">จังหวัด</label>
                                        <select name="province_id" id="province" class="form-control">
                                                    <?php
                                                    $province = $row['province'];
                                                    $sql = "SELECT * FROM provinces where id =$province ";
                                                    $query = mysqli_query($con, $sql);
                                                    while ($result = mysqli_fetch_assoc($query)) : ?>
                                                        <option value="<?= $result['id'] ?>"><?= $result['name_th'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <label for="amphure">อำเภอ</label>
                                        <select name="amphure_id" id="amphure" class="form-control">
                                                    <?php
                                                    $amphures = $row['amperes'];
                                                    $sql = "SELECT * FROM amphures where id =$amphures ";
                                                    $query = mysqli_query($con, $sql);
                                                    while ($result = mysqli_fetch_assoc($query)) : ?>
                                                        <option value="<?= $result['id'] ?>"><?= $result['name_th'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <label for="district">ตำบล</label>
                                        <select name="district_id" id="district" class="form-control">
                                                    <?php
                                                    $district = $row['district'];
                                                    $sql = "SELECT * FROM districts where id =$district ";
                                                    $query = mysqli_query($con, $sql);
                                                    while ($result = mysqli_fetch_assoc($query)) : ?>
                                                        <option value="<?= $result['id'] ?>"><?= $result['name_th'] ?></option>
                                                         <?php endwhile; ?>
                                                </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">เบอร์โทรศัพท์</label>
                                            <input type="text" id="company-column" class="form-control" value="<?php echo $row['phone']; ?>" name="phone" placeholder="เบอร์โทรศัพท์">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">โรคประจำตัว</label>
                                            <input type="text" id="company-column" class="form-control" value="<?php echo $row['congenital']; ?>" name="congenital" placeholder="โรคประจำตัว">
                                        </div>
                                    </div>
                                    <div class="row" id="table-bordered">
                                        <div class="col-12">
                                            <div class="card">

                                                <!-- table bordered -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>รายการประเมิณ</th>
                                                                <th>ค่าการประเมิน</th>
                                                                <th>หน่วย</th>
                                                                <th>การแปลผล</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-bold-500">ความดันโลหิต</td>
                                                                <td><input type="text" id="company-column" OnKeyUp="fncCal1();" value="<?php echo $row['blood_pressure']; ?>" class="form-control" name="blood_pressure" placeholder="ความดันโลหิต"></td>
                                                                <td class="text-bold-500">มิลลิเมตรปรอท</td>
                                                                <td>
                                                                            <input class="form-check-input" <?php if ($row['result_blood_pressure'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                            } ?> value="1" type="radio" name="result_blood_pressure">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" <?php if ($row['result_blood_pressure'] == 2) {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                            } ?> value="2" type="radio" name="result_blood_pressure">
                                                                            <label for="city-column">เสี่ยง</label>
                                                                            <input class="form-check-input" <?php if ($row['result_blood_pressure'] == 3) {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                            } ?> value="3" type="radio" name="result_blood_pressure">
                                                                            <label for="city-column">สูง</label>

                                                                        </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">อัตราการเต้นหัวใจ</td>
                                                                <td><input type="text" id="company-column" OnKeyUp="fncCal2();" class="form-control" value="<?php echo $row['heart']; ?>"  name="heart" placeholder="อัตราการเต้นหัวใจ"></td>
                                                                <td class="text-bold-500">ครั้ง/นาที</td>
                                                                <td>
                                                                            <input class="form-check-input" <?php if ($row['result_heart'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                            } ?> value="1" type="radio" name="result_heart">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" <?php if ($row['result_heart'] == 2) {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                            } ?> value="2" type="radio" name="result_heart">
                                                                            <label for="city-column">เสี่ยง</label>
                                                                        </td>
                                                            </tr>
                                                            <thead>
                                                                        <tr>
                                                                            <th colspan="4" class="text-bold-500">การประเมินองค์ประกอบร่างกาย ( Body composition assessments )</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tr>
                                                                        <td class="text-bold-500">น้ำหนัก</td>
                                                                        <td colspan="2"><input type="text" id="company-column" class="form-control" value="<?php echo $row['weight']; ?>" name="weight" placeholder="น้ำหนัก"></td>
                                                                        <td class="text-bold-500">กก.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">ส่วนสูง</td>
                                                                        <td colspan="2"><input type="text"  OnKeyUp="fncCal3();" id="company-column" class="form-control" value="<?php echo $row['height']; ?>" name="height" placeholder="ส่วนสูง"></td>
                                                                        <td class="text-bold-500">เซ็นติเมตร</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">ค่า BMI(ค่าปกติ 18.5-22.9)</td>
                                                                        <td><input type="number" step=0.01 id="company-column" class="form-control" value="<?php echo $row['BMI']; ?>" name="BMI" placeholder="ค่า BMI(ค่าปกติ 18.5-22.9)"></td>
                                                                        <td class="text-bold-500"></td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" <?php if ($row['result_BMI'] == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_BMI">
                                                                            <label for="city-column">ต่ำกว่าปกติ</label>
                                                                            <input class="form-check-input" value="2" <?php if ($row['result_BMI'] == 2) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_BMI">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" <?php if ($row['result_BMI'] == 3) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_BMI">
                                                                            <label for="city-column">สูงกว่าปกติ</label>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">เส้นรอบเอว</td>
                                                                        <td><input type="text" id="company-column" OnKeyUp="fncCal4();" class="form-control" value="<?php echo $row['waistline']; ?>" name="waistline" placeholder="เส้นรอบเอว"></td>
                                                                        <td class="text-bold-500">ซม.</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" <?php if ($row['result_waistline'] == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_waistline">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="2" <?php if ($row['result_waistline'] == 2) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_waistline">
                                                                            <label for="city-column">เส้นรอบเอวเกิน(อ้วน)</label>
                                                                        </td>
                                                                    </tr>


                                                                    <!-- การประเมินสมรรถภาพระบบหายใจและหลอดเลือด (Cardio respiratory fitness assessments) -->
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="4" class="text-bold-500">
                                                                                การประเมินสมรรถภาพระบบหายใจและหลอดเลือด (Cardio respiratory fitness assessments)</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tr>
                                                                        <td class="text-bold-500">เดิน 6 นาที (6 minutes walk)</td>
                                                                        <td><input type="text" id="company-column" OnKeyUp="fncCal5();" class="form-control" value="<?php echo $row['walk']; ?>" name="walk" placeholder="เดิน 6 นาที"></td>
                                                                        <td class="text-bold-500">เมตร </td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" <?php if ($row['result_walk'] == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_walk">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" <?php if ($row['result_walk'] == 2) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_walk">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" <?php if ($row['result_walk'] == 3) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_walk">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">
                                                                            เดินยำก้าว 2 นาที (2 minutes Step in place)</td>
                                                                        <td><input type="text" id="company-column"  OnKeyUp="fncCal11();" class="form-control" value="<?php echo $row['Stepinplace']; ?>" name="Stepinplace" placeholder="เดินยำก้าว 2 นาที"></td>
                                                                        <td class="text-bold-500">จำนวนก้าว </td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" <?php if ($row['result_Stepinplace'] == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_Stepinplace">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" <?php if ($row['result_Stepinplace'] == 2) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_Stepinplace">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" <?php if ($row['result_Stepinplace'] == 3) {
                                                                                                                            echo 'checked';
                                                                                                                        } else {
                                                                                                                        } ?> type="radio" name="result_Stepinplace">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>

                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="4" class="text-bold-500">การประเมินสมรรถภาพความแข็งแรงของกล้ามเนื้อ (Muscular fitness assessments)</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tr>
                                                                        <td class="text-bold-500">ลุกยืนจากเก้าอี้ (30-sec Chair stand test)</td>
                                                                        <td><input type="text" id="company-column" class="form-control" OnKeyUp="fncCal6();" value="<?php echo $row['Chair_stand']; ?>" name="Chair_stand" placeholder="กยืนจากเก้าอี้ "></td>
                                                                        <td class="text-bold-500">ครั้ง</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" type="radio" <?php if ($row['result_Chair_stand'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Chair_stand">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" type="radio" <?php if ($row['result_Chair_stand'] == 2) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Chair_stand">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" type="radio" <?php if ($row['result_Chair_stand'] == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Chair_stand">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">งอแขนพับศอก (Arm Curl test) </td>
                                                                        <td><input type="text" id="company-column" OnKeyUp="fncCal7();" class="form-control" value="<?php echo $row['Arm']; ?>" name="Arm" placeholder="งอแขนพับศอก"></td>
                                                                        <td class="text-bold-500">ครั้ง</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" type="radio" <?php if ($row['result_Arm'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Arm">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" type="radio" <?php if ($row['result_Arm'] == 2) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Arm">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" type="radio" <?php if ($row['result_Arm'] == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Arm">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>

                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="4" class="text-bold-500">การประเมินความยืดหยุ่นของกล้ามเนื้อและข้อต่อ (Flexibility assessments)</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tr>
                                                                        <td class="text-bold-500">นั่งเก้าอี้ยื่นแขนแตะปลายเท้า (Sit-and-reach test)</td>
                                                                        <td><input type="text" id="company-column"  OnKeyUp="fncCal8();" class="form-control" value="<?php echo $row['Sit']; ?>" name="Sit" placeholder="นั่งเก้าอี้ยื่นแขนแตะปลายเท้า"></td>
                                                                        <td class="text-bold-500">นิ้ว</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" type="radio" <?php if ($row['result_Sit'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Sit">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" type="radio" <?php if ($row['result_Sit'] == 2) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Sit">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" type="radio" <?php if ($row['result_Sit'] == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Sit">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">การเอื้อมแขนแตะมือด้านหลัง (Back scratch)</td>
                                                                        <td><input type="text" id="company-column"  OnKeyUp="fncCal9();" class="form-control" value="<?php echo $row['Back_scratch']; ?>" name="Back_scratch" placeholder="การเอื้อมแขนแตะมือด้านหลัง"></td>
                                                                        <td class="text-bold-500">นิ้ว</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" type="radio" <?php if ($row['result_Back_scratch'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Back_scratch">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" type="radio" <?php if ($row['result_Back_scratch'] == 2) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Back_scratch">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" type="radio" <?php if ($row['result_Back_scratch'] == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_Back_scratch">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="4" class="text-bold-500">การประเมินการทรงตัวและความว่องไว (Balance and Agility assessments)</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tr>
                                                                        <td class="text-bold-500">การลุกเดินจากเก้าอี้ไปและกลับ (8-Feet up and go)</td>
                                                                        <td><input type="text" id="company-column" OnKeyUp="fncCal10();" class="form-control" value="<?php echo $row['up_and_go']; ?>" name="up_and_go" placeholder="การลุกเดินจากเก้าอี้ไปและกลับ"></td>
                                                                        <td class="text-bold-500">วินาที</td>
                                                                        <td>
                                                                            <input class="form-check-input" value="1" type="radio" <?php if ($row['result_up_and_go'] == 1) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_up_and_go">
                                                                            <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                            <input class="form-check-input" value="2" type="radio" <?php if ($row['result_up_and_go'] == 2) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_up_and_go">
                                                                            <label for="city-column">ปกติ</label>
                                                                            <input class="form-check-input" value="3" type="radio" <?php if ($row['result_up_and_go'] == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } else {
                                                                                                                                    } ?> name="result_up_and_go">
                                                                            <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold-500">ครั้งที่ </td>
                                                                        <td><input type="text" id="company-column" class="form-control" value="<?php echo $row['NO']; ?>" name="NO" placeholder="ครั้งที่"></td>
                                                                        <td class="text-bold-500">ผู้ตรวจ</td>
                                                                        <td><input type="text" id="company-column" class="form-control" value="<?php echo $row['inspector']; ?>" name="inspector" placeholder="ผู้ตรวจ"></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bordered table end -->

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- // Basic multiple Column Form section end -->
</div>

<?php include_once 'footer.php'; ?>

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);
                                           }
                                            }?>