<?php include"includes_admin/header_admin.php"; ?>

        <!-- Navigation -->
<?php include"includes_admin/nav_admin.php"; ?>

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
                            $source=$_GET['source'];
                            
                        }else{
                        
                            $source='';
                        
                        }
                            switch($source){
                                case "add_news";
                                include"includes_admin/add_news.php";
                                break;
                                
                                case "view_all_news";
                                include"includes_admin/view_all_news.php";
                                break;
                                
                                case "edit_gallary_post";
                                include"includes_admin/edit_gallary_post.php";
                                break;
                                
                                
                                default: include"includes_admin/view_all_news.php";
                            
                            
                            }
                            
                        
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include"includes_admin/footer_admin.php"; ?>