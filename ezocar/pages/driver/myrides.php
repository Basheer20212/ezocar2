<?php 
    include("../../connection.php");

    ?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="UTF-8">
    <title>EzoCar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../../styles/navbar.css">
    <link rel="stylesheet" href="../../styles/ridesList.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
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
<body >
<div class="fullPage">
        <div class="navbar">
            <div class="brand" style="">
                <a style=""href="../../"><h1>Ezocar</h1> </a>
            </div>
            <nav>
                <ul>
                    <li><a  href="">Dashboard</a> </li>
                    <li><a  href="">My Rides</a></li>
                    <li><a  href="../commonPages/customerProfile.php">My Profile</a></li>
                    <li><a style="" href="../../"><button type="button">Sign Out</button></a> </li>
                </ul>
            </nav>
        </div>
    </div> 


<section class="mt-5">
    <div class="tr-job-posted section-padding">
        <div class="container">
            <div class="job-tab text-center">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                <form action="index.php" method='POST'>
                    <li role="presentation" class="active">
                        <a class="active show" href="#hot-jobs"  aria-controls="hot-jobs" role="tab" data-toggle="tab" aria-selected="true">
                        
                        <input id="myRadio1" type="radio"  name="myRadio" value="option1" class="radio_input"> 
                        <label for="myRadio1" style="cursor:pointer">Active</label>
                        
                        
                        </a>
                    </li>
                    <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">
                    
                        </li>
                    <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">
                    
                         
</a></li>
                    </form>  
                    <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Upcoming</a></li>
                    <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab" class="" aria-selected="false">Rejected</a></li>
                </ul>
                <?php 
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $active = $_POST['Active'];
                    
                    $sql = "SELECT *,CONCAT(last_name, ' ', first_name) AS full_name FROM driver WHERE status='$active'";
                    $result = mysqli_query($connection, $sql);       
                    while($row = $result->fetch_assoc()){
                        
                    echo'<div class="tab-content text-left">
                            <div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="job-item">
                                            <div class="item-overlay">
                                                <div class="job-info">
                                                <a href="#" class="btn btn-primary">'.$row['timing'].'</a>
                                                <span class="tr-title">
											        <a href="#">'.$row['full_name'].'</a>
											        <span><a href="#">Dig File</a></span>
										        </span>
                                            <ul class="tr-list job-meta">
                                                <li><i class="fa fa-map-signs" aria-hidden="true"></i>'.$row['address'].'</li>
                                                <li><i class="fa fa-briefcase" aria-hidden="true"></i>'.$row['level'].'</li>
                                                <li><i class="fa fa-money" aria-hidden="true"></i>'.$row['salary_range'].'</li>
                                            </ul>
                                            <ul class="job-social tr-list">
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job-info">
                                        <span class="tr-title">
										<a href="#">'.$row['full_name'].'</a>
										<span><a href="#">Dig File</a></span>
                                        
									</span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>'.$row['address'].'</li>
                                            <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>'.$row['level'].'</li>
                                            <li><span><i class="fa fa-money" aria-hidden="true"></i></span>'.$row['salary_range'].'</li>
                                        </ul>
                                        <div class="time">
                                            <a href="#"><span>'.$row['timing'].'</span></a>
                                            <span class="pull-right">Posted 23 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->';};}
                    $sql = "SELECT *,CONCAT(last_name, ' ', first_name) AS full_name FROM driver WHERE status='Taken'";
                    $result = mysqli_query($connection, $sql);       
                    while($row = $result->fetch_assoc()){
                    echo'
                    <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="job-item">
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">'.$row['timing'].'</a>
                                            <span class="tr-title">
											<a href="#">'.$row['full_name'].'</a>
											<span><a href="#">Loop</a></span>
										</span>
                                            <ul class="tr-list job-meta">
                                                <li><i class="fa fa-map-signs" aria-hidden="true"></i>'.$row['address'].'</li>
                                                <li><i class="fa fa-briefcase" aria-hidden="true"></i>'.$row['level'].'</li>
                                                <li><i class="fa fa-money" aria-hidden="true"></i>'.$row['salary_range'].'</li>
                                            </ul>
                                            <ul class="job-social tr-list">
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="job-info">
                                        <span class="tr-title">
										<a href="#">'.$row['full_name'].'</a>
										<span><a href="#">Loop</a></span>
									</span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>'.$row['address'].'</li>
                                            <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>'.$row['level'].'</li>
                                            <li><span><i class="fa fa-money" aria-hidden="true"></i></span>'.$row['salary_range'].'</li>
                                        </ul>
                                        <div class="time">
                                            <a href="#"><span class="part-time">Part Time</span></a>
                                            <span class="pull-right">Posted 1 day ago</span>
                                        </div>
                                    </div>'
                                    ;};?>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane -->
                </div>
            </div><!-- /.job-tab -->
        </div><!-- /.container -->
    </div>
</section>


</body>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script src="../../scripts/common.js"></script>
</html>