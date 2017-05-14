window.onload = function(){
    var display_next_battle = document.getElementById("display_next_battle");
    var display_old_battle = document.getElementById("display_old_battle");
    var display_vote = document.getElementById("display_vote");
    var display_section_next_battle = document.getElementById("display_section_next_battle");
    var display_section_old_battle = document.getElementById("display_section_old_battle");
    var display_section_vote = document.getElementById("display_section_vote");

    display_next_battle.onclick = function(){
        this.className = "color_cate_next_battle";
        display_old_battle.classList.remove("color_cate_next_battle");
        display_vote.classList.remove("color_cate_next_battle");
        display_section_next_battle.style.display = "block";
        display_section_old_battle.style.display = "none";
        display_section_vote.style.display = "none";
    }

    display_old_battle.onclick = function(){
        this.className = "color_cate_next_battle";
        display_next_battle.classList.remove("color_cate_next_battle");
        display_vote.classList.remove("color_cate_next_battle");
        display_section_old_battle.style.display = "flex";
        display_section_next_battle.style.display = "none";
        display_section_vote.style.display = "none";
    }

    display_vote.onclick = function(){
        this.className = "color_cate_next_battle";
        display_next_battle.classList.remove("color_cate_next_battle");
        display_old_battle.classList.remove("color_cate_next_battle");
        display_section_vote.style.display = "flex";
        display_section_next_battle.style.display = "none";
        display_section_old_battle.style.display = "none";
    }
}
