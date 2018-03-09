<?php 

// BULK OPTIONS QUERY

if(isset($_POST['checkBoxArray'])){
    
    foreach($_POST['checkBoxArray'] as $checkbox_value){
    
    
   $bulk_option = $_POST['bulk_option'];
        
        switch($bulk_option){
            case 'Delete';
            
            $query = "DELETE FROM gallary WHERE id = $checkbox_value ";
            $deletepost_result = mysqli_query($connection, $query);
            
            break;
            
            
            case 'Clone';
            
            $query="SELECT * FROM gallary WHERE id = '$checkbox_value' ";
            $clonepost_result = mysqli_query($connection, $query);
            
            if(!$clonepost_result){
            die(mysqli_error($connection));
            }
         
            while($row = mysqli_fetch_assoc($clonepost_result)){
        $gal_id = $row['id'];       
        $gal_title = $row['gal_title'];
        $gal_author = $row['gal_author'];
        $gal_user_id =$row['gal_user_id'];
        $gal_image = $row['gal_image'];
        $gal_tags = $row['gal_tags'];
        $gal_content =$row['gal_content'];
        
        
        }
        
    $query= "INSERT INTO gallary (gal_user_id,gal_title, gal_author, gal_date, gal_image, gal_content, gal_tags) ";
    
    
$query .="VALUES({$gal_user_id},'{$gal_title }','{$gal_author}',now(),'{$gal_image}','{$gal_content}','{$gal_tags}') ";

$clone_query_result = mysqli_query($connection, $query);
    
if (!$clone_query_result){
die("QUERY FAILED" . mysqli_error($connection));
}
        
            break;
            
              case 'Reset';
            
            $query="UPDATE gallary SET gal_views = 0 WHERE id = $checkbox_value ";
            $resetgal_result = mysqli_query($connection, $query);
            
            if(!$resetgal_result){
            die(mysqli_error($connection));
            }
            break;
    
    }



}
}

?>
                        

                        
                        <form action="" method='post'>
                         <div id="bulkOptionContainer" class="col-xs-4" >
                         <select name="bulk_option" id="" class="form-control">
                             <option value="">Select options</option>
                             <option value="Clone">Clone</option>
                             <option value="Reset">Reset Views</option>
                             <option  value="Delete">Delete</option>
                         </select>
                          </div>
                          <div class="col-xs-4">
                              <input type="submit" value="Apply" name="submit" type="text" class="btn btn-sucess" >
                              <a href="news.php?source=add_news" class="btn btn-primary">Add New</a>
                              
                          </div>
                          
                           <table class="table table-borderd table-hover">
                            <thead>
                                <tr>
                                   <th><input type="checkbox" id="selectAllCheckboxes"></th>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>image</th>
                                    <th>Tags</th>
                                    <th>Date</th>
                                    <th>View Post</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Views</th>
                                    <th>Reset</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            
   <?php

//  DISPLAY ALL POSTS QUERY

    $query = "SELECT * FROM gallary ORDER BY id DESC ";
    $display_post_query_result = mysqli_query($connection , $query);

if(!$display_post_query_result){
die(mysqli_error($connection));
}
    while($row = mysqli_fetch_assoc($display_post_query_result)){
        $gal_id = $row['id'];       
        $gal_title = $row['gal_title'];
        $gal_author = $row['gal_author'];
        $gal_user_id =$row['gal_user_id'];
        $gal_image = $row['gal_image'];
        $gal_tags = $row['gal_tags'];
        $gal_views = $row['gal_views'];
        $gal_date = $row['gal_date'];
        $gal_content =$row['gal_content'];
     echo "<tr>";
        
        ?>
        <th><input type="checkbox" class="checkboxes" name="checkBoxArray[]" value=" <?php echo $gal_id ?> "></th>
        
        
        <?php 
        echo "<td>$gal_id</td>";
        echo "<td>$gal_author</td>";
        echo "<td>$gal_title</td>";
        echo "<td><img width = 100 src ='images/$gal_image'></img></td>";
        echo "<td>$gal_tags</td>";
        echo "<td>$gal_date</td>";
        echo "<td><a href ='../gallary_post.php?p_id={$gal_id}'>View Post</a></td>";
        echo "<td><a href ='news.php?source=edit_gallary_post&p_id={$gal_id}'>Edit</a></td>";
        echo "<td><a href ='news.php?delete={$gal_id}'>Delete</a></td>";
        echo "<td>$gal_views</td>";
        echo "<td><a href='news.php?reset_id={$gal_id}'>Reset</a></td>";
     echo "<tr>";
    }




//  DELETE POSTS QUERY

if(isset($_GET['delete'])){
$delete_id= $_GET['delete'];
$query= "DELETE FROM gallary WHERE id = {$delete_id}";
$delete_post_query_result =mysqli_query($connection, $query);
header("Location: news.php");

if(!$delete_post_query_result){
die("FAILED" . mysqli_error($connection));
   
}


}

//  RESET POST VIEWS COUNT
if(isset($_GET['reset_id'])){
$reset_id= $_GET['reset_id'];
    
    $reset_query="UPDATE gallary SET gal_views = 0 WHERE id = ('$reset_id') ";
    $reset_query_result= mysqli_query($connection, $reset_query);
    header("Location: news.php");
    
    if(!$reset_query_result){
    die(mysqli_error($connection));
    }
    
}

    ?>
</tbody>
   
                        </table>
                        </form>