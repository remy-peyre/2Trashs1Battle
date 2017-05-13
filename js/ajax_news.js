$(document).ready(function () {
    $("#form_news").click(function () {
        var email = $("#email").val();

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
                            $( "#content_container" ).append( '<p class="error"><span>Username already exist</span></p>');
                    }
                    else{
                        window.location.replace("?action=login");
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