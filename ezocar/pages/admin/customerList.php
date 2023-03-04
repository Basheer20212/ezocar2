<?php include("../../connection.php");?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="UTF-8">
    <title>EzoCar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../../styles/navbar.css">
    <style>
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

<body>
<div class="fullPage">
        <div class="navbar">
            <div class="brand" style="">
                <a style=""href="../../"><h1>Ezocar</h1> </a>
            </div>
            <nav>
                <ul>
                    <li><a  href="">Dashboard</a> </li>
                    <li><a  href="driversList.php">Drivers</a></li>
                    <li><a  href="customerList.php">Customer</a></li>
                    <li><a style="" href="../../"><button type="button">Log Out</button></a> </li>
                </ul>
            </nav>
        </div>
        <div style="width:17.5%;display:block;float:right;text-align:right">
            <div style="width:50%;display:block;margin:10px auto;text-align:center;align-items:center;justify-content:center">
                <a href="../admin/addCustomer.php" style="font-size:17.5px;text-decoration:none">
                <button type="button" class="btn btn-info" style="margin:0;border-radius:0">Add Customer</button>
                </a>
            </div>
        </div>
    </div>


<section>
    <div class="container">
        <div class="text-center mt-5">
            <h4>Customers List</h4> 
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
                <tbody>
                    <?php
                        $sql = "SELECT * FROM customer";
                        $result = mysqli_query($connection, $sql);
                        while($row = $result->fetch_assoc()){            
                            echo"<tbody>
                                        <tr>
                                            <th scope='row'>".$row['id']."</th>
                                                <td>".$row['first_name']."</td>
                                                <td>".$row['last_name']."</td>
                                                <td>".$row['id']."</td>
                                                <td><div>
                                                        <a id='customerId' class='btn btn-outline-primary' href='../commonPages/customerProfile.php'>View Profile</a>
                                                        <a href='editCustomerForm.php?id=$row[id]'><button class='btn btn-outline-primary ml-3'>Edit</button></a>
                                                    </div>
                                                </td>
                                        </tr>"
                                        ;}?>
                </tbody>
            </table>
        </div>
    </div>
</section>


</body>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script src="../../scripts/common.js"></script>
</html>
