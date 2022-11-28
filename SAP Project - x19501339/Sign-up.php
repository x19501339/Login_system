<?php
include ('config.php');
if (isset($_POST['submit'])){

    $name       = mysqli_real_escape_string($conn, $_POST['username']);
    $email      = mysqli_real_escape_string($conn, $_POST['email']);
    $pass       = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass      = mysqli_real_escape_string($conn, $_POST['password2']);
    $user_type  = ($_POST['user_type']);
    $errors     = [];
    $data       = [];

    $select     = "SELECT * FROM user_form WHERE email = '$email'";
    $result     = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0)
    {

        $errors['email'] = 'user already exist';

    }
    else
    {
        if($pass != $cpass)
        {
            $errors['passwords'] = 'Password does not match';
        }
        else
        {
            if (!empty($errors)) 
            {
                $data['success'] = false;
                $data['errors'] = $errors;
            }
            else
            {
                $pass = md5($_POST['password']);
                $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES ('$name', '$email','$pass', '$user_type')";
                if(mysqli_query($conn, $insert))
                {
                    $data['success'] = true;
                    header('location:index.php?message=success');  
                }    
            }
            
        }
    }
};

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <script> src="main.js"</script>
</head>
<title>Login & Registration Form</title>
<body>
    <div class ="login-box">
        <h2>SignUp</h2>
        <?php
        if(isset($errors)){
            foreach($errors as $error){
                echo '<div class="error">'.$error.'</div>';
            };
        };
        ?>
        <form method="post" action="#">
            <div class="user-box">
                <input type="text" name="username" required="" placeholder="username">
                <label></label> 
                <input type="email" name="email" required="" placeholder="email">
                <label></label>
                <input type="password" name="password" required="" placeholder="password">
                <label></label>
                <input type="password" name="password2" required="" placeholder="confirm password">
                <label></label>
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input id="submit" href="" type="submit" name="submit" value="register">
            </div>
            <div class ="button-form">
                <div id="register">
                    Already have an account?
                    <a href="Index.php">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</htmml>