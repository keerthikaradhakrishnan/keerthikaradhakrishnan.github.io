<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "script.php"; ?>
    <title><?php echo $title; ?></title>
</head>
<body>
    <!-- Header -->
<nav class="navbar navbar-expand-sm">
					  <!-- Brand/logo -->
					<a class="navbar-brand" href="#" id="home">
						<img src="logo.jpg" alt="logo" style="width:40px; height=40px;">
						
					</a>
					<!-- Links -->
						<ul class="navbar-nav">
							<li class="nav-item  ">
                <a class="nav-link header-nav-color <?= (basename($_SERVER['PHP_SELF'])=="index18.php")?"active":""; ?>" href="index18.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-nav-color  <?= (basename($_SERVER['PHP_SELF'])=="About.php")?"active":""; ?>" href="About.php">About 	</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-nav-color  <?= (basename($_SERVER['PHP_SELF'])=="Dishes.php")?"active":""; ?>" href="Dishes.php">Dishes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-nav-color  <?= (basename($_SERVER['PHP_SELF'])=="Our Special.php")?"active":""; ?>" href="Our Special.php">Our Special</a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-nav-color  <?= (basename($_SERVER['PHP_SELF'])=="Contact Us    .php")?"active":""; ?>" href="Contact Us.php">Contact Us</a>
            </li>
						</ul>
		</nav>