<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  
  <title>PHP form handling</title>    
    <style>
      a:hover { background-color:white; }
      label { padding: 4px 10px 0px 4px; }       
      .msg { margin-left:40px; font-style: italic; color: red; font-size:0.8em;}
    </style>
 
    <script type="text/javascript">
      function setFocus()
      {
    	  document.forms[0].elements[0].focus();
      }
    </script>
</head>
<body>

      <?php 
        if (i);
      ?>
  
  <div class="container">
    <h1>Welcome, <font color="green" style="font-style:italic"><?php if (isset($_COOKIE['user'])) echo $_COOKIE['user']; ?></font></h1>
    <p>
      The purpose of this in-class exercise is
      to help you practice and experience state management mechanism in PHP.      		       
    </p>
    <p>
      To complete this exercise, you will implement an online survey. 
      The survey consists of at least 3 questions, each of which is displayed on a separated screen.
      You are free to create any questions of your choices. 
      The only constraint is that the questions must be appropriate for college students.
    </p>
    <p>
      You may format the screens as you wish as long as you
      follow the usability guidelines from class. Get creative. 
      Feel free to add additional elements you feel should be included and have fun!
    </p>
    <p>
      Let's <a href="question1.php" title="This link does not work now. Question must be implemented">start the survey</a>.
      <br/><br/>
      Or <a href="logout.php">log out</a>.     
    </p>
  </div>
  <?php ?>

</body>
</html>