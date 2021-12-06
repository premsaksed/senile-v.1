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
                        $province_id = $_POST['province_id'];
                        $amphure_id = $_POST['amphure_id'];
                        $district_id = $_POST['district_id'];

                                                // echo $province_id.' '.$amphure_id.' '.$district_id;
                        $sql = "SELECT Records.ID,Records.fname,Records.address,Records.age,Records.gender
                        ,Records.phone,Records.NO,amphures.name_th as amp ,provinces.name_th 
                        as pro,districts.name_th as dis FROM Records 
                        INNER JOIN amphures ON Records.amperes = amphures.id 
                        INNER JOIN provinces ON Records.province = provinces.id 
                        INNER JOIN districts ON Records.district= districts.id 
                        WHERE `district` = '$district_id' && `amperes` = '$amphure_id' && `province` = '$province_id';";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // output data of each row
                        ?>
                                <tr>
                                    <td><?php echo $row['ID']; ?></td>
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

<!--  -->

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);
