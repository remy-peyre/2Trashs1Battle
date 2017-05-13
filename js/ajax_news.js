$(document).ready(function () {
    $("#form_news").click(function () {
        var email = $("#email_form_news").val();

        var dataString = 'destination=' + email  ;
        if (email == '') {
            alert("Fill all input");
        }
        else {
            $.ajax({
                type: "POST",
                url: "newsletter.php",
                data: dataString,
                cache: false,
                success: function (result) {
                    if(result=="Mailer Error: "){
                        $("#result_news").css("display", "-webkit-box");
                        $( "#result_news" ).append('../css/trashclose.png');
                    }
                    else{
                        $("#result_news").css("display", "-webkit-box");
                        $( "#result_news" ).append('<p style="color:white;">Vous êtes bien inscrits ! </p><img style="width:80px;" src="../css/trashclose.png">');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("error"); 
                }   
            });
        }
        return false;
    });
});