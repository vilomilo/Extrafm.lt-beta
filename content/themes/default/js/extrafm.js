function InfoRadioProgram() {
    $('.radio-info').click(function(){
        $(this).parent().children().toggle();  //swaps the display:none between the two spans
        $(this).parent().parent().find('.info').slideToggle();  //swap the display of the main content with slide action
        return false;
    });

    $("#cat-show-1").addClass('active');

    $('#ExtraFMCarousel').carousel({
        interval: 5000
    });

    $('#ExtraFMCarouselMobile').carousel({
        interval: 5000
    });

    mediaTekaCats();

    setHomeCurrentPage();
}

function mediaTekaCats() {
    var catButtonsAll = document.getElementsByClassName("cat-change-btn");
    var catSections = document.getElementsByClassName("cat-change");
    for (var i = 0, len = catButtonsAll.length; i < len; i++) {
        var btn = catButtonsAll[i];
        $(btn).click({catSections: catSections, catButtonsAll: catButtonsAll, btn: btn}, showCategory);
    }
    $(catButtonsAll[0]).click();
}

function showCategory(event){
    var catButtonsAll = event.data.catButtonsAll;
    var catSections = event.data.catSections;
    var btn = event.data.btn;
    clearAll(catButtonsAll, catSections);
    
    $(btn).addClass('active');
    var sectionSel = document.getElementById(btn.innerHTML.split(' ').join('_'));
    $(sectionSel).show();
}

function clearAll(buttonsAll, catSections){
    for (var j = 0; j < buttonsAll.length; j++) {
        $(buttonsAll[j]).removeClass('active');
        $(catSections[j]).hide();
    }
}

function setHomeCurrentPage() {
    $('body.home').each(function() {
       $('#home').addClass('current-menu-item');
    });
}

$(document).ready(InfoRadioProgram);