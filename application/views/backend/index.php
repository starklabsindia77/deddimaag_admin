<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>DedDimaag | <?php echo $page_title;?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="DedDimaag" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon1.png">

    <?php include 'config/header_info.php' ;?>

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <?php include 'config/nav.php';?>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <?php include 'config/top_bar.php';?>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <?php include 'pages/'.$page_name.'.php';?>

                    <!-- [ Layout footer ] Start -->
                    <?php include 'config/footer.php';?>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->
    <?php include 'config/models.php';?>
    <?php include 'config/bottom_info.php';?>
</body>

</html>