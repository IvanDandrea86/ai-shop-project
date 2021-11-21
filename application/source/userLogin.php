<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Login</h5>
                <button type="button" class=" btn btn-secondary close" data-bs-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="Username" class="col-form-label">Username:</label>
                      <input type="text" name="Username" class="form-control <?php echo (!empty($username_login_err)) ? 'is-invalid' : ''; ?>" id="username_login">
                      <span class="invalid-feedback"><?php echo $username_login_err; ?></span>
                   
                    </div>
                    <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control <?php echo (!empty($password_login_err)) ? 'is-invalid' : ''; ?>" name="Password" id="password_login"></input>
                        <span class="invalid-feedback"><?php echo $password_login_err; ?></span>
                      
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="link me-5">Forgot your password?</a>
                        <form action="" method="post">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="login" name="login" >Login</button>
                        </form>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>