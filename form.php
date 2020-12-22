

<!doctype html>
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

<body onload="setFocus()">
  <center>
  <h2>Form handling with PHP</h2>
  <h2><font color="green">Enter your name</font></h2> 

  <br/>
  
    <form action="DickyIsShortForRichard.php" method="post">
      <span class="msg"><?php echo $prj1_msg ?></span> <br/>  
      <label required for="prj1">Project 1:</label> 
             <input type="text" name="prj1" required size="10px" style="text-align:right"/>
             <label for="prj1_total">out of 100</label>              
             <br/>              
             <!--  <input type="text" name="prj1_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
             
      <span class="msg"><?php echo $prj2_msg ?></span> <br/>             
      <label for="prj2">Project 2:</label>  
             <input type="text" name="prj2" size="10px" style="text-align:right"/>
             <label for="prj2_total">out of 100</label>              
             <br/>              
             <!--  <input type="text" name="prj2_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      <span class="msg"><?php echo $prj3_msg ?></span> <br/>
      <label for="prj3">Project 3:</label>  
             <input type="text" name="prj3" size="10px" style="text-align:right" />
             <label for="prj3_total">out of 100</label>              
             <br/>              
             <!--  <input type="text" name="prj3_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      <span class="msg"><?php echo $prj4_msg ?></span> <br/>
      <label for="prj4">Project 4:</label>   
             <input type="text" name="prj4" size="10px" style="text-align:right" />
             <label for="prj4_total">out of 100</label>             
             <br/>              
             <!--  <input type="text" name="prj4_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      <span class="msg"><?php echo $prj5_msg ?></span> <br/>
      <label for="prj5">Project 5:</label>  
             <input type="text" name="prj5" size="10px" style="text-align:right" />
             <label for="prj5_total">out of 100</label>               
             <br/>                           
             <!--  <input type="text" name="prj5_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      <span class="msg"><?php echo $prj6_msg ?></span> <br/>  
      <label for="prj6">Project 6:</label>  
             <input type="text" name="prj6" size="10px" style="text-align:right" />
             <label for="prj6_total">out of 100</label>                
             <br/>              
             <!--  <input type="text" name="prj6_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      <br/>
      <label for="drop_option">Drop the lowest score? </label>  
      <input type="radio" name="drop_option" value=true checked>Yes
      <input type="radio" name="drop_option" value=false>No
      <br /><br />      
      Average scores (percentage): <span style="color:red"> </span> 
      <br /><br />
      <input type="submit" value="Compute Grade" /> &nbsp;&nbsp;

    </form>  


</body>
</html>

