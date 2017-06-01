<!DOCTYPE html>
<html>
   <head>
      <?php include('head.php'); ?>
   </head>
   <body <?php if(Request::is('/')) echo 'class="home"'; ?>>
      <body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-2112 node-type-page section-digital" >
         <p id="skip-link">
            <a href="#main-menu" class="element-invisible element-focusable">Navigacija</a>
         </p>
         <div id="ajaxview">
            <div class='closebutton' onclick='closearticle();'><i class="fa fa-times-circle"></i></div>
            <div id="ajaxviewcontent"></div>
         </div>
         <div id="ajaxviewcontent2"></div>
         <header class="header shadow" id="header" role="banner">
            <div class="header__region region region-header">
               <div id="block-block-11" class="block block-block first last odd">
                  <div id="mainNavBar">
                     <nav id="mainNav">
                        <ul id="mainNavList">
                           <li class="desktop-logo">   
                              <img src="\naujas-logo.png"><a href=""></a>
                           </li>
                           <a href="//www.extrafm.eu/grojarastis" alt="">
                              <li class="menublock">
                                 <div class="icon"><i class="fa fa-history"></i></div>
                                 <div class="menutitle">EXTRA FM</div>
                                 <div class="menusubtitle">GROJARAŠTIS</div>
                              </li>
                           </a>
                           <a href="/puslapis/dazniai" alt="">
                              <li class="menublock">
                                 <div class="iconbigger"><i class="fa fa-rss"></i></div>
                                 <div class="menutitle">EXTRA FM</div>
                                 <div class="menusubtitle">DAŽNIAI</div>
                              </li>
                           </a>
                           <a class="c-button openmenu" id="c-button--slide-right" alt="">
                              <li class="menublock">
                                 <div class="iconsmaller"><i class="fa fa-tasks"></i></div>
                                 <div class="menutitle">EXTRA FM</div>
                                 <div class="menusubtitle">MENIU</div>
                              </li>
                           </a>
                        </ul>
                     </nav>
                  </div>
                  <!-- End of main nav bar -->
               </div>
            </div>
         </header>
         <script type="text/javascript">
            var fb = "";
            var twitter ="";
            var google="";
            var whatsapp =""; 
            var youtube="";
            var instagram = "";
            var snapchat ="snapchat";
            var mail ="";
            
            
            jQuery('.socialmediaicon a:nth(0)').attr("href","https://www.facebook.com/"+fb);
            jQuery('.socialmediaicon a:nth(1)').attr("href","https://www.twitter.com/"+twitter);
            jQuery('.socialmediaicon a:nth(3)').attr("href",youtube);
            jQuery('.socialmediaicon a:nth(4)').attr("href",instagram);
            jQuery('.socialmediaicon a:nth(5)').attr("href",snapchat);
            jQuery('.socialmediaicon a:nth(6)').attr("href","mailto:"+mail);
            
         </script><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         <div id="sharebar" class="shadow">
            <li class="socialmediaicon">   
               <span>
               <a href="https://www.facebook.com/extrafmLT/" title="EXTRAFM Facebook" target="_blank" class="socialmediaicon"><i class="fa fa-facebook"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="https://twitter.com/Extrafm_LT" title="EXTRAFM Twitter" target="_blank" class="socialmediaicon"><i class="fa fa-twitter"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="snapchat" title="EXTRAFM Whatsapp"  class="socialmediaicon"><i class="fa fa-snapchat"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="https://www.youtube.com/channel/UC_eG1qMwoGWIrvV95KXu6pg" title="EXTRAFM YouTube" target="_blank" class="socialmediaicon"><i class="fa fa-youtube"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="https://www.instagram.com/extrafmlt/ " title="EXTRAFM Instagram" target="_blank"  class="socialmediaicon"><i class="fa fa-instagram"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="//Extra FM" title="EXTRAFM Snapchat"  class="socialmediaicon"><i class="fa fa-spotify"></i></a>
               </span>
            </li>
            <li class="socialmediaicon">   
               <span>
               <a href="mailto://info@extrafm.lt" title="EXTRAFM Kontakt"   class="socialmediaicon"><i class="fa fa-envelope-square"></i></a>
               </span>
            </li>
         </div>
         <div id="c-mask2" class="c-mask2"></div>
         <!-- /c-mask -->