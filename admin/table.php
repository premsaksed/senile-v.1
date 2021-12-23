<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<?php
include_once 'head.php';
include_once '../connection.php';
?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>รายการ</h3>
                <br><br>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <form action="" class="form" method="post">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="first-name-column">หัวข้อการค้นหา</label>
                                <fieldset class="form-group">
                                    <select name="resu" class="form-select" id="basicSelect">
                                        <option value="result_blood_pressure">ความดันโลหิต</option>
                                        <option value="result_heart">การเต้นหัวใจ</option>
                                        <option value="result_BMI">ค่า BMI</option>
                                        <option value="result_waistline">เส้นรอบเอว</option>
                                        <option value="result_walk">เดิน 6 นาที (6 minutes walk)</option>
                                        <option value="result_Stepinplace">ดินย่ำเท้า 2 นาที (2 minutes Step in place)</option>
                                        <option value="result_Chair_stand">ลุกยืนจากเก้าอี้ (30-sec Chair stand test)</option>
                                        <option value="result_Arm">งอแขนพับศอก (Arm Curl test)</option>
                                        <option value="result_Sit">นั่งเก้าอี้ยื่นแขนแตะปลายเท้า (Sit-and-reach test)</option>
                                        <option value="result_Back_scratch">การเอื้อมแขนแตะมือด้านหลัง (Back scratch)</option>
                                        <option value="result_up_and_go">การลุกเดินจากเก้าอี้ไปและกลับ (8-Feet up and go)</option>

                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">

                            <div class="form-group">
                                <label for="first-name-column">หัวข้อการค้นหา</label>
                                <fieldset class="form-group">
                                    <select name="st" class="form-select" id="basicSelect">
                                        <option value="1">ต่ำกว่าเกณฑ์</option>
                                        <option value="2">ปกติ </option>
                                        <option value="3">สูงกว่าเกณฑ์</option>
                                    </select>
                                </fieldset>
                            </div>

                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <label for="first-name-column">หัวข้อการค้นหา</label>
                                <fieldset class="form-group">
                                    <select name="en" class="form-select" id="basicSelect">
                                        <option value="1">ต่ำกว่าเกณฑ์</option>
                                        <option value="2">ปกติ </option>
                                        <option value="3">สูงกว่าเกณฑ์</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-2 mt-3 col-12">
                            <button type="submit" class="btn btn-primary me-1 mb-1">ค้นหา</button>
                            <!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> -->
                        </div>
                    </div>
                </form>
            </div>


            <div class="card-body">
                <table class='table table-striped' id="">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อ</th>
                            <th>อายุ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>ที่อยู่</th>
                            <th>ตำบล</th>
                            <th>อำเภอ</th>
                            <th>จังหวัด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $re = $_POST['resu'];
                        $st = $_POST['st'];
                        $en = $_POST['en'];


                        $sql = "SELECT Records.ID,Records.fname,Records.age,Records.gender,Records.address,Records.phone,Records.NO,amphures.name_th as amp ,provinces.name_th as pro,districts.name_th as dis FROM Records
                        INNER JOIN amphures ON Records.amperes = amphures.id  
                        INNER JOIN provinces ON Records.province = provinces.id 
                        INNER JOIN districts ON Records.district= districts.id WHERE $re between '$st' AND '$en'";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // output data of each row
                        ?>
                                <tr>
                                    <td><?php $number += 1; echo $number;  ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td> <?php echo $row['address']; ?> </td>
                                    <td> <?php echo $row['dis']; ?> </td>
                                    <td> <?php echo $row['amp']; ?> </td>
                                    <td> <?php echo $row['pro']; ?> </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2020 &copy; Voler</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>