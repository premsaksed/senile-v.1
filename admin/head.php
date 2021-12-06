<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                 <h5> ระบบ รายการประเมิณผล </h5> <!-- <img src="assets/images/logo.svg" alt="" srcset=""> -->
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>การจัดการ</li>
                        <li class="sidebar-item  ">
                            <a href="form-layout.php" class='sidebar-link'>
                                <i data-feather="file-plus" width="20"></i>

                                <span>เพิ่มรายการ</span>
                            </a>

                        </li>




                        <li class="sidebar-item  ">
                            <a href="table-datatable.php" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>รายการ</span>
                            </a>

                        </li>
                        <li class="sidebar-item  ">
                            <a href="table.php" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>ค้นหาตามหัวข้อ</span>
                            </a>

                        </li>
                        <li class="sidebar-item  ">
                            <a href="tableselect.php" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>ค้นหาตามที่อยู่</span>
                            </a>

                        </li>




                       


                        







                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block"><?php print_r($_SESSION['User']);?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="editpass.php"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>