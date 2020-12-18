<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php if(func::checkLoginStat($db)): ?>
                     <a class="nav-link text-white" href="../secure-login/index.php">Home</a>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="../secure-login/admin.php">Admin</a>
                     </li>
                <?php endif;?>
            </li>
        </ul>
       <ul class="navbar-nav ml-auto">
            <li class="nav-item align-items-end">
                <?php if(func::checkLoginStat($db)): ?>
                <a class="nav-link text-white" href="../secure-login/logout.php">Logout</a>
                <?php endif;?>
                <?php if(!func::checkLoginStat($db)): ?>
                <a class="nav-link text-white" href="../secure-login/logout.php">Login</a>
                <?php endif;?>
            </li>
           <li class="nav-item">
               <a class="border-white border-left nav-link text-white" href="../secure-login/register.php">Register</a>
           </li>
        </ul>
    </div>
</nav>