<?php
namespace website2;

if(isset($_POST)){
    $Name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    
}

require("emails.php");
require("messages.php");

$emailList = new emails("text/emails.txt");
$messageList = new messages("text/messages.txt");

if (isset($_POST["email"]) && !empty($_POST["email"]))
{
    $emailList->Save("$email");
    $messageList->Save("$message");
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $to = "spaceraceg19@gmail.com";
        $subject = "Bericht vanaf uw website Space Race";
        $txt = "Beste Youri, Armin en Alexander,
        Jullie hebben zojuist een bericht ontvangen via het contact formulier op uw website.

        Het bericht bevat de volgende boodschap:
        '$message'

        Het bericht is verstuurd door $Name met het mailadres: $email";

        $headers = "From: $email";

        $confirmation = "Confirmed";
    }
    else
    {
        $confirmation = "Denied";
    }
}
else
{
    $confirmation= "Geen Email";
}

mail($to,$subject,$txt,$headers);

header("Location: index.php?message=$confirmation");
?>