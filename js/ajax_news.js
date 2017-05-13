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
                            aler("ok");
                    }
                    else{
                        $( "#result_news" ).append('');
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