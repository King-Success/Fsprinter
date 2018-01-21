
  
  <?php include "includes/header.php"; ?>
   
    <?php include "includes/navigation.php"; ?>
    <!-- end nav and topbar area -->
    <?php include"admin/includes_admin/db.php"; ?>

<?php
if(isset($_POST['login'])){
    
$unclean_username= $_POST['username'];
$unclean_password= $_POST['password'];


$clean_username=mysqli_real_escape_string($connection, $unclean_username);
$clean_password=mysqli_real_escape_string($connection, $unclean_password);
    
   
    
    $query="SELECT * FROM administrators WHERE admin_username = '{$clean_username}' ";
    $select_all_user_query_result= mysqli_query($connection, $query);
    
    if(!$select_all_user_query_result){
    die("FAILED" . mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($select_all_user_query_result)){
    
     $admin_id = $row['admin_id'];
     $admin_username = $row['admin_username'];
     $admin_password = $row['admin_password'];
     $admin_firstname = $row['admin_firstname'];
     $admin_lastname = $row['admin_lastname'];
     $admin_email = $row['admin_email'];
    
    
    }
    
if($clean_username === $admin_username  && $clean_password === $admin_password){
        
        $_SESSION['admin_username'] = $admin_username;
        $_SESSION['admin_password'] = $admin_password;
        $_SESSION['admin_firstname'] = $admin_firstname;
        $_SESSION['admin_lastname'] = $admin_lastname;
        $_SESSION['admin_email'] = $admin_email;
        
    header("Location: addmin/admin_index.php");
    
    }else{

        header("Location: index.php");
    }
    
 
    
}



?>
  

    <section class="constructo-home-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 positionstat">
                
                <section id="login">
            <div class="container"> 
                 <div class="row">
                     <div class="col-xs-6 col-xs-offset-3">
                         <div class="form-wrap">
                             <br><h1 style="color:white; text-align:center;" >Login</h1><br>
                             <form action="login_page.php"  method="post" role="form" autocomplete="off" id="login-form"> 
                                
                                
                                 <div class="form-group">
                                     <label for="username" class="sr-only">Username</label>
                                     <input type="text" name="username" class="form-control" placeholder="Enter Username" id="username">
                                     
                                 </div>
                                  <div class="form-group">
                                     <label for="password" class="sr-only">Password</label>
                                     <input type="password" name="password" id="key" placeholder="password" class="form-control">
                                 </div>
                                 
                                 <input type="submit"  name="login" id="btn-login"class="btn btn-custom btn-lg btn-block" value="Login">
                             </form>
                         </div>
                     </div>
                 </div>
            </div>
        </section>
                </div>
            </div>
        </div>
    </section>
    <!-- end of home area -->
    <?php include "includes/clients_slide.php"; ?>
    
<?php include "includes/footer.php"; ?>
