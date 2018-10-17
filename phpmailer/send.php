<?php 

$buscaMail="SELECT * FROM `mail` WHERE `id_mail` = 1";
$Result=$connect-> query($buscaMail);
$info_Mail = $Result->fetch_assoc();

$HOST = $info_Mail[host];
$PORT= $info_Mail[port];
$SMTPDebug = $info_Mail[SMTPDebug];
$SMTPAuth = $info_Mail[SMTPAuth];
$USERNAME = $info_Mail[username_mail];
$PASSWORD = $info_Mail[password_mail];
$REALNAME = $info_Mail[realname_mail];

function send($template_header, $template_body, $template_footer, $template_subject, $mailAddress){

	$mail = new PHPMailer;
	$mail->IsHTML(true); 
	$mail->isSMTP();

	$mail->Host = $GLOBALS['HOST'];
	$mail->Port = $GLOBALS['PORT'];
	$mail->SMTPDebug = $GLOBALS['SMTPDebug'];
	$mail->SMTPAuth = $GLOBALS['SMTPAuth'];

	$mail->Username = $GLOBALS['USERNAME'];
	$mail->Password = $GLOBALS['PASSWORD'];
	$mail->setFrom($GLOBALS['USERNAME'], $GLOBALS['REALNAME']);

	$mail->addAddress($mailAddress);

	$mail->Subject = $template_subject;
	$mail->Body = '
		'.$template_header.'
		'.$template_body.'
		'.$template_footer.'
	';  

	if (!$mail->send()) {
    	echo"No enviado";
	}else {
		echo"Enviado";
	}
}
?>