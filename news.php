<?php include "admin/includes_admin/db.php"; ?>
  <?php include "includes/header.php"; ?>
   <?php include "includes/navigation.php"; ?>
    
    
    
    <?php include "includes/get_quote.php"; ?>
    
    
    
    <!-- end of get quate area -->
    <!-- start news section -->
    <section class="constructo-news-post-area section-padding">
        <div class="container">
            <div class="row">
               
            <?php
    
    $query= "SELECT * FROM gallary";
    $showAll_post_info = mysqli_query($connection , $query);

    if(!$showAll_post_info){
    die(mysqli_error($connection));
    }

                 
        while($row=mysqli_fetch_assoc($showAll_post_info)){
             $gal_id = $row['id'];
             $gal_title = $row['gal_title'];
             $gal_author = $row['gal_author'];
             $gal_date = $row['gal_date'];
             $gal_image = $row['gal_image'];
             $gal_content = $row['gal_content'];

 
                     ?>    
             <div class="col-md-8 text-center">
                            <div class="single-news-active">

                        <div class="single-news-post">
                            <div class="news-post-img">
                                <a href='gallary_post.php?p_id=<?php echo $gal_id; ?>'><img src="addmin/images/<?php echo $gal_image ?>" alt=""></a>
                            </div>
                            <div class="post-title">
                                <a href='gallary_post.php?p_id=<?php echo $gal_id; ?>'><h2><?php echo $gal_title ?></h2></a>
                            </div>
                            <div class="date">
                                <p>Posted by : <span><?php echo $gal_author ?></span> // On : <span><?php echo $gal_date ?></span></p>
                            </div>
                            <p><?php echo $gal_content ?></p>
                        </div>
                        </div>
                </div>
                <?php }?>
                 
<!--
                <li><a style="" href="it_tel.php">ICT/Telecommunication Services</a></li>
                                <li><a href="elect_mech.php">Electrical and Mechanical Services </a></li>
                                <li><a href="planning%20_and_mngt.php">Project Planning and Management Services </a></li>
-->
        
                
                    <div class="sidebar-area">
                        <div class="single-sidebar">
                            <div class="widget-title text-center">
                                <h2>Categories</h2>
                                <img src="img/line.png" alt="theconstructo.com">
                            </div>
                            <ul>
                                <li><a  href="it_tel.php"><strong style="font-size:17px;text-align:center;" >ICT/Telecommunication Services</strong></a></li><br>
                                <li><a href="elect_mech.php"><strong style="font-size:17px;text-align:center;" >Electrical and Mechanical Services</strong> </a></li><br>
                                <li><a href="planning%20_and_mngt.php"><strong style="font-size:17px; text-align:center;" >Project Planning and Management Services</strong> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       
    </section>
    <!-- end of news section -->
<?php include "includes/footer.php"; ?>