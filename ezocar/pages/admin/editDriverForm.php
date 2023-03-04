<?php include("../../connection.php");
    $id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $roleId = 3;
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword && (strlen($password)>0 && strlen($cpassword)>0)){
            $sql = "INSERT INTO driver (role_id,first_name,last_name,email,password) VALUES
            ('$roleId','$firstName','$lastName','$email','$password1')";
            $result = mysqli_query($connection, $sql);
            if($result){
                header("Location:driversList.php");
            }else{
                header("Location:addDriver.php");
            }
        }else{
            echo "<script>
            alert('Password's Doesnt Match')
            </script>";
        }
        
            // if($result){
            //     echo "<br>Inserted Data SuccessFully<br>";
            // }else{
            // echo mysqli_error($connection);
            // }
        }

        // $sql = "UPDATE driver SET ";









        $extract = "SELECT * FROM driver WHERE id='$id'";
        $result = mysqli_query($connection, $extract);
        while($row = $result->fetch_assoc()){
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $vehicleNumber = $row['vehicle_number'];
            $licenseNumber = $row['licence_number'];
            $pickUpFrom = $row['pickup_from'];
            $pickUpTo = $row['pickup_to'];
            $capacity = $row['capacity'];
            $costPerPerson = $row['cost_per_person'];
            $wallet = $row['wallet'];
            $phoneNumber = $row['phoneno'];
            $model = $row['model'];
        }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Driver</title>
    <link rel="stylesheet" href="editDriverForm.css">
</head>
<style>
 
</style>
<body>
<div class="cotainer">
<form class="form" name="form" action="" method="GET" style="margin:15px auto" onsubmit="return validation()">
        <div class="subContainer">
            <h1>Edit Driver</h1>
            <div style="display: block;float:left;margin:auto;width:50%">
                <div class="insideContainerLabel">
                    <label >First Name</label style>
                </div>
                <div class="insideContainerInput" >
                    <input value="<?php echo $first_name ?>" class="inputBasheer" id="first_name" name="first_name" type="text" placeholder="First Name">
                </div>
                <div class="insideContainerLabel" >
                    <label >Last Name</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $last_name?>" class="inputBasheer" id="last_name" name="last_name" type="text" placeholder="Last Name">
                </div> 
                <div class="insideContainerLabel" >
                    <label >Email Id</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $email?>" d="email" name="email" class="inputBasheer" type="text" placeholder="Email Id">
                </div>   
                <div class="insideContainerLabel" >
                    <label >Password</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="password" name="password" class="inputBasheer" type="password" placeholder="Password">
                </div>  
                <div class="insideContainerLabel" >
                    <label >Confirm Password</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="cpassword" name="cpassword" class="inputBasheer" type="password" placeholder="Confirm Password">
                </div>  
                <div class="insideContainerLabel" >
                    <label>Vehicle Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $vehicleNumber ?>" id="vehicleNumber" name="vehicleNumber" class="inputBasheer" type="text" placeholder="Vehicle Number">
                </div>
                <div class="insideContainerLabel" >
                    <label >License Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $licenseNumber?>" id="licenseNumber" name="licenseNumber" class="inputBasheer"type="text" placeholder="License Number">
                </div>
            </div>
            <div style="display: block;float:left;margin:auto;width:50%">
                <div class="insideContainerLabel" >
                    <label >Pick Up From</label style>
                </div>
                <div class="insideContainerInput">
                    <input value="<?php echo $pickUpFrom?>" id="pickUpFrom" name="pickUpFrom" class="inputBasheer" type="text" placeholder="Pick Up From">
                </div>
                <div class="insideContainerLabel" >
                    <label >Pick Up To</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $pickUpTo?>" id="pickUpTo" name="pickUpTo" class="inputBasheer" type="text" placeholder="Pick Up To">
                </div> 
                <div class="insideContainerLabel" >
                    <label >Capacity</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $capacity?>" id="capacity" name="capacity" class="inputBasheer" type="text" placeholder="Capacity">
                </div>   
                <div class="insideContainerLabel" >
                    <label >Cost Per Person</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $costPerPerson?>" id="costPerPerson" name="costPerPerson" class="inputBasheer" type="password" placeholder="Cost Per Person">
                </div>  
                <div class="insideContainerLabel" >
                    <label >Wallet</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $wallet?>" id="wallet" name="wallet" class="inputBasheer" type="password" placeholder="Wallet">
                </div>  
                <div class="insideContainerLabel" >
                    <label >Phone Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $phoneNumber?>" id="phoneNumber" name="phoneNumber" class="inputBasheer" type="text" placeholder="Phone Number">
                </div>
                <div class="insideContainerLabel" >
                    <label >Model</label style>
                </div>  
                <div class="insideContainerInput">
                    <input value="<?php echo $model?>" id="model" name="model" class="inputBasheer" type="text" placeholder="Model">
                </div>
            </div>
            <div class="register" >
                <input type="submit" name="" value="Register" style="margin-top:30px">
            </div>      
            <div class="backButton" style="margin:10px auto 20px auto">
                <button type="button" ><a href="./driversList.php" >Back To Driver List</a></button>
            </div>
        </div>
    </form>

</div>    
<script>
    function validation(){
        var firstName = document.form.first_name.value;
            var lastName = document.form.last_name.value;
            var email = document.form.email.value;
            var password = document.form.password.value;
            var cpassword = document.form.cpassword.value;
            if(firstName.length == "" && lastName.length == "" && email.length == "" && passwordO.length == "" &&passwordT.length == ""){
                alert("Please Fill All The Details");
                return false;
            }else if(firstName.length == ""){
                alert("First Name Field is Empty");
                return false;
            }else if(lastName.length == ""){
                alert("Last Name Field is Empty");
                return false;
            }else if(email.length == ""){
                alert("Email Field is Empty");
                return false;
            }else if(password.length == ""){
                alert("Password Field is Empty");
                return false;
            }else if(cpassword.length == ""){
                alert("Confirm Password Field is Empty");
                return false;
            }
        }
        
    </script>
</body>
</html>