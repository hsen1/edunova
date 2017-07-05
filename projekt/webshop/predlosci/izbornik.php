<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">
  	<a href="<?php echo $putanjaAPP;  ?>index.php">
  		<?php echo $naslovAplikacije; ?>
  	</a>
  </div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text hide-for-small-only">
      	<a href="<?php echo $putanjaAPP;  ?>index.php">
	  		<?php echo $naslovAplikacije; ?>
	  	</a>
      </li>
      <?php if(isset($_SESSION["logiran"])): ?>
      <li><a href="<?php echo $putanjaAPP;  ?>privatno/nadzornaPloca.php">Nadzorna ploča</a></li>
      <li>
        <a href="#">Programi</a>
        <ul class="menu vertical">
          <li><a href="<?php echo $putanjaAPP;  ?>privatno/smjerovi/index.php">Smjerovi</a></li>
          <li><a href="#">Grupe</a></li>
          <li><a href="#">Polaznici</a></li>
          <li><a href="#">Predavači</a></li>
        </ul>
      </li>
      <li>
        <a href="#">PHP</a>
        <ul class="menu vertical">
          <li><a href="<?php echo $putanjaAPP;  ?>privatno/php/objekt.php">Objekt</a></li>
          <li><a href="<?php echo $putanjaAPP;  ?>privatno/php/pdo.php">PDO</a></li>
        </ul>
      </li>
      <?php endif; ?>
      <li><a href="<?php echo $putanjaAPP;  ?>javno/onama.php">O nama</a></li>
      <li><a href="<?php echo $putanjaAPP;  ?>javno/kontakt.php">Kontakt</a></li>
      <li>
      	<?php if(!isset($_SESSION["logiran"])): ?>
      	<a href="<?php echo 	$putanjaAPP;  ?>javno/login.php" class="button expanded" >Login</a>
      	<?php else: ?>
      	<a href="<?php echo $putanjaAPP;  ?>javno/logout.php" class="alert button expanded">Logout</a>
      	<?php endif; ?>
      </li>
    </ul>
  </div>
  
</div>