<?php
    include('connection.php');

    $sql = 'SELECT email FROM user_info ORDER BY id';
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);


    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
    
    <?php include('header.php');?>
    <div class="index-container">
        <div class="index-title">
             <h1><span class="welcome">welcome</span><br> Guest Users</h1>
        </div>
        <div class="index-info">
            <p>Discover more by Loging in.</p>
            <p>If you dont have account you can sign in for free.</p>
        </div>
    </div>
    <div class="index-structure-container">
        <div class="username">

            <h3>Recently Sign In</h3>
            <?php foreach($users as $user){ ?>
                <ul class="index-ul">
                    <li><?php echo htmlspecialchars($user['email']); ?>
                </ul>
            <?php } ?>
            <div class="index-buttons">
            <button class="index create-btn"><a href="register.php">Create</a></button>
            <button class="index update-btn">Update</button>
            <button class="index delete-btn">Delete</button>
            </div>
        </div>
    </div
    <?php include('footer.php');?>

</html>