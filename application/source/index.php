<?php

session_start();

?>



<!-- Header     -->

<?php

include ("header.php");  
include ('login.php');
include ("logout.php");
include ('create.php');
include ('delete.php');
?>
<body>
<?php 


// HERO
if (!isset($_SESSION["auth"])) {
    include "hero.html";}
    elseif( $_SESSION["auth"]=="admin"){ 
        include "admin.php";}
else { include "catalog.php";
}
?>
<!-- Footer -->
<?php 
include "footer.html";
include "popupSucces.php";
include "popupError.php";

?>

</body>
</html>
