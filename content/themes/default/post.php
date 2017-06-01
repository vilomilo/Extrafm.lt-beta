<?php include('includes/header.php'); ?>
<div id="contentwrapper">
<div id="main">
   <div id="content" class="column" role="main">

      <div id="node-3678" class="node node-article node-promoted view-mode-full clearfix" about="/national/stars-im-studio/energy-stars-im-studio-samu-haber" typeof="sioc:Item foaf:Document">
         <span property="dc:title" content="ENERGY Stars im Studio: Samu Haber" class="rdf-meta element-hidden"></span>
         <div class="field field-name-body field-type-text-with-summary field-label-hidden">
            <div class="field-items">
               <div class="field-item even" property="content:encoded"></div>
            </div>
         </div>
         <div class="content2">
            <div class="field field-name-field-gallerie field-type-file field-label-hidden">
               <div class="field-items">
                  <div class="field-item even">
                     <div id="file-4423" class="file file-image file-image-jpeg">
                        <h2 class="element-invisible"><a href="/files/natstarsimstudiosamuhaber944x450pxjpg-1">NAT_STARS_IM_STUDIO_SAMU_HABER_944x450px.jpg</a></h2>
                        <div class="content">

                           <img typeof="foaf:Image" src="<?= ImageHandler::getImage($post->image)  ?>" width="944" height="450" alt="" />
                           <div class="field field-name-field-copyright field-type-text field-label-hidden titletext">
                              <div class="field-items">
                                 <div class="field-item even"><?php if(isset($author->username)){ echo  'Paskelbė ' . $author->username; } ?> - <?= date("Y-m-d H:i:s", strtotime($post->created_at)); ?></div>
                              </div>
                           </div>
                           <h1 class="page__title title" id="page-title"><?= $post->title ?></h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
               <div class="field-items">
                  <div class="field-item even" property="content:encoded">
                     <div class="layoutmanager">
                        <div class="container-fluid layout-container">
                           <div class="row layout-row">
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 layout-column">
                                 <div class="layout-column-two layout-column-editable"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="layoutmanager">
                        <div class="container-fluid layout-container"><?= $post->body ?></div>
                     </div>
                     <p>&nbsp;</p>
                  </div>
               </div>
            </div>
            <div class="field field-name-field-author field-type-text field-label-inline clearfix"></div>
         </div>
         <br><br><br>
      </div>
      <script type="text/javascript">
         jQuery(document).ready(function(){
         jQuery('.page__title').html(jQuery('.page__title').html().replace(/\|/g, ' '));
         
         
         if (jQuery('.webform-client-form').length>0) {jQuery(".messages--warning").appendTo(".field-name-body:last"); }
         
         
          jQuery('.field-type-text-with-summary:first').addClass("prespan");
          jQuery('.field-type-text-with-summary:first').insertBefore('.field-type-text-with-summary:nth(1)');
          jQuery('.field-name-field-gallerie .file-image').each(function( index ) {
            copyright=jQuery(".field-name-field-copyright .field-item",this).text();
            caption=jQuery(".field-name-field-caption .field-item",this).text();
            
            text=copyright;
            if (caption.length>1) {text=text+" - "+caption;}
            jQuery('img',this).attr( 'title',text);
          });
         
         
         if (jQuery('.field-name-field-gallerie img').length>-1) {
          
          jQuery('.field-name-field-gallerie img').wrapAll("<ul class='bxslider'/>");
          jQuery('.field-name-field-gallerie img')
          jQuery('.field-name-field-gallerie img').addClass('gallery');
          jQuery('.field-name-field-gallerie img').wrap("<li/>");
          //jQuery('.bxslider li').append("<li>Werbung</li>");
         } 
         
         /*
         
         jQuery( ".field-name-field-gallerie img" ).each(function( index ) {
            
            jQuery('img.gallery:nth('+index+')').attr( 'title',   jQuery('.content2 .field-name-field-copyright .field-item:nth('+index+')').text()+" / "+ jQuery('.content2 .field-name-field-gallerie .field-name-field-caption .field-item:nth('+index+')').text());
            console.log(index);
          });
         
         */
         
         jQuery('.field-name-field-caption, .field-name-field-copyright').remove();
         
         
         jQuery('.bxslider').bxSlider({
           mode: 'fade',
           adaptiveHeight: true,
           captions: true,
           infiniteLoop: true,
           
         });
         
         
         
         
         
         // Titel unter der Gallerie
         jQuery('#page-title').insertAfter('.field-name-field-gallerie');
         //Promotion Markierung
         // Klicker für die Gallerie
         jQuery('.bx-next,.bx-prev').on( "click", function() {
           var cp=location.href.replace(/^.*\/\/[^\/]+/, '');
         cpcodesplit=location.href.replace(/^.*\/\/[^\/]+/, '').split("/").slice(1,3);
            cp=cpcodesplit[0];
            if (cpcodesplit[1]!= undefined) { cp=cp+"/"+cpcodesplit[1]; }
         
         ga('send', {  hitType: 'event',  eventCategory: 'gallery ',  eventAction: cp,  eventLabel: 'clicker'});
         
         
         cp=cp+"/clicker";
         sendivw(cp);  
         
         
         });
         
         
         
         });
      </script>
      <!---->
   </div>
</div>
<script type="text/javascript">
   /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
   var disqus_shortname = '<?= ThemeHelper::getThemeSetting(@$theme_settings->disqus_shortname, 'hellovideo') ?>';
   
   /* * * DON'T EDIT BELOW THIS LINE * * */
   (function() {
       var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
       dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
       (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
   })();
</script>
<noscript>Please enable JavaScript to view the comments</noscript>
<script src="<?= THEME_URL . '/assets/js/rrssb.min.js'; ?>"></script>
<?php include('includes/footer.php'); ?>