<?php
    include("../../connection.php");  
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM customer WHERE email='$username' AND password='$password'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header("Location:bookRide.php");
        }else{
            echo '<script>
                    window.location.href="index.php";
                    alert("Login Failed. Invalid Username or Password");
                    </script>';
        }
    }
?>
<?php
    
    
        
       
        
        
       
 