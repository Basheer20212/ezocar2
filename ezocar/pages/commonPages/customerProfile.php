<?php include("../../connection.php");?>
<html lang="en"><head>

    <meta charset="UTF-8">
    <title>EzoCar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../../styles/navbar.css">



</head>

<body >
<section>
    <div class="container-fluid p-0 m-0">
        <div class="col-12 m-0 p-0">
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="../admin/customerList.php">Customer</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Customer Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                         class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">
                                    <?php
                                    $sql = "SELECT *,CONCAT(last_name,' ',first_name) AS fullName FROM customer";
                                    $result = mysqli_query($connection, $sql);
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                        <?php echo $row['fullName'];?>
                                    </h5>
                                    
                                    <p class="text-muted mb-1"><?php echo $row['employment'];?></p>
                                    <p class="text-muted mb-4"><?php echo $row['address'];?></p>
                                    

                                    <div class="d-flex justify-content-center mb-2">
                                        <button type="button" class="btn btn-primary">Follow</button>
                                        <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush rounded-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="fas fa-globe fa-lg text-warning"></i>
                                            <p class="mb-0">https://mdbootstrap.com</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                            <p class="mb-0">mdbootstrap</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                            <p class="mb-0">@mdbootstrap</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                            <p class="mb-0">mdbootstrap</p>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                            <p class="mb-0">mdbootstrap</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                            <?php echo $row['fullName'];
                                                  echo '<br>';?>    
                                            </p>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                            <?php echo $row['email'];
                                                  echo '<br>';?>    
                                            </p>
 
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                            <?php 
                                            echo $row['phone'];  
                                            echo '<br>';?>      
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                            <?php echo $row['phone'];?>    
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $row['address'];?></p>
                                            <?php break; }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                            </p>
                                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                            <div class="progress rounded mb-2" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                            </p>
                                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                            <div class="progress rounded mb-2" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
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
    </div>
</section>


</body>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</html>
