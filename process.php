<?php

//This code is for sign up as a Student
include "conn.php";

date_default_timezone_set('Asia/Singapore');
$currentTime = date('m/d/Y h:i:s a', time());


if (isset($_POST['register_user1'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $idnumber = $_POST['idNumber'];
    $email = $_POST['email'];
    $namegiven = $_POST['namegiven'];
    $namemiddle = $_POST['namemiddle'];
    $namefamily = $_POST['namefamily'];
    $dateofbirth = strtotime($_POST['date']);
    $gender = $_POST['gender'];
    $usertype = $_POST['usertype'];


    //check username
    $query_username = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`= '$username'");
    $count_username = mysqli_num_rows($query_username);


    //checing  email if exist
    $query_email = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`= '$email'");
    $count_email = mysqli_num_rows($query_email);


    //check idnumber
    $query_idnumber = mysqli_query($conn, "SELECT * FROM `users` WHERE `id_number`= '$idnumber'");
    $count_idnumber = mysqli_num_rows($query_idnumber);


    if ($password == $confirmpassword) {

        if ($count_username == 0) {

            if ($count_email == 0) {

                if ($count_idnumber == 0) {

                    mysqli_query($conn, "INSERT INTO `users`
                (`user_type`, `username`, `password`, `id_number`, `email`, `date_created`, `accountStatus`,`firstname`,`lastname`)
                VALUES('$usertype', '$username', '$password', '$idnumber', '$email', NOW(), 'Active','$namegiven','$namefamily')");
                    
                    $last_id = mysqli_insert_id($conn);

                    mysqli_query($conn, "INSERT INTO `userinfo`
                (`user_id`, `name_given`, `name_middle`, `name_family`, `date_of_birth`, `gender`)
                VALUES($last_id, '$namegiven', '$namemiddle', '$namefamily', '$dateofbirth', '$gender')");

                    ?>
                    <script>
                        alert("Registerred Successfully!");
                        window.location.href = 'index.php';
                    </script>
                    <?php

                } else {

                    ?>
                    <script>
                        alert("This ID has already Taken");
                        window.location.href = 'index.php';
                    </script>
                    <?php

                }

            } else {

                ?>
                <script>
                    alert("This email is already taken");
                    window.location.href = 'index.php';
                </script>
                <?php
            }

        } else {

            ?>
            <script>
                alert("This username is already use");
                window.location.href = 'index.php';
            </script>
            <?php
        }

    } else {

        ?>
        <script>
            alert("Password doesn't match");
            window.location.href = 'index.php';
        </script>
        <?php
    }


}



//login process teacher and student

if (isset($_POST['login'])) {

    $process_type = $_POST['type'];
    $process_username = $_POST['username'];
    $process_password = $_POST['password'];

    if ($process_type == "Student") {

    
        $checkAccountStatement = "SELECT * FROM `users` WHERE `username`= '$process_username' AND password='$process_password' AND user_type = '$process_type'";
        $checkAccountQuery = mysqli_query($conn, $checkAccountStatement);
        $countAccount = mysqli_num_rows($checkAccountQuery);

  
        if ($countAccount == 1) {
            $rowData = mysqli_fetch_assoc($checkAccountQuery);
            $databasePassword = $rowData['password'];
            if ($databasePassword == $process_password) {
                $_SESSION['username'] = $process_username;
                ?>
                <script>
                    alert('Login Success');
                </script>
                <?php
                header('Location:dashboard-student/index.php');
                $databaseUserID = $rowData['user_id'];
                echo $databaseUserID;


                $databaseUserType = $rowData['user_type'];
                echo $databaseUserType;
                $accountStatus = $rowData['accountStatus'];
                echo $accountStatus;


                echo "Proceed";

            } else {
                ?>
                <script>
                    alert("Wrong Username or Password");
                    window.location.href = "index.php"
                </script>
                <?php

                echo "Incorect Password";
            }
        } else {
            
            ?>
            <script>
                alert("Please Create an Account");
                window.location.href = "index.php"
            </script>
            <?php
            

        }
    } else {

        $checkAccountStatement = "SELECT * FROM `users` WHERE `username`= '$process_username' AND password = '$process_password' AND user_type='admin'";
        $checkAccountQuery = mysqli_query($conn, $checkAccountStatement);
        $countAccount = mysqli_num_rows($checkAccountQuery);

        if ($countAccount == 1) {
            $rowData = mysqli_fetch_assoc($checkAccountQuery);
            $databasePassword = $rowData['password'];
            if ($databasePassword == $process_password) {
                $_session['username'] = $process_username;
                ?>
                <script>
                    alert('Login Success');
                </script>
                <?php
                header('Location:dashboard-admin/index.php');
                $databaseUserID = $rowData['user_id'];
                echo $databaseUserID;


                $databaseUserType = $rowData['user_type'];
                echo $databaseUserType;
                $accountStatus = $rowData['accountStatus'];
                echo $accountStatus;


                echo "Proceed";
            } else {
                ?>
                <script>
                    alert("Wrong Username or Password");
                    window.location.href = "index.php"
                </script>
                <?php

                echo "Incorect Password";
            }
        } else {
         
            ?>
            <script>
                alert("Please Create an Account");
                window.location.href = "index.php"
            </script>
            <?php

        }
      
    }
}



//Login as admin code
if (isset($_POST['login_admin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $checkAccountStatement = "SELECT * FROM `users` WHERE `email`= '$email' AND user_type='admin'";
    $checkAccountQuery = mysqli_query($conn, $checkAccountStatement);
    $countAccount = mysqli_num_rows($checkAccountQuery);

    $_SESSION ['email']="email";
    $_SESSION ['password']="password";


    if ($countAccount == 1) {
        $rowData = mysqli_fetch_assoc($checkAccountQuery);
        $databasePassword = $rowData['password'];
        if ($databasePassword == $password) {
            $_session['username'] = $process_email;
            ?>
            <script>
                alert('Login Success');
            </script>
            <?php
            header('Location:dashboard-admin/index.php');
            $databaseUserID = $rowData['user_id'];
            echo $databaseUserID;


            $databaseUserType = $rowData['user_type'];
            echo $databaseUserType;
            $accountStatus = $rowData['accountStatus'];
            echo $accountStatus;


            echo "Proceed";
        }else {
            ?>
            <script>
                alert("Wrong Username or Password");
                window.location.href = "index.php"
            </script>
            <?php

            echo "Incorect Password";
        }
    } else {
        /*
        ?>
        <script>
            alert("Please Create an Account");
            window.location.href = "index.php"
        </script>
        <?php 
        }
      */
    }
}
  



?>