<?php
if(isset($_REQUEST["email"])) {
    include "connection.php";
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $company_name = $_REQUEST['company_name'];
    $designation=$_REQUEST['designation'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $mobile = $_REQUEST['mobile'];
    $company_address = $_REQUEST['company_address'];
    $country=$_REQUEST['country'];
    $state=$_REQUEST['state'];
    $city = $_REQUEST['city'];
    $postcode = $_REQUEST['postcode'];
    $sql = "select * from retailer";
    $result = mysqli_query($conn, $sql);
    $flag = 0;
    while ($row = mysqli_fetch_array($result)) {
        if ($row[6] == $email) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 1) {
        header("Location:approvals_form.php?er=1");
    }
    elseif ($pass != $cpass) {
        header("Location:approvals_form.php?er=2");
    }
    elseif ($ext != 'jpg'&&$ext != 'jpeg'&&$ext != 'png') {
        header("Location:approvals_form.php?er=3");
    }}
    ?>