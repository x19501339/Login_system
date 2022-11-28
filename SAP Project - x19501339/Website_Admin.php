<?php

include ('config.php');


if(!isset($_SESSION['admin_name'])){
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
                <li><a href="Website_Admin.php">Home</a></li>
                <li><a href="Index.php">Login</a></li>
                <li><a href="Sign-up.php">SignUp</a></li>
                <li><a href="LogOut.php">LogOut</a></li>
            </ul>
        </nav>
   </header>
   <div class="Container">
        <h3>Hello <span>Admin</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
   </div>
</body>
</html>