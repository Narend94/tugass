
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

     <!-- custum css file link -->
     <link rel="stylesheet" href="register.css">
</head>
<body>
    
<div class="form-container">
    <form action="proses_login.php" method="post">
        <h3>login now</h3>
        <input type="text" name="nama" required placeholder= "enter your name">
        <input type="password" name="password" required placeholder= "enter your password">
        
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>already have an account?<a href="register.php">register now</a></p>

</form>
</div>
</body>
</html>