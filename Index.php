<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QueMyID</title>
  <link rel="stylesheet" href="style.css" />
  <link href="img/PhinmaLogo.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #F0F0F0;
      padding:0;
      margin:0;
      box-sizing: border-box;
      overflow: hidden;
    }
    h1 {text-align: center;
    font-style:  arial;
  font-size: xx-large;}

    h2 {
      text-align: center;
      font-style: arial;
      font-size: x-large;
      font-weight: normal;
    }

    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
</head>

<body>

  <div class="modal fade" id="reg-student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up as Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="process.php" method="POST">
            <div class="mb-3">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                placeholder="Confirm Password" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="idNumber" name="idNumber" placeholder="ID Number" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="nameGiven" name="namegiven" placeholder="Given Name" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="nameMiddle" name="namemiddle" placeholder="Middle Name"
                required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="nameFamily" name="namefamily" placeholder="Family Name"
                required>
            </div>
            <div class="mb-3">
              <input type="date" class="form-control" id="dateOfBirth" name="date" placeholder="Date of Birth" required>
            </div>
            <div class="mb-3">
              <p class="text-muted">Gender</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
            <input type="hidden" name="usertype" value="Student">
            <button type="submit" class="btn btn-primary" name="register_user1">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/footerlogo.png" class="img-fluid" alt="Sample image" />
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="process.php" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            </div>
            <h1>QUEUEMYID</h1>
            <h2>Information Technology Services Department</h2>
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Log in As</label>
            <select name="type" class="form-select mb-3" aria-label="Default select example" required>
              <option value="Student">Student</option>
              <option value="Admin">Admin</option>
            </select>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Username</label>
              <input type="text" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter Your Username" name="username" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" name="password" required />
                
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button name="login" type="submit" class="btn btn-success btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem">
                Login
              </button>
              <p class="small fw-bold mt-2 pt-1 mb-0">
                Don't have an account?
                <a href="#!" class="link-danger" data-bs-toggle="modal" data-bs-target="#reg-student">Register</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  

   
    <div class=" d-flex flex-column flex-md-row text-center text-md-start justify-content-between  py-4 px-4 px-xl-5 bg-success">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        <img src="img/PhinmaLogo.png" alt="Your Logo" height="30">
        PHINMA UNIVERSITY OF ILOILO 2024-2025
      </div>
      <!-- Copyright -->
    </div>
    

  </section>
</body>

</html>