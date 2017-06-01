<?php $settings = Setting::first(); ?>
<?php if(isset($video->id)): ?>
<title><?= $video->title; ?></title>
<meta name="description" content="<?= $video->description ?>">
<?php 
   $keywords = '';
   
   foreach($video->tags as $tag):
       $keywords .= $tag->name . ', ';
   endforeach;
   
   $keywords = rtrim($keywords, ', ');
   ?>
<!DOCTYPE html>
<!-- for Google -->
<meta name="keywords" content="<?= $keywords ?>" />
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?= $video->title ?>">
<meta itemprop="description" content="<?= $video->description ?>">
<meta itemprop="image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($video->image, 'large')  ?>">
<!-- for Facebook -->          
<meta property="og:title" content="<?= $video->title ?>" />
<meta property="og:type" content="video.other" />
<meta property="og:image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($video->image, 'large')  ?>" />
<meta property="og:url" content="<?= Request::url(); ?>" />
<meta property="og:description" content="<?= $video->description ?>" />
<!-- for Twitter -->          
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?= $video->title ?>" />
<meta name="twitter:description" content="<?= $video->description ?>" />
<meta name="twitter:image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($video->image, 'large')  ?>" />
<?php elseif(isset($post->id)): ?>
<?php $post_description = preg_replace('/^\s+|\n|\r|\s+$/m', '', strip_tags($post->body)); ?>
<title><?= $post->title; ?></title>
<meta name="description" content="<?= $post_description ?>">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?= $post->title ?>">
<meta itemprop="description" content="<?= $post_description ?>">
<meta itemprop="image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($post->image, 'large')  ?>">
<!-- for Facebook -->          
<meta property="og:title" content="<?= $post->title ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($post->image, 'large')  ?>" />
<meta property="og:description" content="<?= $post_description ?>" />
<!-- for Twitter -->          
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?= $post->title ?>" />
<meta name="twitter:description" content="<?= $post_description ?>" />
<meta name="twitter:image" content="<?= ($settings->enable_https) ? secure_url('/') : URL::to('/') ?><?= ImageHandler::getImage($post->image, 'large')  ?>" />
<?php elseif(isset($page->id)): ?>
<title><?= $page->title . '-' . $settings->website_name; ?></title>
<meta name="description" content="<?= $page->title . '-' . $settings->website_name; ?>">
<?php else: ?>
<title><?php echo $settings->website_name . ' - ' . $settings->website_description; ?></title>
<meta name="description" content="<?= $settings->website_description ?>">
<?php endif; ?>
<?php $favicon = (!empty($settings->favicon)) ? Config::get('site.uploads_dir') . 'settings/' . $settings->favicon : THEME_URL . '/assets/img/favicon.png'; ?>
<head>
   <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Roboto+Condensed:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   <link rel="shortcut icon" href="http://www.extrafm.eu/favicon.ico">
   <link rel="icon" href="http://www.extrafm.eu/favicon.ico">
   <meta name="google-play-app" content="app-id=ltu.radio.extrafm" />
   <meta name="apple-itunes-app" content="app-id=1073901358" />
   <link rel="stylesheet" href="http://www.extrafm.eu/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="http://www.extrafm.eu/style.css">
   <meta charset="utf-8" />
   <link rel="stylesheet" href="<?= THEME_URL . '/assets/css/noty.css'; ?>" />
   <link rel="stylesheet" href="<?= THEME_URL . '/assets/css/font-awesome.min.css'; ?>" />
   <link rel="stylesheet" href="<?= THEME_URL . '/assets/css/hellovideo-fonts.css'; ?>" />
   <meta name="MobileOptimized" content="width">
   <meta name="HandheldFriendly" content="true">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="cleartype" content="on">
   <style>
      @import url("http://www.energy.de/modules/system/system.base.css");
   </style>
   <style>
      @import url("http://www.energy.de/sites/all/modules/access_unpublished/css/access_unpublished.css");
      @import url("http://www.energy.de/sites/all/modules/ajax_links_api/ajax_links_api.css");
      @import url("http://www.energy.de/modules/comment/comment.css");
      @import url("http://www.energy.de/sites/all/modules/date/date_api/date.css");
      @import url("http://www.energy.de/sites/all/modules/date/date_popup/themes/datepicker.1.7.css");
      @import url("http://www.energy.de/modules/field/theme/field.css");
      @import url("http://www.energy.de/sites/all/modules/node/node.css");
      @import url("http://www.energy.de/modules/search/search.css")
      @import url("http://www.energy.de/sites/all/modules/views/css/views.css");
   </style>
   <style>
      @import url("http://www.energy.de/sites/all/themes/zen_energy/css/jquery.bxslider.css");
      @import url("http://www.energy.de/sites/all/themes/zen_energy/css/animate.css");
      @import url("http://www.energy.de/sites/all/themes/zen_energy/css/jquery.smartbanner.css");
      @import url("http://www.energy.de/sites/all/modules/ctools/css/ctools.css");
      @import url("http://www.energy.de/sites/all/modules/panels/css/panels.css");
      @import url("http://www.energy.de/sites/all/modules/content_type_extras/css/content_type_extras.css");
   </style>
   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
   <script src="http://www.energy.de/misc/jquery.once.js?v=1.2"></script>
   <script src="http://www.energy.de/misc/drupal.js"></script>
   <script src="http://www.energy.de/misc/ajax.js"></script>
   <script src="http://www.extrafm.eu/next_energy.js"></script>
   <script src="http://www.energy.de/sites/all/modules/jquery_update/js/jquery_update.js?v=0.0.1"></script>
   <script src="http://www.energy.de/sites/all/modules/ajax_links_api/ajax_links_api.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/masonry.pkgd.min.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/imagesloaded.pkgd.min.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/script.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/slidebars.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/jquery.mobile.custom.min.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/jquery.popupoverlay.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/jquery.flipster.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/jquery.bxslider.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/js.cookie.js"></script>
   <script src="http://www.energy.de/sites/all/themes/zen_energy/js/jquery.smartbanner.js"></script>
   <script src="http://www.energy.de/sites/all/modules/views/js/base.js"></script>
   <script src="http://www.energy.de/misc/progress.js"></script>
   <script src="http://www.energy.de/sites/all/modules/views/js/ajax_view.js"></script>
   <script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"zen_energy","theme_token":"WQAFHIwllxM7Rx7NR6_-j-2UgUmS2FBC4rdr59LiBKw","jquery_version":"1.10","js":{"sites\/all\/modules\/views_infinite_scroll\/views-infinite-scroll.js":1,"\/\/code.jquery.com\/jquery-1.10.2.min.js":1,"0":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"sites\/all\/modules\/jquery_update\/replace\/misc\/jquery.form.min.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/jquery_update\/js\/jquery_update.js":1,"sites\/all\/modules\/ajax_links_api\/ajax_links_api.js":1,"\/sites\/all\/themes\/zen_energy\/js\/advert.js":1,"public:\/\/languages\/de_dWM3zq1qPt6hPOmE7o9HyO6Dgo5tnoCJKdoiN5TBo_c.js":1,"sites\/all\/themes\/zen_energy\/js\/masonry.pkgd.min.js":1,"sites\/all\/themes\/zen_energy\/js\/imagesloaded.pkgd.min.js":1,"sites\/all\/themes\/zen_energy\/js\/script.js":1,"sites\/all\/themes\/zen_energy\/js\/slidebars.js":1,"sites\/all\/themes\/zen_energy\/js\/jquery.mobile.custom.min.js":1,"sites\/all\/themes\/zen_energy\/js\/jquery.popupoverlay.js":1,"sites\/all\/themes\/zen_energy\/js\/":1,"sites\/all\/themes\/zen_energy\/js\/jquery.flipster.js":1,"sites\/all\/themes\/zen_energy\/js\/jquery.bxslider.js":1,"sites\/all\/themes\/zen_energy\/js\/js.cookie.js":1,"sites\/all\/themes\/zen_energy\/js\/jquery.smartbanner.js":1,"sites\/all\/themes\/zen_energy\/js\/ivw.js":1,"sites\/all\/modules\/views\/js\/base.js":1,"misc\/progress.js":1,"sites\/all\/modules\/views\/js\/ajax_view.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/all\/modules\/access_unpublished\/css\/access_unpublished.css":1,"sites\/all\/modules\/ajax_links_api\/ajax_links_api.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/themes\/zen_energy\/css\/jquery.bxslider.css":1,"sites\/all\/themes\/zen_energy\/css\/animate.css":1,"sites\/all\/themes\/zen_energy\/css\/jquery.smartbanner.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/content_type_extras\/css\/content_type_extras.css":1,"sites\/all\/libraries\/fontawesome\/css\/":1,"sites\/all\/themes\/zen_energy\/system.menus.css":1,"sites\/all\/themes\/zen_energy\/system.messages.css":1,"sites\/all\/themes\/zen_energy\/system.theme.css":1,"sites\/all\/themes\/zen_energy\/css\/styles.css":1,"http:\/\/fonts.googleapis.com\/css?family=Oswald:300,700,regular|Roboto+Condensed:300,700,regular\u0026subset=latin-ext":1}},"ajax_links_api":{"selector":"#ajax-content","trigger":".ajax-link","negative_triggers":"#toolbar a","html5":1,"vpager":1},"views_infinite_scroll":{"img_path":"\/sites\/all\/modules\/views_infinite_scroll\/images\/ajax-loader.gif"},"views":{"ajax_path":"\/views\/ajax",
      "ajaxViews":{
      "views_dom_id:0":{
      "view_name":"startseite_sammler_nicht_prio",
      "view_display_id":"block_11",
      "view_args":"","view_path":"node\/2112",
      "view_base_path":null,
      "view_dom_id":"0","pager_element":0},
      "views_dom_id:0":{
      "view_name":"startseite_berlin",
      "view_display_id":"block_8",
      "view_args":"",
      "view_path":"node\/2112",
      "view_base_path":null,
      "view_dom_id":"0","pager_element":0}
      }}});
   </script>
   <style type="text/css">img {
      width: 100%;
      height: auto;
      }
   </style>
