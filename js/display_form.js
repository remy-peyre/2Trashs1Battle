window.onload = function(){
    var display_company = document.getElementById("display_company");
    var display_association = document.getElementById("display_association");
    var display_user = document.getElementById("display_user");
    var display_form_company = document.getElementById("display_form_company");
    var display_form_association = document.getElementById("display_form_association");
    var display_form_user = document.getElementById("display_form_user");

    display_user.onclick = function(){
        this.className = "color_title_form";
        display_company.classList.remove("color_title_form");
        display_association.classList.remove("color_title_form");
        display_form_user.classList.remove("none");
        display_form_company.className = "container none";
        display_form_association.className = "container none";
    }
    display_company.onclick = function(){
        this.className = "color_title_form";
        display_user.classList.remove("color_title_form");
        display_association.classList.remove("color_title_form");
        display_form_company.classList.remove("none");
        display_form_user.className = "container none";
        display_form_association.className = "container none";
    }
    display_association.onclick = function(){
        this.className = "color_title_form";
        display_user.classList.remove("color_title_form");
        display_company.classList.remove("color_title_form");
        display_form_association.classList.remove("none");
        display_form_user.className = "container none";
        display_form_company.className = "container none";
    }

    $('#img_anim').hover(function(){
        $(".wrp3").css("visibility","visible");
    }, function(){
        $(".wrp3").css("visibility","hidden");
    });
}