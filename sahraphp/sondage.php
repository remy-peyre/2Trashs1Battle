    <?php

    if(isset($_POST['form_submit_survey'])){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=trash;', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $test_ip = "SELECT * FROM list_ip WHERE ip = '$ip' ";
        $reponse_ip = $bdd->prepare($test_ip);
        $reponse_ip->execute();
        $reponse_ip =  $reponse_ip->fetch();
        if($reponse_ip){
            echo "you already voted ! ";
        }
        else{
        $q ="INSERT INTO list_ip (ip) VALUES ('$ip')" ;
        $reponse = $bdd->prepare($q);
        $reponse->execute();
        echo $ip;
        echo $_POST['choice_survey'];
        }
    }
else{
    //
}

?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <form name="form_survey" action="sondage.php" method="post">
      <input type="radio" name="choice_survey" value="caca">caca
      <input type="radio" name="choice_survey" value="pipi">pipi
      <br>
      <button type="submit" name="form_submit_survey">valider</button>
    </form>
  </body>

  </html>
