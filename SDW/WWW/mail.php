<?php
// require_once(__DIR__ . '/vendor/autoload.php');
// use \Mailjet\Resources;
// define('API_PUBLIC_KEY', 'YOUR_KEY');
// define('API_PRIVATE_KEY', 'YOUR_KEY');
// $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);



if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
    $surname = htmlspecialchars($_POST['surname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $subject = htmlspecialchars($_POST['subject']);
}


if (isset($_POST['surname']))
$surname = $_POST['surname'];
if (isset($_POST['firstname']))
$firstname = $_POST['firstname'];
if (isset($_POST['message']))
$message = $_POST['message'];
if (isset($_POST['subject']))
$subject = $_POST['subject'];
if (isset($_POST['email']))
$email = $_POST['email'];

if ($surname === '') {
echo "Nom est requis!";
die();
}
if ($firstname === '') {
    echo "Prénom est requis!";
    die();
    }
if ($email === '') {
echo "Email est requis!";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Forme incorrecte d'Email ";
  die();
}
}
if ($subject === '') {
echo "Subject est requis!";
die();
}
if ($message === '') {
echo "Message est requis!";
die();
}
echo "Email envoyé avec succès !";
echo "<button><a href='../index.php'>Acceuil</a></button>"


?>