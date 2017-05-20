window.onload = function () {
    var display_next_battle = document.getElementById("display_next_battle");
    var display_old_battle = document.getElementById("display_old_battle");
    var display_vote = document.getElementById("display_vote");
    var display_section_next_battle = document.getElementById("display_section_next_battle");
    var display_section_old_battle = document.getElementById("display_section_old_battle");
    var display_section_vote = document.getElementById("display_section_vote");

    display_next_battle.onclick = function () {
        this.className = "center_categories_next-battle color_cate_next_battle";
        display_section_next_battle.className = "bounce";
        display_old_battle.classList.remove("color_cate_next_battle");
        display_old_battle.className = "center_categories_next-battle";
        display_vote.className = "center_categories_next-battle"
        display_vote.classList.remove("color_cate_next_battle");
        display_section_next_battle.style.display = "block";
        display_section_old_battle.style.display = "none";
        display_section_vote.style.display = "none";
    }

    display_old_battle.onclick = function () {
        this.className = "center_categories_next-battle color_cate_next_battle";
        display_section_old_battle.className = "bounce"
        display_next_battle.classList.remove("color_cate_next_battle");
        display_vote.classList.remove("color_cate_next_battle");
        display_section_old_battle.style.display = "block";
        display_section_next_battle.style.display = "none";
        display_section_vote.style.display = "none";
    }

    display_vote.onclick = function () {
        this.className = "center_categories_next-battle color_cate_next_battle";
        display_section_vote.className = "bounce";
        display_next_battle.classList.remove("color_cate_next_battle");
        display_old_battle.classList.remove("color_cate_next_battle");
        display_section_vote.style.display = "flex";
        display_section_next_battle.style.display = "none";
        display_section_old_battle.style.display = "none";
    }

    var end = new Date('06/27/2017 00:00 AM');

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

        document.getElementById('countdown').innerHTML = days + ' :  ';
        document.getElementById('countdown').innerHTML += hours + ' : ';
        document.getElementById('countdown').innerHTML += minutes + ' : ';
        document.getElementById('countdown').innerHTML += seconds;
    }

    timer = setInterval(showRemaining, 1000);

}
