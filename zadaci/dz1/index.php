<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>DZ1 - Početna</title>
    <?php include_once 'head1.php' ?>

<link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <?php include_once 'head2.php' ?>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <?php include_once 'logo.php' ?>
            <div class="row-fluid">
                <div class="span12">
    					
                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="index.php">Početna</a></li>
                                <li class="dropdown">
                                    <a href="page.php" class="dropdown-toggle">Stranica <b class="caret"></b></a>
                                    <?php include_once 'dropdown.php' ?>
                                </li>
                                <li class="dropdown"><a href="grid.php">Blog</a></li>
                                <li class="dropdown"><a href="about.php">O nama</a></li>
                                <li class="dropdown"><a href="contact.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

	            </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
    
                    <div id="headerSeparator"></div>

                    <div class="row-fluid">
                        <div class="span6">

                            <div id="divHeaderText" class="page-content">
                                <div id="divHeaderLine1">Tekst zaglavlja ide ovdje!</div><br />
                                <div id="divHeaderLine2">2nd Line Header Text for calling extra attention to featured content or information.</div><br />
                                <div id="divHeaderLine3"><a class="btn btn-large btn-secondary" href="#">Sekundarni gumb</a>    <a class="btn btn-large btn-primary" href="#">Primarni gumb</a></div>
                            </div>

                        </div>
                        <div class="span6">

                            <div id="camera_wrap">
<div data-src="styles/php.jpg" ><div style="position:absolute;bottom:10%;left:3%;padding:10px;width:50%;" class="fadeIn camera_effected camera_caption cap1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div></div>
<div data-src="styles/php_pretty.jpg" ><div class="camera_caption fadeFromBottom cap2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div></div>
<div data-src="styles/learning_to_code1.jpg" ><div style="position:absolute;top:3%;left:25%;padding:10px;width:40%;" class="fadeIn camera_effected camera_caption cap3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div></div>
                            </div>

                        </div>
                    </div>

                    <div id="headerSeparator2"></div>
        
                </div>
            </div>
   
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            

            <div class="row-fluid">

                <div class="span12" id="divMain">

                    <h1>Dobro došli</h1>

                    <p>Content on this page is for presentation purposes only. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>

                    <br />

                    <div class="row-fluid">
                        <div class="span4">
                            <h2>1/3 Odjeljka</h2>
                            <img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">                
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><a href="#">Read More &raquo;</a></p>
                        </div>
                        <div class="span4">                
                            <h2>1/3 Odjeljka</h2>
                            <img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">  
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><a href="#">Read More &raquo;</a></p>
                        </div>
                        <div class="span4">                
                            <h2>1/3 Odjeljka</h2>                
                            <img src="http://placehold.it/150x90/e7e7e7" class="img-polaroid" style="margin:5px 0px 15px;">  
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><a href="#">Read More &raquo;</a></p>
                        </div>
                    </div>  

                </div>

            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <?php include_once 'footer.php' ?>
    
</div>
<br /><br /><br />

<?php include_once 'script.php' ?>

<script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="scripts/camera/scripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, height: '65%', pagination: true });}$(function(){startCamera()});</script>

</body>
</html>