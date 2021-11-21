<?php
include "config.php";



if(isset($_POST["login"])){
  $username_login_err="";
  $password_login_err="";
  $login_error=array();
  
    $user=$_POST["Username"];
    $pass=$_POST["Password"];
    //Control
    if(empty(trim($_POST["Username"]))){
        $username_login_err = "Please enter a username.";
        array_push($login_error,$username_login_err);
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["Username"]))){
        $username_login_err = "Username can only contain letters, numbers, and underscores.";
        array_push($login_error,$username_login_err);
      } 
      else{
        $sql= "SELECT * FROM Users WHERE Username='".$_POST["Username"]."'";
      $result =$conn-> query($sql);
      if($result->num_rows==0){
        $username_login_err="Username not register";
        array_push($login_error,$username_login_err);
      }
}
//Validate Pass
  if(empty(trim($_POST["Password"]))){
    $password_login_err = "Please enter a password."; 
    array_push($login_error,$password_login_err);    
  } elseif(strlen(trim($_POST["Password"])) < 6){
    $password_err = "Password must have atleast 6 characters.";
    array_push($login_error,$password_login_err);
  }

if(count($login_error)>0){
    ?>
    <script>
        $(window).ready(function(){
        $('#login_modal').modal('show'); 
        })
        </script>
      
<?php
  }else{
      //Check if User has good password then start seession
      $sql = "SELECT * FROM Users WHERE Username='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
      $result=$conn->query($sql);
      if($result->num_rows==0){
        $password_login_err="Wrong password!";
        array_push($login_error,$username_login_err);
         ?>
            <script> 
            $(window).ready(function(){
             $('#login_modal').modal('show'); 
            }) 
            </script>   
     <?php
      }
      else{
        
        $_SESSION['auth']=$_POST["Username"];
   
      }

}

}
include 'userLogin.php';
?>