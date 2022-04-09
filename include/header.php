<header>
    <!-- Logo-->
    <h1> <a class = navigation-logo>GI. JOBs</a> </h1>

    <!-- // Do it according to context -->
    <nav class="navigation-bar">  
        <!-- Javascript needed here to show menu bar-->
        <i class="fa-solid fa-bars menu-toggle"></i>    
        <ul class="nav dropDown">
            <li> <a href="/Starter/index.php">HOME</a> </li>
            <li> <a href="/Starter/index.php#why-us">ABOUT</a> </li>
            <li> <a href="/Starter/index.php#FAQ">FAQ</a> </li>
            <li> <a href="/Starter/index.php#Contact">CONTACT US</a> </li>

            <?php if(isset($_SESSION['id'])) : ?>
                <?php if(isset($_SESSION['companyName'])) : ?>
                    <li class="account">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['companyName']; ?>
                                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                            </a>
                            <ul>
                                <li class="jobline"><a href="/jobs/creation.php" class="jobs">Post Job</a></li>
                                <li class="jobline"><a href="/jobs/dashboard.php">View Jobs</a></li>
                                <li><a href="<?php echo BASE_URL . 'database/logout.php' ?>" class="logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="account">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['firstname']; ?>
                                <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                            </a>
                            <ul>
                                <li class="jobline"><a href="/jobs/dashboard.php">View Jobs</a></li>
                                <li class="logoutline" ><a href="<?php echo BASE_URL . 'database/logout.php' ?>" class="logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
            <?php else : ?>
                <li> <a href="login.php">SIGN IN</a> </li>
                <li> <a href="newacc.php">SIGN UP</a> </li>
                <li> <a href="newcompanyacc.php">COMPANY</a> </li>
            <?php endif; ?>    
        </ul>                           
    </nav>
</header>