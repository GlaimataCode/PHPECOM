<?php 
session_start();
include("includes/header.php"); 
?>

<div class="py-5">
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                if(isset($_SESSION['message'])){ 
                    ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> <?=$_SESSION['message']; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                 <?php
                 unset($_SESSION['message']);
                } 
                ?>
                <div class="card">
                    <div class="card-header">
                        <h2>Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="functions/autocode.php" method="post">
                            <div class="row mb-3">
                                    <label class="form-label">Naran</label>
                                    <input type="text"  name="naran" class="form-control" placeholder="Prense Naran" required>
                            </div> 
                            <div class="row mb-3">
                                    <label class="form-label">Nu. Telemovel</label>
                                    <input type="number"  name="telf" class="form-control" placeholder="Prense Nu.Telemovel" required>
                            </div>    
                            <div class="row mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email"  class="form-control" name="email" placeholder="Prense Email" required>
                                </div>
                            <div class="row mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Prense Password" required>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Konfirma Password</label>
                                <input type="password" name="cpassword" class="form-control" Name="Konfirma-pass" placeholder="Konfirma Pass" required>
                            </div>
                            <button class="btn btn-primary" type="submit" name="register_btn" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>

   