<?php
    include 'conecta.php';
    $id = $id;
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $query=$conn->query($sql);
    while ($dados = $query->fetch_assoc()) 
    {
        $nome = $dados['nome'];
        $celular = $dados['celular'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <form action="edcli.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/>
            <br/>
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" value="<?php echo $celular; ?>" required/>
            <br/>
            <button type="submit" class="btn btn-outline-success">Atualizar</button>
        </div>
    </form>
  </body>
</html>