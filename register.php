<?php include_once("Template/header.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

    func::register($db, $_POST['username'], $_POST['password']);
    header("location:index.php");
    exit();
}
?>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <form method="post" action="register.php">
                <input class="form-control" minlength="3" name="username" placeholder="Name..."><br>
                <input class="form-control" minlength="5" name="password" type="password" placeholder="Password..."><br>
                <input class="form-control btn-primary w-25" name="submit" type="submit" placeholder="Register..."><br>
            </form>
        </div>
    </div>
</div>

<?php include_once("Template/footer.php"); ?>