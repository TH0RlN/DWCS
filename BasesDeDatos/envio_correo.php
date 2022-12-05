<?php

use PHPMailer\PHPMailer\PHPMailer;

require "vendor/autoload.php";
$mail = new PHPMailer();

$mail->IsSMTP();
// cambiar a 0 para no ver mensajes de error
$mail->SMTPDebug = 1;
//	Establece la autentificación SMTP. Por defecto a False
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
//	Establece el servidor SMTP. Pueden ser varios separados por ;
$mail->Host = "iesteis-es.correoseguro.dinaserver.com";
$mail->Port = 465;

// Introducir usuario de google
$mail->Username = "xxxx@iesteis.es";
// Introducir clave
$mail->Password = "";
$mail->SetFrom('usuario_correo@gmail.com', 'Usuario que envía el correo');
/*
 * Para especificar el asunto. Utilizamos la función utf8_decode para que muestre
 * correctamente los acentos.
 */
$mail->Subject = utf8_decode("Envío foto de playa");
$texto = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pregunta</title><meta charset = "UTF-8"></head><body>	
    <form action = "" method = "POST">	
            ¿Te está gustando el curso de PHP?<br>	
            <input type="radio" id="si" name="eleccion" value="Si">
            <label for="si">SÍ</label><br>
            <input type="radio" id="no" name="eleccion" value="No">
            <label for="no">NO</label><br>									
            <input type = "submit" name="Enviar" value="Enviar">
        </form>
    </body>
</html>';
// cuerpo
$mail->MsgHTML($texto);
/*
 * bool AddAttachment ( $path, $name, [$encoding = "base64"], [$type = "application/octet-stream"] )	
 * Añade un fichero adjunto al mensaje. Retorna false si el fichero no pudo ser encontrado.
 * $path, es la ruta del archivo puede ser relativa al script php (no a la clase PHPMailer) 
 * o una ruta absoluta. Se aconseja usar rutas relativas
 * $name, nombre del fichero
 * $encoding, tipo de codificación. Se aconseja dejar la predeterminada
 * $type, el valor por defecto funciona con cualquier clase de archivo. Se puede 
 * usar un tipo específico como por ejemplo image/jpeg
 */
$mail->addAttachment("foto_playa.jpg");

// destinatario
$address = "patricia.gonzalez.pardo@gmail.com";
/*
 * AddAddress	void AddAddress ( $address, $name )	
 * Añade una dirección de destino del mensaje. El parámetro $name es opcional
 */
$mail->AddAddress($address, "Destinatario correo");

/*
 * bool Send ( )	
 * Envía el mensaje, devuelve false si ha habido algún problema. 
 * Consultando la propiedad ErrorInfo se puede saber cuál ha sido el problema
 */
$resul = $mail->Send();

if (!$resul) {
    echo "Error" . $mail->ErrorInfo;
} else {
    echo "<br>Enviado";
}