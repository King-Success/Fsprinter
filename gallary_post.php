<?php include "admin/includes_admin/db.php"; ?>
  <?php include "includes/header.php"; ?>
   <?php include "includes/navigation.php"; ?>
    
    
    
    <?php include "includes/get_quote.php"; ?>
    
    
    
    <!-- end of get quate area -->
    
            <?php
    
    if(isset($_GET['p_id'])){
    
     $the_post_id= $_GET['p_id'];

   
    
    $query= "SELECT * FROM gallary WHERE id= {$the_post_id}";
    $showAll_post_info = mysqli_query($connection , $query);

 
    $query= "UPDATE gallary SET gal_views = gal_views + 1 WHERE id =  $the_post_id ";
    $post_view_counts= mysqli_query($connection , $query);
    
    if(!$post_view_counts){
    die(mysqli_error($connection));
    }

                 
        while($row=mysqli_fetch_assoc($showAll_post_info)){
             $gal_title = $row['gal_title'];
             $gal_author = $row['gal_author'];
             $gal_date = $row['gal_date'];
             $gal_image = $row['gal_image'];
             $gal_content = $row['gal_content'];

 
                     ?>    
    <!-- start news section -->
    <section class="constructo-news-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-news-active">
                        <div class="single-news-post  ">
                            <div class="news-post-img">
                                <img src="addmin/images/<?php echo $gal_image ?>" alt="">
                            </div>
                            <div class="post-title">
                                <h2><?php echo $gal_title ?></h2>
                            </div>
                            <div class="date">
                                <p>Posted by : <span><?php echo $gal_author ?></span> // On : <span><?php echo $gal_date ?></span></p>
                            </div>
                            <p><?php echo $gal_content ?></p>
                        </div>
                    </div>
                </div>
                <?php } }?>
                
                
                <div class="col-md-4">
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2>SERVICES</h2>
                                <img src="img/line.png" alt="theconstructo.com">
                            </div>
                            <div class="features-side-slider">
                                <div class="single-side-features">
                                    <a href="single-services.php?source=site_survey_amp_design">
                                        <div class="sideimg">
                                            <img src="img/site%20surv.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>SITE SURVEY AND AMP DESIGN</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=civil_eng_works">
                                        <div class="sideimg">
                                            <img src="img/geot.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>CIVIL ENGINEERING WORKS</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=gsm_antenna_installation">
                                        <div class="sideimg">
                                            <img src="img/gsm_an.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                         <p>GSM ANTENNA INSTALLATION</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=Earthing_system">
                                        <div class="sideimg">
                                            <img src="img/earthing_sys.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>EARTHING SYSTEM</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=electrification_in_shelters">
                                        <div class="sideimg">
                                            <img src="img/shelter.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>ELECTRIFICATION IN SHELTERS OF CELL SITES</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-side-features">
                                    <a href="single-services.php?source=resource_support_mngt">
                                        <div class="sideimg">
                                            <img src="img/test%20tool.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>RESOURCE SUPPORT MANAGEMENT</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=it_enabled_services">
                                        <div class="sideimg">
                                            <img src="img/wan%20lan.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>IT ENABLED SERVICES</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=network_integration_service">
                                        <div class="sideimg">
                                            <img src="img/opt4.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>NETWORK INTEGRATION SERVICES</p>
                                        </div>
                                    </a>
                                    <a href="single-services.php?source=installation_of_bts">
                                        <div class="sideimg">
                                            <img src="img/bts-ilustrasi-e1426563127495.jpg" alt="theconstructo.com">
                                        </div>
                                        <div class="side-title">
                                        <p>INSTALLATION OF OUTDOOR AND INDOOR BTS</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of news section -->
<?php include "includes/footer.php"; ?>