window.onload = function () {
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

        var countdown = document.getElementById("countdown");
        var span_one = document.getElementById("span_time_one");
        var span_two = document.getElementById("span_time_one");

        $('#span_time_one').css('display', 'block');
        $('#span_time_two').css('display', 'block');
        document.getElementById('countdown').innerHTML = days + ' :  ';
        document.getElementById('countdown').innerHTML += hours + ' : ';
        document.getElementById('countdown').innerHTML += minutes + ' : ';
        document.getElementById('countdown').innerHTML += seconds;
    }

    timer = setInterval(showRemaining, 1000);

    ws = new WebSocket("ws://localhost:5678");
    //ws.send("hello");
        ws.onmessage = function (event) {
            console.log(event.data);
        };


}