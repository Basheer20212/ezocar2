<?php include("../../connection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){    
    // $role_id = 3;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $word1 = $_POST['pass1'];
    $word2 = $_POST['pass2'];
    $encryptedWord = md5($word1.md5($word1));

if(isset($_POST['submit'])){
    if($word1 == $word2 && strlen($word1 && $word2) >0){
        $sql = "INSERT INTO superadminlogin (first_name,last_name,email,password) VALUES ('$firstName','$lastName','$email','$word1')";
$result = mysqli_query($connection, $sql);
if($result){
    echo "<br>Inserted Data SuccessFully<br>";
}else{
    echo mysqli_error($connection);
}
}
}

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yinka Enoch Adedokun">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>

<!-- Main Content -->
<div class="container mb-0 pb-0 pt-1">
    
        
            
               
                            <div class="row justify-content-center">
                                <div class="col-md-6  mt-0  mb-0 pb-0" style="height:500px;">

                                    <h2 class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-3" style="color:#0d6efd">Sign up</h2>

                                    <form action="" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">First Name :</label>
                                            <input class="form-control" type="text" name="firstName" >
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Last Name :</label>
                                            <input class="form-control" type="text" name="lastName" >
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Email :</label>
                                            <input class="form-control" type="text" name="email" >
                                            </div>
                                        </div>
                                    
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Password :</label>
                                            <input  class="form-control" type="password" name="pass1" >
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Confirm your password :</label>
                                                <input  class="form-control" type="password" name="pass2" >
                                                <?php
                                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                                $word1 = $_POST['pass1'];
                                                $word2 = $_POST['pass2'];
                                                if($word1 != $word2 && (strlen($word1) && strlen($word2) > 0)){
                                                    echo "<h5 style='color:red'>Passwords Doesn't Match</h5>";
                                                }
                                            }
                                            ?>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <a type="button" href="">
<<<<<<< HEAD
                                        <button type="submit" value="Submit" click="passwordMatch()" class="btn btn-primary btn-lg">Register</button>
                                        </a> 
                                            <!-- <a href="index.php">
                                             <button type="button" class="btn btn-primary btn-lg">Register</button>
                                             </a> -->
                                             <br>
                                           
=======
                                        <input type="submit" name="submit" click="passwordMatch()" class="btn btn-primary btn-lg"> </a>   
>>>>>>> 4e5cb5a9b023fc0ed882cb7d2eaa987e02b5c3d1
                                        </div> 
                                        <div  class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a type="button" href="index.php">Back to Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6  mt-0  mb-0 pb-0 pt-5" style="height:500px;">     
                                   <img src="/ezocar/assets/Signup.png" title="sign in image"  alt="sign in image" style=" width: -webkit-fill-available;">
                                </div>
                            </div>
                
           
        
    
</div>

</body>
</html>
