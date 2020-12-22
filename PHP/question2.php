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
    
    <h1>Welcome <font color="green" style="font-style:italic">nan</font> </h1>
    <h3>Question 2: Who is your most favorite instructor?</h3>
       
    <form action="" method="post">
      
      <!-- Notice that the names of all radio button must be the same to group them, i.e., only option can be selected
           What happen if the names are different ? -->
      <input type="radio" name="favorite_instr" value="Upsorn" checked> Upsorn, CS 4640 instructor <br />
      <input type="radio" name="favorite_instr" value="Upsorn P"> Upsorn P, CS 4640 intsructor <br />
      <input type="radio" name="favorite_instr" value="Upsorn Praphamontripong" > Upsorn Praphamontripong <br />
      <input type="submit" value="Submit" class="btn btn-light"  />   
    </form>
    <br/>
    Previous question: you answer <font color="green" style="font-style:italic">previous answer</font>
  </div>


</body>
</html>