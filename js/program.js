var currentDayId = new Date().getDay();
var selectedDayId = currentDayId;

if(currentDayId == 0)
    currentDayId = 7;

function showCurrentDay() {
    showDay(currentDayId);
}

function showPreviousDay() {
    if(selectedDayId > 1){
        selectedDayId -= 1;
    } else {
        selectedDayId = 7;
    }
    showDay(selectedDayId);
}

function showNextDay() {
    if(selectedDayId < 7){
        selectedDayId += 1;
    } else {
        selectedDayId = 1;
    }
    showDay(selectedDayId);
}

function showDay(id){
    hideAll();
    $('#day_'+id).removeClass('hide');
}

function hideAll(){
    for(i = 1; i <= 7; i++){
        $('#day_'+i).addClass('hide');
    }
}

$(document).ready(showCurrentDay());
