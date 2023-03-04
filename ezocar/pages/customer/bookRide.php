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
        font-size:20px;
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
        font-size:22.50px;
        background: transparent;
        font-family: sans-serif;
    }
    nav ul li a button:hover{
        color:#11101b;
    }

    body {
        background-color: #eee
    }

    .card {
        border: none;
        border-radius: 10px
    }

    .c-details span {
        font-weight: 300;
        font-size: 13px
    }

    .icon {
        width: 50px;
        height: 50px;
        background-color: #eee;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 39px
    }

    .badge span {
        background-color: #fffbec;
        width: 60px;
        height: 25px;
        padding-bottom: 3px;
        border-radius: 5px;
        display: flex;
        color: #fed85d;
        justify-content: center;
        align-items: center
    }

    .progress {
        height: 10px;
        border-radius: 10px
    }

    .progress div {
        background-color: red
    }

    .text1 {
        font-size: 14px;
        font-weight: 600
    }

    .text2 {
        color: #a5aec0
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
                    <li><a  href=""><i class="fas fa-tachometer-alt"></i>Dashboard</a> </li>
                    <li><a  href="myrides.php"><i class="far fa-address-book"></i>My Rides</a></li>
                    <li><a  href="bookRide.php"><i class="far fa-clone"></i>Book Ride</a></li>
                    <li><a  href="../commonPages/customerProfile.php"><i class="far fa-clone"></i>My Profile</a></li>
                    <li><a style="" href="../../"><button type="button">Log Out</button></a> </li>
                </ul>
            </nav>
        </div>
    </div> 


























<section>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">

                            <div class="ms-2 c-details">
                                <h6 class="mb-0">Mailchimp</h6> <span>TN06H2323</span>
                            </div>
                        </div>
                        <button class="btn btn-primary"> <span>Book</span> </button>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">3 Booked <span class="text2">of 5 capacity</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">

                            <div class="ms-2 c-details">
                                <h6 class="mb-0">Mailchimp</h6> <span>TN06H2323</span>
                            </div>
                        </div>
                        <button class="btn btn-primary"> <span>Book</span> </button>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">3 Booked <span class="text2">of 5 capacity</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script src="../../scripts/common.js"></script>
</html>