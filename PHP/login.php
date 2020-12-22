<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    
    <title>PHP form handling</title>    
  </head>
  <body>

    
    <div class="container">
      <h1>Welcome to CS4640 Survey</h1>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name: <input type="text" name="username" class="form-control" autofocus required /> <br/>
        Password: <input type="password" name="pwd" class="form-control" required /> <br/>
        <input type="submit" value="Sign in" class="btn btn-light"  />   
      </form>
    </div>


    <?php 

      if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['username']) > 0) {
        $user = trim($_POST['username']);
        if (!ctype_alnum($user)) reject("User Name");
        if (isset($_POST['pwd'])) {
          $pwd = trim($_POST['pwd']);
          if (!ctype_alnum($pwd)) reject("Password");
          else {
            setcookie('user', $user, time()+3600);
            setcookie('pwd', md5($pwd), time()+3600);
            header("Location: survey-instruction.php");
          }
        }

      }

    ?>


  </body>
</html>

