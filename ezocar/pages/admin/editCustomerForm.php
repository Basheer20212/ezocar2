<?php include("../../connection.php");
$id = $_GET['id'];
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
            }
        }
        $extract = "SELECT * FROM customer WHERE id='$id'";
        $result = mysqli_query($connection, $extract);
        while($row = $result->fetch_assoc()){
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
        }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cutomer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="firstDiv">
        <h1 >Edit Cutomer</h1>
        <div class="secondDiv" style="">
            <form name="form" method="GET" style="margin:15px auto" onsubmit="return validation()">
               <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">First Name</label>
                    </div>
                    <input class="input" value="<?php echo $first_name?>" id="first_name" name="first_name"  type="text" placeholder="First Name">
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label for="" style="font-size:17.5px">Last Name</label>
                    </div>
                    <input class="input" value="<?php echo $last_name?>" id="last_name" name="last_name"  type="text" placeholder="Last Name">
                </div>
                <div style="display:block;margin:0px">
                    <div style="display:block;margin:5px auto" class="label1">
                        <label style="font-size:17.5px">Email Id</label>
                    </div>
                    <input class="input" value="<?php echo $email?>" name="email" type="text" placeholder="Email Id" >
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