$(document).ready(function () {
    $("#form_submit_survey").click(function () {
        var vote = $("#form_survey input[type='radio']:checked").val();
        var dataString = 'choice_survey=' + vote ;
    if (!$("input[name='choice_survey']:checked").val()) {
            $( "#result_survey" ).empty();
            $("#result_survey").css("display", "none");
            $("#result_survey").css("display", "block");
            $( "#result_survey" ).append('<p>Vous n\'avez pas voté :( </p><img style="width:65px;" src="../css/sad.png">');
            return false;
    }
        else {
            $.ajax({
                type: "POST",
                url: "sondage.php",
                data: dataString,
                cache: false,
                success: function (result) {
                    if(result== "    voted"){
                        console.log(result);
                        $( "#result_survey" ).empty();
                        $("#result_survey").css("display", "none");
                        $("#result_survey").css("display", "block");
                        $( "#result_survey" ).append('<p>Vous avez déjà voté :( </p><img style="width:65px;" src="../css/sad.png">');
                    }
                    else{
                        console.log(result);
                        $( "#result_survey" ).empty();
                        $("#result_survey").css("display", "none");
                        $("#result_survey").css("display", "block");
                        $( "#result_survey" ).append('<p>Merci ! Les résultats seront disponibles le 25 Mai ! </p><img style="width:145px;" src="../css/trashclose.png">');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        $( "#result_survey" ).empty();
                        $("#result_survey").css("display", "none");
                        $("#result_survey").css("display", "block");
                        $( "#result_survey" ).append('<p>Erreur lors du vote, réessayez  :( </p><img style="width:65px;" src="../css/sad.png">');
                }   
            });
        }
        return false;
    });
});