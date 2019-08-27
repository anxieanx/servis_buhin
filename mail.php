<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ivonagrgic96@gmail.com";
$subject = "[SERVIS BUHIN KONTAKT FORMA]";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Zahvaljujemo na Vašem upitu! "."<br>"."Na Vaš upit odgovorit ćemo u najkraćem mogućem roku.";
?>
<meta http-equiv="refresh" content="10; URL=http://it.ffos.hr/nastava20152016/igrgic/servis_buhin/contact.php">