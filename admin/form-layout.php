<?php include_once 'head.php'; ?>



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
                            <form action="insert.php" method="post" class="form">
                                <div class="row">
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">คำนำหน้า</label>
                                            <fieldset class="form-group">
                                                <select name="prefix" class="form-select" id="basicSelect">
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
                                            <input type="text" id="last-name-column" name="fname" class="form-control" placeholder="ชื่อ - นามสกุล" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="city-column">เพศ</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="gender" id="gender">
                                                <label for="city-column">ชาย</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-12">
                                        <div class="form-group">
                                            <label for="city-column"></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"value="2" name="gender" id="gender">
                                                <label for="city-column">หญิง</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">อายุ(เต็ม)</label>
                                            <input type="text" id="country-floating" class="form-control" name="age" placeholder="อายุ(เต็ม)">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">ที่อยู่</label>
                                            <input type="text" id="company-column" class="form-control" name="address" placeholder="บ้านเลขที่">
                                        </div>
                                    </div>
                                    <?php
                                    include('connect.php');
                                    $sql = "SELECT * FROM provinces";
                                    $query = mysqli_query($conn, $sql);
                                    ?>
                                    <div class="col-md-2 col-12">
                                        <label for="province">จังหวัด</label>
                                        <select name="province_id" id="province" class="form-control">
                                            <option value="">เลือกจังหวัด</option>
                                            <?php while ($result = mysqli_fetch_assoc($query)) : ?>
                                                <option value="<?= $result['id'] ?>"><?= $result['name_th'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <label for="amphure">อำเภอ</label>
                                        <select name="amphure_id" id="amphure" class="form-control">
                                            <option value="">เลือกอำเภอ</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <label for="district">ตำบล</label>
                                        <select name="district_id" id="district" class="form-control">
                                            <option value="">เลือกตำบล</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">เบอร์โทรศัพท์</label>
                                            <input type="text" id="company-column" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="company-column">โรคประจำตัว</label>
                                            <input type="text" id="company-column" class="form-control" name="congenital" placeholder="โรคประจำตัว">
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
                                                                <td><input type="text" id="company-column" class="form-control" name="blood_pressure" placeholder="ความดันโลหิต"></td>
                                                                <td class="text-bold-500">มิลลิเมตรปรอท</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_blood_pressure" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_blood_pressure" >
                                                                    <label for="city-column">เสี่ยง</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_blood_pressure" >
                                                                    <label for="city-column">สูง</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">อัตราการเต้นหัวใจ</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="heart" placeholder="อัตราการเต้นหัวใจ"></td>
                                                                <td class="text-bold-500">ครั้ง/นาที</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_heart" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_heart" >
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
                                                                <td colspan="2"><input type="text" id="company-column" class="form-control" name="weight" placeholder="น้ำหนัก"></td>
                                                                <td class="text-bold-500">กก.</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">ส่วนสูง</td>
                                                                <td colspan="2"><input type="text" id="company-column" class="form-control" name="height" placeholder="ส่วนสูง"></td>
                                                                <td class="text-bold-500">เซ็นติเมตร</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">ค่า BMI(ค่าปกติ 18.5-22.9)</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="BMI" placeholder="ค่า BMI(ค่าปกติ 18.5-22.9)"></td>
                                                                <td class="text-bold-500">มิลลิเมตรปรอท</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_BMI" >
                                                                    <label for="city-column">ต่ำกว่าปกติ</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_BMI" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_BMI" >
                                                                    <label for="city-column">สูงกว่าปกติ</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">เส้นรอบเอว</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="waistline" placeholder="เส้นรอบเอว"></td>
                                                                <td class="text-bold-500">ซม.</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_waistline" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_waistline" >
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
                                                                <td><input type="text" id="company-column" class="form-control" name="walk" placeholder="เดิน 6 นาที"></td>
                                                                <td class="text-bold-500">เมตร </td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_walk" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_walk" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_walk" >
                                                                    <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">
                                                                    เดินยำก้าว 2 นาที (2 minutes Step in place)</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="Stepinplace" placeholder="เดินยำก้าว 2 นาที"></td>
                                                                <td class="text-bold-500">จำนวนก้าว </td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_Stepinplace" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_Stepinplace" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_Stepinplace" >
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
                                                                <td><input type="text" id="company-column" class="form-control" name="Chair_stand" placeholder="กยืนจากเก้าอี้ "></td>
                                                                <td class="text-bold-500">ครั้ง</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_Chair_stand" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input"  value="2" type="radio" name="result_Chair_stand" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_Chair_stand" >
                                                                    <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">งอแขนพับศอก (Arm Curl test) </td>
                                                                <td><input type="text" id="company-column" class="form-control" name="Arm" placeholder="งอแขนพับศอก"></td>
                                                                <td class="text-bold-500">ครั้ง</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_Arm" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_Arm" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_Arm" >
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
                                                                <td><input type="text" id="company-column" class="form-control" name="Sit" placeholder="นั่งเก้าอี้ยื่นแขนแตะปลายเท้า"></td>
                                                                <td class="text-bold-500">นิ้ว</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_Sit" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_Sit" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_Sit" >
                                                                    <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">การเอื้อมแขนแตะมือด้านหลัง (Back scratch)</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="Back_scratch" placeholder="การเอื้อมแขนแตะมือด้านหลัง"></td>
                                                                <td class="text-bold-500">นิ้ว</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_Back_scratch" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_Back_scratch" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_Back_scratch" >
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
                                                                <td><input type="text" id="company-column" class="form-control" name="up_and_go" placeholder="การลุกเดินจากเก้าอี้ไปและกลับ"></td>
                                                                <td class="text-bold-500">วินาที</td>
                                                                <td>
                                                                    <input class="form-check-input" value="1" type="radio" name="result_up_and_go" >
                                                                    <label for="city-column">ต่ำกว่าเกณฑ์</label>
                                                                    <input class="form-check-input" value="2" type="radio" name="result_up_and_go" >
                                                                    <label for="city-column">ปกติ</label>
                                                                    <input class="form-check-input" value="3" type="radio" name="result_up_and_go" >
                                                                    <label for="city-column"> สูงกว่าเกณฑ์</label>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold-500">ครั้งที่ </td>
                                                                <td><input type="text" id="company-column" class="form-control" name="NO" placeholder="ครั้งที่"></td>
                                                                <td class="text-bold-500">ผู้ตรวจ</td>
                                                                <td><input type="text" id="company-column" class="form-control" name="inspector" placeholder="ผู้ตรวจ"></td>
                                                            </tr>

                                                        </tbody>
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
