<!-- Start sidebar -->
<!-- End sidebar -->
<footer id="footer" class="region region-footer">
   <div id="block-block-15" class="block block-block first last odd">
      <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right shadow">
         <button class="c-menu__close"><i class="fa fa-times"></i></button>
         <div class="menuarea DIGITAL" style="">
            <ul class="menu">
               <li class="menu__item is-leaf first leaf"><a href="/" title="" class="menu__link">Pradinis</a></li>
               <li class="menu__item is-leaf leaf"><a href="/" title="" class="menu__link">Aktualijos</a></li>
               <li class="menu__item is-leaf leaf"><a href="/" title="" class="menu__link">Mediateka</a></li>
               <li class="menu__item is-leaf leaf"><a href="/" title="" class="menu__link">Programa</a></li>
               <li class="menu__item is-leaf leaf"><a href="http://extrafm.eu/puslapis/apie-mus" title="" class="menu__link">Apie mus</a></li>
               <li class="menu__item is-leaf leaf"><a href="/" title="" class="menu__link">Grojaraštis</a></li>
               <li class="menu__item is-leaf leaf"><a href="http://extrafm.eu/puslapis/dazniai" title="" class="menu__link">Dažniai</a></li>
               <li class="menu__item is-leaf leaf"><a href="http://extrafm.eu/puslapis/reklama" title="" class="menu__link">Reklama</a></li>
               <li class="menu__item is-leaf leaf"><a href="http://extrafm.eu/puslapis/kontaktai" title="" class="menu__link">Kontaktai</a></li> 
               <li class="menu__item is-leaf leaf"><div style="color:red;" class="menu__link">(M:<?php echo memory_get_peak_usage(true); ?>)</div></li>  
                        
            </ul>
         </div>
         <div class="appload">
            <a href="https://itunes.apple.com/am/app/extra-fm-lt/id1073901358?mt=8" target="_blank"><i class="fa fa-apple" aria-hidden="true"></i></a>
            <a href="https://play.google.com/store/apps/details?id=ltu.radio.extrafm&hl=lt" target="_blank"><i class="fa fa-android" aria-hidden="true"></i></a>
         </div>
      </nav>
      <!-- /c-menu slide-right -->
      <div id="c-mask" class="c-mask"></div>
      <!-- /c-mask -->
      <script type='text/javascript'>
         var slideRight = new Menu({
           wrapper: '#contentwrapper',
           type: 'slide-right',
           menuOpenerClass: '.c-button',
           askId: '#c-mask'
         });
         
         var slideRightBtn = document.querySelector('#c-button--slide-right');
         
         
         slideRightBtn.addEventListener('click', function(e) {
           e.preventDefault;
           slideRight.open();
         });
      </script>
   </div>
</footer>
</div>
<!-- End Contentwrapper -->
<div class="region region-bottom">
   <div id="block-block-20" class="block block-block first last odd">
      
      <style>
         #display_advanced_ad_layer {
         border: 1px solid red;
         width: 300px;
         height: 250px;
         margin:74px 0px -20px 73px !important;
         position: fixed;
         bottom:100px;
         display:none;
         background-color:white;
         }
         #btnAdclose {
         cursor:pointer;
         }
      </style>
      <script type="text/javascript">
         var keep_alive;
         
         function addAdvertising(ad) {
          try {
            if (ad.zone == 7499) {
              jQuery('#overlay').show();
              jQuery('#display_advanced_ad_layer').show();
              document.getElementById("frame_ad_layer").src = ad.url;
              console.log("ad.url="+ad.url);
              console.log(ad);
              jQuery('#overlay').hide();
         
              setTimeout(destroyAds, ad.ms);
            }
          }
          catch (e) {/*console.log(e);*/}
         }
         
         function destroyAds() {
          jQuery('#display_advanced_ad_layer').hide();
          jQuery('#frame_ad_layer').html("");
          
          document.getElementById("frame_ad_layer").src = '';
          jQuery('#overlay').hide();
         }
         
         jQuery( document ).ready(function() {
         
         
         jQuery('#webradio_channels li'). mouseover(function() {
         console.log(jQuery(this).attr('cover'));
         jQuery(this).css("background-image",jQuery(this).attr('cover'));
         jQuery("img, .markierung, .stationname",this).hide();
         });
         jQuery('#webradio_channels li'). mouseleave(function() {
         console.log(jQuery(this).attr('cover'));
         jQuery(this).css("background-image","");
         jQuery("img, .markierung, .stationname",this).show();
         });
         
         
         
         //send webstream closed when tab/browser closed/changed
         window.onbeforeunload = function () {
         if (isPlaying()) { 
            ga('send', {  hitType: 'event',  eventCategory: 'webradio '+jQuery('#webradiostation').text(),  eventAction: 'interaction',  eventLabel: 'closed'});
         }
         };
         
         
        
         
         jQuery('#btnAdclose').on( "click", function() {
           jQuery('#display_advanced_ad_layer').slideUp();
         });
    

         jQuery('#webradio_channels li').on( "click", function() {
         var markierung="<p class='markierung'>AKTUELL</p>";
         jQuery('.markierung').remove();
         jQuery(this).append(markierung);
          changechannel(jQuery(this).attr('data-id') );
         });
         
         setTimeout(function(){ setdefault(); }, 1000);
         jQuery('#content').css("padding-bottom","60px");
         
         });
         
         function toggleWidth() {
         if (jQuery('#webradio').hasClass('show')) {
         jQuery('#webradio').removeClass('show');
         jQuery('#webradio').addClass('hide');
         jQuery('#webradio #showhide').html('<i class="fa fa-expand" aria-hidden="true"></i>');
         jQuery('#webradio_selector_right').css("position","");
         jQuery('.pager').css("padding-bottom","10px");
         jQuery('#content').css("padding-bottom","10px");
         } else {
         jQuery('.pager').css("padding-bottom","80px");
         jQuery('#content').css("padding-bottom","60px");
         jQuery('#webradio').removeClass('hide');
         jQuery('#webradio').addClass('show');
         jQuery('#webradio #showhide').html('<i class="fa fa-compress" aria-hidden="true"></i>');
         jQuery('#webradio_selector_right').css("position","fixed");
         jQuery('#webradio_selector_right').css("right","0px");
         }
         }
         
         function slide_left() {
         console.log("slide left");
         
         $el=jQuery('#webradio_channels li:first');
         
         jQuery( $el ).animate({    width: "0px"  }, 100, function() { 
          $el=jQuery('#webradio_channels li:first').detach();
          jQuery($el).css("width","80px");
          jQuery('#webradio_channels li:last').after($el);
         });
         
         
         
         
           
         }
         
         
         function slide_right() {
         console.log("slide right");
         jQuery('#webradio_channels li:last').css("width","0px");
         
         $el=jQuery('#webradio_channels li:last').detach();
         jQuery('#webradio_channels ul').prepend($el);
         jQuery( "#webradio_channels li:first" ).animate({
             width: "80px"
           }, 100, function() {
              
           });
         
         }
         
         function isPlaying() { return !document.getElementById('player').paused; }
         
         function playpause() {
         var cp="/webradio/"+jQuery('#webradiostation').text();
         cp=cp.replace("EXTRA ", "");
         jQuery('#webradio_controls i').addClass("fa-play");
            jQuery('#webradio_controls i').removeClass("fa-pause");
                         
          if (isPlaying()) {
            jQuery('#webradio_controls i').addClass("fa-play");
            jQuery('#webradio_controls i').removeClass("fa-pause");
            document.getElementById('player').pause();
            ga('send', {  hitType: 'event',  eventCategory: 'webradio '+jQuery('#webradiostation').text(),  eventAction: 'interaction',  eventLabel: 'pause'});
            stop_stillrunning();
            
          } else {
            if (jQuery('#webradio #player').attr("data-src").length>1) {
            jQuery('#webradio #player').attr("src",jQuery('#webradio #player').attr("data-src"));
            jQuery('#webradio #player').attr("data-src","");
            
            }
            document.getElementById('player').play();
            ga('send', {  hitType: 'event',  eventCategory: 'webradio '+jQuery('#webradiostation').text(),  eventAction: 'interaction',  eventLabel: 'play'});
            stillrunning();
            sendivw(cp);
            jQuery('#webradio_controls i').addClass("fa-pause");
            jQuery('#webradio_controls i').removeClass("fa-play");
            
          }
         }
         
         function stillrunning() {
          if (keep_alive != undefined) { clearTimeout(keep_alive); }
          ga('send', {  hitType: 'event',  eventCategory: 'webradio '+jQuery('#webradiostation').text(),  eventAction: 'interaction',  eventLabel: 'still_running'});
          keep_alive = setTimeout(function(){ stillrunning(); }, 60000);
         }
         
         
         
         function stop_stillrunning() {
             clearTimeout(keep_alive);
         }
         
         
         
         function setdefault() {
           
          currentlocation = getlocation();
          var streamurl="http://82.135.234.195:8000/extrafm.mp3";
          var ch=1;
          switch (currentlocation) { 
          case '': streamurl="http://82.135.234.195:8000/extrafm.mp3"; ch=11; break; /* Hits */ 
           
           
         }
            jQuery('#webradioid').text(ch);
            jQuery("#webradio #player").attr("data-src",streamurl);
            jQuery('#webradiointerpret').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-artist"));
            jQuery('#webradiosong').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-song"));
            jQuery('#webradiostation').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-name"));
            var background=jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("cover");
            jQuery('#webradiocover').css("background-image",background);
            
         }
         
        
             var streamurl="http://82.135.234.195:8000/extrafm.mp3";
             var audio = jQuery("#player");      
             jQuery("#player").attr("data-src",streamurl);
             audio[1].load();
             audio[0].pause();
             
          
         
         jQuery('#webradio_controls i').addClass("fa-pause");
         jQuery('#webradio_controls i').removeClass("fa-play");
         jQuery('#webradioid').text(ch);
         jQuery('#webradiointerpret').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-artist"));
         jQuery('#webradiosong').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-song"));
         jQuery('#webradiostation').text(jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("data-name"));
         var background=jQuery('#webradio_channels li[data-id="'+ch+'"]').attr("cover");
         jQuery('#webradiocover').css("background-image",background);
         ga('send', {  hitType: 'event',  eventCategory: 'webradio '+jQuery('#webradiostation').text(),  eventAction: 'interaction',  eventLabel: 'switched'});
         
         var cp="/webradio/switched"
         sendivw(cp);
         playpause();

      </script>
      <div id="webradio" class="show shadow">
         <button id="showhide" onClick="toggleWidth();"><i class="fa fa-compress" aria-hidden="true"></i></button>
         <div id="webradio_controls">
            <button onclick="playpause();" id="playerstart"><i class='fa fa-play' aria-hidden='true'></i></button>
          
            <audio id="player">
               <source src="" type="audio/mpeg">
            </audio>
           <script src="/content/themes/default/js/index_playlist.js"></script>
           
            <div id="webradiocover" style="background-image: url();"></div>
            <div class="webradioinfos">
        
            <p id="webradioid" style="display:none;"></p>
            <p id="webradiostation"></p>
            <p id="webradiointerpret"></p>
            <p id="webradiosong"></p>
            
            </div>

         </div>
         
                       </div>
   </div>
</div>

<script>
   /* Livestream button change on mobile devices */
   if(isMobile()){
       jQuery(".mobilapp").show();
        jQuery(".mobilapp").css('display','block !important');
       jQuery(".livestream").show();
       jQuery("#block-block-20").remove();
       
   }else {
       jQuery(".livestream").show();
       jQuery(".mobilapp").remove();
   }
   
    if ((window.location.href.indexOf("sachsen") > -1) || (window.location.href.indexOf("bremen") > -1)) {
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    (function() {
      var gads = document.createElement("script");
      gads.async = true;
      gads.type = "text/javascript";
      var useSSL = "https:" == document.location.protocol;
      gads.src = (useSSL ? "https:" : "http:") + "//www.googletagservices.com/tag/js/gpt.js";
      var node = document.getElementsByTagName("script")[0];
      node.parentNode.insertBefore(gads, node);
    })();
    
    if ((window.location.href.indexOf("bremen") > -1)) {
      (function() {
      var gads = document.createElement("script");
      gads.async = true;
      gads.type = "text/javascript";
      var useSSL = "https:" == document.location.protocol;
      gads.src = (useSSL ? "https:" : "http:") + "//www.video.oms.eu/ada/cloud/omsv_container_151.js";
      var node = document.getElementsByTagName("script")[0];
      node.parentNode.insertBefore(gads, node);
      })();
      
      
           var adlWallPaperLeft = (window.innerWidth / 2) + (970 / 2),
            oms_sbwp_top = 390;
      
      jQuery("#adl_sb_table").css("width","978px !important");
      jQuery("#omsv_sky_DhtmlLayer").css("top","130px !important");
      
        
    }
   }
   
   
   
</script>
<script type="text/javascript">
   jQuery('document').ready(function(){
   
      jQuery('.dropdown').hover(function(){
          jQuery(this).addClass('open');
      }, function(){
          jQuery(this).removeClass('open');
      });
   
     <?php if(Session::get('note') != '' && Session::get('note_type') != ''): ?>
         var n = noty({text: '<?= str_replace("'", "\\'", Session::get("note")) ?>', layout: 'top', type: '<?= Session::get("note_type") ?>', template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>', closeWith: ['button'], timeout:1300 });
         <?php Session::forget('note');
      Session::forget('note_type');
      ?>
     <?php endif; ?>
   
     jQuery('#nav-toggle').click(function(){
     	jQuery(this).toggleClass('active');
     	jQuery('.navbar-collapse').toggle();
     	jQuery('body').toggleClass('nav-open');
     });
   
     jQuery('#mobile-subnav').click(function(){
     	if(jQuery('.second-nav .navbar-left').css('display') == 'block'){
     		jQuery('.second-nav .navbar-left').slideUp(function(){
     			jQuery(this).addClass('not-visible');
     		});
     		jQuery(this).html('<i class="fa fa-bars"></i> Open Submenu');
     	} else {
     		jQuery('.second-nav .navbar-left').slideDown(function(){
     			jQuery(this).removeClass('not-visible');
     		});
     		jQuery(this).html('<i class="fa fa-close"></i> Close Submenu');
     	}
     	
     });
   
   });
   
   
   /********** LOGIN MODAL FUNCTIONALITY **********/
   
   var loginSignupModal = jQuery('<div class="modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">Login Below</h4></div><div class="modal-body"></div></div></div></div>');
   
   jQuery(document).ready(function(){
   
   // Load the Modal Window for login signup when they are clicked
   jQuery('.login-desktop a').click(function(e){
   	e.preventDefault();
   	jQuery('body').prepend(loginSignupModal);
   	jQuery('#loginSignupModal .modal-body').load($(this).attr('href') + '?redirect=' + document.URL + ' .form-signin', function(){
   		jQuery('#loginSignupModal').show(200, function(){
   			setTimeout(function() { $('#email').focus() }, 300);
   
   			
   		});
   		jQuery('#loginSignupModal').modal();
   		
   	});
   
   	// Be sure to remove the modal from the DOM after it is closed
   	$('#loginSignupModal').on('hidden.bs.modal', function (e) {
       	$('#loginSignupModal').remove();
   	});
   
   });
   
   
   
   
   });
   
   /********** END LOGIN MODAL FUNCTIONALITY **********/
   
</script>
<?php if(isset($settings->google_tracking_id)): ?>
<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
   ga('create', '<?= $settings->google_tracking_id ?>', 'auto');
   ga('send', 'pageview');
</script>
<?php endif; ?>
<script><?= ThemeHelper::getThemeSetting(@$theme_settings->custom_js, '') ?></script>
</body>
</html>