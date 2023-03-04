<?php include("../../connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $role_id = 2;
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword']; 
        if($password == $cpassword && (strlen($password)>0 && strlen($cpassword)>0)){
                $sql = "INSERT INTO customer (role_id,first_name,last_name,email,password) VALUES
                ('$role_id','$firstName','$lastName','$email','$password')";
                $result = mysqli_query($connection, $sql);
                // if($result){
                //     echo "<br>Inserted Data SuccessFully<br>";
                // }else{
                //     echo mysqli_error($connection);
                // }
                if($result){
                    header("Location:customerList.php");
                }else{
                    header("Location:addCustomer.php");
                }
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
        margin:0;
        padding:0;
    }

    .register{
        display:flex;
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
    .firstDiv{
        border:1px solid #2B3467;
        border-radius:10px;
        width:30%;
        background:#ECF2FF;
        margin:7.5% auto;
        align-items:center;
        justify-content:center;
    }
    .firstDiv h1{
        width:100%;
        display:flex;
        align-items:center;
        justify-content:center;
        color:#3E54AC;
        margin:10px auto;
    }
    .secondDiv{
        width:100%;
        display:flex;
        background:#ECF2FF;
        align-items:center;
        justify-content:center;
    }
    .input{
        border:0 0 2px 0 solid black;outline:none;border:1px solid #2B3467;border-radius:5px;;font-size:15px;padding:10px 15px; width:250px
    }
</style>
<body>
    <div class="firstDiv">
        <h1 >Add Cutomer</h1>
        <div class="secondDiv" style="">
            <form name="form" method="POST" style="margin:15px auto" onsubmit="return validation()">
               <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">First Name</label>
                    </div>
                    <input class="input" id="first_name" name="first_name"  type="text" placeholder="First Name">
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">Last Name</label>
                    </div>
                    <input class="input" id="last_name" name="last_name"  type="text" placeholder="Last Name">
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">Email Id</label>
                    </div>
                    <input class="input" name="email" type="text" placeholder="Email Id" >
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">Password</label>
                    </div>
                    <input class="input" name="password" type="Password" placeholder="Password">
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">Confirm Password</label>
                    </div>
                    <input class="input" name="cpassword" type="Password" placeholder="Confirm Password" >
                    </div>
                <div class="register">
                <input type="submit" value="Register">
                </div>      
                <div class="backButton">
                    <button type="button"><a href="./customerList.php">Back To Customer List</a></button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validation(){
            var firstName = document.form.first_name.value;
            var lastName = document.form.last_name.value;
            var email = document.form.email.value;
            var password = document.form.password.value;
            var cpassword = document.form.cpassword.value;
            if(firstName.length == "" && lastName.length == "" && email.length == "" && password.length == "" && cpassword.length == ""){
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