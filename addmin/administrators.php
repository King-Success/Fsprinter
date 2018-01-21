<?php include"includes/db.php";?>
  <?php include"includes/admin_header.php";?>
   
   
    <div id="wrapper">

        <!-- Navigation -->
   
        <?php include"includes/admin_navigation.php";?>
        
         <!-- Navigation -->
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small style="color:red;" ><?php echo  $_SESSION['admin_username']; ?></small>
                        </h1>
                             
                        <?php
                        if(isset($_GET['source'])){
                        $source =$_GET['source'];
                             }else{ 
                            $source='';
                             }
                            
                        switch($source){
                            case "add_administrator";
                            include "includes/add_administrator.php";
                            break;
                            
                            case "view_all_administrators";
                            include "includes/view_all_administrators.php";
                            break;
                            
default : include"includes/view_all_administrators.php";

                        }
                        ?>
                        
                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php";?>