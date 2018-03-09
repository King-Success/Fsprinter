<?php 
if(isset($_POST['create_news'])){
    $gal_title=$_POST['title'];
    $gal_user_id="0";
    $gal_author=$_POST['author'];
    
    $gal_image =$_FILES['image']['name'];
    $gal_image_temp =$_FILES['image']['tmp_name'];
    
    $gal_tags=$_POST['tags'];
    $gal_content=$_POST['content'];
    $gal_date =date('d-m-y');
    
    
    
move_uploaded_file($gal_image_temp, "./images/$gal_image");
    
$query= "INSERT INTO gallary (gal_user_id, gal_title, gal_author, gal_date, gal_image, gal_content, gal_tags) ";
    
    
$query .="VALUES({$gal_user_id},'{$gal_title}','{$gal_author}',now(),'{$gal_image}','{$gal_content}','{$gal_tags}') ";

$gal_query_result = mysqli_query($connection, $query);
    
if (!$gal_query_result){
die("QUERY FAILED" . mysqli_error($connection));
}else{
 
    $last_id = mysqli_insert_id($connection);
  
echo "<h3 style = 'color:red;'>Post Created <a style = 'font-size:15px;' href = '../gallary_post.php?p_id={$last_id}'>View Post</a>  <a style = 'font-size:15px;' href = 'news.php'>Edit Posts</a></h3>";
}
   
}
 

?>




<form action="" method="post" enctype="multipart/form-data">
 
 
  <div class="from-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  
  
  <div class="from-group">
    <label for="title">Post Author</label>
    <input type="text" class="form-control" name="author">
  </div>
  
  
  <div class="from-group">
    <label for="post_image">Post Image</label>
    <input type="file"  name="image">
  </div>
  
  
  
  <div class="from-group">
    <label for="post_tags">Post Tags</label>
    <input type="text"  class="form-control" name="tags">
  </div>
  
  
  <div class="from-group">
    <label for="post_contents">Post Content</label>
   <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
  </div>
  <br>
  <div class="from-group">
  <input type="submit" name="create_news" class="btn btn-primary" value="Publish Post">
   </div>
</form>
