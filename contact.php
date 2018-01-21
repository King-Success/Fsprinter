<?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>
  
    <!-- end of get quate area -->
    <!-- start features area -->
    <section class="constructo-features-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="img/con1.png" class="ficon3" alt="theconstructo.com">
                            <div class="ficonh">
                                <img src="img/con1h.png" alt="theconstructo.com">
                            </div>
                        </div>
                        <h4>ADDRESS</h4>
                        <p>HEAD OFFICE: 9, Oduyemi Street, Obafemi Awolowo Road Ikeja, Lagos Nigeria</p>
                        <p>BRANCH OFFICE: House 9A, Evoc Yard, Enerhen Road, Effurun Delta Nigeria</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="img/con2.png" class="ficon3" alt="theconstructo.com">
                            <div class="ficonh">
                                <img src="img/con2h.png" alt="theconstructo.com">
                            </div>
                        </div>
                        <h4>PHONE NUMBERS</h4>
                        <p>Phone  :+234 8177500245</p>
                        <p>Phone  :+234 8177500244</p>
                        <p>Phone  :+234 9067499814</p>
                        <p>Mobile :+234 8119039649</p>
                    </div>
                       
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="img/con3.png" class="ficon3" alt="theconstructo.com">
                            <div class="ficonh">
                                <img src="img/con3h.png" alt="theconstructo.com">
                            </div>
                        </div>
                        <h4>E-MAIL</h4>
                        <p>sprinterstechnologies@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="img/con4.png" class="ficon3" alt="theconstructo.com">
                            <div class="ficonh">
                                <img src="img/con4h.png" alt="theconstructo.com">
                            </div>
                        </div>
                        <h4>WORKING HOURS</h4>
                        <p>Mon to Sat : 0:8am - 0:6pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of features area -->
    <!-- start contact form area -->
    <section class="constructo-contactUs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h2>LEAVE A MESSAGE</h2>
                        <div class="line">
                            <img src="img/linew.png" alt="theconstructo.com">
                        </div>
                    </div>
                </div>
            </div><?php 
             if(isset($_POST['submit'])){
                 
            $to= "sprinterstechnologies@gmail.com";
            $header= "From: " .$_POST['email'];
            $subject= $_POST['subject'];
            $body= wordwrap($_POST['message'], 70);
            
                 
               $send=  mail($to,$subject,$body,$header);
            if($send){
            $Alert= "Messsage Sent";
            }else{
            
            }
               $Alert= "Sending Failed";  
            }else{
             $Alert= " ";
             }
            
            ?>
            <div class="row padding-top">
                <div class="col-sm-5">
                    <div class="google-map-area">
                        <div class="googlemap" id="gmap">
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                   <?php echo $Alert ?>
                    <div class="contact-form">
                        <form action="contact.php" method="post">
                            <input name="name" type="text" placeholder="Name" class="single-input">
                            <input name="email" type="text" placeholder="Email" class="single-input">
                            <input name="subject" type="text" placeholder="Subject" class="single-input">
                            <textarea name="message" placeholder="Message" class="single-input"></textarea>
                            <input name="submit" type="submit" class="submit" value="SEND MESSAGE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Copyright section -->
    <div class="constructo-copyright">
    <div class="scroll-top">
        <a href="#" class="top0 fa fa-angle-up"></a>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer-link">
                        <a href="http://www.facebook.com/fsprinters technologies" class="fa fa-facebook"></a>
                            <a href="http://www.twitter.com/fsprinters technologies" class="fa fa-twitter"></a>
                            <a href="http://www.linkedin.com/fsprinters technologies" class="fa fa-linkedin"></a>
                 
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="footer-text">
                        <p>FSprinters &copy; All Rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqSqCrU84ePFjsFV9dSuLO9qfuDTs9hlw&callback=initMap">
</script>
<!--
   <script async defer
    src="https://maps.googleapis.com/maps/api/elevation/json?locations=39.7391536,-104.9847034&key=AIzaSyA-8zPEIsdAMLaxGuB50GedlvJdlK1UHI0">
</script>
-->
    <!-- jquery min js -->
    
    <script src="js/jquery.min.js"></script>
    <!-- jquery waypoints -->
    <script src="js/waypoints.min.js"></script>
    <!-- jquery easing js -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- rippler js -->
    <script src="js/jquery.rippler.min.js"></script>
    <!-- bootstra js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery nav js -->
    <script src="js/jquery.nav.js"></script>
    <!-- jquery sticky js -->
    <script src="js/jquery.sticky.js"></script>
    <!-- slick js -->
    <script src="slick/slick.min.js"></script>
    <!-- jquery counter up -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- jqeury isotop filtaring plugins -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- jquery magnifiq popup    -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- parallax -->
    <script src="js/parallax.min.js"></script>
    <!-- google map -->
    <script src="js/gmap.js"></script>
    <!-- jquery active js -->
    <script src="js/active.js"></script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/constructo/constructo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2017 18:51:49 GMT -->
</html>
