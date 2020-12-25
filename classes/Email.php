<?php
    define('HOST','smtp.gmail.com');
    define('USER','bixopiruleta62@gmail.com');
    define('PASSWORD','2003lucas');
    class Email{

        function __construct($destinatario){
        {
            
            $mail = new PHPMailer();

			$mail->isSMTP();                                      // Set mail to use SMTP
			$mail->Host = HOST;  				  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = USER;                 // SMTP username
			$mail->Password = PASSWORD;                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to

			$mail->setFrom(USER,'fulano');
			$mail->isHTML(true);                                  // Set email format to HTML
            $mail->CharSet = 'UTF-8';
            
            $mail->Subject = 'Boas Vindas!';
            $mail->Body    = 'Bem vindo ao Marca, aqui vecê tem em primeira mão as noticias e indicações de animes!';
            $mail->AltBody = 'Bem vindo ao Marca, aqui vecê tem em primeira mão as noticias e indicações de animes!';
            $mail->addAddress($destinatario,'ciclano');

            $mail->send();

		}

        }
    }

?>