<?php
    include('connection.php');

    if(isset($_GET['login'])){
        $email = mysqli_real_escape_string($conn, $_GET['email']);
        $password = mysqli_real_escape_string($conn, $_GET['password']);
    
        $sql = 'SELECT email, password FROM user_info';
       $result = mysqli_query($conn, $sql);
       $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
       print_r($users);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('header.php');?>
    <div class="form-container">
        <form class="form" action="login.php" method="GET">
            <h1>Login</h1>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required autocomplete="off">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required autocomplete="off">
            <button type="submit" name="login" class="btn">Login</button>

        </form>
    </div>
    <?php include('footer.php');?>

</html>