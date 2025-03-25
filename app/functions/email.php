<?php 

/*function send($data){
    $to = 'caiolopesvictor@gmail.com';
    $subject = $data->subject;
    $message = $data->message;
    $headers = "From: {$data->email}" . "\r\n". 
    'Reply-to: contato@devclass.com.br' . "r\n".
    'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}*/

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'ssl';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = '512bf67bbc891e';
    $email->Password = 'e9591bd8a9c5cd!';
    $email->isHTML(true);
    $email->setFrom(''); #colocar email
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver este Email, tenha certeza de estar vendo em um programa que aceite o formato HTML.';
    $email->MsgHTML($data['Mensagem']);

    return $email->send();
}

?>