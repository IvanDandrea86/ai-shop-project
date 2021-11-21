
<?php

if(isset($_POST["logout"])){
$mode=$_SESSION['auth']." disconnected ";
?>
 <script>
          $(window).ready(function(){
          $('#popUpSucces').modal('show'); 
          })
          </script> 
          <?php
session_start();
// ob_start();
unset($_SESSION['auth']);
session_destroy();
// ob_end_flush();

}


?>


          
 
