var triggerpause=0;
var filename="";
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};
var timeoutid;

function isMobile(){
    return navigator.userAgent.match(/(iPhone|iPod|iPad|blackberry|android|Kindle|htc|lg|midp|mmp|mobile|nokia|opera mini|palm|pocket|psp|sgh|smartphone|symbian|treo mini|Playstation Portable|SonyEricsson|Samsung|MobileExplorer|PalmSource|Benq|Windows Phone|Windows Mobile|IEMobile|Windows CE|Nintendo Wii)/i);
}

function set_links_for_ajax(){

jQuery("#mainNavBar a").slice(1,3).on("click",function() {
var ajaxurl=jQuery(this).attr('href');

var request = jQuery.ajax({
  url: ajaxurl,
  method: "GET",
  dataType: "html"
});
 
request.done(function( html ) {
        html = jQuery(html).find('#main');
       jQuery('#ajaxviewcontent').html(html);
initaudio();
initvideo();
hideauthor();
		// IVW
		cpcodesplit=location.href.replace(/^.*\/\/[^\/]+/, '').split("/").slice(1,3);
		cpcode=cpcodesplit[0];
		if (cpcodesplit[1]!= undefined) { cpcode=cpcode+"/"+cpcodesplit[1]; }
		sendivw(cpcode);

});

   history.pushState({}, '', jQuery(this).attr("href"));
jQuery('#ajaxview').fadeIn();
jQuery('html').addClass('fixbackground');
    return false;
  });

// Artikel aus dem Masonry
  jQuery("#main").on("click",".article a",function() {
var ajaxurl=jQuery(this).attr('href');

var request = jQuery.ajax({
  url: ajaxurl,
  method: "GET",
  dataType: "html"
});
 
request.done(function( html ) {
        html = jQuery(html).find('#main');
       jQuery('#ajaxviewcontent').html(html);
initaudio();
initvideo();
hideauthor();
get_overlay_ads();
 document.title = jQuery('#page-title').text() +" | EXTRA FM";
ga('send', 'pageview', location.pathname);
		// IVW
		cpcodesplit=location.href.replace(/^.*\/\/[^\/]+/, '').split("/").slice(1,3);
		cpcode=cpcodesplit[0];
		if (cpcodesplit[1]!= undefined) { cpcode=cpcode+"/"+cpcodesplit[1]; }
		sendivw(cpcode);
});

   history.pushState({}, '', jQuery(this).attr("href"));
  
jQuery('#ajaxview').fadeIn();
jQuery('html').addClass('fixbackground');
    return false;
  });

}


function startseitenview() {

jQuery('.pager__item a').on( "click", function() {

  var cp=location.href.replace(/^.*\/\/[^\/]+/, '');
cpcodesplit=location.href.replace(/^.*\/\/[^\/]+/, '').split("/").slice(1,3);
		cp=cpcodesplit[0];
		if (cpcodesplit[1]!= undefined) { cp=cp+"/"+cpcodesplit[1]; }
cp=cp+"/show-more-button";
ga('send', {  hitType: 'event',  eventCategory: 'website',  eventAction: 'interaction',  eventLabel: 'show-more-button'});
sendivw(cp);  
//setTimeout(function(){   googletag.pubads().refresh();   }, 1000);

});

jQuery('.newarticle').css("opacity","0");

jQuery( document ).ready(function() {
jQuery( ".articletext" ).each(function( index ) {
  jQuery( this ).html(jQuery(this).html().replace('|','<br>'));
});
var $grid;

if (jQuery('.view-content:last .article').length>0) {
	
		$elem=jQuery('.view-content:last .article');
		jQuery('.view-content:first .article:first').before($elem);
		var i=2;
		$promoelem=jQuery(".promotion").parent();
		jQuery(".promotion").parent().remove();
		jQuery( $promoelem ).each(function( index ) {
  			
//console.log("Promo Nr "+index+" an Position "+i);

               jQuery('.article:nth('+i+')').before(jQuery(this));
  			i=i+3;
		});
		
		
		
		
}
	
	

if (jQuery($grid).length>0) {
		$elem=jQuery('.newarticle');

jQuery('#main').imagesLoaded(function() {
   $grid.append( $elem ).masonry( 'appended', $elem );
});
	
  	
		
jQuery('.newarticle').removeClass('newarticle');
	
	
	} else {

		$grid = jQuery('.view-content:first').imagesLoaded( function() {
		if (location.pathname=="/") {jQuery('.article:first').remove(); }
	
		// Werbekachel
		var screenwidth = jQuery( document ).width();
	
		if (screenwidth>720) {
			if (jQuery('.werbung').length<1) {jQuery('.article:nth(6)').after( '' +
				'<div class="article spacearticle" style="height:265px;padding: 5px;"><span class="werbung"></span></div>' ); console.log("lade Werbekachel"); }
			
			
		}
		
			$grid.masonry({	itemSelector: '.article',	});
	});

	
	setTimeout(function(){ 
jQuery('.view-content:first').animate({opacity: "1"}, 1000);
 }, 1500);
	
}
jQuery('.newarticle').removeClass('newarticle');


});
 
 setTimeout(function(){ 
jQuery('.article').animate({opacity: "1"}, 500);
/*if (jQuery('#webradio').hasClass('show')) {jQuery('.pager').css("padding-bottom","100px");}*/
 }, 500);






}



function localstoragesupport(){
    var test = 'test';
    try {
        localStorage.setItem(test, test);
        localStorage.removeItem(test);
        return true;
    } catch(e) {
        return false;
    }
}


// Set und Get Location
function setlocation(newlocation) {
	if (localstoragesupport()) {
		localStorage.setItem("location",newlocation);
	} else {
		document.cookie = "location="+newlocation;
	}
	
}


function getlocation() {
	if (localstoragesupport()) {
		currentlocation = localStorage.getItem("location");
	} else {
		currentlocation = getCookie("location");
	}


return currentlocation;
}


function setparameter(parameter,value) {

if (localstoragesupport()) {
		localStorage.setItem(parameter,value);
	} else {
		document.cookie = parameter+"="+value;
	}


}

function getparameter(parameter) {

if (localstoragesupport()) {
		value = localStorage.getItem(parameter);
	} else {
		value = getCookie(parameter);
	}

return value;
} 




window.onpopstate = function(e) {
   if (jQuery('#ajaxviewcontent:visible').length>0) {
	jQuery('html').removeClass('fixbackground');
	jQuery('#ajaxview,#ajaxviewcontent2').fadeOut();
	jQuery('body').css('overflow','initial');
	jQuery('#ajaxviewcontent').html('');
   }
};


jQuery(window).resize(function() {
    clearTimeout(timeoutid);
    timeoutid = setTimeout(doneResizing, 500);
    
    
});

function doneResizing(){
setTimeout(function(){ jQuery('.view-content:first').masonry('layout');}, 1000);
 
  
}

function closearticle() {
//if (jQuery('#ajaxviewcontent').html().length>10) { history.back(1);}

	
	if (jQuery('#ajaxviewcontent:visible').length>0) {
	jQuery('html').removeClass('fixbackground');
	jQuery('#ajaxview,#ajaxviewcontent2').fadeOut();
	jQuery('body').css('overflow','initial');
	jQuery('#ajaxviewcontent').html('');
	window.history.back();
	document.title="EXTRA FM ";
	}
	
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}



// Aktuelles Programm
function get_current_programm() {


var timeslot="Unser Programm";
var filename="";
	jQuery.ajaxSetup({
		// Disable caching of AJAX responses
		
		cache: false
	});


 // Gibt es einen aktuellen Plan oder muss der Defaultplan geladen werden
	
	jQuery.ajax({
	type: 'HEAD',
	url: filename,
	success: function(msg){
	
	},
	error: function(){
	

	}
	});

	


	
	var modtelvalue="";
   var modmailvalue="";
	var webradiolink="http://extrafm.lt/live";
	
	
	 switch(getlocation()) {
	
	  
}
jQuery('.livestreamstart a').attr("href",webradiolink); 
jQuery('.modtelvalue').html(modtelvalue);
jQuery('.modmailvalue').html("<a href='mailto:"+modmailvalue+"'>"+modmailvalue+"</a>");



function load_programm_file(filename) {
jQuery.post( filename, function( data ) {

	//console.log(filename);
	data = data.replace(/&amp;/g, '&'); 
	dt = new Date();
	 /*	var dt = new Date("August 15, 2016 05:15:00");*/
	 if(dt.getHours()>=5) {
	  	ch=(((dt.getDay()-1))+(dt.getHours()-5)*7);
	  } else {
	  	ch=(((dt.getDay()-1))+(dt.getHours()+19)*7);
	  }
	  
	  /*
	  console.log('getDay: '+(dt.getDay()-1));
	  console.log('getHours: '+(dt.getHours()-5));
	  console.log('ch: '+ch)
	  */
	  
	  tbl=data.split(",");
	  
	  timeslot=tbl[ch];
	 	  
	  current_hour = dt.getHours();
	  min_hour = current_hour;
	  max_hour = current_hour;
	
	  n=ch;
	  current = tbl[ch].trim();
	  check = tbl[ch+7];

	
	while (current==tbl[n].trim()) {
  		max_hour++;
  		n=n+7;
  		if (n>167) { break; }
  	}


	n=ch;  
	n=n-7;
	
	max_hour%=24;
	
	
	if(n>0) {
		
		while (current==tbl[n].trim() ) {
	
		
  	  		min_hour--;
  			n=n-7;
  			if (n<0) { break; }
		
		}  	
	}
	
	  
	 
	 
	 if ( tbl[ch].trim().split("|")[0].indexOf("+") > -1) {
	 jQuery('.modname').text(tbl[ch].trim().split("|")[0].split("+")[0].trim());
	 jQuery('.modsubname').text(tbl[ch].trim().split("|")[0].split("+")[1].trim());
	 } else {
	  jQuery('.modname').text(tbl[ch].trim().split("|")[0]);
	 }
	 
	 if (min_hour <= "9")
	{
	min_hour = "0"+min_hour;
	}
	
	 if (max_hour <= "9")
	{
	max_hour = "0"+max_hour;
	}
	
	
	 jQuery('.modtime').text(min_hour+":00 - "+max_hour+":00 Uhr");
	 jQuery('.modpicwrapper').hide();
	 if (tbl[ch].split("|")[3].length>1) { 
	 	jQuery('.modpicwrapper').css("background-image","url('"+tbl[ch].split("|")[3]+"')").fadeIn();
	 } else {
	 	jQuery('.modpicwrapper').css("background-image","url('http://energy.de/sites/default/files/National/Energy_Logo_Programm_3.jpg')").fadeIn();
	 }
	 
	 if ( tbl[ch].trim().split("|")[4].length>5) {jQuery('.modtelvalue').text(tbl[ch].trim().split("|")[4]); } 
	 if (tbl[ch].trim().split("|")[5].length>5) { jQuery('.modmailvalue').html("<a href='mailto:"+tbl[ch].trim().split("|")[5]+"'>"+tbl[ch].trim().split("|")[5]+"</a>"); } 
	 
	 jQuery('.modpiclink').attr("href",tbl[ch].split("|")[2]) 
	  
	
	  
});

}

}





//localstoragesupport
function localstoragesupported() {
	if(typeof(Storage) !== "undefined") {
		
	console.log("localstorrage supported");
	} else {
		
	console.log("cookie needed");
	}
}


//Change Location
function locationChange(newlocation) {
	
	
	
	jQuery('.menuarea').hide();
	
	jQuery('.menuarea.'+newlocation.toUpperCase()).show();
	
	if (jQuery('#citymenuname').text().toLowerCase()!="national") {
	
		setlocation(newlocation.replace(/Ã¼/g,"ue"));
		
	
	}
	
	//console.log("Standort geÃ¤ndert auf "+newlocation);
	jQuery('#citymenuname').text(getlocation().replace(/ue/g,"Ã¼"));	
	//City radio button Ã¤ndern
	jQuery('.city:contains("'+jQuery('#citymenuname').text()+'")').children('input').prop( "checked", true );
	jQuery('.desktop-logo a').attr("href","/"+getlocation());
	
  
}


// Swipen 

function swipeHandlerleft( event ){
   jQuery('.sb-open-right').click()
  }
  
function loadcopyright() {
  jQuery('.articlecopyright').html("@ "+jQuery('.bxslider .gallery:visible').attr("data-copyright")+" - "+jQuery('.bxslider .gallery:visible').attr("data-description"));
}
  
function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
}

function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}



function openarticle(id) {
	var stateObj = { foo: "bar" };
	history.pushState(stateObj, "page 2", "/");
	
	var idpage=id;
	
	if (0) {
    	window.location.href = "details.php?id="+idpage;
    } else {
    	
		//jQuery.ajax({url: "artikelinhalt.php?uid="+idpage, success: function(result){
			
			jQuery("#ajaxviewcontent").html(" ");
			
			jQuery("#ajaxviewcontent").load("artikelinhalt.php?ModPagespeed=off&no_cache=1&uid="+idpage , function() {
 				initgallery();
			});
			
			
			jQuery('#ajaxviewcontent')
			
			jQuery('#ajaxview').fadeIn();
			ga('create', 'UA-3166431-26', 'auto');
  			ga('send', 'pageview', location.pathname);
			jQuery('html').addClass('fixbackground');
			
    
    }
   
}


function initgallery() {

  
/*
  
    jQuery('.venobox').venobox({
        
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

	jQuery('.venobox:first').show();
*/	

jQuery('.articlecopyright').html("@ "+jQuery('.gallery:visible').attr("data-copyright")+" - "+jQuery('.gallery:visible').attr("data-description"));

}





function zoom(level) {

	/*jQuery('.article').css('width','calc(100%/'+level+' - 2*3px)')*/
	$grid.masonry('layout');
}

function cookies_accepted() {
 jQuery('#attention_cookies').fadeOut();
 setparameter("cookies","accepted");
}


function initajaxview() {

jQuery("#ajaxviewcontent").on("click","#ajaxviewcontent a",function() {
	var ajaxurl=jQuery(this).attr('href');

	var request = jQuery.ajax({
	  url: ajaxurl,
	  method: "GET",
	  dataType: "html"
	});
 
	request.done(function( html ) {
		html = jQuery(html).find('#main');
		jQuery('#ajaxviewcontent').html(html);
		initaudio();
		initvideo();
		hideauthor();
	});

	   history.pushState({}, '', jQuery(this).attr("href"));
		jQuery('#ajaxview').fadeIn();
		Query('html').addClass('fixbackground');
		return false;
});



}





function initaudio() {

if (jQuery('a:contains(".mp3")').length>0) {
		console.log("lade Audioplayer....");
		jQuery('.layoutmanager a:contains(".mp3"):first').parent().before('<link href="http://energy.de/sites/all/themes/zen_energy/css/audioplayer.css" rel="stylesheet"><script src="/sites/all/libraries/audiojs/audiojs/audio.min.js"></script><script src="/sites/all/themes/zen_energy/js/audioplayer.js"></script>');
	}
jQuery('#webradio .audiojs').hide();	
}

function initvideo() {
if (jQuery('a:contains(".mp4")').length>0) {
		console.log("lade Videoplayer....");
		jQuery('.layoutmanager a:contains(".mp4"):first').parent().before('<link href="http://energy.de/sites/all/themes/zen_energy/css/audioplayer.css" rel="stylesheet"><script src="/sites/all/themes/zen_energy/js/videoplayer.js"></script>');
	}
	
	

}

function hideauthor() {
if (jQuery(".field-name-field-author .field-items:contains('--')").length>0) {
		jQuery('.field-name-field-author').hide();
	}
}

jQuery( document ).ready(function() {


if (getlocation()==null || getlocation()=="") {
	
	jQuery('#citychoice').popup('show');
	
} else {
	locationChange(getlocation());
}


	if (jQuery('a:contains(".mp3")').length>0) {
		console.log("lade Audioplayer....");
		jQuery('.layoutmanager a:contains(".mp3"):first').parent().before('<link href="http://energy.de/sites/all/themes/zen_energy/css/audioplayer.css" rel="stylesheet"><script src="/sites/all/libraries/audiojs/audiojs/audio.min.js"></script><script src="/sites/all/themes/zen_energy/js/audioplayer.js"></script>');
		
		setTimeout(function(){ jQuery('#webradio .audiojs').hide(); }, 250); 
	
	}

	if (jQuery('a:contains(".mp4")').length>0) {
		console.log("lade Videoplayer....");
		jQuery('.layoutmanager a:contains(".mp4"):first').parent().before('<link href="http://energy.de/sites/all/themes/zen_energy/css/audioplayer.css" rel="stylesheet"><script src="/sites/all/themes/zen_energy/js/videoplayer.js"></script>');
	}

	if (jQuery(".field-name-field-author .field-items:contains('--')").length>0) {
		jQuery('.field-name-field-author').hide();
	}


	








jQuery.smartbanner({
  title: "EXTRA FM aplikacija", // What the title of the app should be in the banner (defaults to <title>)
  author: "EXTRA FM", // What the author of the app should be in the banner (defaults to <meta name="author"> or hostname)
  price: 'NEMOKAMAI', // Price of the app
  appStoreLanguage: 'en', // Language code for App Store
  inAppStore: '', // Text of price for iOS
  inGooglePlay: '', // Text of price for Android
  inAmazonAppStore: 'In the Amazon Appstore',
  inWindowsStore: 'In the Windows Store', // Text of price for Windows
  GooglePlayParams: null, // Aditional parameters for the market
  icon: "/sites/default/files/logo.jpg", // The URL of the icon (defaults to <meta name="apple-touch-icon">)
  iconGloss: null, // Force gloss effect for iOS even for precomposed
  url: null, // The URL for the button. Keep null if you want the button to link to the app store.
  button: 'pro', // Text for the install button
  scale: 'auto', // Scale based on viewport size (set to 1 to disable)
  speedIn: 300, // Show animation speed of the banner
  speedOut: 400, // Close animation speed of the banner
  daysHidden: 15, // Duration to hide the banner after being closed (0 = always show banner)
  daysReminder: 90, // Duration to hide the banner after "VIEW" is clicked *separate from when the close button is clicked* (0 = always show banner)
  force: null, // Choose 'ios', 'android' or 'windows'. Don't do a browser check, just always show this banner
  hideOnInstall: true, // Hide the banner after "VIEW" is clicked.
  layer: true, // Display as overlay layer or slide down the page
  iOSUniversalApp: true, // If the iOS App is a universal app for both iPad and iPhone, display Smart Banner to iPad users, too.      
  appendToSelector: 'body', //Append the banner to a specific selector
  onInstall: function() {
    // alert('Click install');
  },
  onClose: function() {
    // alert('Click close');
  }
})

if (getparameter("cookies")!="accepted") {setTimeout(function(){jQuery('#contentwrapper').before("" +
	"<div id='attention_cookies' style='display:none;' class='attention'>Ei! Taip, ir vėl nuodobi žinutė apie sausainiukus… Nepyk!Taigi, trumpai šnekant, mes naudojame sausainiukus, kad pagerintumėm jūsų patirtį. Jei paspausite sutinku, nebeerzinsime jūsų su šia žinute, nes žinosime, kad jūs sutinkate su mūsų sausainiukų politika. Tokiu būdų, kaskart apsilankydami mūsų puslapyje iš mūsų pusės gausite geresnias paslaugas. Ačiū! <button onClick='cookies_accepted();' class='cookiebutton'>Sutinku</button> <a href='node/2600'><button class='cookiebutton'>Daugiau informacijos</button></a><br/> </div>");jQuery('.attention').fadeIn(); }, 3000);;}

jQuery(".promotion").before('<p class="adtext">ANZEIGE</p>');


jQuery('#programmbox').bind("DOMSubtreeModified",function(){
  jQuery(document).scrollTop(0);
});

jQuery('#city_'+getlocation()).prop("checked",true)

//set background  image and headerarea 

jQuery('body').css("background-image","url("+jQuery('.field-name-field-hintergrundbild').text()+")");
jQuery('.backgroundimage').hide();



//Standort

jQuery('.choicecontent input').click(function() {

var firstvisit=0;  // Wechsel zur Startseite nur, wenn schon mal ein Standort gesetzt wurde
   if (getlocation()==null) {firstvisit=1; }
	
  	try {
			setlocation(jQuery(this).val().replace(/Ã¼/g,"ue"));
			}
		catch(err) {
			document.cookie = "location="+jQuery(this).val().replace(/Ã¼/g,"ue");
		}
  
  	if (firstvisit==0) {
    	 window.location.href="/"+getlocation().toLowerCase().replace(/Ã¼/g,"ue");
    	 
 	} else {
 		locationChange(getlocation());
 		jQuery('.citychoice_close').trigger('click');
 		location.reload(); 	 
 		
 	}
  
   
  
});


//Menu vorbereiten
jQuery('li.menu__item.is-expanded.expanded .menu').hide();
jQuery('li.menu__item.is-expanded.expanded>a').removeAttr("href");
jQuery('li.menu__item.is-expanded.expanded>a').append('<span class="collapse-closed"></span>');

jQuery('li.menu__item.is-expanded.expanded').click(function(e) {

  if (jQuery('.menu', this).is(":visible")) { 
		jQuery('.collapse-open').removeClass('collapse-open');
		jQuery(this).find('span').addClass('collapse-closed');
		jQuery('.menu', this).slideUp();
	
	
	} else {
		
		jQuery('.collapse-open').addClass('collapse-closed').removeClass('collapse-open');
		jQuery(this).find('span').addClass('collapse-open').removeClass('collapse-closed');
			
		jQuery('li.menu__item.is-expanded.expanded .menu').slideUp();
		
		jQuery('.menu', this).slideDown();
		
		
	
	e.preventDefault();
	
	}
});




jQuery('.menuarea li .is-leaf').addClass("seclevelitem");

//seachrbar

jQuery( ".fa-search" ).hover(
  function() {
    jQuery( ".searchbar" ).fadeIn();
    jQuery( ".searchbar input" ).focus();
  }, function() {
 
	jQuery( ".searchbar" ).fadeOut();
	jQuery( ".searchbar input" ).val("");
  }
);




	
	

  
  
	
 });
 			

 




/****************** MOBILE MENU *****************/

(function(window) {

  'use strict';

  /**
   * Extend Object helper function.
   */
  function extend(a, b) {
    for(var key in b) { 
      if(b.hasOwnProperty(key)) {
        a[key] = b[key];
      }
    }
    return a;
  }

  /**
   * Each helper function.
   */
  function each(collection, callback) {
    for (var i = 0; i < collection.length; i++) {
      var item = collection[i];
      callback(item);
    }
  }

  /**
   * Menu Constructor.
   */
  function Menu(options) {
    this.options = extend({}, this.options);
    extend(this.options, options);
    this._init();
  }

  /**
   * Menu Options.
   */
  Menu.prototype.options = {
    wrapper: '#contentwrapper',          // The content wrapper
    type: 'slide-right',             // The menu type
    menuOpenerClass: '.c-button',   // The menu opener class names (i.e. the buttons)
    maskId: '#c-mask'               // The ID of the mask
  };

  /**
   * Initialise Menu.
   */
  Menu.prototype._init = function() {
    this.body = document.body;
    this.wrapper = document.querySelector(this.options.wrapper);
    this.mask = document.querySelector(this.options.maskId);
    this.menu = document.querySelector('#c-menu--' + this.options.type);
    this.closeBtn = this.menu.querySelector('.c-menu__close');
    this.menuOpeners = document.querySelectorAll(this.options.menuOpenerClass);
    this._initEvents();
  };

  /**
   * Initialise Menu Events.
   */
  Menu.prototype._initEvents = function() {
    // Event for clicks on the close button inside the menu.
    this.closeBtn.addEventListener('click', function(e) {
      e.preventDefault();
      this.close();
    }.bind(this));

    // Event for clicks on the mask.
    this.mask.addEventListener('click', function(e) {
      e.preventDefault();
      this.close();
    }.bind(this));
    
  };

  /**
   * Open Menu.
   */
  Menu.prototype.open = function() {
    this.body.classList.add('has-active-menu');
    this.wrapper.classList.add('has-' + this.options.type);
    this.menu.classList.add('is-active');
    this.mask.classList.add('is-active');
    this.disableMenuOpeners();
    jQuery( 'html' ).css( 'overflow','hidden');
     jQuery( 'body' ).css( 'overflow','hidden');
  };

  /**
   * Close Menu.
   */
  Menu.prototype.close = function() {
    this.body.classList.remove('has-active-menu');
    this.wrapper.classList.remove('has-' + this.options.type);
    this.menu.classList.remove('is-active');
    this.mask.classList.remove('is-active');
    this.enableMenuOpeners();
    jQuery( 'html' ).css( 'overflow','auto');
    jQuery( 'body' ).css( 'overflow','auto');
  };

  /**
   * Disable Menu Openers.
   */
  Menu.prototype.disableMenuOpeners = function() {
    each(this.menuOpeners, function(item) {
      item.disabled = true;
    });
  };

  /**
   * Enable Menu Openers.
   */
  Menu.prototype.enableMenuOpeners = function() {
    each(this.menuOpeners, function(item) {
      item.disabled = false;
    });
  };
  /**
   * Add to global namespace.
   */
  window.Menu = Menu;
})(window);
jQuery(".c-button").click(function(e) {
    e.preventDefault();
    return false;
});

