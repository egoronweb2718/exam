<?php
    include('connection.php');

    $getData = 'SELECT email FROM user_info';
    $result = mysqli_query($conn, $getData);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    

    if(isset($_POST['submit'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    
        $sql = "INSERT INTO user_info (firstname, lastname, email, password) 
        values('$firstname', '$lastname','$email','$password')";

    
        if(mysqli_query($conn, $sql)){
            header('location: register.php');
        }elseif($email == $users) {
            echo 'Please enter another email';
        }else{
            echo 'Query Error: '. mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('header.php');?>
    <div class="form-container">
        <form class="form" action="register.php" method="POST">
            <h1>Sign up</h1>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" required autocomplete="off">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" required autocomplete="off">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required autocomplete="off">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Enter Password" required autocomplete="off">
            <button type="submit" name="submit" class="btn">Register</button>

        </form>
    </div>
    <?php include('footer.php');?>

</html>
