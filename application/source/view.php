<?php
include 'config.php';
ob_start();
$sql ="SELECT *FROM Users";
$result =$conn->query($sql);
?>
    <div class="container text-center">
        <h2>Users List</h2>
   
    <div class="col ">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result->num_rows>0){
                    while($row= $result->fetch_assoc()){
                     ?>
                     <tr>
                      <td><?php echo $row['PersonID'];?></td>
                      <td><?php echo $row['Username'];?></td>
                      <td><?php echo $row['Email'];?></td>
                      <td><?php echo $row['FirstName'];?></td>
                      <td><?php echo $row['LastName'];?></td>  
                      <td>
            
                         <a href="update.php?PersonID=
                        <?php echo $row["PersonID"];?>
                        " class="btn btn-info">Edit</a> 
                        &nbsp;
                        <a href="index.php?delete=<?php echo $row["PersonID"];?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>    
                   <?php }
               
                }    
                ob_end_flush();
           ?>
        </tbody>
    </table>
    </div>
    </div>
    

</body>
</html>