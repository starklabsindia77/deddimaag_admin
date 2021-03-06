<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Login || Admin Panel</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/shreerang-material.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/authentication.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="card authentication-inner px-4 py-2">

            <!-- [ Logo ] Start -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-60">
                    <div class="w-100 position-relative">
                        <img src="<?php echo base_url();?>assets/img/logos/Logo_Duniya.png" alt="Brand Logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- [ Logo ] End -->

            <!-- [ Form ] Start  <?php echo base_url();?>auth/login -->
            <form class="my-5" action="<?php echo base_url();?>auth/login" id="data" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="emailORphnno">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label d-flex justify-content-between align-items-end">
                        <span>Password</span>
                        <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                    </label>
                    <input type="password" class="form-control" name="password">
                    <div class="clearfix"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center m-0">
                    <label class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-label">Remember me</span>
                    </label>
                    <button type="submit" class="btn btn-primary"><a  class="text-white">Sign In</a></button>
                </div>
            </form>
            <!-- [ Form ] End -->

            <div class="text-center text-muted">
                Don't have an account yet?
                <a href="pages_authentication_register-v1.html">Sign Up</a>
            </div>

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
    <script src="<?php echo base_url();?>assets/js/pace.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
   <!--  <script type="text/javascript">
        $("form#data").submit(function(e){
            e.preventDefault();    
            //var formData = new FormData(this);
            var url = $(this).attr('action');
            var method = $(this).attr('method');
            //var data = $(this).serialize();
            console.log(data);
            var form = $('#data')[0];

            // Create an FormData object
            var data = new FormData(form);
            $.ajax({
                url:url,
                type:method,
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data:data
            }).done(function(data){
               if(data !== '')
                {
                    //console.log(data);
                    window.location.href='<?php echo base_url();?>admin/dashboard';
                }
                else
                {
                window.location.href='<?php echo base_url();?>';
                throw new Error('go');
                } 
            });
        });
    </script>  -->
    <script src="<?php echo base_url();?>assets/libs/popper/popper.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/sidenav.js"></script>
    <script src="<?php echo base_url();?>assets/js/layout-helpers.js"></script>
    <script src="<?php echo base_url();?>assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <!-- Demo -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script><script src="<?php echo base_url();?>assets/js/analytics.js"></script>
</body>

</html>
