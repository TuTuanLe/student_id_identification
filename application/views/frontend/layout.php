<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php 
            if(isset($title))
                echo $title;
            else
                echo "FITNESS";
        ?>
    </title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <link rel="icon" type="image/x-icon" href="public/images/3M1W.png">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <!-- <script src="public/js/bootstrap.js"></script> -->

    <link href="public/css/fontawesome.min.css" rel="stylesheet">
    <link href="public/css/lte.css" rel="stylesheet">
     <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="public/css/AdminLTE.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="public/css/style-jc.css">
    <link href="public/css/menu-tab.css" rel="stylesheet">
    <!-- <link href="public/css/style.css" rel="stylesheet"> -->
    <link href="public/css/jquery.bxslider.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet"> 
    <link href="public/css/style_1.css" rel="stylesheet">
    <link href="public/css/libs.css" rel="stylesheet">
    <script src="public/js/jquery-2.2.3.min.js"></script>

 


    </head>
    <body class="csstransforms3d js supports-csstransforms supports-csstransforms3d supports-fontface supports-js supports-touch">
      
        <div class="main-wrapper">
            <div class="container-mp is-moved-by-drawer is-transitioning nav-wrapper">
                <div class="main-content-wrapper">
                    <?php 
                        $this->load->view('frontend/modules/topbar');
                    ?>
                    <!-- HEADER LOGO + SEARCH -->
                    <?php 
                        // $this->load->view('frontend/modules/logo-search');
                    ?>
                    <?php 
                        //   $this->load->view('frontend/modules/category');
                    ?>
                    

                    <!--CONTENT-->
                        <?php 
                            if(isset($com,$view)){
                                $this->load->view('frontend/components/'.$com.'/'.$view);
                            }
                            else
                                $this->load->view('frontend/components/Error404/index');
                        ?>
                        <!--FOOTER-->
                        <?php 
                            $this->load->view('frontend/modules/footer');
                        ?>
                   
                </div>
            </div>
     
            

            <div class='scrolltop'>
                <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
            </div>
        </div>
            <script src="public/js/bootstrap.js"></script>
            <script src="public/js/libs.js"></script>
            <script src="public/js/app.min.js"></script>
            <script src="public/js/owl.carousel.js"></script>
            <script src="public/js/jquery.jcarousel.js"></script>
            <script src="public/js/jcarousel.connected-carousels.js"></script>
            <script src="public/js/scroll.js"></script>
            <script src="public/js/search-quick.js"></script>
            <script src="public/js/custom-owl.js"></script>
            <script src="public/js/jquery.flexslider.js"></script>
    </body>
</html>
