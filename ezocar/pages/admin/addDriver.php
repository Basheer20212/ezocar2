<?php include("../../connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $roleId = 3;
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $vehicleNumber = $_POST['vehicleNumber'];  
        $licenceNumber = $_POST['licenceNumber'];
        $pickUpFrom = $_POST['pickUpFrom'];   
        $pickUpTo = $_POST['pickUpTo'];   
        $capacity = $_POST['capacity'];   
        $costPerPerson = $_POST['costPerPerson'];   
        $wallet = $_POST['wallet'];   
        $phoneNumber = $_POST['phoneNumber'];
        $model = $_POST['model'];
            if($password == $cpassword && (strlen($password)>0 && strlen($cpassword)>0)){
                $sql = "INSERT INTO driver (role_id,first_name,last_name,email,password,vehicle_number,licence_number,
                pickup_from,pickup_to,capacity,cost_per_person,wallet,phoneno,model) VALUES
                ('$roleId','$firstName','$lastName','$email','$password','$vehicleNumber','$licenceNumber',
                '$pickUpFrom','$pickUpTo','$capacity','$costPerPerson','$wallet','$phoneNumber',' $model')";
                $result = mysqli_query($connection, $sql);
                // if($result){
                //     echo "<br>Inserted Data SuccessFully<br>";
                // }else{
                //     echo mysqli_error($connection);
                // }
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
        

        }

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Driver</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    .container{
        display: flex;
        margin: auto;
        text-align: center;
        justify-content: center;
        align-items: center;
    }   
    .subContainer{
        width:50%;
        float:left;
        display: block;
        margin:2% auto;
        border-radius:10px;
        text-align: center;
        align-items: center;
        justify-content: center;
        border:1px solid black;
        background-color:#ECF2FF;
    }
    .form{
        margin:auto;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
    .subContainer h1{
        width:100%;
        display:flex;
        align-items:center;
        justify-content:center;
        color:#3E54AC;
        margin:25px auto ;
    }
    .register{
        display:block;
        margin:20px auto 0px auto;
        text-align:center;
        justify-content:center
    }
    .register input{
        cursor:pointer;
        margin:10px auto;
        background:#3E54AC;
        padding:5px 50px;
        color:white;
        font-size:20px;
        border:1px solid black;
        border-radius:25px;
    }
    .backButton{
        width:150px;
        cursor:pointer;
        margin:5px auto;
        background:#3E54AC;
        padding:5px 15px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:20px;
        border:1px solid black;
        border-radius:25px;
    }
    .backButton a{
        color:white;
        font-size:15px;
        cursor:pointer;
        text-decoration:none;
    }
    .backButton a:hover{
        color:black;
    }
    .backButton:hover{
        background: #BAD7E9;
    }
    .backButton button{
        border:none;
        cursor:pointer;
        background: transparent;
    }
    .register input:hover{
        color:black;
        background: #BAD7E9;
    }
    .inputBasheer{
        border:0 0 2px 0 solid black;
        outline:none;
        border:1px solid #2B3467;
        border-radius:5px;
        font-size:15px;
        padding:10px 15px;
        width:1000px;
    }
    .insideContainerLabel{
        width:70%;
        display:flex;
        margin:10px auto;
    }
    .insideContainerLabel label{
        font-size:25px
    }
    .insideContainerInput{
        width:70%;display: flex;margin:10px auto;
    }
    .form{
        margin:15px auto
    }
</style>
<body>
<div class="cotainer">
    <form class="form" name="form" method="POST" onsubmit="return validation()">
        <div class="subContainer">
            <h1>Edit Driver</h1>
            <div style="display: block;float:left;margin:auto;width:50%">
                <div class="insideContainerLabel">
                    <label >First Name</label style>
                </div>
                <div class="insideContainerInput" >
                    <input class="inputBasheer" id="first_name" name="first_name" type="text" placeholder="First Name">
                </div>
                <div class="insideContainerLabel" >
                    <label >Last Name</label style>
                </div>  
                <div class="insideContainerInput">
                    <input class="inputBasheer" id="last_name" name="last_name" type="text" placeholder="Last Name">
                </div> 
                <div class="insideContainerLabel" >
                    <label >Email Id</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="email" name="email" class="inputBasheer" type="text" placeholder="Email Id">
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
                    <label >Vehicle Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="vehicleNumber" name="vehicleNumber" class="inputBasheer" type="text" placeholder="Vehicle Number">
                </div>
                <div class="insideContainerLabel" >
                    <label >Licence Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="licenceNumber" name="licenceNumber" class="inputBasheer"type="text" placeholder="Licence Number">
                </div>
            </div>
            <div style="display: block;float:left;margin:auto;width:50%">
                <div class="insideContainerLabel" >
                    <label >Pick Up From</label style>
                </div>
                <div class="insideContainerInput">
                    <input id="pickUpFrom" name="pickUpFrom" class="inputBasheer" type="text" placeholder="Pick Up From">
                </div>
                <div class="insideContainerLabel" >
                    <label >Pick Up To</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="pickUpTo" name="pickUpTo" class="inputBasheer" type="text" placeholder="Pick Up To">
                </div> 
                <div class="insideContainerLabel" >
                    <label >Capacity</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="capacity" name="capacity" class="inputBasheer" type="text" placeholder="Capacity">
                </div>   
                <div class="insideContainerLabel" >
                    <label >Cost Per Person</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="costPerPerson" name="costPerPerson" class="inputBasheer" type="password" placeholder="Cost Per Person">
                </div>  
                <div class="insideContainerLabel" >
                    <label >Wallet</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="wallet" name="wallet" class="inputBasheer" type="password" placeholder="Wallet">
                </div>  
                <div class="insideContainerLabel" >
                    <label >Phone Number</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="phoneNumber" name="phoneNumber" class="inputBasheer" type="text" placeholder="Phone Number">
                </div>
                <div class="insideContainerLabel" >
                    <label >Model</label style>
                </div>  
                <div class="insideContainerInput">
                    <input id="model" name="model" class="inputBasheer" type="text" placeholder="Model">
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
            var vehicleNumber = document.form.vehicleNumber.value;
            var licenceNumber = document.form.licenceNumber.value;
            var pickUpFrom = document.form.pickUpFrom.value;
            var pickUpTo = document.form.pickUpTo.value;
            var capacity = document.form.capacity.value;
            var costPerPerson = document.form.costPerPerson.value;
            var wallet = document.form.wallet.value; 
            var phoneNumber = document.form.phoneNumber.value; 
            var model = document.form.model.value; 

            if(firstName.length == "" && 
            lastName.length == "" && 
            email.length == "" && 
            password.length == "" && 
            cpassword.length == ""&& 
            vehicleNumber.length == ""&&
            licenceNumber.length=="" && 
            pickUpFrom.length=="" && 
            pickUpTo.length=="" && 
            capacity.length == "" && 
            costPerPerson.length == "" && 
            wallet.length == "" && 
            phoneNumber.length == "" && 
            model.length == ""){

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
            }else if(vehicleNumber.length == ""){
                alert("Vehicle Number Field is Empty");
                return false;
            }else if(licenceNumber.length == ""){
                alert("Licence Number Field is Empty");
                return false;
            }else if(pickUpFrom.length == ""){
                alert("Pick Up From Field is Empty");
                return false;
            }else if(pickUpTo.length == ""){
                alert("Pick Up To Field is Empty");
                return false;
            }else if(capacity.length == ""){
                alert("Capacity Field is Empty");
                return false;
            }else if(costPerPerson.length == ""){
                alert("Cost Per Person Field is Empty");
                return false;
            }else if(wallet.length == ""){
                alert("Wallet Field is Empty");
                return false;
            }else if(phoneNumber.length == ""){
                alert("Phone Number Field is Empty");
                return false;
            }else if(model.length == ""){
                alert("Model Number Field is Empty");
                return false;
            }
        }
        
    </script>
</body>
</html>