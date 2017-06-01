<?php include('includes/header.php');?>

<?php if (isset($_GET["pdate"])) {
   define("PDATE", $_GET["pdate"]);
   }
   if (isset($_GET["phour"])) {
   define("PHOUR", $_GET["phour"]);
   }
   ?>
<link rel="stylesheet" href="http://extrafm.lt/wp-content/themes/ExtraFM/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://extrafm.lt/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://extrafm.lt/wp-includes/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js?ver=4.6.1"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body class="page page-id-18 page-template page-template-page-playlist page-template-page-playlist-php wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive" id="page-top" data-spy="scroll">
   <br><br>
   <section id="radio-playlist">
      <br><br>
      <br><br>
      <br><br>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="radio-playlist-header">
                  <div class="row">
                     <div class="col-md-12">
                        <p class="title-header">Grojaraštis</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                           <div class="select-day">
                              <p class="selected-class">Date:</p>
                              <select id="playlist_dates" class="form-control" title="Date">
                              </select>
                           </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-6">
                           <div id="time-playlist" class="select-time">
                              <p class="selected-class">Laikas:</p>
                              <select id="playlist_hours" class="form-control" title="Time">
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="radio-playlist-content">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="radio-playlist-list" id="list-1"></ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script src="http://www.viralinthebox.com/js/playlist.js"></script>
   <?php //include('includes/footer.php'); ?>