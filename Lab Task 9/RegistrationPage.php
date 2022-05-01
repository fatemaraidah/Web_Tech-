<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <script src="JS/Form_Validation.js"></script>

</head>

<body>
    <?php
    $success = "";
    // if (isset($_POST['Submit'])) {
    //     $data = array(
    //         "Name" => $_POST['name'],
    //         "Email" => $_POST['email'],
    //         "User_Name" => $_POST['uname'],
    //         "Password" => $_POST['pass'],
    //         "Gender" => $_POST['gender'],
    //         "Date_of_Birth" => $_POST['dob'],
    //         "Image" => "images/images.png"
    //     );
    //     require("user.class.php");
    //     $user = new User('data.json');
    //     $user->insertNewUser($data);
    //     $success = "Your account has been created. Please go to login page.";
    // } else if (isset($_POST['Reset'])) {
    //     $_POST['name'] = "";
    //     $_POST['email'] = "";
    //     $_POST['uname'] = "";
    //     $_POST['pass'] = "";
    //     $_POST['cpass'] = "";
    //     $_POST['gender'] = "";
    //     $_POST['dob'] = "";
    // }

    ?>

    <div class="full-page">
        <div class="sub-page">
            <?php
            include 'header.php';
            require_once 'Controller/addCustomerController.php';
            ?>
            <div class="row">
                <div class="col-1">
                    <div class="Registrationform-box">
                        <div class="form">
                            <form method="post" class="register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <fieldset>
                                    <legend>
                                        <h3 class="main-heading">REGISTRATION</h3>
                                    </legend>
                                    <label for="name">Name : </label>
                                    <input type="text" name="fname" id="fname" onblur="checkName()" onkeyup="checkName()">
                                    <br>
                                    <span class="red">
                                        <p id="nameErr">
                                            <?php
                                            if ($nameErr) {
                                                echo $nameErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>
                                    <label for="email">Email : </label>
                                    <input type="text" name="email" id="email" onblur="checkEmail()" onkeyup="checkEmail()">
                                    <br>
                                    <p id="availableEmail"></p>
                                    <span class="red">
                                        <p id="emailErr">
                                            <?php
                                            if ($emailErr) {
                                                echo $emailErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>
                                    <label for="uname">User Name : </label>
                                    <input type="text" name="uname" id="uname"><br>
                                    <hr>
                                    <label for="pass">Password : </label>
                                    <input type="text" name="pass" id="pass" onblur="checkPass()">
                                    <br>
                                    <span class="red">
                                        <p id="passErr">
                                            <?php
                                            if ($passErr) {
                                                echo $passErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>
                                    <label for="cpass">Confirm Password : </label>
                                    <input type="text" name="cpass" id="cpass" onblur="checkCPass()">
                                    <br>
                                    <span class="red">
                                        <p id="cpassErr">
                                            <?php
                                            if ($cPassErr) {
                                                echo $cPassErr;
                                            }
                                            ?>
                                        </p>
                                    </span>
                                    <hr>
                                    <fieldset>
                                        <legend> Gender </legend>
                                        <input type="radio" name="gender" value="Male">Male
                                        <input type="radio" name="gender" value="Female">Female
                                        <input type="radio" name="gender" value="Other">Other
                                    </fieldset>
                                    <hr>
                                    <fieldset>
                                        <legend> Date of Birth </legend>
                                        <input type="date" name="dob" id="dob">
                                    </fieldset>
                                    <hr>
                                    <input type="submit" name="Submit" value="Submit">
                                    <input type="reset" name="Reset" value="Reset"><br>
                                    <label><?php echo $success ?></label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'footer.php'; ?>
</body>
<style>
     body {
  background-color: lavender;
}

</html>