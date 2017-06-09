<?php include_once 'config.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $naslovAplikacije; ?></title>
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
                                <li class="dropdown"><a href="contact.php">Kontakt</a></li>
                                <li class="dropdown active"><a href="login.php">Login</a></li>
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
                <a href="index.html">Početna</a> &nbsp;/&nbsp; <span>Login</span>
            </div>


            <div class="row-fluid">
            	
            	<h1>Unesite podatke</h1>
            	
                <div class="large-4 columns large-centered">
				
				<?php 
				if(isset($_GET["neuspio"])){
					echo "<b>Kombinacija korisničkog imena i lozinke nije ispravna! </b>";
					echo "<br />";
					echo "<br />";
				}
				
				if(isset($_GET["nemateOvlasti"])){
					echo "Morate se prvo logirati!";
				}
				 ?>
				
				<form method="post" action="authorize.php">
					<label for="korisnik">Korisničko ime</label>
					<input type="text" name="korisnik" id="korisnik" value="<?php echo isset($_GET["korisnik"]) ? $_GET["korisnik"] : ""; ?>"/>
					<label for="lozinka">Lozinka</label>
					<input type="password" name="lozinka" id="lozinka" />
					<br />
					<input type="submit" class="button expanded" value="Login" />
				</form>
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