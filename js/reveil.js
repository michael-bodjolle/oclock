var timer = document.getElementById("timer");
var hours = document.getElementById("hours");
var minutes = document.getElementById("minutes");
var seconds = document.getElementById("seconds");
// var ampm = document.getElementById("ampm");
var startstop = document.getElementById("startstop");

var currentTime;
var alarmElement;
var activeAlarm = false;
var sound = new Audio("mjalarm.mp3");
sound.loop = true;

function showTime(){
    var now = new Date();
    currentTime = now.toLocaleTimeString();

if(currentTime === alarmElement){
    sound.play();

}
    timer.textContent = currentTime;
    setTimeout(showTime, 1000);
}
showTime();

function addMinSec(id){
    var select = id;
    var min = 59;
    

    for(i = 0; i<=min; i++){
        select.options[select.options.length] = new Option(i <10 ? "0"+ i : i);

    }

}
addMinSec(seconds);
addMinSec(minutes);

function addHour(id){
    var select = id;
    var min = 23;
  

    for(i = 0; i<=min; i++){
        select.options[select.options.length] = new Option(i <10 ? "0"+ i : i);

    }

}
addHour(hours);
addMinSec(seconds);
addMinSec(minutes);

startstop.onclick = function(){
    if(activeAlarm === false){
        hours.disabled = true;
        minutes.disabled = true;
        seconds.disabled = true;
        

        alarmElement = hours.value + ":" + minutes.value + ":" + seconds.value ;
        this.textContent = "arrêter l'alarme";
        activeAlarm = true;
        console.log(activeAlarm);
    }
    else{
        hours.disabled = false;
        minutes.disabled = false;
        seconds.disabled = false;
        

        sound.pause(); 
        this.textContent ="Set Alarm";
        activeAlarm = false;
    }
    
}

