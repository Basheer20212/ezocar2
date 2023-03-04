<?php include("../../connection.php");?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="UTF-8">
    <title>EzoCar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <!-- <link rel="stylesheet" href="../../styles/navbar.css"> -->
    
<style>
    .basheer{
        display:none
    }
    .brand a{
        color:#DC8449;
        font-size:25px;
        cursor: pointer;
        text-decoration:none;
        background: transparent;
        font-family: sans-serif;
    }
    .fullPage{
        background:#11101b;
    }
    .navbar{
        display:flex;
        padding: 10px; 
    }
    nav{
        flex:1;
        text-align:right;
    }
    nav ul{
        margin:0px;
        list-style:none;
        display:inline-block;
    }
    nav ul li{
        margin:5px 10px;
        display:inline-block;
    }
    nav ul li a{
        color:white;
        padding: 10px;
        font-size:25px;
        text-decoration:none;
        background: transparent;
        font-family: sans-serif;
    }
    nav ul li a:hover{
        color:#11101b;
        transition:1s;
        background:white;
        border-radius:50px;
        text-decoration:none;
    }
    nav ul li a button{
        color:white;
        border:none;
        outline:none;
        cursor: pointer;
        font-size:25px;
        background: transparent;
        font-family: sans-serif;
    }
    nav ul li a button:hover{
        color:#11101b;
    }
</style>

</head>

<body translate="no">
    <div class="fullPage">
        <div class="navbar">
            <div class="brand" style="">
                <a style=""href="../../"><h1>Ezocar</h1> </a>
            </div>
            <nav>
                <ul>
                    <li><a href="" style="font-size:17.5px"><i class="fas fa-tachometer-alt" style="margin:0px 5px;font-size:17.5px"></i>Dashboard</a> </li>
                    <li><a href="driversList.php" style="font-size:17.5px"><img src="../../assets/driver.png" style="width:20px;color:white;margin:0px 5PX;" alt="Driver">Drivers</a></li>
                    <li><a href="customerList.php" style="font-size:17.5px"><img src="../../assets/customer.png" style="width:20px;color:white;margin:0px 5PX;" alt="Driver">Customers</a></li>
                    <li><a href="../../" style="font-size:17.5px">Log Out</a></li>
                </ul>

            </nav>
        </div>
        <div style="width:17.5%;display:block;float:right;text-align:right">
            <div style="width:50%;display:block;margin:10px auto;text-align:center;align-items:center;justify-content:center">
                <a href="../admin/addDriver.php" style="font-size:17.5px;text-decoration:none">
                <button type="button" class="btn btn-info" style="margin:0;border-radius:0">Add Driver</button>
                </a>
            </div>
        </div>
    </div>
<section>
    <div class="container" style="margin:100px auto">
        <div class="text-center mt-5" >
            <h4>Drivers List</h4>
        </div>
        <div class="d-flex justify-content-center">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <?php
                    
                    $sql = "SELECT *,CONCAT(first_name,' ', last_name) AS full_name FROM driver";
                    $result = mysqli_query($connection, $sql);
                    while($row = $result->fetch_assoc()){
                        echo"<tbody>
                                    <tr>
                                        <th scope='row'>".$row['id']."</th>
                                        <td>".$row['first_name']."</td>
                                        <td>".$row['last_name']."</td>
                                        <td></td>
                                        <td ><div >
                                                <a class='btn btn-outline-primary' href='../commonPages/driverProfile.php'>View Profile</a>
                                                <a href='editDriverForm.php?id=$row[id]'><button class='btn btn-outline-primary ml-3'>Edit</button></a>
                                            </div>
                                        </td>
                                    </tr>";}?>
                            </tbody>
            </table>


        </div>
        
    </div>


    
</section>


    <!-- <button type="submit" onclick="something()" style="margin:auto;display:flex;align-items:center;justify-content:center;background: transparent;text-align: center;outline:none;border:none">
    <img src="../../assets/profile.png" alt="Porfile Image" style="margin:auto;display:flex;align-items:center;justify-content:center;width: 75px;background: transparent;text-align: center;">
    </button> -->
    <script>
        function something(){
            document.getElementById("basheer").style.display='block';
        }

        window.addEventListener('mouseup', function(event){
            var box = document.getElementById('basheer');
            if(event.target != box && event.target.parentNode != box){
                box.style.display='none';
            }
        })
    </script>
</body>

<!-- <script>
    
</script> -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script>
    function open(){
        document.getElementById("something").display.style='block';
    }

</script>
</html>