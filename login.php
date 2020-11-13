<?php include_once('Template/header.php'); ?>
<section class="parent">
    <div class="child">
        <?php
        if (func::checkLoginStat($db))
        {
            header("location:index.php");
            exit();
        }
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            $query = "SELECT * FROM users WHERE user_username = :username AND user_password = :password";

            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $db->prepare($query);
            $stmt->execute(array(':username' => $username, ':password' => $password));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['user_id'] > 0) {

                func::createRecord($db, $row['user_username'], $row['user_id']);
                header("location:index.php");
                exit();
            }
        }
        elseif (isset($_POST['username']) && isset($_POST['password']))
        {
            $query = "SELECT * FROM users WHERE user_username = :username AND user_password = :password";

            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $db->prepare($query);
            $stmt->execute(array(':username' => $username, ':password' => $password));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['user_username'] != $row['user_password'])
            {
                header("location:login.php");
                exit();
            }
        }
        ?>
        <div class="container mt-5">
            <form action="login.php" method="post" class="form-control">
                <label>Username</label><br>
                <input type="text" name="username" class="form-control"><br>
                <label>Password</label><br>
                <input type="password" name="password" class="form-control"><br>
                <input type="submit" value="Login" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>
<?php include_once("Template/footer.php"); ?>
