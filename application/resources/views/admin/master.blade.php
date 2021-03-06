<!DOCTYPE html>
<html lang="lt">
   <head>
      <?php $settings = Setting::first(); ?>
      <meta charset="utf-8">
      <meta http-e
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>{{ $settings->website_name . ' - ' . $settings->website_description }}</title>
      <link rel="stylesheet" href="{{ '/application/assets/admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/font-icons/entypo/css/entypo.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/font-icons/font-awesome/css/font-awesome.min.css' }}">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/bootstrap.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/core.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/theme.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/forms.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/css/custom.css' }}">
      <link rel="icon" href="<?= Config::get('site.uploads_dir') . '/settings/' . $settings->favicon ?>" type="image/x-icon">
      <link rel="shortcut icon" href="<?= Config::get('site.uploads_dir') . '/settings/' . $settings->favicon ?>" type="image/x-icon">
      @yield('css')
      <script src="{{ '/application/assets/admin/js/jquery-1.11.0.min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/bootstrap-colorpicker.min.js' }}" id="script-resource-13"></script>
      <script>$.noConflict();</script>
      <!--[if lt IE 9]><script src="{{ '/application/assets/admin/js/ie8-responsive-file-warning.js' }}"></script><![endif]-->
      <!-- HTML5 shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js') }}/1.4.2/respond.min.js') }}"></script>
      <![endif]-->
   </head>
   <body class="page-body skin-black">
      <a href="{{ URL::to('/') }}" class="top-left-logo">
      <img src="{{ '/application/assets/admin/images/hv-tv.png' }}" />
      </a>
      <div class="page-container sidebar-collapsed">
         <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
         <div class="sidebar-menu page-right-in">
            <div class="sidebar-menu-inner">
               <header class="logo-env">
                  <!-- logo -->
                  <div class="logo">
                     <a href="{{ URL::to('/') }}">
                     </a>
                  </div>
                  <!-- logo collapse icon -->
                  <div class="sidebar-collapse">
                     <a href="#" class="sidebar-collapse-icon">
                        <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                     </a>
                  </div>
                  <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                  <div class="sidebar-mobile-menu visible-xs">
                     <a href="#" class="with-animation">
                        <!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                     </a>
                  </div>
               </header>
               <ul id="main-menu" class="main-menu">
                  <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                  <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                  <li class="active">
                     <a href="{{ URL::to('admin') }}">
                     <i class="entypo-gauge"></i>
                     <span class="title">Administravimas</span>
                     </a>
                  </li>
                  <li class="">
               <a href="{{ URL::to('admin/videos') }}">
                  <i class="entypo-video"></i>
                  <span class="title">Mediateka</span>
               </a>
               <ul>
                  <li>
                     <a href="{{ URL::to('admin/videos') }}">
                        <span class="title">Visi įrašai</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ URL::to('admin/videos/create') }}">
                        <span class="title">Pridėti naują įrašą</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ URL::to('admin/videos/categories') }}">
                        <span class="title">Mediatekos kategorijos</span>
                     </a>
                  </li>
               </ul>
            </li>
                  <li class="">
                     <a href="{{ URL::to('admin/users') }}">
                     <i class="entypo-users"></i>
                     <span class="title">Vartotojai</span>
                     </a>
                     <ul>
                        <li>
                           <a href="{{ URL::to('admin/users') }}">
                           <span class="title">Visi vartotojai</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ URL::to('admin/user/create') }}">
                           <span class="title">Pridėti naują vartotoją</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="{{ URL::to('admin/pages') }}">
                     <i class="entypo-book-open"></i>
                     <span class="title">Puslapiai & Įrašai</span>
                     </a>
                     <ul>
                        <li>
                           <a href="{{ URL::to('admin/pages') }}">
                           <span class="title">Visi puslapiai</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ URL::to('admin/pages/create') }}">
                           <span class="title">Pridėti naują puslapį</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ URL::to('admin/posts') }}">
                           <span class="title">Visi straipsniai</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ URL::to('admin/posts/create') }}">
                           <span class="title">Pridėti naują straipsnį</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{ URL::to('admin/posts/categories') }}">
                           <span class="title">Įrašų kategorijos</span>
                           </a>
                        </li>
                     </ul>
                  <li class="">
                     <a href="{{ URL::to('admin/themes') }}">
                     <i class="entypo-monitor"></i>
                     <span class="title">Dizainas</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="{{ URL::to('admin/settings') }}">
                     <i class="entypo-cog"></i>
                     <span class="title">Nustatymai</span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="{{ URL::to('admin/settings') }}">
                           <span class="title">Tinklapio nustatymai</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="{{ URL::to('admin/theme_settings') }}">
                           <span class="title">Dizaino nustatymai</span>
                           </a>
                        </li>
                        </li>
                        <li class="" style="visibility: hidden;">
                           <a href="{{ URL::to('admin/menu') }}">
                           <i class="entypo-list"></i>
                           <span class="title">Meniu(Neaktyvuotas)</span>
                           </a>
                        </li>
                        <li class="" style="visibility: hidden;">
                           <a href="{{ URL::to('admin/plugins') }}">
                           <i class="fa fa-plug"></i>
                           <span class="title">Įskiepiai</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <div class="main-content">
            <div class="row">
               <!-- Profile Info and Notifications -->
               <div class="col-md-6 col-sm-8 clearfix">
                  <ul class="user-info pull-left pull-none-xsm">
                     <!-- Profile Info -->
                     <li class="profile">
                        <!-- add class "pull-right" if you want to place this from right -->
                        <img src="{{ Config::get('site.uploads_dir') . 'avatars/' . $admin_user->avatar }}" alt="" class="img-circle" width="26" />
                        <span>Sveiki, {{ ucfirst($admin_user->username) }}</span>
                     </li>
                  </ul>
               </div>
               <!-- Raw Links -->
               <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                  <ul class="list-inline links-list pull-right">
                     <li>
                        <span class="label label-warning" style="font-size:12px; background:#A8D432">Version 0.1 BETA</span>
                     </li>
                     <li>
                        <a href="http://dc1.skyhmedia.lt" target="_blank">
                        <span class="label label-danger" style="font-size:12px; background:#FC9A24">Sprendimas: Vilmantas Bieliūnas</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ URL::to('/') }}">
                        <span class="label label-info" style="font-size:12px">Peržiūrėti puslapį <i class="entypo-export right"></i></span>
                        </a>
                     </li>
                     <li class="sep"></li>
                     <li>
                        <a href="{{ URL::to('logout') }}">
                        Atsijungti<i class="entypo-logout right"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <hr />
            <div id="main-admin-content">
               @yield('content')
            </div>
            <!-- Footer -->
            <footer class="main">
               &copy;
            </footer>
         </div>
      </div>
      <!-- Sample Modal (Default skin) -->
      <div class="modal fade" id="sample-modal-dialog-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Widget Options - Default Modal</h4>
               </div>
               <div class="modal-body">
                  <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Sample Modal (Skin inverted) -->
      <div class="modal invert fade" id="sample-modal-dialog-2">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
               </div>
               <div class="modal-body">
                  <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Sample Modal (Skin gray) -->
      <div class="modal gray fade" id="sample-modal-dialog-3">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
               </div>
               <div class="modal-body">
                  <p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Imported styles on this page -->
      <link rel="stylesheet" href="{{ '/application/assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.css' }}">
      <link rel="stylesheet" href="{{ '/application/assets/admin/js/rickshaw/rickshaw.min.css' }}">
      <!-- Bottom scripts (common) -->
      <script src="{{ '/application/assets/admin/js/gsap/main-gsap.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/bootstrap.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/joinable.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/resizeable.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.min.js' }}"></script>
      <!-- Imported scripts on this page -->
      <script src="{{ '/application/assets/admin/js/jvectormap/jquery-jvectormap-europe-merc-en.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/jquery.sparkline.min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/rickshaw/vendor/d3.v3.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/rickshaw/rickshaw.min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/raphael-min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/morris.min.js' }}"></script>
      <script src="{{ '/application/assets/admin/js/toastr.js' }}"></script>
      <!-- JavaScripts initializations and stuff -->
      <script src="{{ '/application/assets/admin/js/custom.js' }}"></script>
      <!-- Demo Settings -->
      <script src="{{ '/application/assets/admin/js/main.js' }}"></script>
      <!-- Notifications -->
      <script>
         var opts = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
         };
         
         <?php if(Session::get('note') != '' && Session::get('note_type') != ''): ?>
                
                if('<?= Session::get("note_type") ?>' == 'success'){
                  toastr.success('<?= Session::get("note") ?>', "Sweet Success!", opts);
                } else if('<?= Session::get("note_type") ?>' == 'error'){
                  toastr.error('<?= Session::get("note") ?>', "Whoops!", opts);
                }
                <?php Session::forget('note');
            Session::forget('note_type');
            ?>
            <?php endif; ?>
         
            function display_mobile_menu(){
               if($(window).width() < 768){
                  $('.sidebar-collapsed').removeClass('sidebar-collapsed');
               }
            }
         
            $(document).ready(function(){
               display_mobile_menu();
            });
         
      </script>
      <!-- End Notifications -->
      @yield('javascript')
   </body>
</html>