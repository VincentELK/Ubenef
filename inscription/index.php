<?php
require '../utils/utils.php';
init_php_session();


$DB_DSN = "mysql:host=localhost;dbname=clients";
$DB_USER = "root";
$DB_PASS = "";
$good="TRUE";

$user = $_POST["user"];
$user = htmlspecialchars($_POST["user"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$confirmed_password = htmlspecialchars($_POST["confirmed_password"]);
$ville = htmlspecialchars($_POST["main_town"]);
$vehicule = htmlspecialchars($_POST["vehicle"]);

/*
Plan:
0: vérifier qu'il n'y a pas de case vide
1: vérifier que le user n'est pas déja enregistré
2: l'enregistrer
*/

if($user=="" || $email=="" || $password=="" || $ville=="" || $vehicule=="")
    echo "One of your fields is empty: try again";
elseif ($password!=$confirmed_password)
    echo "Your password does not match its confirmation: try again";
else
{
    try
    {
        $options=
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $PDO = new PDO($DB_DSN,$DB_USER,$DB_PASS);
        $results = $PDO->query("SELECT nom, courriel FROM users WHERE nom='$user'");

        foreach($results as $re)
        {
            echo "Are you already registered";
            $good="FALSE";
            break;
        }
        if($good=="TRUE")
        {
            $PDO->query("INSERT INTO users VALUES ('$user', '$email', '$password', '$ville', '$vehicule',0,0,0,0)");
            echo "You are now registered";
        }
    }
    catch(PDOException $pe)
    {
        echo "error : ". $pe->getMessage();
    }
}
?>
<p><a href="../index.php">&laquo; Back to the inscription </a></p>