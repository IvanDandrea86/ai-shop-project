<?php
if(isset($_POST['create'])) {
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname= $_POST["FirstName"];
    $lastname= $_POST["LastName"];
$sql="INSERT INTO Users VALUES ( UUID(),'$username','$email','$password','$lastname','$firstname')";
$result =$conn->query($sql);
if($result== TRUE){
  ?>
  <script>
   $(window).ready(function(){
$('#staticBackdrop').modal('show'); 
   })
</script>
  <?php
  $mode="added";
  include "./components/popupSucces.php";
  //  echo"New user added succesfully";
}
else{
    echo "Error:". $sql."<br>" .$conn->error;
}
$conn->close();
}
include './components/newUserModal.html';
?>
  

 
