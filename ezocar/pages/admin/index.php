<?php include("../../connection.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>-->
    <!-- <link rel="stylesheet" type="text/css" href="../../styles/common.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Admin Login Page</title>
</head>
<style>

    
</style>
    
<body>
    <div class="fullPage">
        <div class="navbar">
            <div><a href="">Ezocar</a></div> 
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><button type="button" name="button" onclick="document.getElementById('loginForm').style.display='block'">Login</button></li>
                </ul>
            </nav>
        </div>
            <div class="loginPage" id="loginForm">
                <div class="formBox">
                    <a href="" >Ezocar</a>
                    <!-- <h3 style="color:white;;text-align:center;margin:0px 0px 0px 0px;font-weight:10px"></h3> -->
                    <div class="buttonBox" style="width:75%;padding:5px 10px;">
                        <div class="btn" id="btn" style="padding:0;margin:auto;width: 100%;display:flex;align-itmems:center;justify-content:center;text-align:center"></div>
                        <button style="padding:2.5px 0px;font-size:20px;color:#F3C693;;margin:auto;display:flex;align-itmems:center;justify-content:center;text-align:center" type="button" name="button" class="toggle-btn" onclick="login()">Admin Log In Page</button>
                        <!-- <button style="margin:auto 2.5px" type="button" name="button" class="toggle-btn" onclick="register()">Register</button> -->
                    </div>
                    <form class="inputGroupLogin" name="login" style="top:180px" id="login" action="login.php" method="POST" onsubmit="return validation()">
                        <div style="margin:5px">
                            <input type="text" class="inputField" id="username" name="username" placeholder="Email Id" >
                        </div>
                        <div style="margin:5px 0px">
                            <input type="password" class="inputField" name="password" placeholder="Enter Password" >
                        </div>
                        <!-- <div style="margin:10px 0px 0px 0px">
                            <input type="checkbox">
                            <label style="color:white" for="">Remember Password</label>
                        </div> -->
                        <div style="margin:30px auto 0px auto;display:flex;text-align:center;justify-cotent:center;align-items:center">
                        <button style="font-size:20px;padding:5px;margin:10px auto 0px auto;display:flex;text-align:center;justify-cotent:center;align-items:center" type="submit" style=""class="submitBtn">Log In</button>
                        </div>
                        
                    </form>
    
                    <form class="inputGroupLogin" id="backToHomePage" action="../.." method="POST" style="left:50px;display:flex;align-items:center;text-align:center;jusitfy-content:center;margin:250px auto 0px auto ">
                    <a href="../../" style="text-decoration:none">
                        <button type="submit" class="submitBtn" style="padding:6.5px 15px;font-size:15px;width:100%;margin:0px auto 0px auto">
                        Back To Home Page</button></a>
                    </form>

                    
                </div>
            </div>
        </div>
 <script>
    function validation(){
        var username = document.login.username.value;
        var password = document.login.password.value;
        if(username == "" && password == "" ){
            alert("Username And Password are Empty");
            return false;
        }else{
            if(username==""){
                alert("Username is Empty");
                return false;
            }else if(password==""){
                alert("Password is Empty");
                return false;
            }
        }

    }
</script> 

</body>
</html>
