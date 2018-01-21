
                           <table class="table table-borderd table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                
                                </tr>
                            </thead>
                            <tbody>
   <?php
    $query_users = "SELECT * FROM administrators ";
    $query_result_users = mysqli_query($connection , $query_users);

    while($row = mysqli_fetch_assoc($query_result_users)){
        $admin_id = $row['admin_id'];
        $admin_username = $row['admin_username'];
        $admin_password = $row['admin_password'];
        $admin_firstname =$row['admin_firstname'];
        $admin_lastname = $row['admin_lastname'];
        $admin_email = $row['admin_email'];
     
     echo "<tr>";
        echo "<td>$admin_id</td>";
        echo "<td>$admin_username</td>";
        echo "<td>$admin_firstname</td>"; 
        echo "<td>$admin_lastname</td>";
        echo "<td>$admin_email</td>";
        
//        $query_post= "SELECT * FROM posts WHERE post_id = $comment_post_id ";
//        $query_result_post= mysqli_query($connection, $query_post);
//        
//        while($row=mysqli_fetch_assoc($query_result_post)){
//            $post_id = $row['post_id'];
//            $post_title = $row['post_title'];
//        
//          echo "<td><a href='../post.php?p_id={$post_id}'>{$post_title}</a></td>";
//        
//        }
     
        echo "<td><a href ='users.php?source=edit_user&edit_user={$admin_id}'>Edit</a></td>";
        echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete');\" href ='administrators.php?delete={$admin_id}'>Delete</a></td>";
        
     echo "<tr>";
    }










if(isset($_GET['delete'])){
      
$delete_users_id= $_GET['delete'];
    
$query= "DELETE FROM administrators WHERE admin_id = {$delete_users_id}";
$delete_users_query_result =mysqli_query($connection, $query);
    header("Location: administrators.php");
        
    }






    ?>
</tbody>
   
                        </table>