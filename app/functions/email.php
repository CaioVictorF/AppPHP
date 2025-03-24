<?php 

function send($data){
    $to = 'caiolopesvictor@gmail.com';
    $subject = $data->subject;
    $message = $data->message;
    $headers = "From: {$data->email}" . "\r\n". 
    'Reply-to: contato@devclass.com.br' . "r\n".
    'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}

?>