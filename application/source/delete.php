<?php
    include "config.php";
    if(isset($_GET["delete"])){
        $id=$_GET["delete"];
    
        $sql =" DELETE FROM Users WHERE PersonID='$id'";
        $result=$conn->query($sql);

        if($result==TRUE){
            $mode="User deleted";
            include 'popupSucces.php';
            ?>
            <script>
            $(window).ready(function(){
            $('#popUpSucces').modal('show'); 
            })
         </script>
<?php
}
        else {
            echo "Error: " .$sql."<br>".$conn->error;
        }
    }
?>
