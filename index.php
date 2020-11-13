<?php
include_once('Template/header.php');
?>
<section class="parent">
    <div class="child">
        <?php

        if (!func::checkLoginStat($db))
        {
            header("location:login.php");
            exit();
        }
        ?>
    </div>
</section>
<?php
include_once("Template/footer.php");
?>
