<?php
//This Pages controls all management
session_start();
require "connection.php";
$errors = array();
$success = array();



if (isset($_POST['Signup'])) {
    $UserName = mysqli_real_escape_string($con, $_POST['UserName']);
    $UserEmail = mysqli_real_escape_string($con, $_POST['UserEmail']);
    $UserType = mysqli_real_escape_string($con, $_POST['UserType']);
    $UserPassword = mysqli_real_escape_string($con, $_POST['UserPassword']);
    $ConfirmUserPassword = mysqli_real_escape_string($con, $_POST['ConfirmUserPassword']);

    $UserNameQuery = "SELECT * FROM users_tb  WHERE UserName = '$UserName'";
    $ResultUserName = mysqli_query($con, $UserNameQuery);
    $UserEmailQuery = "SELECT * FROM users_tb  WHERE UserEmail = '$UserEmail'";
    $ResultUserEmail = mysqli_query($con, $UserEmailQuery);


    if (mysqli_num_rows($ResultUserEmail) > 0) {
        $errors['Email'] = "Email  that you have entered is already used.";
        if ($UserPassword !== $ConfirmUserPassword)
            $errors['UserPassword'] = "Password does't matched.";
    } else if ($UserPassword !== $ConfirmUserPassword) {
        $errors['UserPassword'] = "Password does't matched.";
    } else {

        $UserPassword = password_hash($UserPassword, PASSWORD_BCRYPT);
        $InsertQuery = " INSERT INTO `users_tb` (`UserId`, `UserName`, `UserEmail`, `UserPassword`, `UserCode`, `UserStatus`,`UserType`) 
        VALUES (NULL, '$UserName', '$UserEmail', '$UserPassword', '0', 'verified','$UserType')";
        $CheckQuery = mysqli_query($con, $InsertQuery);
        if ($CheckQuery) {
            $success['success'] = "Your account is successfuly created.";
        } else {
            $errors['error'] = "Failed To Insert data in database..!";
        }
    }
}
if (isset($_POST['EmployeeLogin'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM users_tb WHERE UserEmail = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['UserPassword'];
        $status = $fetch['UserStatus'];
        $code = $fetch['UserCode'];
        $user_type = $fetch['UserType'];
        if (password_verify($password, $fetch_pass)) {
            if ($status == 'verified' && $code == 0 && $user_type == 'Employee') {
                $_SESSION['id'] = $fetch['UserId'];
                $_SESSION['name'] = $fetch['UserName'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $user_type;
                header("location: Employee.php");
            } else {

                $errors['error'] = "It's look like you're not yet a employee member!";
            }
        } else {

            $errors['error'] = "Incorrect email or password!";
        }
    } else {

        $errors['error'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}
if (isset($_POST['ManagerLogin'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM users_tb WHERE UserEmail = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['UserPassword'];
        $status = $fetch['UserStatus'];
        $code = $fetch['UserCode'];
        $user_type = $fetch['UserType'];
        if (password_verify($password, $fetch_pass)) {
            if ($status == 'verified' && $code == 0 && $user_type == 'Manager') {
                $_SESSION['id'] = $fetch['UserId'];
                $_SESSION['name'] = $fetch['UserName'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $user_type;
                header("location: Manager.php");
            } else {

                $errors['error'] = "It's look like you're not yet a manager member!";
            }
        } else {

            $errors['error'] = "Incorrect email or password!";
        }
    } else {

        $errors['error'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}

if (isset($_POST['OwnerLogin'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM users_tb WHERE UserEmail = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['UserPassword'];
        $status = $fetch['UserStatus'];
        $code = $fetch['UserCode'];
        $user_type = $fetch['UserType'];
        if (password_verify($password, $fetch_pass)) {
            if ($status == 'verified' && $code == 0 && $user_type == 'Owner') {
                $_SESSION['id'] = $fetch['UserId'];
                $_SESSION['name'] = $fetch['UserName'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $user_type;
                header("location: Owner.php");
            } else {

                $errors['error'] = "It's look like you're not yet a owner member!";
            }
        } else {

            $errors['error'] = "Incorrect email or password!";
        }
    } else {

        $errors['error'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}
//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM users_tb WHERE UserEmail='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users_tb SET UserCode = $code WHERE UserEmail = '$email'";
        $run_query =  mysqli_query($con, $insert_code);

        if ($run_query) {
            $_SESSION['email'] = $email;
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "f180207@nu.edu.pk";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: index.php?PageName=ResetCode');
                // exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {

    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM users_tb WHERE UserCode = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['UserEmail'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: index.php?PageName=NewPassword');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
//if user click change password button
if (isset($_POST['change-password'])) {
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $password = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE users_tb SET UserCode = $code, UserPassword = '$password' WHERE UserEmail = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: index.php?PageName=NewPassword');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
if (isset($_POST['submitSaleForm'])) {
    $UserId = $_SESSION['id'];
    $Id = mysqli_real_escape_string($con, $_POST['Id']);
    $Title = mysqli_real_escape_string($con, $_POST['Title']);
    $Location = mysqli_real_escape_string($con, $_POST['Location']);
    $Condition = mysqli_real_escape_string($con, $_POST['Cond']);
    $Price = mysqli_real_escape_string($con, $_POST['Price']);
    if (mysqli_query($con, "INSERT INTO `sales_tb` (`Id`, `Title`, `Cond`, `Location`, `Price`, `UserId`) VALUES (NULL, '$Title', '$Condition', '$Location', '$Price', '$UserId')")) {
        $success['success'] = "Transaction is successfuly added..!";
    } else
        $errors['error'] = " Failed while Making sale..!";
}

if (isset($_POST['submitBookForm'])) {
  
    $Location = mysqli_real_escape_string($con, $_POST['Location']);
    $Date = mysqli_real_escape_string($con, $_POST['Date']);
    $Title = mysqli_real_escape_string($con, $_POST['Title']);
    $Author = mysqli_real_escape_string($con, $_POST['Author']);
    $Edition = mysqli_real_escape_string($con, $_POST['Edition']);
    $Publisher = mysqli_real_escape_string($con, $_POST['Publisher']);
    $PublishYear = mysqli_real_escape_string($con, $_POST['PublishYear']);
    $Binding = mysqli_real_escape_string($con, $_POST['Binding']);
    $Genre = mysqli_real_escape_string($con, $_POST['Genre']);
    $PurchasePrice = mysqli_real_escape_string($con, $_POST['PurchasePrice']);
    $ListingPrice = mysqli_real_escape_string($con, $_POST['ListingPrice']);
    $Cond = mysqli_real_escape_string($con, $_POST['Cond']);
    $query ="INSERT INTO `book_tb` (`Id`, `Title`, `Publisher`, `Author`, `Location`, `Date`, `Edition`, `PublishYear`, `Binding`, `Genre`, `PurchasePrice`, `ListingPrice`, `Cond`)
     VALUES (NULL, '$Title', '$Publisher', '$Author', '$Location', '$Date', '$Edition', '$PublishYear', '$Binding', '$Genre', '$PurchasePrice', '$ListingPrice', '$Cond')";

    if (mysqli_query($con,$query )) {
        $success['success'] = "New Book  is  added successfuly ..!";
    } else
        $errors['error'] = " Failed while Adding new book..!";
}
if (isset($_GET['DId'])) {
    $id = $_GET['DId'];
    if (mysqli_query($con, "DELETE FROM `book_tb` WHERE Id ='$id'")) {
        echo '<script>alert("Book record  is successfuly deleted..!")</script>';
    } else
    echo '<script>alert("Failed While deleting book record")</script>';
}
if (isset($_GET['DelEmpId'])) {
    $id = $_GET['DelEmpId'];
    if (mysqli_query($con, "DELETE FROM `users_tb` WHERE Id ='$id'")) {
        echo '<script>alert("User  record  is successfuly deleted..!")</script>';
    } else
    echo '<script>alert("Failed While deleting User record")</script>';
}