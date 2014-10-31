<?php
if(isset($_POST['email'])){
		$mailTo = "atendimento@javalidigital.com.br";
		$subject = "Educar pelo Futebol";
		$body = "New message from web
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['author']."<br>
COMMENTS: ".$_POST['message']."<br>";	
		$headers = "To: UF <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['author']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
}
?>  