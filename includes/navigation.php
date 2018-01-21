






    <!-- start nav and topbar area -->
    <div class="constructo-navtop-area">
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 text-left">
                        <ul class="topaddres">
                            <li><span class="fa fa-phone"></span>+234 8177500245 +234 8177500244 +234 9067499814 +234 8119039649</li>
                            <li><span class="fa fa-envelope"></span>sprinterstechnologies@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-right">
                        <div class="social-link">
                            <a href="http://www.facebook.com/fsprinters technologies" class="fa fa-facebook"></a>
                            <a href="http://www.twitter.com/f_sprinter" class="fa fa-twitter"></a>
                            <a href="http://www.linkedin.com/fsprinters technologies" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="constructo-menu-area">
            <nav class="navbar">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="nav menu navbar-nav navbar-left">
                        <li><a  style="font-size:20px;" href="index.php"><img width="80px" src="img/fst_logo.jpg" alt="fsprinters logo"></a></li>
                    </ul>
               <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        <ul style="padding-top: 30px" class="nav menu navbar-nav navbar-right">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="services.php">SERVICES</a></li>
                            <li><a href="news.php">GALLARY</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            
                            <?php if(isset($_SESSION['admin_username'])){
    
    
                            echo " ";
                            }else{
echo "<li><a href='login_page.php'>LOGIN</a></li>";
}
                            ?>
                            
                            <?php if(isset($_SESSION['admin_username'])){
    
    
                            echo "<li><a href='addmin/admin_index.php'>ADMIN</a></li>";
                            }else{
echo " ";
}
                            ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!-- end nav and topbar area -->