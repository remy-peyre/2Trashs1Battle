$(document).ready(function () {
    $("#form_submit_company").submit(function () {
        var name = $("#name_company").val();
        var activity = $("#activity_company").val();
        var adress = $("#adress_company").val();
        var email = $("#email_company").val();
        var subject = $("#subject_company").val();
        var body_mail = $("#body_company").val();

        var dataString = 'input_form_contact_one=' + name + '&input_form_contact_two=' + activity + '&input_form_contact_three=' + adress + '&input_form_contact_four=' + email +
            '&input_form_contact_five=' + subject + '&input_form_contact_six=' + body_mail;
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email == '' || name == '' || activity == '' || adress == '' || subject == '' || body_mail == '') {
            $("#result_form_contact").empty();
            $("#result_form_contact").css({
                        'margin-left': 'auto',
                        'text-align': 'center',
                        'width': '248px',
                        'display': '-webkit-box',
                        'margin-right': 'auto'
            });
            $("#result_form_contact").append('<p style="color:black;">Tous les champs ne sont pas remplis ! :( </p><img style="width:65px;" src="../css/sad.png">');
        }

        else if (re.test(email) != true) {
            $("#result_form_contact").empty();
            $("#result_form_contact").css({
                        'margin-left': 'auto',
                        'text-align': 'center',
                        'width': '248px',
                        'display': '-webkit-box',
                        'margin-right': 'auto'
            });
            $("#result_form_contact").append('<p style="color:black;">Email non valide :( ! </p><img style="width:65px;" src="../css/sad.png">');
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: dataString,
                cache: false,
                success: function (result) {
                    if (result == "Mailer Error: ") {
                        $("#result_form_contact").empty();
                        $("#result_form_contact").css({
                                    'margin-left': 'auto',
                                    'text-align': 'center',
                                    'width': '248px',
                                    'display': '-webkit-box',
                                    'margin-right': 'auto'
                        });
                        $("#result_form_contact").append('<p style="color:black;">Erreur lors de l\'envoie du mail :( </p><img style="width:65px;" src="../css/sad.png">');
                    }
                    else {
                        $("#result_form_contact").empty();
                        $("#result_form_contact").css({
                                    'margin-left': 'auto',
                                    'text-align': 'center',
                                    'width': '248px',
                                    'display': '-webkit-box',
                                    'margin-right': 'auto'
                        });
                        $("#result_form_contact").append('<p style="color:black;">Message bien envoyé  :) ! </p><img style="width:80px;" src="../css/trashclose.png">');
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                        $( "#result_form_contact" ).empty();
                        $("#result_form_contact").css("display", "none");
                        $("#result_form_contact").css("display", "-webkit-box");
                        $("#result_form_contact").css("width", "293px");
                        $( "#result_form_contact" ).append('<p style="color:black;">Erreur lors de l\'envoie du mail :( </p><img style="width:65px;" src="../css/sad.png">');
                }
            });
        }
        return false;
    });
});