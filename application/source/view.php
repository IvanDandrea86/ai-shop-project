<?php
include 'config.php';
$sql ="SELECT *FROM User";
$result =$conn->query($sql);
?>
    <div class="container">
        <h2>Users List</h2>
    </div>
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
                        <a  class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#update" 
                        href="view.php?PersonID=<?php echo $row["PersonID"];?>">Update</a>
            
                        <!-- <a href="update.php?PersonID=
                     
                        " class="btn btn-info">Edit</a> -->
                        &nbsp;
                        <a href="delete.php?PersonID=<?php echo $row["PersonID"];?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>    
                   <?php }
               
                }
                
               
                
            ?>
        </tbody>
    </table>
  
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

	
</body>
</html>