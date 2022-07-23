<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require "phpmailer/src/Exception.php";
	require "phpmailer/src/PHPMailer.php";

	$mail = new PHPMailer(true);
	$mail ->CharSet = "UTF-8";
	$mail ->setLanguage("ru", "phpmailer/language/");
	$mail ->IsHTML(true)

	$mail ->setFrom("binwoter21@gmail.com");
	$mail ->addAddress("kirstr1070@gmail.com");
	$mail ->Subject = "Привет! Это письмо с сайта";

	$radiobutton = "10 метров"
	if($_POST['radiobutton'] == "metras"){
		$radionbutton = "20 метров";
	}

	$body = "Добрый день! Я спать";

	if(trim(!empty($_POST["name"]))){
	$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}

	if(trim(!empty($_POST["email"]))){
	$body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
	}
	








	
	$Smail ->Body = $Body;

	if (!Smail ->send()) {
		$massange = "Ошибка"
	} else {
		$massange = "Данные отправлены"
	}

	$response = ["massange" => $massange];

	header("Content-type: application/json");
	echo json_encode($response);

?>