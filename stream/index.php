<head>
  <link href="http://vjs.zencdn.net/5.10.4/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="video.js"></script>
<script src="videojs-vlc.js"></script>
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/4.11/video.js"></script>
</head>

<body>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="MY_VIDEO_POSTER.jpg" data-setup='{ "techOrder": ["vlc"] }'">
    <source src="rtmp://91.211.245.207/live/live" type='video/webm'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
  <video id="my_video_1" class="video-js vjs-default-skin" controls
  preload="auto" width="640" height="264" data-setup='{ "techOrder": ["flash"] }'>
  <source src="rtmp://cp67126.edgefcs.net/ondemand/&mp4:mediapm/ovp/content/test/video/spacealonehd_sounas_640_300.mp4" type='rtmp/mp4'>
</video> 

  <script src="http://vjs.zencdn.net/5.10.4/video.js"></script>
</body>