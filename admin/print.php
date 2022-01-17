<!DOCTYPE html>
<html>

<head>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
     <link rel="stylesheet" href="print.css" media="print">
    <style>
        body {
            font-family: "Trirong", serif;
            font-size: 14px;
        }

        table {
  border-collapse: collapse;
}

        table {
            width: 100%;
            border-collapse: collapse;
        }
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

    </style>
</head>

<body>
    <div align="center">
    <button id="print" class="button button2" onclick="window.print();">print</button>

    </div>
<br>
    <table class="table table-bordered mb-0"><?php
                                                include_once '../connection.php';

                                                $ID = $_GET['ID'];
                                                $sql = "SELECT  Records.`prefix`,Records.`fname`,Records.`gender`,Records.`age`,Records.`address`,Records.`phone`,Records.NO,Records.`congenital`,
Records.`blood_pressure`,Records.`result_blood_pressure`,Records.`heart`,Records.`result_heart`,Records.`weight`,Records.`height`,Records.`BMI`
,Records.`result_BMI`,Records.`waistline`,Records.`result_waistline`,Records.`walk`,Records.`result_walk`,Records.`Stepinplace`
,Records.`result_Stepinplace`,Records.`Chair_stand`,Records.`result_Chair_stand`,Records.`Arm`,Records.`result_Arm`,Records.`Sit`
,Records.`result_Sit`,Records.`Back_scratch`
,Records.`result_Back_scratch`,Records.`up_and_go`,Records.`result_up_and_go`,Records.`inspector`,Records.`datesave`,amphures.name_th as amp ,provinces.name_th 
 as pro,districts.name_th as dis FROM Records 
 
 
INNER JOIN amphures ON Records.amperes = amphures.id 
INNER JOIN provinces ON Records.province = provinces.id 
INNER JOIN districts ON Records.district= districts.id";
                                                $result = $con->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?>



                <input type="hidden" name="ID" value="<?php echo $row['ID'];  ?>">
                






                <label for="last-name-column">ชื่อ <?php if ($row['prefix'] == 1) {
                                                            echo 'นาย';
                                                        }
                                                        if ($row['prefix'] == 2) {
                                                            echo 'นาง';
                                                        }
                                                        if ($row['prefix'] == 3) {
                                                            echo 'นางสาว';
                                                        }  ?> 
</label> <?php echo $row['fname']; ?>

<br><br>
                <label for="city-column">เพศ</label>
                <?php if ($row['gender'] == 1) {
                                                            echo 'ชาย';
                                                        }
                                                        if ($row['gender'] == 2) {
                                                            echo 'หญิง';
                                                        } else {
                                                        } ?>


                <label for="country-floating">อายุ(เต็ม)</label>
                <?php echo $row['age']; ?>

            
                <label for="company-column">โรคประจำตัว</label>
                <?php echo $row['congenital']; ?>

                <br><br>
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">

                            <!-- table bordered -->
                            <div class="table-responsive">
                                <table border="2"  width="100%" height="100%">
                                    <thead>
                                        <tr>

                                            <td colspan="4"  >บ้านเลขที่   <?php echo $row['address']; ?> <label for="province">จังหวัด</label>


                                                <?php echo $row['pro']; ?>



                                                <label for="amphure">อำเภอ</label>


                                                <?php echo $row['amp']; ?>

                                                <label for="district">ตำบล</label>

                                                <?php echo $row['dis']; ?>
                                            </td>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" >
                                             





                                                <label for="company-column">เบอร์โทรศัพท์</label>
                                                <?php echo $row['phone']; ?>



                                            </td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr  style="height:50px">
                                            <th>รายการประเมิณ</th>
                                            <th>ค่าการประเมิน</th>
                                            <th>หน่วย</th>
                                            <th>การแปลผล</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">ความดันโลหิต</td>
                                            <td><?php echo $row['blood_pressure']; ?></td>
                                            <td class="text-bold-500">มิลลิเมตรปรอท</td>
                                            <td>
                                                <?php if ($row['result_blood_pressure'] == 1) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_blood_pressure'] == 2) {
                                                            echo 'เสี่ยง';
                                                        }
                                                        if ($row['result_blood_pressure'] == 3) {
                                                            echo 'สูง';
                                                        } else {
                                                        } ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">อัตราการเต้นหัวใจ</td>
                                            <td><?php echo $row['heart']; ?></td>
                                            <td class="text-bold-500">ครั้ง/นาที</td>
                                            <td>
                                                <?php if ($row['result_heart'] == 1) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_heart'] == 2) {
                                                            echo 'เสี่ยง';
                                                        }  ?>
                                            </td>
                                        </tr>
                                        <thead>
                                            <tr>
                                                <td colspan="4"  style="height:40px" class="text-bold-500"><b>
                                                    การประเมินองค์ประกอบร่างกาย ( Body composition assessments )
                                                </b> </td>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td class="text-bold-500">น้ำหนัก</td>
                                            <td colspan="2"><?php echo $row['weight']; ?></td>
                                            <td class="text-bold-500">กก.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">ส่วนสูง</td>
                                            <td colspan="2"><?php echo $row['height']; ?></td>
                                            <td class="text-bold-500">เซ็นติเมตร</td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">ค่า BMI(ค่าปกติ 18.5-22.9)</td>
                                            <td><?php echo $row['BMI']; ?></td>
                                            <td class="text-bold-500">มิลลิเมตรปรอท</td>
                                            <td>
                                                <?php if ($row['result_BMI'] == 1) {
                                                            echo 'ต่ำกว่าปกติ';
                                                        }
                                                        if ($row['result_BMI'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_BMI'] == 3) {
                                                            echo 'สูงกว่าปกติ';
                                                        } else {
                                                        } ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">เส้นรอบเอว</td>
                                            <td><?php echo $row['waistline']; ?></td>
                                            <td class="text-bold-500">ซม.</td>
                                            <td>
                                                <?php if ($row['result_waistline'] == 1) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_waistline'] == 2) {
                                                            echo 'เส้นรอบเอวเกิน(อ้วน)';
                                                        } else {
                                                        } ?>
                                            </td>
                                        </tr>


                                        <!-- การประเมินสมรรถภาพระบบหายใจและหลอดเลือด (Cardio respiratory fitness assessments) -->
                                        <thead>
                                            <tr>
                                                <td colspan="4"  style="height:40px" class="text-bold-500"> <b>
                                                    
                                                    การประเมินสมรรถภาพระบบหายใจและหลอดเลือด (Cardio respiratory fitness assessments)
                                                </b></td>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td class="text-bold-500">เดิน 6 นาที (6 minutes walk)</td>
                                            <td><?php echo $row['walk']; ?></td>
                                            <td class="text-bold-500">เมตร </td>
                                            <td>
                                                <?php if ($row['result_walk'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        }
                                                        if ($row['result_walk'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_walk'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">
                                                เดินยำก้าว 2 นาที (2 minutes Step in place)</td>
                                            <td><?php echo $row['Stepinplace']; ?></td>
                                            <td class="text-bold-500">จำนวนก้าว </td>
                                            <td>
                                                <?php if ($row['result_Stepinplace'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        }

                                                        if ($row['result_Stepinplace'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_Stepinplace'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>

                                            </td>
                                        </tr>

                                        <thead>
                                            <tr>
                                                <td colspan="4"  style="height:40px" class="text-bold-500"> <b>
                                                    การประเมินสมรรถภาพความแข็งแรงของกล้ามเนื้อ (Muscular fitness assessments)
                                                </b> </td>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td class="text-bold-500">ลุกยืนจากเก้าอี้ (30-sec Chair stand test)</td>
                                            <td><?php echo $row['Chair_stand']; ?></td>
                                            <td class="text-bold-500">ครั้ง</td>
                                            <td>
                                                <?php if ($row['result_Chair_stand'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        }
                                                        if ($row['result_Chair_stand'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_Chair_stand'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">งอแขนพับศอก (Arm Curl test) </td>
                                            <td><?php echo $row['Arm']; ?></td>
                                            <td class="text-bold-500">ครั้ง</td>
                                            <td>
                                                <?php if ($row['result_Arm'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        }
                                                        if ($row['result_Arm'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_Arm'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>


                                            </td>
                                        </tr>

                                        <thead>
                                            <tr>
                                                <td colspan="4"  style="height:40px" class="text-bold-500"><b>
                                                     การประเมินความยืดหยุ่นของกล้ามเนื้อและข้อต่อ (Flexibility assessments)
                                                </b></td>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td class="text-bold-500">นั่งเก้าอี้ยื่นแขนแตะปลายเท้า (Sit-and-reach test)</td>
                                            <td><?php echo $row['Sit']; ?></td>
                                            <td class="text-bold-500">นิ้ว</td>
                                            <td>
                                                <?php if ($row['result_Sit'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        }
                                                        if ($row['result_Sit'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_Sit'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">การเอื้อมแขนแตะมือด้านหลัง (Back scratch)</td>
                                            <td><?php echo $row['Back_scratch']; ?></td>
                                            <td class="text-bold-500">นิ้ว</td>
                                            <td>
                                                <?php if ($row['result_Back_scratch'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        } else {
                                                        } ?>

                                                <?php if ($row['result_Back_scratch'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_Back_scratch'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        } else {
                                                        } ?>


                                            </td>
                                        </tr>
                                        <thead>
                                            <tr>
                                                <td colspan="4"  style="height:40px" class="text-bold-500"><b> การประเมินการทรงตัวและความว่องไว (Balance and Agility assessments)

                                                </b></td>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td class="text-bold-500">การลุกเดินจากเก้าอี้ไปและกลับ (8-Feet up and go)</td>
                                            <td><?php echo $row['up_and_go']; ?></td>
                                            <td class="text-bold-500">วินาที</td>
                                            <td>
                                                <?php if ($row['result_up_and_go'] == 1) {
                                                            echo 'ต่ำกว่าเกณฑ์';
                                                        } else {
                                                        } ?>

                                                <?php if ($row['result_up_and_go'] == 2) {
                                                            echo 'ปกติ';
                                                        }
                                                        if ($row['result_up_and_go'] == 3) {
                                                            echo 'สูงกว่าเกณฑ์';
                                                        }  ?>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">ครั้งที่ </td>
                                            <td><?php echo $row['NO']; ?></td>
                                            <td class="text-bold-500">ผู้ตรวจ</td>
                                            <td><?php echo $row['inspector']; ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <br>
                                <p> </p> <br><br>
                                <p> </p> <br><br>
                                <p> </p> <br><br><br>   
                                <? }
                                                } ?>