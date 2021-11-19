<?php
    include "config.php";

    if(isset($_GET["PersonID"])){
        $id=$_GET["PersonID"];
    
        $sql =" DELETE FROM Users WHERE PersonID='$id'";
        $result=$conn->query($sql);

        if($result==TRUE){
            $mode="deleted";
            include './components/popupSucces.php';
            ?>
            <script>
            $(window).ready(function(){
            $('#staticBackdrop').modal('show'); 
            })
         </script>
<?php
}
        else {
            echo "Error: " .$sql."<br>".$conn->error;
        }
    }
?>
