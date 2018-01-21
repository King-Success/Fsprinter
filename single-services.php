<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
    <!-- end nav and topbar area -->
     
   
   
   <?php include "includes/get_quote.php"; ?>
   
   
   
    <!-- end of get quate area -->
    <!-- start news section -->
    <section class="constructo-news-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 text-center">
                    <div class="single-news-post">
                       
                       
                      <?php 
                        
                if(isset($_GET['source'])){
                
                 $source=$_GET['source'];
                
                }else{
                $source=" ";
                }

               switch($source){
                   
                   case 'site_survey_amp_design';
               include"includes/service_folder/site_survey_amp_design.php";
                   break;
                   
                   
                   case 'civil_eng_works';
               include"includes/service_folder/civil_eng_works.php";
                   break;
                   
                   case 'installation_of_bts';
               include"includes/service_folder/installation_of_bts.php";
                   break;
                   
                   case 'gsm_antenna_installation';
               include"includes/service_folder/gsm_antenna_installation.php";
                   break;
                   
                   case 'electrification_in_shelters';
               include"includes/service_folder/electrification_in_shelters.php";
                   break;
                   
                   case 'Earthing_system';
               include"includes/service_folder/Earthing_system.php";
                   break;
                   
                   case 'resource_support_mngt';
               include"includes/service_folder/resource_support_mngt.php";
                   break;
                   
                   case 'it_enabled_services';
               include"includes/service_folder/it_enabled_services.php";
                   break;
                   
                   case 'network_integration_service';
               include"includes/service_folder/network_integration_service.php";
                   break;
                   
                    case 'deployment_of_resources';
               include"includes/service_folder/deployment_of_resources.php";
                   break;
                   
                   
               
               default: include"single-services.php";
               }
                        
                        
                        
                        
                        ?>
                        
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
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