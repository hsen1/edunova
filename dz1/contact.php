<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>DZ1 - Kontakt</title>
    <?php include_once 'head1.php' ?>



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
                                <li class="dropdown"><a href="index.php">Početna</a></li>
                                <li class="dropdown">
                                    <a href="page.php" class="dropdown-toggle">Stranica <b class="caret"></b></a>
                                    <?php include_once 'dropdown.php' ?>
                                </li>
                                <li class="dropdown"><a href="grid.php">Blog</a></li>
                                <li class="dropdown"><a href="about.php">O nama</a></li>
                                <li class="dropdown active"><a href="contact.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

	            </div>
            </div>                    
           
            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">Početna</a> &nbsp;/&nbsp; <span>Kontakt</span>
            </div>

            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Kontakt</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                                 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, 
                    consectetur sit amet vulputate vel, dapibus sit amet lectus. 
                    Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. </p>

                </div>
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Sample Sidebar Content</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and <a href="http://www.oswt.co.uk/">typesetting industry</a>. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>                       
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






</body>
</html>