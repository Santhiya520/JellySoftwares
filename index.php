<?php
    include_once 'connectiondb.php';
    $sql="select * from themeDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $logo = $row['logo'];
        $logo1 = $row['logo1'];
        $favicon = $row['favicon'];
        $title = $row['title'];
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        #card-login{
            height:400px;
        }
        #log-img{
            height:380px;
            width:430px;
        }
    </style>
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages  pt-sm-4 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden" id="card-login">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="assets/images/auth-img.jpg" alt="" class="img-fluid rounded" id="log-img">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-50">
                                    <div class="auth-brand pt-4 ps-4 pe-4">
                                        <a href="index.html" class="logo-light">
                                            <h1>Sri Ram Fireworks</h1>
                                        </a>
                                        <a href="index.html" class="logo-dark">
                                            <h1>Sri Ram Fireworks</h1>
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <!-- form -->
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label for="UserName" class="form-label">UserName</label>
                                                <input class="form-control" type="text" id="username" name="username" required=""
                                                    placeholder="Enter your UserName">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" required="" id="password" name="password"
                                                    placeholder="Enter your password">
                                            </div>
                                            <div class="mb-0 text-start pt-2">
                                                <input class="btn btn-soft-primary w-100" type="submit" name="submit" value="Log In">
                                                <!--<button class="btn btn-soft-primary w-100" type="submit" name="submit"><i-->
                                                <!--        class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log-->
                                                <!--        In</span> </button>-->
                                            </div>
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    
    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            echo "username".$username;
            echo "password".$password;
            
            $sql="select * from userDB where (username='$username' and password='$password');";
            // echo $sql;
            $run = mysqli_query($connection, $sql);
            $id=0;
            while ($row = mysqli_fetch_array($run)) {
                // echo $row;
                 $id = $row['id'];
                //  echo "id".$id;
            }
             if ($id > 0) 
                    { 
                        echo "<script>window.location = 'Dashboard.php'</script>";
                    }
        }
    
    ?>

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <h4 style="font-weight:30px;color:black;">Master piece of<a href="https://jellysoftwares.com/" style="font-weight:30px;color:black;text-decoration:none"> jellysoftwares</a></h4>
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>