    <?php
if(isset($_POST['add_user'])){
    
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $username =$_POST['username'];

//    $post_image =$_FILES['image']['name'];
//    $post_image_temp =$_FILES['image']['tmp_name'];

    $email =$_POST['email'];
    $password =$_POST['password'];

    
//move_uploaded_file($post_image_temp, "./images/$post_image");
    
    

    $query= "INSERT INTO administrators (admin_firstname, admin_lastname, admin_username, admin_email, admin_password) ";
    
    
$query .="VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','{$password}') ";

$user_query_result = mysqli_query($connection, $query);
    
    
if (!$user_query_result){
die("QUERY FAILED" . mysqli_error($connection));
}else{

    echo "<h3 style = 'color:red;' >USER CREATED <a href= 'administrators.php'>View Users</a></h3>";

}
   
}
 

?>



<form action="" method="post" enctype="multipart/form-data">
 
 
  <div class="from-group">
    <label for="Firstname">Firstname</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  
  
  <div class="from-group">
    <label for="Lastname">Lastname</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  
  
  
  <div class="from-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  
  
  <div class="from-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  
  
  
  <div class="from-group">
    <label for="Password">Password</label>
    <input type="password"  class="form-control" name="password">
  </div>
  <br>
  <div class="from-group">
  <input type="submit" name="add_user" class="btn btn-primary" value="Add User">
   </div>
</form>




