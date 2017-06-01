<?php include('includes/header.php'); ?>
<meta charset="UTF-8">
<?php $posts = Post::where('active', '=', '1')->orderBy('created_at', 'DESC')->simplePaginate(12); ?>
                  <div id="contentwrapper">
                     <div class="region region-highlighted">
                        <div id="block-block-17" class="block block-block first last odd">
                           <div id="programmbox">
                              <div class="currentmod">
                                 <a href="#" class="modpiclink">
                                    <div class="modpicwrapper" style="display: block; background-image: url(http://www.extrafm.eu/Karen_300x350.jpg);"></div>
                                 </a>
                                 <div class="modinfo">
                                 <?php //include './program/index.php';?>
                                    <p class="modname">EXTRA KOMENTARAS</p>
                                    <p class="modsubname">KARTOJIMAS</p>
                                    <p class="modtime">10:00 - 15:00 val.</p>
                                    <p class="modtel"><i class="fa fa-phone" aria-hidden="true"></i>+3706 000 0000</p>
                                    <p class="modmail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@extrafm.lt">info@extrafm.lt</a></p>
                                    <div class="livestream">
                                       <p class="livestreamstart"><a href="/live" target="_parent"><i class="fa fa-play" aria-hidden="true"></i>TIESIOGINĖ TRANSLIACIJA</a></p>
                                    </div>
                                 </div>
                              </div>
                              <div id="ad_home">
                                 <a href="/national/empfangen/energy-app" target="_blank"><img src="http://www.extrafm.eu/foto.jpg"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="main">
                        <div id="content" class="column" role="main">
                           <noscript>
                              <div id="nojava">
                                 <center>
                                    <h1 style="color:red;">Na? Wenn Du das lesen kannst, ist Dein Javascript <u>deaktiviert</u>. Gar nicht cool !</h1>
                                 </center>
                              </div>
                              <br />
                           </noscript>
                           <a id="main-content"></a>
                           <article class="node-2112 node node-page view-mode-full clearfix" about="/digital" typeof="foaf:Document">
                              <header>
                                 <span property="dc:title" content="RADIO ENERGY Digital im Livestream - der Radiosender für DAB+" class="rdf-meta element-hidden"></span>
                              </header>
                              <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                 <div class="field-items">
                                    <div class="field-item even" property="content:encoded">
                                       <p>
                                          <script type="text/javascript">
                                             jQuery('article').remove();
                                              
                                             jQuery(function() {
                                             
                                             
                                             set_links_for_ajax();  
                                             
                                             });
                                          </script>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </article>
                           <div id="block-views-58e5d00ad1c5cfa8e2dac8805bb1aa82" class="block block-views even">
                              <div class="view view-startseite-sammler-nicht-prio view-id-startseite_sammler_nicht_prio view-display-id-block_11 view-dom-id-9a497fad3d89902d74f5c337f8972e96">
                                 <div class="view-content">
                                    <?php include('partials/post-loop.php'); ?>
                                 </div>
                                 <ul class="pager pager--infinite-scroll ">
                                    <li class="pager__item">
                                    <?php if($posts->hasMorePages()) : ?>
                                       <a href="<?= $pagination_url . '/?page=' . intval($current_page + 1); ?>">Skaityti daugiau...</a>
                                       <?php endif; ?>
                                    </li>
                                 </ul>
                                 <div class="view-footer">
                                    <script type="text/javascript">
                                       startseitenview();
                                    </script>    
                                 </div>
                              </div>
                           </div>
                           <div id="block-views-startseite-berlin-block-8" class="block block-views last odd">
                              <div class="view view-startseite-berlin view-id-startseite_berlin view-display-id-block_8 view-dom-id-a2c86ecd50e7a37f76df451135daaf86">
                                 <div class="view-content">
                                    
                                    
                                 </div>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                    

<?php include('includes/footer.php'); ?>