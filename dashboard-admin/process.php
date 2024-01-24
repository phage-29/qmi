<?php 

include '../conn.php';

if(isset($_POST['del_account'])){
    $del_id = $_GET['id'];

    $delete_account = mysqli_query($conn,"DELETE FROM users WHERE id ='$del_id'");

    if($delete_account == true){
        ?>
            <script>
                alert("Account Deleted Successfully!");
                window.location.href='users.php';
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Account Not Deleted!");
                window.location.href='users.php';
            </script>
        <?php
    }
}

//for updating accounts 
if(isset($_POST['upd_account'])){
    $upd_id = $_GET['id'];

    $ln = $_POST['ln'];
    $fn = $_POST['fn'];
    $email = $_POST['email'];
    $date_created = $_POST['date_created'];
    $username = $_POST['username'];
    $acc_stat = $_POST['acc_stat'];
    $id_number = $_POST['id_number'];


    $update_account = mysqli_query($conn,"UPDATE users SET lastname = '$ln', firstname ='$fn',email ='$email',
    date_created ='$date_created', username='$username',accountStatus='$acc_stat', id_number = '$id_number' WHERE id = '$upd_id'");
    if($update_account == true){
        ?>
            <script>
                alert("Account Updated Successfully!");
                window.location.href='users.php';
            </script>
        <?php
    }else{
        ?>
        <script>
            alert("Error Updating Account");
            window.location.href='users.php';
        </script>
    <?php
    }
}

?>