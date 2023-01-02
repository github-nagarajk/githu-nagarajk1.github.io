<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
 
<body>
    <div class="imgcontainer">
        <img id="nag" src="logo.png" alt="Avatar" class="avatar" width="70px" height="70px" >
        
    </div>
    <!-- <section id="design">
            <div class="content">
                <h2>Jags</h2>
                <h2>Jags</h2>
            </div>
    </section> -->
    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>IK Roadmap</h1>
        
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="EID"
                         name="username" value="IK0008">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="1234">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
 
</html>