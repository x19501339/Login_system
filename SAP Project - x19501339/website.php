<?php

include ('config.php');



if(!isset($_SESSION['user_name'])){
    header('location:Index.php');
}


?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="Style.css">
    <script> src="main.js"</script>
</head>
<title></title>
<body class ="body_index">
   <header>
        <nav>
            <ul>
                <li><a href="website.php">Home</a></li>
                <li><a href="Index.php">Login</a></li>
                <li><a href="Sign-up.php">SignUp</a></li>
                <li><a href="LogOut.php">LogOut</a></li>
            </ul>
        </nav>
   </header>
   <div class="Container">
        <h3>Hello <span>User</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></span></h1>
   </div>
</body>
</html>