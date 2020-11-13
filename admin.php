<?php include_once("Template/header.php");
 if (!func::checkLoginStat($db))
 {
     header("location:login.php");
     exit();
 }
?>
<section class="mt-2">
    <div class="container">
        <h6>
        <?php
            echo $_COOKIE['username'];
        ?>
        </h6>
    </div>
</section>
<?php include_once("Template/footer.php"); ?>