<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<script type="text/javascript">var lastGlp = "http://www.extrafm.eu/mabs/get_last_played.php?limit=2";
var nowBroadcastText = 'Dabar eteryje: ';
var pastBroadcastText = 'Ankstesnis: ';

function getLastSongsAjax() {
    setLoading();
    $.ajaxSetup({cache: false});
    $.getJSON(lastGlp, function (result) {
        displaySongs(result);
    });
}

function setLoading() {
    replace("<div style=\"text-align:center;\"><i class=\"fa fa-refresh fa-spin\"></i></div>", '#now-broadcast-header');
    replace("<p style=\"text-align:center;\"><i class=\"fa fa-refresh fa-spin fa-3x\"></i></p>", '#now-broadcast');
    replace("<p style=\"text-align:center;\"><i class=\"fa fa-refresh fa-spin fa-3x\"></i></p>", '#last-broadcast');
}

function displaySongs(result) {
    
    var htmlContent ="";
    var live = false;
    $.each(result, function(date, playlist) {
        $.each(playlist, function(hour, songs){
            $.each(songs, function(songId, song) {
                if(!live){
                    replace(nowBroadcastText + song.artist + ' - ' + song.song + '<a href="https://www.youtube.com/watch?v='+ song.video_id + '"target="_blank"><img src="http://img.youtube.com/vi/' + song.video_id + '/0.jpg" class="img-responsive" style="width:80px; text-align:center; margin: 10px auto; 0px auto;"></a>', '#now-broadcast');
                    var n = song.song.length;
                    if (n <= 25) {
                        replace('<a href="https://www.youtube.com/watch?v='+ song.video_id + '"target="_blank"><img src="http://img.youtube.com/vi/' + song.video_id + '/0.jpg" class="img-responsive" style="width:50px; float:left; margin-right: 10px;"></a>' + song.artist + ' <br> ' + song.song, '#now-broadcast-header');
                    } else {
                        var less = song.song.slice(0,22);
                        replace('<a href="https://www.youtube.com/watch?v='+ song.video_id + '"target="_blank"><img src="http://img.youtube.com/vi/' + song.video_id + '/0.jpg" class="img-responsive" style="width:50px; float:left; margin-right: 10px;"></a>' + song.artist, + '<br>' + less+'..', '#now-broadcast-header');
                    }
                    live=true;
                }else{
                     replace(pastBroadcastText + song.artist + ' - ' + song.song, '#last-broadcast');
                    live=false;
                }
            });
        });
    });
}

function replace(text, elem){
    $(elem).empty();
    $(elem).append(text);
}

$(document).ready(getLastSongsAjax());</script>
</body>
</html>