<?php include_once 'head.php';
include_once '../connection.php';





?>






<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>แก้ใขข้อมูลส่วนตัว</h3>
                <br><br> <!-- <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p> -->
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

    <?php $sql = "SELECT * FROM User";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // output data of each row
    ?>
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">แก้ใขข้อมูลส่วนตัว</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <form action="updatepro.php" method="post" class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>ชื่อ</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="first-name" class="form-control" name="Firstname" value="<?php echo $row['Firstname']; ?>" placeholder="กรุณากรอกชื่อ">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>นามสกุล</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="hidden" id="email-id" class="form-control" name="ID" value="<?php echo $row['ID']; ?> " placeholder="กรุณากรอกนามสกุล">
                                                    <input type="text" id="email-id" class="form-control" name="Lastname" value="<?php echo $row['Lastname']; ?>" placeholder="กรุณากรอกนามสกุล">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>ชื่อผู้ใช้งาน</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="contact-info" class="form-control" name="Username" value="<?php echo $row['Username']; ?>" placeholder="กรุณากรอกชื่อผู้ใช้งาน">
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">บันทึก</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">ยกเลิก</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">เปลี่ยนรหัสผ่าน</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="updatepass.php" method="post" class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <label>รหัสผ่าน</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group has-icon-left">
                                                        <div class="position-relative">
                                                            <input type="hidden" id="email-id" class="form-control" name="ID" value="<?php echo $row['ID']; ?> " placeholder="กรุณากรอกนามสกุล">

                                                            <input type="password" name="Password" class="form-control" placeholder="กรุรากรอกรหัสผ่าน">
                                                            <div class="form-control-icon">
                                                                <i data-feather="lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $con->close();
                                        ?>
                                        <div class="col-12 d-flex justify-content-end ">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">บันทึก</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">ยกเลิก</button>
                                        </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->


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

<script src="assets/js/main.js"></script>
</body>

</html>