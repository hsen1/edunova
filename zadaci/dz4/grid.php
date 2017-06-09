<?php include_once 'config.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $naslovAplikacije; ?></title>
    <?php include_once 'head1.php' ?>

	<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />	<link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />

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
                                <li class="dropdown active"><a href="grid.php">Blog</a></li>
                                <li class="dropdown"><a href="about.php">O nama</a></li>
                                <li class="dropdown"><a href="contact.php">Kontakt</a></li>
                                <li class="dropdown"><a href="login.php">Login</a></li>
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
                <a href="index.html">Početna</a> &nbsp;/&nbsp; <span>Blog</span>
            </div>

            <div class="row-fluid">
                <div class="span12">

                    <h1>Blog</h1>

                    <div id="gridArea" class="yoxview">
                        <ul id="tiles">
                        <li>
                            <a href="styles/thumbs/sticky_800.jpg"><img src="styles/thumbs/sticky_350.jpg" alt="Sticky" title="Sticky"/></a>
                            <div class="meta"><span>7 minutes ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">New photo</a></h4>
                            <p>A sample photo with short description. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>            
                        <li>
                            <a href="styles/thumbs/egg_800.jpg"><img src="styles/thumbs/egg_350.jpg" alt="Egg" title="Egg"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Sample photo with long description</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. 
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/earrings_800.jpg"><img src="styles/thumbs/earrings_350.jpg"  alt="Earrings" title="Earrings"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Earrings</a></h4>
                            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>
                        <li>
                            <article class="flex-video">
                                <iframe width="560" height="315" src="http://player.vimeo.com/video/47911018" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </article>   
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Vimeo video embed</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </li>  
                        <li>                
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Sample short text</a></h4>
                            <p>A sample short text post with no 'Read More' link.
                            </p></li>
                        <li>
                            <a href="styles/thumbs/butterfly_800.jpg"><img src="styles/thumbs/butterfly_350.jpg" alt="Butterfly" title="Butterfly"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Butterfly</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>
                        <li>
                            <img src="styles/thumbs/orange_350.jpg" alt="Orange" title="Orange"/>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Sample photo with no lightbox</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></li>
                        <li>                
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Sample quote</a></h4>                
                            <blockquote>
	                            <p>"Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s."</p>
	                            <small>by Author</small>
                            </blockquote>
                            </li>
                        <li>
                            <a href="styles/thumbs/painted-wood_800.jpg"><img src="styles/thumbs/painted-wood_350.jpg" alt="Painted Wood" title="Painted Wood"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Painted Wood</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/spiral_800.jpg"><img src="styles/thumbs/spiral_350.jpg" alt="Spiral" title="Spiral"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Sample photo with no description</a></h4>
                            </li>
                        <li>
                            <a href="styles/thumbs/puzzle_800.jpg"><img src="styles/thumbs/puzzle_350.jpg" alt="Puzzle" title="Puzzle"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Puzzle</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/candle_800.jpg"><img src="styles/thumbs/candle_350.jpg" alt="Candle" title="Candle"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Candle</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                            </li>
                        <li>
                            <a href="styles/thumbs/calendar_800.jpg"><img src="styles/thumbs/calendar_350.jpg" alt="Calendar" title="Calendar"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Calendar</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. 
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/christmas_800.jpg"><img src="styles/thumbs/christmas_350.jpg" alt="Christmas" title="Christmas"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Christmas</a></h4>
                            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/ships_800.jpg"><img src="styles/thumbs/ships_350.jpg" alt="Ships" title="Ships"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Ships</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/card_800.jpg"><img src="styles/thumbs/card_350.jpg" alt="Card" title="Card"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Lorem Ipsum</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. 
                            <br /><a href="#" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/fashion_800.jpg"><img src="styles/thumbs/fashion_350.jpg" alt="Fashion" title="Fashion"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Duis mollis, est non commodo</a></h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>
                        <li>
                            <a href="styles/thumbs/air_800.jpg"><img src="styles/thumbs/air_350.jpg" alt="Air" title="Air"/></a>
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Lorem Ipsum</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>
                        <li>
                            <article class="youtube video flex-video">
                                <iframe width="560" height="315" src="http://www.youtube.com/embed/e7OYeIXsW60"></iframe>
                            </article>   
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="#">Youtube video embed</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p>
                        </li>   
                        <li>                
                            <div class="meta"><span>7 days ago</span><span class="pull-right">By Bob</span></div>
                            <h4><a href="http://www.oswt.co.uk/">Sample long text</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            <br /><a href="http://www.oswt.co.uk/" class="more_link">Read More</a></p></li>   
                        </ul>
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


<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script><script src="scripts/yoxview/yox.js" type="text/javascript"></script><script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script><script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>


</body>
</html>