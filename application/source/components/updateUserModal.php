<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
   <h5 class="modal-title" id="ModalLabel">Update User</h5>
   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div class="modal-body">
 <form action="" method="post">
     <div class="form-group">
     <label for="Username" class="col-form-label" >Username:</label>
         <input type="text" name="Username"class="form-control" value="<?php echo $username; ?>" id="username">
     </div>
     <div class="form-group">
       <label for="email" class="col-form-label">Email:</label>
       <input type= "text" class="form-control" name="Email"id="email" value="<?php echo $email;?>" ></input>
     </div>
     <div class="form-group">
       <label for="password" class="col-form-label">Password:</label>
       <input type= "password" class="form-control" value="<?php echo $password; ?>" name="Password"id="password"></input>
     </div>
     <div class="form-group">
       <label for="firstname" class="col-form-label">Firstname:</label>
       <input type= "text" class="form-control" value="<?php echo $firstname; ?>" name="FirstName"id="firstname"></input>
     </div>
     <div class="form-group">
       <label for="lastname" class="col-form-label">Lastname:</label>
       <input type= "text" class="form-control" value="<?php echo $lastname; ?>" name="LastName"id="lastname"></input>
     </div>
     <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary" value="update" name="update" >Update</button>
 </div>
   </form>
 </div>
 
</div>
</div>
</div>