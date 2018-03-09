<?php
  if(isset($_GET['p_id'])){
    
     $edit_id= $_GET['p_id'];

   $query = "SELECT * FROM gallary WHERE id = $edit_id ";
    $select_result = mysqli_query($connection , $query);

if(!$select_result){
die(mysqli_error($connection));
}
    while($row = mysqli_fetch_assoc($select_result)){
        $gal_id = $row['id'];       
        $gal_title = $row['gal_title'];
        $gal_author = $row['gal_author'];
        $gal_user_id =$row['gal_user_id'];
        $gal_image = $row['gal_image'];
        $gal_tags = $row['gal_tags'];
        $gal_views = $row['gal_views'];
        $gal_date = $row['gal_date'];
        $gal_content =$row['gal_content'];
    }
  }
?>



<?php 
if(isset($_POST['update_post'])){
    $gal_id= $_GET['p_id'];
    $gal_title=$_POST['title'];
    $gal_user_id="0";
    $gal_author=$_POST['author'];
    
    $gal_image =$_FILES['image']['name'];
    $gal_image_temp =$_FILES['image']['tmp_name'];
    
    $gal_tags=$_POST['tags'];
    $gal_content=$_POST['content'];
    $gal_date =date('d-m-y');
    
    
    
move_uploaded_file($gal_image_temp, "./images/$gal_image");
    
$query= "UPDATE gallary SET gal_user_id= {$gal_user_id} , gal_title= '{$gal_title}', gal_author= '{$gal_author}', gal_date= now(), gal_image= '{$gal_image}', gal_content= '{$gal_content}', gal_tags= '{$gal_tags}' WHERE id = $gal_id";

$gal_query_result = mysqli_query($connection, $query);
    
if (!$gal_query_result){
die("QUERY FAILED" . mysqli_error($connection));
}else{
 
    $last_id = mysqli_insert_id($connection);
  
echo "<h3 style = 'color:red;'>Post Created <a style = 'font-size:15px;' href = '../gallary_post.php?p_id={$last_id}'>View Post</a>  <a style = 'font-size:15px;' href = 'news.php?p_id={$last_id}'>Edit More Posts</a></h3>";
}
   
}
 

?>




<form action="" method="post" enctype="multipart/form-data">
 
 
  <div class="from-group">
    <label for="title">Post Title</label>
    <input value="<?php echo $gal_title ?>" type="text" class="form-control" name="title">
  </div> 
  
  
  <div class="from-group">
    <label for="title">Post Author</label>
    <input value="<?php echo $gal_author ?>" type="text" class="form-control" name="author">
  </div>
  
  <img width="100px" src="images/<?php echo $gal_image ?>" alt="">
  
  <div class="from-group">
    <label for="post_image">Post Image</label>
    <input type="file"  name="image">
  </div>
  
  
  
  <div class="from-group">
    <label for="post_tags">Post Tags</label>
    <input value="<?php echo $gal_tags ?>" type="text"  class="form-control" name="tags">
  </div>
  
  
  <div class="from-group">
    <label for="post_contents">Post Content</label>
   <textarea class="form-control" name="content" id="" cols="30" rows="10"><?php echo $gal_content ?></textarea>
  </div>
  <br>
  <div class="from-group">
  <input type="submit" name="update_post" class="btn btn-primary" value="Update">
   </div>
</form>
