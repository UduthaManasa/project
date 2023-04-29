<?php
/**
 * Created by Abuhena Rony.
 * Description: Registration form with full validation
 * Date: 12/3/17
 * Time: 12:35 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
        background-image: url("https://www.localpassportfamily.com/wp-content/uploads/2019/03/taj-mahal-baby.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   
   }
   </style>
</head>
<body>
<div class="container">

    <?php

    //define variables and set value empty
    $nameErr = $emailErr = $pwdErr = $pwdcErr = $genderErr = $acceptErr = '';
    $name = $email = $pwd = $pwdc = $gender =  $accept = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])){
        if (empty($name)){
            $nameErr = 'name is required!';
        }else{
            $name = validate($_POST['name']);
            //check if name format is correct
            if (!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr = 'only letters and white space allowed!';
            }
        }

        if (empty($email)){
            $emailErr = 'email is required!';
        }else{
            $email = validate($_POST['email']);
            //check if the email format is correct
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = 'email format is not correct!';
            }
        }
        if (empty($phoneErr)){
            $phoneErr = 'phone is required!';
        }else{
            $phone = validate($_POST['phone']);
            //check if the phone number is correct
            if (!filter_var($phone,FILTER_VALIDATE_PHONE)){
                $phoneErr = 'phone number is not correct!';
            }
        }

        if (empty($pwd)){
            $pwdErr = 'password is required!';
        }else{
            $pwd = validate($_POST['pwd']);
            //check if the password format is correct
        }
        if (empty($city)){
            $cityErr = 'city is required!';
        }
        else{
            $city = validate($_POST['city']);

        if (empty($pwdc)){
            $pwdcErr = 'password is not confirmed!';
        }else{
            $pwdc = validate($_POST['pwdc']);
            //check if the password is matched or not
        }

        if (empty($gender)) {
            $genderErr = 'gender is required!';
        }else{
            $gender = validate($_POST['gender']);
        }

        

        if (empty($accept)) {
            $acceptErr = 'you must accept the terms and conditions!';
        }else{
            $accept = validate($_POST['accept']);
        }
    }
}
$nameErr = $emailErr = $pwdErr = $pwdcErr = $genderErr = $acceptErr = '';
$name = $email = $pwd = $pwdc = $gender =  $accept = '';

 function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    ?>
    <div class="col-lg-offset-2 col-lg-10">
    <br><br>
    <br><br>
     <h2>Registration form</h2>
    <br><br><br>
      <!-- registration form -->
    <form method="post" class="form-horizontal" action="<?htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <!-- name field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="name"><span class="text-danger">*</span> Name:</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?=$name;?>"required>
            </div>
            
        </div>
      
      <!-- email field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="email"><span class="text-danger">*</span> Email:</label>
            <div class="col-lg-4">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$email;?>" required>
            </div>
           
            
        </div>

        
      
      <!-- password field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="pwd"><span class="text-danger">*</span><b> Password:</b></label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?=$pwd;?>" required>
            </div>
            
        </div>
        
      
      <!-- password confirm field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="confm-pwd"><span class="text-danger">*</span> Confirm Password:</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pwdc" value="<?=$pwdc;?>" required>
            </div>
            <?="<p class='text-danger'>$pwdcErr</p>";?>
        </div>
        <!-- mobile field -->
        <div class="form-group">
    
    <label class="control-label col-lg-2" for="Mobile"><span class="text-danger">*</span> Mobile Number:</label>
    <div class="col-lg-4">
        <input type="text" class="form-control" id=""pattern="[0-9]{10}" placeholder="Enter Mobile Number" name="Mobile" required>
    </div>
 
</div>
      <!-- gender field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="gender"><span class="text-danger">*</span> Gender:</label>
            <div class="col-lg-2">
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo 'checked';?> value="Female"> Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo 'checked';?> value="Male"> Male
            </div>
            <?="<p class='text-danger'>$genderErr</p>";?>
        </div>
        <br>
        
      
      <!-- profile picture field -->
        <div class="form-group">
            <label class="control-label col-lg-2" for="photo">Profile Picture:</label>
            <label class="col-lg-4 custom-file">
                <input type="file" id="file2" class="custom-file-input" required>
                <span class="custom-file-control"></span>
            </label>
        </div>

        <div class="form-group">
        <label for="city" class="contro-label col-lg-2"><span class="text-danger">*</span><b>  Select your city:</b></label>
          <div class="col-lg-2">
  <select id="city" name="city">
  <option value="hyderabad"><b>Hyderabad</b></option>
  <option value="karimnagar"><b>Karimnagar</b></option>
  <option value="jagityal"><b>Jagityal</b></option>
  <option value="medak"><b>medak</b></option>
  <option value="manchiryal"><b>manchiryal</b></option>
  <option value="adhilabad"><b>adhilabad</b></option>
  <option value="siddipet"><b>siddipet</b></option>
  <option value="sirisilla"><b>Sirisilla</b></option>
</select>
</div>
  <br>
      
      <!-- acceptence field -->
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="accept" value="" required> <span class="text-danger">*</span>
                         I accept the terms & conditions.
                    </label>
                </div>
            </div>
            <?="<p class='text-danger'>$acceptErr</p>";?>
        </div>
      
      <!-- submit and reset button field -->
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-4">
            <a href="Php Task Travel1.php"><input type="button"class="btn btn-dark"style="background-color:black"  value="Submit"/>
            
             <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>


