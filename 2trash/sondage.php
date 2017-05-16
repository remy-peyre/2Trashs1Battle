    <?php

    if(isset($_POST['choice_survey'])){
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
           echo "voted";
        }

        else{
        $q ="INSERT INTO list_ip (ip) VALUES ('$ip')" ;
        $reponse = $bdd->prepare($q);
        $reponse->execute();
        return true;
        }
    }
else{
    header("Location : next-battle.php");
}

?>