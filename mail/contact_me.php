<?php
// boş olup olmadığı denetlenen alanlar
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   //empty($_POST['phone'])     ||                //iptal edildi
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Hiçbir bilgi sağlanamadı!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));             //telefona ihtiyaç yok
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// e-postanı yaz ve mesaj gönder
$to = 'melihsahin24@gmail.com';
$email_subject = "Website İletişim Formu:  $name";
$email_body = "Web sitenizin iletişim formundan yeni bir mesaj aldınız.\n\n"."Detaylar burada:\n\nAd-Soyad: $name\n\nE-posta: $email_address\n\nMesaj:\n$message";
$headers = "Kişisinden: noreply@yourdomain.com\n"; // oluşturulan mesajın gönderileceği mail adresi
$headers .= "Yanıt Adresi: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
