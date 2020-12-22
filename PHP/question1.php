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
    <div style="float:right; padding:30px;">    
      <form action="logout.php" method="get">
        <input type="submit" value="Log out" />
      </form>
    </div>    
    
    <h1>Welcome <font color="green" style="font-style:italic">username</font> </h1>
    <h3>Question 1: What did you have for lunch?</h3>
       
    <form action="" method="post">      
      <input type="text" name="lunch" class="form-control" autofocus required /> <br />
      <input type="submit" value="Submit" class="btn btn-light"  />   
    </form>
  </div>





</body>
</html>