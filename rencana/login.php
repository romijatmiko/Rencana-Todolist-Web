<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM u_user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
  <!--doctype html-->
<html lang="pt-br">     
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!---------------------------------------------->
    <script src="https://kit.fontawesome.com/73ea2339d2.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon/favicon.png"/>
    <title>Rencana | Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Mulish:wght@200;400&display=swap" rel="stylesheet">
    <!--style----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                 
    </head>
            <body>
            
                <body class="align">

                    <div class="grid">
                  
                      <form action="" method="POST" class="form login">
                  
                        <header class="login__header">
                          <h3 class="login__title">Login</h3>
                        </header>
                  
                        <div class="login__body">
                  
                          <div class="mb-4">
                            <i class="far fa-envelope"></i>
                          <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email; ?>" required>
                      </div>
                          <div class="mb-4">
                            <i class="fas fa-unlock-alt"></i>
                              <label  name ="detail" class="form-label"> Password</label>
                            <input type="password" class="form-control" id="password" name="password"  value="<?php echo $_POST['password']; ?>" required>
                          </div>
                          </div>
                  
                        <footer class="login__footer">
                        <input type="submit" value="Login" name="submit">
                  
                          <p><span class="icon icon--info">?</span><a href="register.php">Create an Account</a></p>
                        </footer>
                  
                      </form>
                  
                    </div>
                  
                  </body>
              
        
            

        
</html>