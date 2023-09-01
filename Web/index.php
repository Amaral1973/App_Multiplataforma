<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .header {
      float: right;
    }
    </style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container-fluid">
    <img src="imagens/clientes.png" width="450" height="120"/>
      <hr>
      <br>
      <br><br>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-2">
            <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
            </svg>&nbsp;&nbsp;CLIENTES</b></h4><br/>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Novo Cliente</button>
          </div>
          <div class="card-body">
            <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Celular</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
              include 'conecta.php';
              $pesquisa = mysqli_query($conn, "SELECT * FROM cliente");
              $row = mysqli_num_rows($pesquisa);
              if ($row > 0) {
                while ($registro = $pesquisa -> fetch_array()) {
                  $id = $registro['id'];
                  echo '<tr>';
                  echo '<td>'.$registro['id'].'</td>';
                  echo '<td>'.$registro['nome'].'</td>';
                  echo '<td>'.$registro['celular'].'</td>';
                  echo '<td><a href="editacliente.php?id='.$id.'" data-bs-toggle="modal" data-id="'.$id.'" data-bs-target="#exampleModal1'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></a> &nbsp&nbsp <a href="excluircliente.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
              </svg></a></td>';
                  echo '</tr>';
                  echo '<div class="modal fade" id="exampleModal1'.$id.'" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">';
                  echo '<div class="modal-dialog modal-dialog-centered">';
                  echo '<div class="modal-content">';
                  echo '<div class="modal-header">';
                  echo '<h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>';
                  echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                  echo '</div>';
                  echo '<div class="modal-body text-start">';
                    include 'editacliente.php';
                  echo '</div>';
                  echo '<div class="modal-footer">';
                  echo '<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                }
                echo '</tbody>';
                echo '</table>';
              } else {
                echo "Não há clientes cadastrados!";
                echo '</tbody>';
                echo '</table>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="cadcliente.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira o nome" required/>
                <br/>
                <label>Celular</label>
                <input type="text" class="form-control" name="celular" placeholder="Insira o celular" required/>
                <br/>
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>