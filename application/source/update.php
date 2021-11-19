<?php
include "config.php";
 
 if(isset($_POST['update'])) {
    $user_id=$_POST["PersonID"];
    $username= $_POST["Username"];
    $email= $_POST["Email"];
    $password= $_POST["Password"];
    $firstname= $_POST["FirstName"];
    $lastname= $_POST["LastName"];

    $sql=" UPDATE User SET Username= '$username',Email='$email',Password='$password',LastName='$lastname',FirstName='$firstname' WHERE PersonID='$user_id'";

    $result =$conn->query($sql);

    if ($result ==TRUE){
        echo "Record updatet succesfully"; 
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
}

if (isset($row["PersonID"])){
    $id=$row["PersonID"];
    echo($row["PersonID"]);
    $sql =" SELECT *FROM Persons WHERE PersonID='$id'";

    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $firstname=$row["FirstName"];
            $lastname=$row["LastName"];
            $username=$row["Username"];
            $email=$row["Email"];
            $password=$row["Password"];
            $id=$row["PersonID"];
        
        }
 }
 include "./updateUserModal.html";
} 