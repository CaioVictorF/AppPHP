<?php 
require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos!');
    redirect("contato");
}

$validate = validate([
    'name' => 's', 
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data = [
    'quem' => '$validade->email',
    'para'=> '', #colocar email
    'messagem' => $validate->message,
    'assunto' => $validade->subject,
];
if(send($data)){
    flash('message', 'Email enviado com sucesso', 'success');
    redirect("contato");
}
?>