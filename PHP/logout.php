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
    <h1>CS4640 Survey</h1>
    Successfully logged out 
  </div>

<?php 
    if (count($_COOKIE) > 0) {
        foreach($_COOKIE as $key => $value) {
            unset($_COOKIE[$key]);
            setcookie($key, '', time() - 3600);
        }
    }
?>


</body>
</html>