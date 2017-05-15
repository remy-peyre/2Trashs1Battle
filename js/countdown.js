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

        //var countdown = document.getElementById("countdown");
        //var span = document.getElementsByClassName("span_time");

        //$countdown.append(span);

        //$("#countdown").append(".span_time");
        //$(".span_time").prepend('<p id="countdown"></p>');


        document.getElementById('countdown').innerHTML = days + ' :  ';
        document.getElementById('countdown').innerHTML += hours + ' : ';
        document.getElementById('countdown').innerHTML += minutes + ' : ';
        document.getElementById('countdown').innerHTML += seconds ;
    }

    timer = setInterval(showRemaining, 1000);
}