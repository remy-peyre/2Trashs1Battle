$(document).ready(function () {
    $("#form_news").click(function () {
        var email = $("#email_form_news").val();

        var dataString = 'destination=' + email  ;
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email == '' || re.test(email) != true) {
            $( "#result_news" ).empty();
            $("#result_news").css("display", "none");
            $("#result_news").css("display", "-webkit-box");
            $("#result_news").css("width", "293px");
            $( "#result_news" ).append('<p style="color:white;">Erreur lors de l\'envoie du mail :( </p><img style="width:65px;" src="../css/sad.png">');
        }
        else {
            $.ajax({
                type: "POST",
                url: "newsletter.php",
                data: dataString,
                cache: false,
                success: function (result) {
                    if(result=="Mailer Error: "){
                        $( "#result_news" ).empty();
                        $("#result_news").css("display", "none");
                        $("#result_news").css("display", "-webkit-box");
                        $("#result_news").css("width", "293px");
                        $( "#result_news" ).append('<p style="color:white;">Erreur lors de l\'envoie du mail :( </p><img style="width:65px;" src="../css/sad.png">');
                    }
                    else{
                        $( "#result_news" ).empty();
                        $("#result_news").css("display", "none");
                        $("#result_news").css("display", "-webkit-box");
                        $( "#result_news" ).append('<p style="color:white;">Vous êtes bien inscrit :) ! </p><img style="width:80px;" src="../css/trashclose.png">');
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