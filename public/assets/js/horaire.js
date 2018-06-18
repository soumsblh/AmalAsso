var _i=true;
function clock() {
    var now = new Date();
hours = now.getHours();
minutes = now.getMinutes();
secondes = now.getSeconds();
if (minutes < 10) {
    time = hours +'<span id="points">:</span>'+ "0" + minutes;
} else {
    time = hours +'<span id="points">:</span>'+ minutes;
}
document.getElementById("date").innerHTML = now.toDateString();
document.getElementById("time").innerHTML = time;
document.getElementById('points').style.visibility=(_i=!_i)?'visible':'hidden';

setTimeout(clock, 1000);
}
clock();
