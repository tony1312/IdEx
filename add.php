<html>
<head>
  <meta http-equiv="refresh" content="1;url=./" /> 
</head>

<?php
   if ($_POST["button"]==null)
   {
     echo "<br/><div style='paddding-left:25px; font-size:30px;'>Oh, Empty Request ?</div>" ;
     exit;
   }

   require_once("db_funs.php");
 
 
   $author =mysqli_real_escape_string($conn,$_POST["author"]);
   $email  =mysqli_real_escape_string($conn,$_POST["email"]);
   $content=mysqli_real_escape_string($conn,$_POST["content"]);
   $time=time();
   

   if (addpost()) echo "<br/><font color='blue'>Successful Add !</font>"; 
     else echo "<br/><font color='red'>Somthing Wrong ?=?</font>";
     
?>

</html>

