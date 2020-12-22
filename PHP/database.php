<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  
  <title>State handling in PHP</title>    
</head>
<body>
  
  <div class="container">
    <h1>PHP and MySQL database</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <input type="submit" name="btnaction" value="create" class="btn btn-light" />
      <input type="submit" name="btnaction" value="insert" class="btn btn-light" />   
      <input type="submit" name="btnaction" value="select" class="btn btn-light" />
      <input type="submit" name="btnaction" value="update" class="btn btn-light" />
      <input type="submit" name="btnaction" value="delete" class="btn btn-light" />
      <input type="submit" name="btnaction" value="drop" class="btn btn-light" />            
    </form>

<?php 
if (isset($_GET['btnaction']))
{	
   try 
   { 	
      switch ($_GET['btnaction']) 
      {
         case 'create': createTable(); break;
         case 'insert': insertData();  break;
         case 'select': selectData();  break;
         case 'update': updateData();  break;
         case 'delete': deleteData();  break;
         case 'drop':   dropTable();   break;      
      }
   }
   catch (Exception $e)       // handle any type of exception
   {
      $error_message = $e->getMessage();
      echo "<p>Error message: $error_message </p>";
   }   
}
?>



<?php
// require('connect-db.php');

// require: if a required file is not found, reqire() produces a fatal error, the rest of the script won't run
// include: if a required file is not found, include() thorws a warning, the rest of the script will run
?>


<?php  
/*************************/
/** get data **/
function selectData()
{

	
	
	
	
	
	
	
	
	
}
?>

<?php 
/*************************/
/** create table **/
function createTable()
{
    require('connect.php');
    $query = "CREATE TABLE courses (
                courseID VARCHAR(8) PRIMARY KEY,
                course_desc VARCHAR(20) NOT NULL";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
	
	
	
	
	
	
	
	
	
}
?>


<?php 
/*************************/
/** drop table **/
function dropTable()
{
    require("connect.php");
    $query = "DROP TABLE courses";
    $statement = $db->prepare($query);
    //$statement
	
	
	
	
	
	
	
	
}
?>

<?php 
/*************************/
/** insert data **/
function insertData()
{
    require("connect.php");
    $course_id = "newid_from_insertData";
    $course_desc = "newdesc_from_insertData";
    $query = "INSERT INTO course (courseID, course_desc) VALUES (:course_id, :course_desc)";
    $statement = $db->prepare($query);
    $statement->bindValue(':course_id', $course_id);
    $statement->bindValue(':course_desc', $course_desc);
    $statement->execute();
    $statement->closeCursor();	
}
?>


<?php
/*************************/
/** update data **/
function updateData()
{
  
	
	
	
	
	
	
	
	
	
}
?>

<?php
/*************************/
/** delete data **/
function deleteData()
{
	
	
	
	
	
	
	
	
	
	
}
?>


  </div>
</body>
</html>