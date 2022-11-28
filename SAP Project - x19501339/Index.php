<?php
    include ('config.php');

   

    if (isset($_POST['submit'])){


        $email      = mysqli_real_escape_string($conn, $_POST['email']);
        $pass       = md5($_POST['password']);
        $errors     = [];
       

        $select     = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass' ";
        $result     = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin')
            {
                $_SESSION['admin_name']     = $row['name'];
                $_SESSION['admin_id']       = $row['id'];
                header('location:Website_Admin.php');
            }
            elseif($row['user_type'] == 'user')
            {
                $_SESSION['user_name']      = $row['name'];
                $_SESSION['user_id']        = $row['id'];
                header('location:website.php');
            }
            else
            {
                $errors[] = 'Wrong User Type. Please Select Correct User type';
            }
        }
        else
        {
            $errors[]     = 'Incorrect Email or Password Please try Again';
        }

        
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css"> 
    <script> src="main.js"</script>
</head>
<title></title>
<body>
    <div class ="login-box">
        <h2>Login</h2>
        <?php
            if(isset($errors)){
                foreach($errors as $error){
                    echo '<div class = "error">'.$error.'</div>';
                };
            };
            if(isset($_GET['message']) && $_GET['message']=='success')
            {
                echo '<div class="success">Registration successful. Please Login</div>';
            }
        ?>
        <form method="post" action="#">
            <div class="user-box">
                <input type="email" name="email" required="" placeholder="Email">
                <label></label>
                <input type="password" name="password" required="" placeholder="password">
                <label></label>
                <input id="submit" name="submit" href="" type="submit" value="login">
            </div>
            <div class ="button-form">
                <div id="register">
                    Don't have an account?
                    <a href="Sign-up.php">Register</a>
                </div>
            </div>
        </form>
    </div>
</body>
</htmml> 