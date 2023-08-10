<p><a href="inscription.html">&laquo; Retour au formulaire</a></p>

<?php


$DB_DSN = "mysql:host=localhost;dbname=clients";
$DB_USER = "root";
$DB_PASS = "";


$user = $_POST["user"];
$user = htmlspecialchars($_POST["user"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$confirmed_password = htmlspecialchars($_POST["confirmed_password"]);
$ville = htmlspecialchars($_POST["ville_principale"]);
$vehicule = htmlspecialchars($_POST["vehicle"]);



/*
Plan:
0: vérifier qu'il n'y a pas de case vide
1: vérifier que le user n'est pas déja enregistré
2: l'enregistrer
*/
if($user=="" || $email=="" || $password=="" || $ville=="" || $vehicule=="")
    echo "L'un de vos champs est vide : recommencez";
elseif ($password!=$confirmed_password)
    echo "Votre mot de passe ne correspond pas à sa confirmation : recommencez";
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
        echo "connextion etablie";
        $results = $PDO->query('SELECT nom, courriel FROM USERS');

        foreach($results as $re)
        {
            if ($re[0]==$user || $re[1]==$email)
                echo "Vous etes deja inscrit";
            else
            {
                $PDO->query("INSERT INTO users VALUES ('$user', '$email', '$password', '$ville', '$vehicule')");
            }
            echo '<pre>';
            print_r($re);
            echo '</pre>';
        }
    }
    catch(PDOException $pe)
    {
        echo "erreur : ". $pe->getMessage();
    }
}
?>