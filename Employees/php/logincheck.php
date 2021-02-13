<?php
if(!isset($_POST['login'])){
  echo '<a href="../index.php">You are not supposed to be here!</a>';//checks if button was pressed if not return
}
else {
  if($_POST['username']==""||$_POST['password']==""){//checks if username field was completed if not return
    header("Location: ../index.php?login=empty");
    exit();
    }
    else {
      include_once "connection.php";//connects to database
      $un=$_POST['username'];//sets variable to be equal to field from form
      $pass=$_POST['password'];
      $sqlPassSelect="SELECT pass FROM users WHERE un=?";//select pass field from database where username is equal to variable
      $sqlPassPrep=mysqli_stmt_init($conn);//create prepared statement
      mysqli_stmt_prepare($sqlPassPrep,$sqlPassSelect);//prepares the statement
      mysqli_stmt_bind_param($sqlPassPrep,"s",$un);//give value to the parameter
      $sqlPassResults=mysqli_stmt_execute($sqlPassPrep);//executes prepared statement
      $sqlPassResults=mysqli_stmt_get_result($sqlPassPrep);//gets results from query
      $hashedPassword=mysqli_fetch_assoc($sqlPassResults);//returns values from query
      if(password_verify($pass,$hashedPassword['pass'])){//checks if $pass can be hashed as returned value if it can redirect
        session_start();
        $sqlUserSelect="SELECT id, un, nume, prenume, email FROM users WHERE un=?";//select pass field from database where username is equal to variable
        $sqlUserPrep=mysqli_stmt_init($conn);//create prepared statement
        mysqli_stmt_prepare($sqlUserPrep,$sqlUserSelect);//prepares the statement
        mysqli_stmt_bind_param($sqlUserPrep,"s",$un);//give value to the parameter
        $sqlUserResults=mysqli_stmt_execute($sqlUserPrep);//executes prepared statement
        $sqlUserResults=mysqli_stmt_get_result($sqlUserPrep);//gets results from query
        $rowsUser=mysqli_fetch_assoc($sqlUserResults);//returns values from query
        $_SESSION['cod']=$rowID['id'];
        $_SESSION['username']=$rowsUser["un"];
        $_SESSION['firstname']=$rowsUser["prenume"];
        $_SESSION['lastname']=$rowsUser["nume"];
        $_SESSION['mail']=$rowsUser["email"];
        mysqli_close($conn);
        header("Location: ../home.php");
        exit();
      }
      else{
        header("Location: ../index.php?login=failed");
        exit();
      }
    }
  }
?>