<h2>contato</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= get('message')?>
    <form action="/pages/forms/contato.php" method="POST" role="form">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu email">
        </div>

        <div class="form-group">
            <label for="">Assunto</label>
            <input type="text" class="form-control" name="subject" placeholder="Digite o assunto">
        </div>

        <div class="form-group">
            <label for="">Mensagem</label>
            <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>