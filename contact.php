<?php

if (is_set($_POST["email"])) {
    $recipient="mishrasushruti99@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $telephone = $_POST['phoneno']; 
    $name_c = $_POST['name_of_col'];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message \nphone no.: $telephone\nname of college: $name_of_col";

    @mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    //$thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>