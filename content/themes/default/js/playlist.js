var pd = $('#playlist_dates');
var ph = $('#playlist_hours');
var selected = false;
var glp = "http://www.extrafm.eu/mabs/glp.php";
var lastGlp = "http://www.extrafm.eu/mabs/get_last_played.php";
var selDtateText = "Pasirinkite datą";
var selHoutText = "Pasirinkite laiką";

pd.on('change', function () {
    var sel = pd.val();
    if(sel != selDtateText){
        $.getJSON(glp+"?hours&date="+sel, function(result) {
            displayHours(result);
        })

        $('#time-playlist').removeClass("hide-time");
    }
});

ph.on('change', function () {
   var sel = ph.val();
    if(sel != selHoutText) {
		selected = true;
        setLoading();        
        $.getJSON(glp+"?date="+pd.val()+"&time="+sel.substring(0,2), function(result) {
            displaySongs(result);
        })
    }
});

function getLastSongsAndDatesAjax() {
    $('#time-playlist').addClass("hide-time");
	selected = false;
    setLoading();
    $.ajaxSetup({cache: false});
    $.getJSON(lastGlp, function (result) {
        displaySongs(result);
    });
    $.getJSON(glp+"?dates", function(result) {
        displayDates(result);
    });
}

function setLoading() {
    $('#list-1').empty();
	if (selected == true)
        displayBack();
    $('#list-1').append("<li style=\"text-align:center;\"><i class=\"fa fa-refresh fa-spin fa-3x\"></i></li>");
}

function displaySongs(result) {
    var htmlContent ="";
    $.each(result, function(date, playlist) {
        $.each(playlist, function(hour, songs){
            $.each(songs, function(songId, song) {
                var time = new Date(song.start_time);
                if(isNaN(time)){
                    time = new Date(song.start_time.replace(' ', 'T'));
                }
                var start_time = ("0" + time.getHours()).slice(-2) + ":" + ("0" + time.getMinutes()).slice(-2);
                var image = song.video_id;
                var title = song.artist+" - "+song.song;
                htmlContent +=
                    "<li>" +
                    "<div class=\"row\">" +
                    "<div class=\"col-md-2\">" +
                    "<p class=\"time-start\">" + start_time + "</p>" +
                    "</div>" +
                    "<div class=\"col-md-2\">" +
                    "<a href=\"https://www.youtube.com/watch?v=" + image + "\" target=\"_blank\">" +
                    "<img src=\"http://img.youtube.com/vi/" + image + "/0.jpg\" class=\"img-responsive\">" +
                    "</a>" +
                    "<div class=\"border-img\"></div>" +
                    "</div>" +
                    "<div class=\"col-md-8\">" +
                    "<p class=\"title\">" + title + "</p>" +
                    "</div>" +
                    "</div>" +
                    "</li>";
            });
        });
    });
    $('#list-1').empty();
    if (selected == true)
        displayBack();
    $('#list-1').append(htmlContent);
}

function displayDates(resultDates) {
    $('#playlist_dates').empty();
    var htmlDate = "<option>"+selDtateText+"</option>";
    $.each(resultDates, function(key, date) {
        htmlDate += "<option value="+date+">"+date+"</option>"
    });

    $('#playlist_dates').append(htmlDate);
}

function displayHours(resultHours) {
    $('#playlist_hours').empty();
    var htmlHour = "<option>"+selHoutText+"</option>";
    $.each(resultHours, function(key, hours) {
        htmlHour += "<option value="+hours+">"+hours+"</option>";
    });

    $('#playlist_hours').append(htmlHour);
}

function displayBack() {
    var back = "";
    back +=
        "<li class=\"back-to-home\">" +
        "<a href=\"#\" onclick=\"getLastSongsAndDatesAjax(); return false;\">Rodyti 10 paskutines grotas dainas</a>" +
        "</li>"
    $('#list-1').append(back);
}

$(document).ready(getLastSongsAndDatesAjax);