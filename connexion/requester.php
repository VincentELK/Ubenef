<p><a href="connexion.html">&laquo; Retour au formulaire</a></p>

<?php


$DB_DSN = "mysql:host=localhost;dbname=clients";
$DB_USER = "root";
$DB_PASS = "";

$email = $_POST["email"];
$password = $_POST["password"];
$good=FALSE;
/*
Plan:
1:Verifier que le client a déja un compte
2:Dire que ca a marché ou pas
3:Envoyer les infos necessaires
*/
if($email=="" || $password=="")
    echo "L'un de vos champs est vide : recommencez";

else
{
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);
    

    try
    {
        $options=
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS);
        $results = $PDO->query("SELECT courriel, password FROM users WHERE courriel='$email'");
        foreach($results as $re)
        {
            if ($re[0]==$email && $re[1]==$password)
            {
                echo "You are connected";
                $good=TRUE;
            }
        }
        if (!$good)
            echo "Bad email or password : retry";
        
        

    }
    catch(PDOException $pe)
    {
        echo "erreur : ". $pe->getMessage();
    }
}
?>