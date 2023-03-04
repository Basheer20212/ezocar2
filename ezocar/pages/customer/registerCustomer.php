<?php
    include("../../connection.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $role_id = 3;
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $word1 = $_POST['pass1'];
        $word2 = $_POST['pass2'];
        $encryptedWord = md5($word1.md5($word1));
    if(isset($_POST['submit'])){
        if($word1 == $word2){
            $sql = "INSERT INTO users (role_id,first_name,last_name,email,password) VALUES ('$role_id','$firstName','$lastName','$email','$word1')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<br>Inserted Data SuccessFully<br>";
    }else{
        echo mysqli_error($conn);
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
        <link rel="stylesheet" type="text/css" href="../../styles/common.css">
    </head>
<body>

<!-- Main Content -->
<div class="container-fluid">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 ">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body ">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-0" style="color:#0d6efd">Sign up</p>

                                    <form action="login.php" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" name="firstName" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" name="lastName" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" name="email" required>
                                            </div>
                                        </div>
                                    
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Password</label>
                                            <input  class="form-control" type="password" name="pass1" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label">Confirm your password</label>
                                                <input  class="form-control" type="password" name="pass2" required>
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
                                    </form>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        </div>
                                        <div class="row" style="justify-content: center;margin:10px auto;display: flex;text-align:center;align-items: center;justify-content: center;">
                                        <?php
                                        if(isset($word1)){
                                            echo '<a href="../.." style="text-decoration:none;color:#5161ce;">';
                                        }    ?>
                                        
                                            <button type="submit" value="Submit" click="passwordMatch()" class="btn" style="margin:10px auto">
                                            Register</button></a>
                                        </div> 
                                        <div class="row" style="justify-content: center;margin:10px auto;display: flex;text-align:center;align-items: center;justify-content: center;">
                                            <a href="../../" style="text-decoration:none;color:#5161ce;">
                                            <button type="submit" value="Submit" class="btn" style="width:50%;margin:10px">
                                            Back To Home Page</button></a>
                                        </div>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    
                                <img src="/ezocar/images/create_acc.avif"
                                         class="img-fluid" alt="Sample image">


                            </div>
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>
