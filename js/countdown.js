window.onload = function(){
    var end = new Date('06/07/2017 00:00 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = ' Fin de la battle ! ';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' jours  ';
        document.getElementById('countdown').innerHTML += hours + ' heures ';
        document.getElementById('countdown').innerHTML += minutes + ' minutes ';
        document.getElementById('countdown').innerHTML += seconds + ' secondes';
    }

    timer = setInterval(showRemaining, 1000);
}