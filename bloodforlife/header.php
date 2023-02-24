<style>
    <?php include 'css/test.css'; ?>
</style>
<nav class="navbar navbar-expand-sm nav-color bg sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">Blood For Life</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn nr_btn" href="bloodinfo.php">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="bloodrequest.php">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn nr_btn" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><span><?php echo $_SESSION['hname']; ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn lo_font nr_btn" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="sentrequest.php">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn nr_btn font-weight-bold user_box" href="#"><span><?php echo ' '.$_SESSION['rname']; ?></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn nr_btn lo_font" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn nr_btn" href="login.php">Login</a>
            </li>
           
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>