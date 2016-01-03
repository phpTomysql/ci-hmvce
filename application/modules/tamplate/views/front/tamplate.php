<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <!-- Include bootstrap CSS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href="<?php echo base_url(); ?>public/front/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/front/assets/css/style.css" rel="stylesheet">
    
    <!-- Include jQuery and bootstrap JS plugins -->
    
    <link href="<?php echo base_url(); ?>public/front/assets/css/jquery.bxslider.css" rel="stylesheet">
  
    <script src="<?php echo base_url(); ?>public/front/assets/js/jquery.bxslider.min.js"></script>
</head>
<body>
<!-- Site header and navigation -->
    <header class="top" role="header">
        <div class="container">
            <a href="#" class="navbar-brand pull-left">
                <?php
                //echo (is_logged_in()) ? $this->session->userdata('username'):'BS3 TUTORIAL';
                ?>
                
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
           
                    <?php echo Modules::run('menu'); ?>
                
        </div>
    </header>
<div class="middle">
        <div class="container">
            <div class="col-md-9 content">
                
                <h2><?php echo $title; ?></h2>
                
  <?php echo Modules::run('slider'); ?>
                
                
                <p> <?php $this->load->view( $module."/".$view_file); ?></p>
                <div class="to-tutorial">
                    <p><strong>Visit the tutorial now to learn more:</strong></p>
                    <a href="http://www.revillweb.com/tutorials/bootstrap-tutorial/" class="btn btn-success">TO THE TUTORIAL</a>
                </div>
            </div>
<!--            <div class="col-md-3">
                <h2>Resources</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="http://getbootstrap.com/" target="_blank">Download Twitter Bootstrap</a></li>
                    <li><a href="https://www.bootstrapresponsivethemes.com/" target="_blank">Bootstrap Responsive Themes</a></li>
                    <li><a href="http://amzn.to/1iO8NBg" target="_blank">UK: HTML & CSS: Design and Build Web Sites</a></li>
                    <li><a href="http://amzn.to/1lESKDp" target="_blank">UK: Bootstrap Site Blueprints</a></li>
                    <li><a href="http://amzn.to/1oXAbu6" target="_blank">US: HTML & CSS: Design and Build Web Sites</a></li>
                    <li><a href="http://amzn.to/1lESF2w" target="_blank">US: Bootstrap Site Blueprints</a></li>
                </ul>
            </div>-->
        </div>
    </div>
<!-- Site footer -->
    <div class="bottom">
        <div class="container">
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-heart"></span> Footer section 1</h3>
                <p>Content for the first footer section.</p>
            </div>
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-star"></span> Footer section 2</h3>
                <p>Content for the second footer section.</p>
            </div>
            <div class="col-md-4">
                <h3><span class="glyphicon glyphicon-music"></span> Footer section 3</h3>
                <p>Content for the third footer section.</p>
            </div>
        </div>
    </div>

</body>
</html>