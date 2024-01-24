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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-black sidebar sidebar-dark accordion " id="accordionSidebar" style="background-image: url(img/bgsidebar.png); "> 

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">

                <div class="sidebar-brand-text mx-3">QUEUEMYID</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="myqueues.php">
                    <i class='fas fa-user-friends' style='font-size:24px'></i>
                    <span>APPLICATION FORM</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="appointments.php">
                    <i class='fas fa-address-card' style='font-size:24px'></i>
                    <span>PENDING</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="ticket.php">
                    <i class='fas fa-address-card' style='font-size:24px'></i>
                    <span>CREATE TICKET</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Student</span>
                                <img class="img-profile rounded-circle" src="img/studentlogo.png">
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="container-fluid">
                            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="card">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                            <img src="img/Efraem.jpg" alt="Profile" class="rounded-circle" width="150">
                                            <h2>Efraem Gamuza</h2>
                                            <h3>Web Designer</h3>
                                            <div class="social-links mt-2">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-8">

                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <!-- Bordered Tabs -->
                                            <ul class="nav nav-tabs nav-tabs-bordered">

                                                <li class="nav-item">
                                                    <button class="nav-link active" data-toggle="tab"
                                                        data-target="#profile-overview">Overview</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-toggle="tab"
                                                        data-target="#profile-edit">Edit Profile</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-toggle="tab"
                                                        data-target="#profile-settings">Settings</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-toggle="tab"
                                                        data-target="#profile-change-password">Change
                                                        Password</button>
                                                </li>

                                            </ul>
                                            <div class="tab-content pt-2">

                                                <div class="tab-pane fade show active profile-overview"
                                                    id="profile-overview">
                                                    <h5 class="card-title">About</h5>
                                                    <p class="small fst-italic">I'm Efraem Gamuza 21 years old.</p>

                                                    <h5 class="card-title">Profile Details</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                        <div class="col-lg-9 col-md-8">Efraem Gamuza</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">School</div>
                                                        <div class="col-lg-9 col-md-8">University of Iloilo
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">status</div>
                                                        <div class="col-lg-9 col-md-8">Single</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                                        <div class="col-lg-9 col-md-8">Phillipines</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                                        <div class="col-lg-9 col-md-8"> Iloilo City, PH
                                                            535022</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                                        <div class="col-lg-9 col-md-8">09274338928</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                                        <div class="col-lg-9 col-md-8">efta.gamuza@example.com</div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                    <!-- Profile Edit Form -->
                                                    <form>
                                                        <div class="row mb-3">
                                                            <label for="profileImage"
                                                                class="col-md-4 col-lg-3 col-form-label">Profile
                                                                Image</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <img src="img/profile-img.jpg" alt="Profile">
                                                                <div class="pt-2">
                                                                    <a href="#" class="btn btn-primary btn-sm"
                                                                        title="Upload new profile image"><i
                                                                            class="bi bi-upload"></i></a>
                                                                    <a href="#" class="btn btn-danger btn-sm"
                                                                        title="Remove my profile image"><i
                                                                            class="bi bi-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="fullName"
                                                                class="col-md-4 col-lg-3 col-form-label">Full
                                                                Name</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="fullName" type="text" class="form-control"
                                                                    id="fullName" value="Efraem Gamuza">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="about"
                                                                class="col-md-4 col-lg-3 col-form-label">About</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <textarea name="about" class="form-control" id="about"
                                                                    style="height: 100px">I'm a good student of phinma University of Iloilo.</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="company"
                                                                class="col-md-4 col-lg-3 col-form-label">School</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="company" type="text" class="form-control"
                                                                    id="company" value="Iloilo City, PH">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Job"
                                                                class="col-md-4 col-lg-3 col-form-label">Status</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="job" type="text" class="form-control"
                                                                    id="Job" value="Status">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Country"
                                                                class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="country" type="text" class="form-control"
                                                                    id="Country" value="PH">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Address"
                                                                class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="address" type="text" class="form-control"
                                                                    id="Address"
                                                                    value="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Phone"
                                                                class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="phone" type="text" class="form-control"
                                                                    id="Phone" value="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Email"
                                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="email" type="email" class="form-control"
                                                                    id="Email" value="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Twitter"
                                                                class="col-md-4 col-lg-3 col-form-label">Twitter
                                                                Profile</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="twitter" type="text" class="form-control"
                                                                    id="Twitter" value="https://twitter.com/#">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Facebook"
                                                                class="col-md-4 col-lg-3 col-form-label">Facebook
                                                                Profile</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="facebook" type="text" class="form-control"
                                                                    id="Facebook" value="https://facebook.com/#">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Instagram"
                                                                class="col-md-4 col-lg-3 col-form-label">Instagram
                                                                Profile</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="instagram" type="text" class="form-control"
                                                                    id="Instagram" value="https://instagram.com/#">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Linkedin"
                                                                class="col-md-4 col-lg-3 col-form-label">Linkedin
                                                                Profile</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="linkedin" type="text" class="form-control"
                                                                    id="Linkedin" value="https://linkedin.com/#">
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </form><!-- End Profile Edit Form -->

                                                </div>

                                                <div class="tab-pane fade pt-3" id="profile-settings">

                                                    <!-- Settings Form -->
                                                    <form>

                                                        <div class="row mb-3">
                                                            <label for="fullName"
                                                                class="col-md-4 col-lg-3 col-form-label">Email
                                                                Notifications</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="changesMade" checked>
                                                                    <label class="form-check-label" for="changesMade">
                                                                        Changes made to your account
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="newProducts" checked>
                                                                    <label class="form-check-label" for="newProducts">
                                                                        Information on new products and services
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="proOffers">
                                                                    <label class="form-check-label" for="proOffers">
                                                                        Marketing and promo offers
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="securityNotify" checked disabled>
                                                                    <label class="form-check-label"
                                                                        for="securityNotify">
                                                                        Security alerts
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </form><!-- End settings Form -->

                                                </div>

                                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                                    <!-- Change Password Form -->
                                                    <form>

                                                        <div class="row mb-3">
                                                            <label for="currentPassword"
                                                                class="col-md-4 col-lg-3 col-form-label">Current
                                                                Password</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="password" type="password"
                                                                    class="form-control" id="currentPassword">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="newPassword"
                                                                class="col-md-4 col-lg-3 col-form-label">New
                                                                Password</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="newpassword" type="password"
                                                                    class="form-control" id="newPassword">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="renewPassword"
                                                                class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                                Password</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="renewpassword" type="password"
                                                                    class="form-control" id="renewPassword">
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Change
                                                                Password</button>
                                                        </div>
                                                    </form><!-- End Change Password Form -->

                                                </div>

                                            </div><!-- End Bordered Tabs -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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