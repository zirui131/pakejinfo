<?php
//get data from form  
$pakejinfo = $_POST['pakejinfo'];

$to = "ngzirui131@gmail.com";

$subject = "Mail From Pakej Info CLHS Travelling service";
$txt ="Pakej info = ". $pakejinfo . ;
$headers = "From: ngzirui131@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo "Terima kasih!";
}
//redirect
?>
