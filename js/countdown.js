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
    if (ws.readyState === ws.CONNECTING) {
        ws.onmessage = function (event) {
            var stats_one = document.getElementById("stats1");
            var stats_two = document.getElementById("stats2");
            var total = document.getElementById("gramme");
            var serpentard_width = document.getElementById("serpentard_width");
            var griffondor_width = document.getElementById("griffondor_width");
            stats_two.innerHTML = event.data;
            var pound_one = 0.30;
            var rate = Math.floor(((event.data - pound_one) / event.data) * 100);
            //console.log(rate);
            if (rate < 0 || isNaN(rate)) {
                stats_one.innerHTML = "100 %";
                stats_two.innerHTML = "0 %";
                total.innerHTML = pound_one + " g";
                serpentard_width.style.width = "0%";
                griffondor_width.style.width = "100%";
            }
            else {
                stats_two.innerHTML = rate + " %";
                serpentard_width.style.width = rate + "%";
                griffondor_width.style.width = 100 - rate + "%";
                stats_one.innerHTML = 100 - rate + "%";
                var total_pounds = (parseFloat(event.data + pound_one) * 100) / 100;
                if (total_pounds < 1.0) {
                    total.innerHTML = total_pounds + " g";
                }
                else {
                    total.innerHTML = total_pounds + " kg";
                }
            }
            //console.log(event.data);
        };
    }

    else if (ws.readyState === ws.CLOSED) {
        var stats_one = document.getElementById("stats1");
        var stats_two = document.getElementById("stats2");
        var total = document.getElementById("gramme");
        var serpentard_width = document.getElementById("serpentard_width");
        var griffondor_width = document.getElementById("griffondor_width");
        serpentard_width.style.width = "70%";
        griffondor_width.style.width = "30%";
    }

}