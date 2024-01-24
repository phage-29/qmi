<?php 
 include '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QUEUEMYID</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-black sidebar sidebar-dark accordion " id="accordionSidebar"
            style="background-image: url(img/greensidebar.png); ">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">

                <div class="sidebar-brand-text mx-3">QUEUEMYID</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="queues.php">
                    <i class='fas fa-user-check' style='font-size:24px'></i>
                    <span>Pending</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class='fas fa-user-friends' style='font-size:24px'></i>
                    <span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="queuesstatus.php">
                    <i class='fas fa-address-card' style='font-size:24px'></i>
                    <span>Queue Status</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notification.php">
                    <i class='fas fa-bell' style='font-size:24px'></i>
                    <span>Notifications</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle" src="../img/PhinmaLogo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="container-fluid">
                            <h1 class="px-4 fw-bold h3 mb-0 text-gray-800">Accounts</h1>

                            <!-- Table Of Pending Students 
                            <title>Pending Students Table</title>-->
                            </head>

                            <body>

                                <div class="container-fluid mt-4">
                               
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>ID Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $get_account = mysqli_query($conn,"SELECT * FROM users WHERE user_type = 'Student'");
                                                while($account  = mysqli_fetch_array($get_account)){

                                             
                                            ?>
                                            <tr>
                                                <td><?php echo $account['id']; ?></td>
                                                <td><?php echo $account['firstname'].' '.$account['lastname']; ?></td>
                                                <td><?php echo $account['id_number']; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#more<?php echo $account['id']; ?>">View More</a>
                                                </td>
                                                
                                            </tr>
                                            <div class="modal" id="more<?php echo $account['id']; ?>" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Account Information</h5>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" ><i class="bi bi-x-lg text-danger"></i></button>
                                                </div>
                                                <div class="modal-body">
                                                        <form action="process.php?id=<?php echo $account['id']; ?>" method="POST">

                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                                    <input type="text" name="ln" class="form-control" value="<?php echo $account['lastname']; ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                                    <input type="text" name="fn" class="form-control" value="<?php echo $account['firstname']; ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                                                    <input type="text" name="email" class="form-control" value="<?php echo $account['email']; ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-calendar"></i></div>
                                                                    <input type="text" name="date_created" class="form-control" value="<?php echo $account['date_created']; ?>" readonly> 
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                                    <input type="text" name="username" class="form-control" value="<?php echo $account['username']; ?>" > 
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="col-md-6 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                                    <input type="text" name="acc_stat" class="form-control" value="<?php echo $account['accountStatus']; ?>" > 
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mb-3">
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                                                    <input type="text" name="id_number" class="form-control" value="<?php echo $account['id_number']; ?>" > 
                                                                </div>
                                                            </div>


                                                        </div>
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="del_account" class="btn btn-danger" onclick="return confirm('Do you want to delete this account?')">Delete</button>
                                                    <button type="submit" name="upd_account" class="btn btn-success">Save changes</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                            <?php 
                                                   }
                                            ?>
                                         
                                        </tbody>
                                    </table>
                                </div>
                        </div>


                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-success" href="../index.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>